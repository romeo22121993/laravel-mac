<?php

namespace App\Http\Controllers\Subscriber;

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Controller;
use App\Jobs\PostObserverJob;
use App\Models\Article;
use App\Models\Course;
use App\Models\CourseIteration;
use App\Models\CourseLesson;
use App\Models\CourseProgress;
use App\Modules\FilesUploads;
//use Illuminate\Http\File;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\CourseCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Image;
use App\Modules\VideosAPI;
use Illuminate\Support\Facades\File;

class DashboardArticlesController extends Controller
{

    protected $number = 1;

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function articlesPage() {

        $user       = Auth::user();
        $originalArticles = Article::where('original_type', 'original')->paginate($this->number);

        $categories = CourseCategory::all();

        $postClonedArticles  = DB::table('cloned_articles_relations')->where('user_id', $user->id)
            ->get()->pluck(['child_id'])->toArray();

        $clonedArticles = Article::whereIn('id', $postClonedArticles)->paginate($this->number);
        $countPerPage   = $this->number;

        return view('userDashboard.pages.articles', compact(
            'countPerPage', 'originalArticles', 'categories', 'clonedArticles'
        ));
    }


    /**
     * Funtion single article page
     *
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function singleArticlePage($slug)
    {
        $user = Auth::user();
        $article         = Article::where('slug', $slug)->first();
        $relatedArticles = Article::where('slug', '<>', $slug)->where('original_type', 'original')->paginate(3);


        $clonedArticles = DB::table('cloned_articles_relations')
            ->where('origin_id', $article->id)->where('user_id', $user->id)
            ->get()->pluck(['child_id'])->toArray();

        $clonedArticle = !empty($clonedArticles[0]) ? $clonedArticles[0] : false;

        if (!empty($clonedArticle)) {
            $clonedArticle = Article::find($clonedArticle);

            return Redirect::route('single.article', ['slug' => $clonedArticle->slug])->send();

        }


        return view('userDashboard.article.single',
            compact('article', 'relatedArticles'
           )
       );
    }


    /**
     * Function cloning original articles callback
     *
     */
    public function cloneArticle(Request $request)
    {

        $user = Auth::user();

        $data = $request->all();
        parse_str($data['data'], $params);

        $originPost     = (int)$params['origin_post'];
        $originArticle  = Article::find($originPost);

        $title          = ( $params['title'] == $originArticle->title ) ? $params['title'] . "-cloned" : $params['title'];
        $title          .= $user->id;

        $clonedArticle = new Article();
        $clonedArticle->content       = $params['content'];
        $clonedArticle->title         = $title;
        $clonedArticle->slug          = \Str::slug($title);
        $clonedArticle->author_id     = Auth::id();
        $clonedArticle->original_type = 'cloned';
        $clonedArticle->parent_id     = $originPost;
        $clonedArticle->article_type  = $originArticle->article_type;
        $clonedArticle->review_status = $originArticle->review_status;

        $fileModule = new FilesUploads();
        if ($request->file('img')) {
            $image_src = $fileModule->fileUploadProcess($request->file('img'), 'uploads/articles');
        }
        else {
            $image_src = $this->generateFeaturedImageFromOriginal($originArticle->img);
        }
        $clonedArticle->img = $image_src;

        /*
        if ($request->file('doc_file')) {
            $image_src = $fileModule->fileUploadProcess($request->file('doc_file'), 'uploads/articles');
        }
        else {
            $image_src = $this->generateFeaturedImageFromOriginal($originArticle->img);
            $clonedArticle->doc_file = $image_src;
        }
        */

        $clonedArticle->save();

        $postClonedArticles     = DB::table('cloned_articles_relations')
            ->where('origin_id', $originPost)->where('user_id', $user->id)
            ->get()->pluck(['child_id'])->toArray();

        if (!in_array($originPost, $postClonedArticles)) {
            $arr = [
                'origin_id' => $originPost,
                'child_id'  => $clonedArticle->id,
                'user_id'   => $user->id,
            ];

            DB::table('cloned_articles_relations')->insert($arr);
        }

        $this->cloneParentCategories($originArticle->categories->pluck('id')->toArray(), $clonedArticle->id);

        $redirect_link = env("APP_URL") . "dashboard/article/$clonedArticle->slug";

        return ['status' => 'Done', 'redirect_link' => $redirect_link];

    }


    /**
     * Function cloning original articles callback
     *
     */
    public function editClonedArticle(Request $request)
    {

        $user = Auth::user();

        $data = $request->all();
        parse_str($data['data'], $params);

        $editedArticle  = Article::find((int)$params['origin_post']);

        $editedArticle->content    = $params['content'];
        $editedArticle->title      = $params['title'];

        $fileModule = new FilesUploads();
        if ($request->file('img')) {
            $image_src = $fileModule->fileUploadProcess($request->file('img'), 'uploads/articles');
            $editedArticle->img = $image_src;
        }

        $editedArticle->save();

        $redirect_link = env("APP_URL") . "dashboard/article/$editedArticle->slug";

        return ['status' => 'Done', 'redirect_link' => $redirect_link];

    }


