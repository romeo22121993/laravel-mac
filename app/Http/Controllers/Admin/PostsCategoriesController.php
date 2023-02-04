<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Image;

class PostsCategoriesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function postsCategoryPage() {

        $categories = PostCategory::paginate(3);

        return view('admin.posts.categories.index', compact( 'categories' ) );
    }


    /**
     * Function for add category page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addPostCategory() {
        return view('admin.posts.categories.create');
    }


    /**
     * Function saving new category
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function StorePostCategory( Request $request ){

        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:255', 'unique:postCategories'],
            'slug'  => ['unique:postCategories'],
        ]);

        $postCat = new PostCategory();
        $postCat->title = $request->title;
        $postCat->slug = !empty( $request->slug ) ? str_replace( ' ','-', strtolower( $request->slug ) ) : str_replace( ' ','-', strtolower( $request->title ) );
        $postCat->save();

        return Redirect()->route('wpadmin.posts.categories');

    }


    /**
     * Function for edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function EditPostCategory( $id ) {
        $category = PostCategory::find( $id );

        return view('admin.posts.categories.edit', compact( 'category' ) );
    }

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function UpdatePostCategory( Request $request, $id ) {

        $post = PostCategory::find( $id );

        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:255', Rule::unique('postCategories')->ignore( $post )],
            'slug'  => ['required', Rule::unique('postCategories')->ignore( $post )]
        ]);

        PostCategory::whereId( $id )->update([
            'title' => $request->title,
            'slug'  => $request->slug,
        ]);

        return Redirect()->route('wpadmin.posts.categories');
    }

    /**
     * Function deleting
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DeletePostCategory( $id ){

        PostCategory::whereId($id)->delete();
        DB::table('posts_and_cats')->where('cat_id', $id)->delete();

        return redirect()->back();

    }

}
