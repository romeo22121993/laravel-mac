<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Mail\ContactMail;
use Mail;

class PostController extends Controller
{

    public $countPerPage;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->countPerPage = 1;
    }

    /**
     * Contact form logic via Ajax
     *
     * @param Request $request
     * @return bool
     */
    public function loadPostsByAjax( Request $request ) {

        $data      = $request->all();
        $paged     = (int)$data['page'];
        $getCat    = ( !empty( $data['getCat'] ) ) ? $data['getCat']  : '';
        $getCatId  = ( !empty( $data['getCatId'] ) ) ? $data['getCatId']  : '';
        $cptType   = 'post';

        if ( ( $data['totalCount'] + $this->countPerPage ) < ( $this->countPerPage * $paged ) ) {
            return false;
        }

        if ( ( $getCatId == 'all' ) ) {
            $myPosts      = Post::where('check1', '>', 0)->paginate( $this->countPerPage );
        }
        else {
            $posts        = PostCategory::find( $getCatId )->posts->pluck(['id']);
            $myPosts      = Post::where('check1', '>', 0)->whereIn('id', $posts )->paginate( $this->countPerPage );
        }

        $totalPost = $myPosts->total();

        $result = $this->setHtmlLayout( $myPosts, $paged, $this->countPerPage, $totalPost );

        return $result;

    }


    /**
     * Function setting single post page
     *
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function singlePostPage( $slug ) {

        $post         = Post::where( 'slug', $slug )->first();
        $relatedPosts = Post::where( 'slug', '<>', $slug )->paginate(2);;

        return view('frontend.post.singlePost', compact('post', 'relatedPosts' ) );
    }


    /**
     * Setting html layout of different cpt for Ajax requests
     *
     * @param $myPosts
     * @param $cptType
     * @param $paged
     * @param $countPerPage
     * @param $totalPost
     *
     * @return array|void
     */
    public function setHtmlLayout( $myPosts, $paged, $countPerPage, $totalPost ) {

        $paged = (int)$paged;
        if ( !empty( $myPosts ) ) {
            $result = [];

            $html = '';
            foreach ( $myPosts as $post ) {
                $html .=  view('frontend.items.postitem', compact('post'))->render();
            }

            $result['html']  = $html;
            $result['count'] = ( $paged > 1 ) ? count( $myPosts ) + ( ( $paged - 1 ) * $countPerPage) : count( $myPosts ) * $paged;
            $result['total'] = $countPerPage * $paged;
            $result['all']   = $totalPost;
            $result['page']  = $paged;

            return $result;

        }

    }

}
