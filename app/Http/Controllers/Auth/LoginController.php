<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'wpadmin.main';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Function authenteficated
     *
     * @return \Illuminate\Http\RedirectResponse|void
     */
    protected function authenticated() {
        if ( auth()->user() ) {
            return redirect()->route( $this->redirectTo );
        }
    }

    /**
     * Function loginning
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|void
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login( Request $request )
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember_me = $request->has('remember') ? true : false;

        if ( auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember_me))
        {
            $user = auth()->user();
            return redirect()->route( $this->redirectTo );
        } else{
            return back()->with('error','your username and password are wrong.');
        }
    }

}
