<?php

namespace App\Http\Controllers\Subscriber;

use App\Http\Controllers\Controller;
use App\Jobs\PostObserverJob;
use App\Models\Course;
use App\Models\CourseIteration;
use App\Models\CourseLesson;
use App\Models\CourseProgress;
use App\Models\Resource;
use App\Models\ResourceCategory;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\CourseCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Image;
use App\Modules\VideosAPI;

class DashboardResourcesController extends Controller
{

    protected $number = 1;

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Main resources page in dashboard
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function resourcesPage( ) {

        $resources  = Resource::paginate( $this->number );
        $categories = ResourceCategory::all();

        return view('userDashboard.pages.resources', compact( 'resources', 'categories' ) );
    }

    /**
     * Callback function for loading posts
     *
     */
    public function LoadMoreResources( Request $request )
    {

        $paged    = !empty( $request->page ) ? $request->page : 1;
        $getCat   = !empty( $request->category ) ? $request->category : 0;
        $docType  = !empty( $request->doc_type ) ? $request->doc_type : 'all';

        $user     = Auth::user();

        if ( ( $getCat == 'all' ) ) {
            $resources = ( $docType != 'all' ) ?
                Resource::where('doc_type', $docType )->paginate( $this->number )
                :
                Resource::paginate( $this->number );
        }
        else {
            $cats  = ResourceCategory::find($getCat)->guides->pluck(['id']);

            $resources = ( $docType == 'all' ) ?
                Resource::whereIn('id', $cats)->paginate($this->number)
                :
                Resource::where('doc_type', $docType )->whereIn('id', $cats)->paginate($this->number);

        }

        $totalPost = $resources->total();

        $result = $this->setHtmlLayout( $resources, $paged, $totalPost );

        return $result;

    }

    /**
     * Function setting html for ajax request
     *
     * @param $resources
     * @param $paged
     * @param $totalPost
     *
     * @return array|void
     */
    private function setHtmlLayout( $resources, $paged, $totalPost ) {

        $paged = (int)$paged;

        if ( !empty( $resources ) ) {
            $result = [];

            $html = '';
            foreach ( $resources as $resource ) {
                $html .=  view('userDashboard.items.resourceItem',
                    compact('resource' ) )->render();
            }

            $result['html']  = $html;
            $result['button' ] = $this->get_loadmore_button( $totalPost, $paged  );
            $result['count'] = ( $paged > 1 ) ? count( $resources ) + ( ( $paged - 1 ) * $this->number) : count( $resources ) * $paged;
            $result['total'] = $this->number * $paged;
            $result['all']   = $totalPost;
            $result['page']  = $paged;

            return $result;

        }

    }

    /**
     * Get Load More button according to Wp Query
     * @param $q instance of Wp Query
     * @return text/HTML
     */
    public function get_loadmore_button( $totalPost, $paged ) {
        ob_start();
        if ( $totalPost > $paged ) {
            $page = $paged + 1;
            ?>
            <a id="load_more_template" class="tplLoadMore" data-page="<?php echo $page; ?>">
                Load More
            </a>
            <?php
        }

        return ob_get_clean();
    }

}
