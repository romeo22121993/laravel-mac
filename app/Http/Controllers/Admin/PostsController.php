<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\PostCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

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

        $users = User::paginate(3);

        return view('admin.posts.index', compact( 'users' ) );
    }


    /**
     * Function for add category page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addPost() {
        return view('admin.posts.create');
    }


    /**
     * Function saving new category
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function StorePost( Request $request ){

        $request->validate([
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'firstname' => ['required', 'string', 'min:3' ],
            'lastname'  => ['required', 'string', 'min:3'],
            'phone'     => ['required', 'string', 'min:3'],
            'role'      => ['required', 'string'],
            'company'   => ['required', 'string', 'min:3'],
            'position'  => ['required', 'string', 'min:3'],
            'password'  => ['required', 'min:4',  'string'],
        ]);

        $data  = $request->all();
        $check = $this->create( $data );

        return Redirect()->route('wpadmin.users');

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create( array $data )
    {

        return User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'firstname' => $data['firstname'],
            'lastname'  => $data['lastname'],
            'phone'     => $data['phone'],
            'role'      => $data['role'],
            'company'   => $data['company'],
            'position'  => $data['position'],
            'password'  => Hash::make( $data['password'] ),
        ]);
    }

    /**
     * Function for edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function EditPost( $id ) {
        $user = User::find( $id );

        return view('admin.posts.edit', compact( 'user' ) );
    }

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function UpdatePost( Request $request, $id ) {

        $data  = $request->all();

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

        return Redirect()->route('wpadmin.users');
    }

    /**
     * Function deleting
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DeletePost($id){

        User::whereId($id)->delete();

        return redirect()->back();

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
