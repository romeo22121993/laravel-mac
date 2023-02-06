<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Contact;
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

        $data = $request->all();

        $user           = Auth::user();
        $paged          = (int)$data['page'];
        $getCat         = ( !empty( $data['getCat'] ) )  ? $data['getCat']  : '';
        $getCatId       = ( !empty( $data['getCatId'] ) )  ? $data['getCatId']  : '';

        $cptType     = 'post';
        $mytaxonomy  = 'category';

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
        $totalpost = $myPosts->total();

        $result = $this->set_html_layout( $myPosts, $cptType, $paged, $this->countPerPage, $totalpost );
        //wp_send_json( $result, 200);

//        TODO:
//        1) posts single page
//        2) finish load more - filtration posts
        dd();

        return true;

    }


    /**
     * Setting html layout of different cpt for Ajax requests
     *
     * @param $myPosts
     * @param $cpt_type
     * @param $paged
     * @param $count_per_page
     * @param $totalpost
     *
     * @return array|void
     */
    public function set_html_layout( $myPosts, $cpt_type, $paged, $count_per_page, $totalpost ) {

        if ( !empty( $myPosts ) ) {
            $result = [];
            $i = 0;
            foreach ( $myPosts->posts as $post ) {
                require 'templates/template-parts/ajax-items/post_item.php';
            }

            $result['html']  = ob_get_clean();
            $result['count'] = ( $paged > 1 ) ? count( $myPosts->posts ) + ( ( $paged - 1 ) * $count_per_page) : count( $myPosts->posts ) * $paged;
            $result['total'] = $count_per_page * $paged;
            $result['all']   = $totalpost;
            $result['page']  = $paged;


            return $result;
        }
    }



}
