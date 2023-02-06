<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\UserObserverJob;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
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

        $users = User::paginate(3);

        return view('admin.users.index', compact( 'users' ) );
    }


    /**
     * Function for add category page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addUser() {
        return view('admin.users.create');
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
    public function EditUser( $id ) {
        $user = User::find( $id );

        return view('admin.users.edit', compact( 'user' ) );
    }

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function UpdateUser( Request $request, $id ) {

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
    public function DeleteUser( $id ){

        $user = User::find($id );
        dispatch( new UserObserverJob( $user, 'deleted' ) )->onQueue('emails'); // send email via observer
        $user->delete();

        return redirect()->back();

    }

}
