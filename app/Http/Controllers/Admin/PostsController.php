<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\PostObserverJob;
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
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function postsPageByCategory( $id ) {

        $postCategory = PostCategory::find( $id );
        $posts        = $postCategory->posts->pluck(['id']);
        $posts        = Post::whereIn('id', $posts )->paginate(3);

        return view('admin.posts.postsbycategories', compact( 'posts', 'postCategory' ) );
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
            'content'    => ['required', 'string' ],
            'categories' => ['required'],
        ]);

        $categories = $request->categories;
        $data1      = $request->all();

        $post = new Post();
        $slug = \Str::slug( $request->title );

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
            'content'    => ['required', 'string' ],
            'categories' => ['required'],
        ]);

        $data1 = $request->all();

        $categories = $request->categories;
        $data1      = $request->all();

        $slug       = !empty( $request->slug ) ? \Str::slug( $request->slug ) : \Str::slug( $request->title );

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

        $post = Post::find($id );
        dispatch( new PostObserverJob( $post, 'deleted' ) )->onQueue('emails'); // send email via observer
        $post->delete();

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

}
