<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

class ArticleCategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function articlesCategoryPage()
    {

        $categories = ArticleCategory::paginate(3);

        return view('admin.article.categories.index', compact( 'categories'));
    }


    /**
     * Function for add category page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addArticleCategory()
    {
        return view('admin.article.categories.create');
    }


    /**
     * Function saving new category
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function StoreArticleCategory(Request $request)
    {

        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:255', 'unique:postCategories'],
            'slug'  => ['unique:postCategories'],
        ]);

        $postCat = new ArticleCategory();
        $postCat->title = $request->title;
        $postCat->slug  = \Str::slug( $request->title);
        $postCat->save();

        return Redirect()->route('wpadmin.articles.categories');

    }


    /**
     * Function for edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function EditArticleCategory($id)
    {
        $category = ArticleCategory::find($id);

        return view('admin.article.categories.edit', compact('category'));
    }

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function UpdateArticleCategory(Request $request, $id)
    {

        $post = ArticleCategory::find($id);

        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:255', Rule::unique('postCategories')->ignore($post)],
            'slug'  => ['required', Rule::unique('postCategories')->ignore($post)]
        ]);

        ArticleCategory::whereId($id)->update([
            'title' => $request->title,
            'slug'  => \Str::slug($request->slug)
        ]);

        return Redirect()->route('wpadmin.articles.categories');
    }

    /**
     * Function deleting
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DeleteArticleCategory($id)
    {

        ArticleCategory::whereId($id)->delete();
        DB::table('articles_and_cats')->where('cat_id', $id)->delete();

        return redirect()->back();

    }

}
