<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Function setting main admin page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function mainPage() {

        $category = [ 'a', 'b', 'c' ];
        $usersCount = User::count();

        return view('frontend.index', compact('category',  'usersCount'));

    }

    /**
     * Function setting platform page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function platformPage() {

        $category = [ 'a', 'b', 'c' ];
        $usersCount = User::count();

        return view('frontend.platform', compact('category',  'usersCount'));

    }


    /**
     * Function setting sign up page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function signUpPage() {

        $category = [ 'a', 'b', 'c' ];
        $usersCount = User::count();

        return view('frontend.signup', compact('category',  'usersCount'));

    }


    /**
     * Function setting podcast page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function podcastPage() {

        $category = [ 'a', 'b', 'c' ];
        $usersCount = User::count();

        return view('frontend.podcast', compact('category',  'usersCount'));

    }

    /**
     * Function setting contact page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function contactPage() {

        $category = [ 'a', 'b', 'c' ];
        $usersCount = User::count();

        return view('frontend.contact', compact('category',  'usersCount'));

    }


    /**
     * Function setting contact page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function blogPage() {

        $category = [ 'a', 'b', 'c' ];
        $usersCount = User::count();

        return view('frontend.blog', compact('category',  'usersCount'));

    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function aboutPage() {

        $category = [ 'a', 'b', 'c' ];
        $usersCount = User::count();

        return view('frontend.about', compact('category',  'usersCount'));

    }

}
