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

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function postsPage() {

        $posts = Post::paginate(3);

        return view('admin.posts.index', compact( 'posts' ) );
    }


    /**
     * Function for add category page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addPost() {

        $categories = PostCategory::all();

        return view('admin.posts.create', compact( 'categories' ) );
    }


    /**
     * Function saving new category
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function StorePost( Request $request ) {

        $request->validate([
            'title'      => ['required', 'string', 'max:255', 'unique:posts'],
            'slug'       => [ 'max:255', 'unique:posts'],
            'content'    => ['required', 'string', 'max:955'],
            'categories' => ['required'],
        ]);

        $categories = $request->categories;
        $data1      = $request->all();

        $post = new Post();
        $slug = !empty( $request->slug ) ? str_replace( ' ','-', strtolower( $request->slug ) ) : str_replace( ' ','-', strtolower( $request->title ) );

        $post->content   = $data1['content'];
        $post->title     = $request->title;
        $post->slug      = $slug;
        $post->author_id = Auth::id();
        $post->check1    = $request->check1;
        $post->check2    = $request->check2;
        $post->check3    = $request->check3;

        $image_src = 'none';
        if ( $request->file('image' ) ) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move( public_path('uploads/posts' ), $filename );
            $image_src = $filename;
        }

        $post->img = $image_src;
        $post->save();

        $this->setCategoriesByPost ( $categories, $post->id );

        return Redirect()->route('wpadmin.posts');

    }


    /**
     * Function for edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function EditPost( $id ) {

        $post = Post::find( $id );

        $postCategories = $post->categories->pluck('id')->toArray();
        $categories     = PostCategory::all();

        return view('admin.posts.edit', compact( 'post', 'categories', 'postCategories' ) );
    }

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function UpdatePost( Request $request, $id ) {

        $post  = Post::find( $id );

        $request->validate([
            'title'      => ['required', 'string', 'max:255', Rule::unique('posts')->ignore( $post )],
            'slug'       => [ 'max:255', Rule::unique('posts')->ignore( $post )],
            'content'    => ['required', 'string', 'max:955'],
            'categories' => ['required'],
        ]);

        $data1 = $request->all();

        $categories = $request->categories;
        $data1      = $request->all();

        $slug = !empty( $request->slug ) ? str_replace( ' ','-', strtolower( $request->slug ) ) : str_replace( ' ','-', strtolower( $request->title ) );

        $post->content   = $data1['content'];
        $post->title     = $request->title;
        $post->slug      = $slug;
        $post->author_id = Auth::id();
        $post->check1    = $request->check1;
        $post->check2    = $request->check2;
        $post->check3    = $request->check3;

        if ( $request->file('image' ) ) {
            @unlink( public_path( 'uploads/posts/'.$post->img ) );
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move( public_path('uploads/posts' ), $filename );
            $image_src = $filename;

            $post->img = $image_src;
        }


        $post->save();

        $this->setCategoriesByPost ( $categories, $id, true );

        return redirect()->back();
    }

    /**
     * Function deleting
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DeletePost( $id ){

        DB::table('posts_and_cats')->where('post_id', $id)->delete();
        Post::whereId( $id )->delete();

        return redirect()->back();

    }


    /**
     * Function setting Posts-Categories table
     *
     * @param $categories
     * @param $postId
     * @param $deletingPrevious
     *
     * @return bool
     */
    protected function setCategoriesByPost ( $categories, $postId, $deletingPrevious = false ) {
        $postAndCats = [];

        if ( !empty( $deletingPrevious ) ) {
            DB::table('posts_and_cats')->where('post_id', $postId)->delete();
        }

        foreach ( $categories as $category ) {
            $postAndCats[] = [
                'post_id' => $postId,
                'cat_id'  => $category,
            ];
        }

        DB::table('posts_and_cats')->insert( $postAndCats );

        return true;
    }

    /* Posts Categories changes */

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
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
    public function DeletePostCategory($id){

        PostCategory::whereId($id)->delete();

        return redirect()->back();

    }


    public function updateSettings( Request $request, $id ) {

        $data  = $request->all();
        $user  = User::find($id);

        User::whereId($id)->update([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'firstname' => $data['firstname'],
            'lastname'  => $data['lastname'],
            'phone'     => $data['phone'],
            'role'      => $data['role'],
            'company'   => $data['company'],
            'position'  => $data['position'],
        ]);

        if ( $request->file('avatar_img' ) ) {
            $file = $request->file('avatar_img');
            @unlink(public_path('uploads/users/'.$user->avatar_img));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/users'),$filename);
            $user['avatar_img'] = $filename;

            $user->save();
        }


        return redirect()->back();
    }

}
