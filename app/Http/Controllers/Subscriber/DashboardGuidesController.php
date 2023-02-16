<?php

namespace App\Http\Controllers\Subscriber;

use App\Http\Controllers\Controller;
use App\Jobs\PostObserverJob;
use App\Models\Course;
use App\Models\CourseIteration;
use App\Models\CourseLesson;
use App\Models\CourseProgress;
use App\Models\Guide;
use App\Models\GuideCategory;
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

class DashboardGuidesController extends Controller
{

    protected $number = 1;

    public function __construct(){
        $this->middleware('auth');
    }

    public function guidesPage( ) {

        $guides = Guide::paginate( $this->number );
        $categories = GuideCategory::all();

        return view('userDashboard.pages.guides', compact( 'guides', 'categories' ) );
    }

    /**
     * Callback function for loading posts
     *
     */
    public function LoadMoreGuides( Request $request )
    {

        $paged    = !empty( $request->page ) ? $request->page : 1;
        $getCat   = !empty( $request->category ) ? $request->category : 0;
        $docType  = !empty( $request->doc_type ) ? $request->doc_type : 'all';

        $user            = Auth::user();

        if ( ( $getCat == 'all' ) ) {
            $guides = ( $docType != 'all' ) ?
                Guide::where('doc_type', $docType )->paginate( $this->number )
                :
                Guide::paginate( $this->number );
        }
        else {
            $cats  = GuideCategory::find($getCat)->guides->pluck(['id']);

            $guides = ( $docType == 'all' ) ?
                Guide::whereIn('id', $cats)->paginate($this->number)
                :
            Guide::where('doc_type', $docType )->whereIn('id', $cats)->paginate($this->number);

        }

        $totalPost = $guides->total();

        $result = $this->setHtmlLayout( $guides, $paged, $totalPost );

        return $result;

    }

    /**
     * Function setting html for ajax request
     *
     * @param $guides
     * @param $paged
     * @param $totalPost
     *
     * @return array|void
     */
    private function setHtmlLayout( $guides, $paged, $totalPost ) {

        $paged = (int)$paged;

        if ( !empty( $guides ) ) {
            $result = [];

            $html = '';
            foreach ( $guides as $guide ) {
                $html .=  view('userDashboard.items.guideItem',
                    compact('guide' ) )->render();
            }

            $result['html']  = $html;
            $result['button' ] = $this->get_loadmore_button( $totalPost, $paged  );
            $result['count'] = ( $paged > 1 ) ? count( $guides ) + ( ( $paged - 1 ) * $this->number) : count( $guides ) * $paged;
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
