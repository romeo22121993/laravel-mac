<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\ArticleObserverJob;
use App\Modules\FilesUploads;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Image;

class ArticleController extends Controller
{

    protected $number = 5;

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function articlesPage()
    {

        $articles = Article::paginate($this->number);

        return view('admin.article.index', compact('articles'));
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function originalArticles()
    {

        $articles = Article::where('original_type', 'original')->paginate($this->number);

        return view('admin.article.index', compact('articles'));
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function clonedArticles()
    {

        $articles = Article::where('original_type', 'cloned')->paginate($this->number);

        return view('admin.article.index', compact('articles'));
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function articlesPageByCategory($id)
    {

        $articleCategory = ArticleCategory::find($id);
        $articles        = $articleCategory->articles->pluck(['id']);
        $articles        = Article::whereIn('id', $articles)->paginate($this->number);

        return view('admin.article.articlesbycategories', compact('articles', 'articleCategory'));
    }


    /**
     * Function for add category page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addArticle()
    {

        $categories = ArticleCategory::all();

        $reviewStatuses = [
            'reviewed'     => "Reviewed",
            'not_reviewed' => "Not Reviewed",
        ];

        $articleTypes = [
            'article',
            'email',
            'video'
        ];


        return view('admin.article.create', compact('categories', 'reviewStatuses', 'articleTypes'));
    }


    /**
     * Function saving new category
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function StoreArticle(Request $request)
    {
        $fileModule = new FilesUploads();

        $request->validate([
            'title'      => ['required', 'string', 'max:255', 'unique:articles'],
            'slug'       => ['max:255', 'unique:articles'],
            'content'    => ['required', 'string' ],
            'categories' => ['required'],
        ]);

        //


        $categories = $request->categories;
        $data1      = $request->all();

        $article = new Article();
        $article->content       = $data1['content'];
        $article->title         = $request->title;
        $article->slug          = \Str::slug($request->title);
        $article->author_id     = Auth::id();
        $article->original_type = 'original';
        $article->article_type  = $request->article_type;
        $article->review_status = $request->review_status;

        if ($request->file('img')) {
            $image_src = $fileModule->fileUploadProcess($request->file('img'), 'uploads/articles');
            $article->img = $image_src;
        }

        if ($request->file('doc_file')) {
            $file_src = $fileModule->fileUploadProcess($request->file('doc_file'), 'uploads/articles');
            $article->doc_file = $file_src;
        }

        $article->save();

        $this->setCategoriesByArticle ($categories, $article->id);

        return Redirect()->route('wpadmin.articles');

    }


    /**
     * Function for edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function EditArticle($id)
    {

        $article = Article::find($id);

        $articleCategories = $article->categories->pluck('id')->toArray();
        $categories     = ArticleCategory::all();

        $reviewStatuses = [
            'reviewed'     => "Reviewed",
            'not_reviewed' => "Not Reviewed",
        ];

        $articleTypes = [
            'article',
            'email',
            'video'
        ];

        return view('admin.article.edit', compact(
            'categories', 'article', 'reviewStatuses', 'articleTypes', 'articleCategories'
        ));

    }

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function UpdateArticle(Request $request, $id)
    {

        $fileModule = new FilesUploads();
        $article  = Article::find($id);

        $request->validate([
            'title'      => ['required', 'string', 'max:255', Rule::unique('articles')->ignore($article)],
            'content'    => ['required', 'string'],
            'categories' => ['required'],
        ]);

        $categories = $request->categories;
        $data1      = $request->all();

        $article->content       = $data1['content'];
        $article->title         = $request->title;
        $article->slug          = \Str::slug($request->title);
        $article->author_id     = Auth::id();
        $article->original_type = 'original';
        $article->article_type  = $request->article_type;
        $article->review_status = $request->review_status;


        if ($request->file('img')) {
            if (file_exists($article->img)) {
                unlink($article->img);
            }
            $file_src = $fileModule->fileUploadProcess($request->file('img'), 'uploads/articles');
            $article->img = $file_src;
        }

        if ($request->file('doc_file')) {
            if (file_exists( $article->doc_file)) {
                unlink($article->doc_file);
            }
            $file_src = $fileModule->fileUploadProcess($request->file('doc_file'), 'uploads/articles');
            $article->doc_file = $file_src;
        }


        $article->save();

        $this->setCategoriesByArticle($categories, $id, true);

        return redirect()->back();
    }

    /**
     * Function deleting
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DeleteArticle($id)
    {

        DB::table('articles_and_cats')->where('article_id', $id)->delete();


        $article = Article::find($id);

        if ($article->original_type == 'original') {
//            DB::table('cloned_articles_relations')->where('origin_id', $article->id)->delete();
        }
        else {
            DB::table('cloned_articles_relations')->where('child_id', $article->id)->delete();
        }

        if (file_exists($article->img)) {
            unlink($article->img);
        }
        if (file_exists($article->doc_file)) {
            unlink($article->doc_file);
        }

        $article->delete();

        return redirect()->back();

    }


    /**
     * Function setting articles-Categories table
     *
     * @param $categories
     * @param $articleId
     * @param $deletingPrevious
     *
     * @return bool
     */
    protected function setCategoriesByArticle ($categories, $articleId, $deletingPrevious = false)
    {
        $articleAndCats = [];

        if (!empty($deletingPrevious)) {
            DB::table('articles_and_cats')->where('article_id', $articleId)->delete();
        }

        foreach ($categories as $category) {
            $articleAndCats[] = [
                'article_id' => $articleId,
                'cat_id'     => $category,
            ];
        }

        DB::table('articles_and_cats')->insert($articleAndCats);

        return true;
    }

}
