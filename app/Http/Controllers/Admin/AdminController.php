<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isAdmin');
    }

    public function mainPage() {

        $category = ['aa', 'bbb', 'ccc'];
        $subcategory = ['aa', 'bbb', 'ccc'];
        $post = ['aa', 'bbb', 'ccc'];

        return view('admin.index',compact('category',  'subcategory', 'post'));

    }


    public function usersPage() {

        $category = ['aa', 'bbb', 'ccc'];
        $subcategory = ['aa', 'bbb', 'ccc'];
        $post = ['aa', 'bbb', 'ccc'];


        return view('admin.index',compact('category',  'subcategory', 'post'));


    }

    /**
     * Function getting forgot password page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function forgotPassword ()
    {
        return view('auth.passwords.forgot-password');
    }



    /**
     * Function changing password from reset page
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changePassword (Request $request) {

        $request->validate([
            'token'    => 'required',
            'email'    => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);



        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }

}
