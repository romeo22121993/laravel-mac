<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Function for edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function changeSettings( ) {
        $user = Auth::user();

        return view('admin.profile.edit', compact( 'user' ) );
    }

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * Function for edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function changePassword( ) {
        $user = Auth::user();

        return view('admin.profile.password', compact( 'user' ) );
    }

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword( Request $request, $id ) {

        User::whereId($id)->update([
            'password'  => Hash::make( $request->password ),
        ]);

        return Redirect()->route('wpadmin.main');

    }

}
