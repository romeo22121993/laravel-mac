<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/wpadmin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make( $data, [
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'firstname' => ['required', 'string', 'min:3' ],
            'lastname'  => ['required', 'string', 'min:3'],
            'phone'     => ['required', 'string', 'min:3'],
            'role'      => ['required', 'string'],
            'company'   => ['required', 'string', 'min:3'],
            'position'  => ['required', 'string', 'min:3'],
            'password'  => ['required', 'min:4', 'required_with:password_confirmation', 'same:password_confirmation', 'string'],
        ]);

        $data  = $request->all();
        $check = $this->create( $data );

//        return redirect("dashboard")->withSuccess('You have signed-in');
        return redirect()->route($this->redirectTo);

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

}
