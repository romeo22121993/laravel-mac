<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\ArticleObserverJob;
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
    public function articlesPage() {

        $articles = Article::paginate( $this->number );

        return view('admin.article.index', compact( 'articles' ) );
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function articlesPageByCategory( $id ) {

        $articleCategory = ArticleCategory::find( $id );
        $articles        = $articleCategory->articles->pluck(['id']);
        $articles        = Article::whereIn('id', $articles )->paginate($this->number);

        return view('admin.article.articlesbycategories', compact( 'articles', 'articleCategory' ) );
    }


    /**
     * Function for add category page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addArticle() {

        $categories = ArticleCategory::all();

        return view('admin.article.create', compact( 'categories' ) );
    }


    /**
     * Function saving new category
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function StoreArticle( Request $request ) {

        $request->validate([
            'title'      => ['required', 'string', 'max:255', 'unique:articles'],
            'slug'       => ['max:255', 'unique:articles'],
            'content'    => ['required', 'string' ],
            'categories' => ['required'],
        ]);

        $categories = $request->categories;
        $data1      = $request->all();

        $article = new Article();
        $article->content   = $data1['content'];
        $article->title     = $request->title;
        $article->slug      = \Str::slug( $request->title );
        $article->author_id = Auth::id();
        $article->check1    = $request->check1;
        $article->check2    = $request->check2;
        $article->check3    = $request->check3;

        $image_src = 'none';
        if ( $request->file('image' ) ) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move( public_path('uploads/articles' ), $filename );
            $image_src = $filename;
        }

        $article->img = $image_src;
        $article->save();

        $this->setCategoriesByArticle ( $categories, $article->id );

        return Redirect()->route('wpadmin.articles');

    }


    /**
     * Function for edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function EditArticle( $id ) {

        $article = Article::find( $id );

        $articleCategories = $article->categories->pluck('id')->toArray();
        $categories     = ArticleCategory::all();

        return view('admin.article.edit', compact( 'article', 'categories', 'articleCategories' ) );
    }

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function UpdateArticle( Request $request, $id ) {

        $article  = Article::find( $id );

        $request->validate([
            'title'      => ['required', 'string', 'max:255', Rule::unique('articles')->ignore( $article )],
            'slug'       => [ 'max:255', Rule::unique('articles')->ignore( $article )],
            'content'    => ['required', 'string' ],
            'categories' => ['required'],
        ]);

        $data1 = $request->all();

        $categories = $request->categories;
        $data1      = $request->all();

        $slug       = !empty( $request->slug ) ? \Str::slug( $request->slug ) : \Str::slug( $request->title );

        $article->content   = $data1['content'];
        $article->title     = $request->title;
        $article->slug      = $slug;
        $article->author_id = Auth::id();
        $article->check1    = $request->check1;
        $article->check2    = $request->check2;
        $article->check3    = $request->check3;

        if ( $request->file('image' ) ) {
            @unlink( public_path( 'uploads/articles/'.$article->img ) );
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move( public_path('uploads/articles' ), $filename );
            $image_src = $filename;

            $article->img = $image_src;
        }


        $article->save();

        $this->setCategoriesByArticle ( $categories, $id, true );

        return redirect()->back();
    }

    /**
     * Function deleting
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DeleteArticle( $id ){

        DB::table('articles_and_cats')->where('article_id', $id)->delete();

        $article = Article::find( $id );
        $file = public_path( 'uploads/articles/'.$article->img );
        if ( file_exists( $file ) ) {
            @unlink( public_path( 'uploads/articles/'.$article->img ) );
        }

        dispatch( new ArticleObserverJob( $article, 'deleted' ) )
            ->onConnection('redis') // async
//            ->onConnection('sync') // sync
            ->onQueue('delete_articles');
        // send email via observer

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
    protected function setCategoriesByArticle ( $categories, $articleId, $deletingPrevious = false ) {
        $articleAndCats = [];

        if ( !empty( $deletingPrevious ) ) {
            DB::table('articles_and_cats')->where('article_id', $articleId)->delete();
        }

        foreach ( $categories as $category ) {
            $articleAndCats[] = [
                'article_id' => $articleId,
                'cat_id'  => $category,
            ];
        }

        DB::table('articles_and_cats')->insert( $articleAndCats );

        return true;
    }

}
