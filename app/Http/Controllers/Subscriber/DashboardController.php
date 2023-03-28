<?php

namespace App\Http\Controllers\Subscriber;

use App\Models\Article;
use App\Models\Campaign;
use App\Models\Course;
use App\Models\Resource;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DashboardController extends Controller
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

        $usersCount = User::count();
        $articles   = Article::where('original_type', 'original')->paginate(5);
        $courses    = Course::where('published', '=', 1)->paginate(6);
        $campaigns = Campaign::where('original_type', 'original')->paginate(6);
        $resources  = Resource::paginate(3);

        return view('userDashboard.pages.index', compact(
            'usersCount', 'articles', 'courses', 'campaigns', 'resources'
        ));

    }


}