    /**
     * Function cloning original articles callback
     *
     */
    public function resetClonedArticle(Request $request)
    {

        $article_id     = $request->article_id;

        $artController = new ArticleController();
        $artController->DeleteArticle($article_id);

        $redirect_link = env("APP_URL") . "dashboard/admin-articles/";

        return ['status' => 'Done', 'redirect_link' => $redirect_link];

    }



    /**
     * Function cloning parent categories for cloned article
     *
     * @param $originalCategories
     * @param $clonedArticleId
     */
    protected function cloneParentCategories($originalCategories, $clonedArticleId)
    {

        foreach ($originalCategories as $category) {
            $articleAndCats[] = [
                'article_id' => $clonedArticleId,
                'cat_id'     => $category,
            ];
        }

        DB::table('articles_and_cats')->insert($articleAndCats);
    }


    /**
     * Function generating thumbnail by parent original thumbnail
     *
     * @param $image_url
     * @param $postId
     * @return bool
     */
    public function generateFeaturedImageFromOriginal($image_url){

        $image_url = env("APP_URL") . $image_url;
        $path = 'uploads/articles';

        $file = file_get_contents("$image_url");

        $filename = date('YmdHi').'.jpg';
        File::put(public_path($path). "/$filename", $file);
        $image_src = "$path/$filename";

        return $image_src;
    }


    /**
     * Callback function for loading posts
     *
     */
    public function LoadMoreCourses(Request $request)
    {

        $paged    = !empty($request->page) ? $request->page : 0;
        $getCat   = !empty($request->get_cat) ? $request->get_cat : 0;
        $cpt_type = 'articles';

        $user              = Auth::user();
        $articleProgress    = $user->progress;
        $completedCourses   = !empty($articleProgress->completed_articles) ? json_decode($articleProgress->completed_articles, true) : [];
        $progressingCourses = !empty($articleProgress->progressing_articles) ? json_decode($articleProgress->progressing_articles, true) : [];

        if (($request->total_count + $this->number) < ($this->number * $paged)) {
            return false;
        }

        if (($getCat == 'all')) {
            $articles      = Course::where('published', '=', 1)->paginate($this->number);
        }
        else {
            $cats        = CourseCategory::find($getCat)->articles->pluck(['id']);
            $articles     = Course::where('published', '=', 1)->whereIn('id', $cats)->paginate($this->number);
        }

        $totalPost = $articles->total();

        $result = $this->setHtmlLayout($articles, $paged, $totalPost, $completedCourses, $progressingCourses);

        return $result;

    }

    /**
     * Function setting html for ajax request
     *
     * @param $articles
     * @param $paged
     * @param $totalPost
     * @param $completedCourses
     * @param $progressingCourses
     *
     * @return array|void
     */
    private function setHtmlLayout($articles, $paged, $totalPost, $completedCourses, $progressingCourses) {

        $paged = (int)$paged;


        if (!empty($articles)) {
            $result = [];

            $html = '';
            foreach ($articles as $article) {
                $html .=  view('userDashboard.items.articleItem',
                    compact('article', 'completedCourses', 'progressingCourses'))->render();
            }

            $result['html']  = $html;
            $result['count'] = ($paged > 1) ? count($articles) + (($paged - 1) * $this->number) : count($articles) * $paged;
            $result['total'] = $this->number * $paged;
            $result['all']   = $totalPost;
            $result['page']  = $paged;

            return $result;

        }

    }


    /**
     * Function for downloading process
     *
     */
    public function downloadArticle(Request $request) {


        $postId        = !empty( $request->post_id ) ? $request->post_id : 0;
        $file_src      = !empty( $request->href ) ? $request->href : '';

        $user           = Auth::user();
        $currentMonth   = date('Y-m');

        $postClonedArticles = DB::table('usermeta')->where('user_id', $user->id)
            ->first();
        $getDownloads   = empty($postClonedArticles->articles_downloads) ? array() : json_decode($postClonedArticles->articles_downloads, true);
        $monthDownloads = empty( $getDownloads[$currentMonth] ) ? array() : $getDownloads[$currentMonth];

        if ( !in_array( $postId, $monthDownloads ) ) {
            $getDownloads[$currentMonth][] = $postId;
        }


        $getDownloads = json_encode( $getDownloads );

        $arr = [
            'articles_downloads' => $getDownloads,
            'user_id'            => $user->id,
        ];

        DB::table('usermeta')
            ->updateOrInsert(
                ['user_id' => $user->id],
                $arr
            );

        //$file_created   = !empty( $file_src ) ? $this->read_save_file_func( $file_src ) : '';

        return ['error'=> false, 'message' => 'Done.'];

    }

}
