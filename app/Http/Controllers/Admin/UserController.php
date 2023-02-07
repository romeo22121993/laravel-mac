<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\UserObserverJob;
use App\Models\Post;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function usersPage() {

        $users = User::paginate( 5 );

        return view('admin.user.index', compact( 'users' ) );
    }


    /**
     * Function for add category page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addUser() {
        return view('admin.user.create');
    }


    /**
     * Function saving new category
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function StoreUser( Request $request ){

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


        $user = new User();
        $user->name       = $request->name;
        $user->email      = $request->email;
        $user->firstname  = $request->firstname;
        $user->lastname   = $request->lastname;
        $user->phone      = $request->phone;
        $user->role       = $request->role;
        $user->company    = $request->company;
        $user->position   = $request->position;
        $user->password   = Hash::make( $request->password );

        $image_src = 'none';
        if ( $request->file('avatar_img' ) ) {
            $file = $request->file('avatar_img');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move( public_path('uploads/users' ), $filename );
            $image_src = $filename;
        }

        $user->avatar_img = $image_src;
        $user->save();

        return Redirect()->route('wpadmin.users');

    }


    /**
     * Function for edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function EditUser( $id ) {
        $user = User::find( $id );

        return view('admin.user.edit', compact( 'user' ) );
    }

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function UpdateUser( Request $request, $id ) {

        $user  = User::find( $id );
        $data  = $request->all();

        $image_src = $user->avatar_img;
        if ( $request->file('avatar_img' ) ) {
            @unlink( public_path( 'uploads/users/'.$user->avatar_img ) );
            $file = $request->file('avatar_img');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move( public_path('uploads/users' ), $filename );
            $image_src = $filename;

        }

        User::whereId( $id )->update([
            'name'       => $data['name'],
            'email'      => $data['email'],
            'firstname'  => $data['firstname'],
            'lastname'   => $data['lastname'],
            'phone'      => $data['phone'],
            'role'       => $data['role'],
            'company'    => $data['company'],
            'position'   => $data['position'],
            'avatar_img' => $image_src,
        ]);

        return Redirect()->route('wpadmin.users');
    }

    /**
     * Function deleting
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DeleteUser( $id ){

        $user = User::find( $id );

        $file = public_path( 'uploads/users/'.$user->avatar_img );
        if ( file_exists( $file ) ) {
            @unlink( public_path( 'uploads/users/'.$user->avatar_img ) );
        }

        dispatch( new UserObserverJob( $user, 'deleted' ) );
        $user->delete();

        return Redirect()->route('wpadmin.users');

    }

}
