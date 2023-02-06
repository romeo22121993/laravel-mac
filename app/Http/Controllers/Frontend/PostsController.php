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

class PostsController extends Controller
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
//        var_dump( '$relatedPosts', $relatedPosts );
//        die;

        return view('frontend.singlePost', compact('post', 'relatedPosts' ) );
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
                $imgSrc = ( $post->img == 'none') ? asset('img/none.jpg') : asset( 'uploads/posts/'.$post->img );
                $html .= '
                    <div class="sv-blog-post col-lg-6 col-sm-12 col-xs-12">
                        <div class="one-card">
                            <div class="blog-top-card">
                                <a href="' . $post->slug . '">
                                    <img src="' . $imgSrc . '" alt="">
                                </a>
                            </div>
                            <div class="card-content blog_list">
                                <h3>
                                    <a href="' . $post->slug . '">
                                        ' . $post->title . '
                                    </a>
                                </h3>
                                <a href="' . $post->slug . '}">Read article</a>
                            </div>
                        </div>
                    </div>
                ';
//                $html .= include( resource_path() . '/views/frontend/items/postitem.blade.php');
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
