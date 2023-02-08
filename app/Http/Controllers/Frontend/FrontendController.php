<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\PostCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
    }

    /**
     * Function setting main admin page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function mainPage() {

        $category = [ 'a', 'b', 'c' ];

        return view('frontend.pages.index', compact('category'));

    }

    /**
     * Function setting platform page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function platformPage() {

        $category = [ 'a', 'b', 'c' ];

        return view('frontend.pages.platform', compact('category'));

    }

    /**
     * Function setting sign up page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function signUpPage() {

        $category = [ 'a', 'b', 'c' ];

        return view('frontend.pages.signup', compact('category'));

    }


    /**
     * Function setting podcast page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function podcastPage() {

        $category = [ 'a', 'b', 'c' ];

        return view('frontend.pages.podcast', compact('category'));

    }

    /**
     * Function setting contact page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function contactPage() {

        $category = [ 'a', 'b', 'c' ];

        return view('frontend.pages.contact', compact('category'));

    }


    /**
     * Function setting contact page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function blogPage() {

        $categories = PostCategory::all();
        $posts      = Post::paginate(1);

        return view('frontend.pages.blog', compact('categories', 'posts'));

    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function aboutPage() {

        $category = [ 'a', 'b', 'c' ];

        return view('frontend.pages.about', compact('category'));

    }


}
