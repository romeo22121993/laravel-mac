<?php

namespace App\Http\Controllers\Subscriber;

use App\Http\Controllers\Admin\CampaignController;
use App\Http\Controllers\Controller;
use App\Jobs\PostObserverJob;
use App\Models\Campaign;
use App\Models\CampaignCategory;
use App\Models\CampaignDetail;
use App\Models\CampaignTopic;
use App\Models\Course;
use App\Models\CourseIteration;
use App\Models\CourseLesson;
use App\Models\CourseProgress;
use App\Modules\FilesUploads;
//use Illuminate\Http\File;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Image;
use App\Modules\VideosAPI;
use Illuminate\Support\Facades\File;

class DashboardCampaignsController extends Controller
{

    protected $number = 1;

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function campaignsPage() {

        $user       = Auth::user();
        $originalCampaigns = Campaign::where('original_type', 'original')->paginate($this->number);

        $categories = CampaignCategory::all();
        $topics     = CampaignTopic::all();

        $countPerPage   = $this->number;

        $typeCampaigns  = 'original';

        return view('userDashboard.pages.campaigns', compact(
            'countPerPage', 'originalCampaigns', 'categories', 'topics', 'typeCampaigns'
        ));
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function clonedCampaignsPage() {

        $user       = Auth::user();
        $originalCampaigns = Campaign::where('original_type', 'cloned')
            ->where('author_id', $user->id)->paginate($this->number);

        $categories = CampaignCategory::all();
        $topics     = CampaignTopic::all();

        $countPerPage   = $this->number;
        $typeCampaigns  = 'cloned';

        return view('userDashboard.pages.campaigns', compact(
            'countPerPage', 'originalCampaigns', 'categories', 'topics', 'typeCampaigns'
        ));
    }


    /**
     * Funtion single Campaign page
     *
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function singleCampaignPage($slug)
    {
        $user = Auth::user();
        $campaign         = Campaign::where('slug', $slug)->first();
        $relatedCampaigns = Campaign::where('slug', '<>', $slug)->where('original_type', 'original')->paginate(3);

        if ($campaign->original_type == 'cloned') {
            if ($user->id != $campaign->author_id) {
                return Redirect::route('dashboard.campaigns')->send();
            }
        }

        return view('userDashboard.campaign.index',
            compact('campaign', 'relatedCampaigns'
           )
       );

    }


    /**
     * Funtion single Campaign page
     *
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function singleCampaignReportPage($slug)
    {
        $user = Auth::user();
        $campaign         = Campaign::where('slug', $slug)->first();
        $relatedCampaigns = Campaign::where('slug', '<>', $slug)->where('original_type', 'original')->paginate(3);

        $clonedCampaigns = DB::table('cloned_campaigns_relations')
            ->where('origin_id', $campaign->id)->where('user_id', $user->id)
            ->get()->pluck(['child_id'])->toArray();

        $clonedCampaign = !empty($clonedCampaigns[0]) ? $clonedCampaigns[0] : false;

        if (!empty($clonedCampaign)) {
            $clonedCampaign = Campaign::find($clonedCampaign);

            return Redirect::route('single.campaign', ['slug' => $clonedCampaign->slug])->send();

        }

        return view('userDashboard.campaign.index',
            compact('campaign', 'relatedCampaigns'
            )
        );

    }


    /**
     * Function cloning original Campaigns callback
     *
     */
    public function cloneCampaign(Request $request)
    {

        $user = Auth::user();

        $campaignId     = (int)$request->campaign_id;
        $originCampaign = Campaign::find($campaignId);

        $title          = $originCampaign->title . "-cloned" . $user->id;
        $check          = Campaign::where('title', "=", $title)->first();

        if (!empty($check)) {
            $title .= "-cloned" . date('m-s');
        }

        $clonedCampaign = new Campaign();
        $clonedCampaign->content       = $originCampaign->content;
        $clonedCampaign->title         = $title;
        $clonedCampaign->slug          = \Str::slug($title);
        $clonedCampaign->author_id     = Auth::id();
        $clonedCampaign->original_type = 'cloned';
        $clonedCampaign->parent_id     = $campaignId;

        $fileModule = new FilesUploads();

        $imageSrc = $this->generateFeaturedImageFromOriginal($originCampaign->img);
        $clonedCampaign->img = $imageSrc;

        $docFile = $this->generateFeaturedImageFromOriginal($originCampaign->doc_file);
        $clonedCampaign->doc_file = $docFile;

        $pdfFile = $this->generateFeaturedImageFromOriginal($originCampaign->img);
        $clonedCampaign->pdf_file = $pdfFile;

        $clonedCampaign->save();

        $postClonedCampaigns   = DB::table('cloned_campaigns_relations')
            ->where('origin_id', $campaignId)->where('user_id', $user->id)
            ->get()->pluck(['child_id'])->toArray();

        if (!in_array($campaignId, $postClonedCampaigns)) {
            $arr = [
                'origin_id' => $campaignId,
                'child_id'  => $clonedCampaign->id,
                'user_id'   => $user->id,
            ];

            DB::table('cloned_campaigns_relations')->insert($arr);
        }

        $this->cloneParentCategories($originCampaign->categories->pluck('id')->toArray(), $clonedCampaign->id);
        $this->cloneParentTopics($originCampaign->topics->pluck('id')->toArray(), $clonedCampaign->id);
        $this->cloneDetails($originCampaign->id, $clonedCampaign->id);

        $redirect_link = env("APP_URL") . "/dashboard/campaign/" . $clonedCampaign->slug;

        return ['status' => 'Done', 'redirect_url' => $redirect_link];

    }



    /**
     * Function cloning original Campaigns callback
     *
     */
    public function deleteClonedCampaign(Request $request)
    {

        $campaign_id  = $request->campaign_id;
        DB::table('campaigns_and_cats')->where('campaign_id', $campaign_id)->delete();
        DB::table('campaigns_and_topics')->where('campaign_id', $campaign_id)->delete();

        CampaignDetail::where('campaign_id', $campaign_id)->delete();

        $campaign = Campaign::find($campaign_id);

        if ($campaign->original_type == 'original') {
//            DB::table('cloned_campaigns_relations')->where('origin_id', $campaign->id)->delete();
        }
        else {
            DB::table('cloned_campaigns_relations')->where('child_id', $campaign->id)->delete();
        }

        if (file_exists($campaign->img)) {
            unlink($campaign->img);
        }
        if (file_exists($campaign->doc_file)) {
            unlink($campaign->doc_file);
        }
        if (file_exists($campaign->pdf_file)) {
            unlink($campaign->pdf_file);
        }

        $campaign->delete();

        $redirect_link = env("APP_URL") . "/dashboard/admin-campaigns/";

        return ['status' => 'Done', 'redirect_link' => $redirect_link];

    }


    /**
     * Function cloning parent categories for cloned Campaign
     *
     * @param $originalCategories
     * @param $clonedCampaignId
     */
    protected function cloneParentCategories($originalCategories, $clonedCampaignId)
    {

        foreach ($originalCategories as $category) {
            $campaignAndCats[] = [
                'campaign_id' => $clonedCampaignId,
                'cat_id'     => $category,
            ];
        }

        DB::table('campaigns_and_cats')->insert($campaignAndCats);
    }


    /**
     * Function cloning parent categories for cloned Campaign
     *
     * @param $originalCategories
     * @param $clonedCampaignId
     */
    protected function cloneParentTopics($originalTopics, $clonedCampaignId)
    {

        foreach ($originalTopics as $topic) {
            $campaignAndCats[] = [
                'campaign_id' => $clonedCampaignId,
                'topic_id'    => $topic,
            ];
        }

        DB::table('campaigns_and_topics')->insert($campaignAndCats);
    }


    /**
     * Function cloning parent categories for cloned Campaign
     *
     * @param $originalCategories
     * @param $clonedCampaignId
     */
    protected function cloneDetails($originalCampaignId, $clonedCampaignId)
    {

        $campaignDetailOrigin = Campaign::find($originalCampaignId);
        $campaignDetailCloned = new CampaignDetail();
        $campaignDetailCloned->campaign_id    = $clonedCampaignId;
        for ($i = 1; $i <= 3; $i++) {
            $subjectKey    = "email_subject$i";
            $bodyKey       = "email_body$i";
            $customLinkKey = "use_custom_link$i";
            $articleKey    = "article$i";


            $campaignDetailCloned->$subjectKey    = $campaignDetailOrigin->details->$subjectKey;
            $campaignDetailCloned->$bodyKey       = $campaignDetailOrigin->details->$bodyKey;
            $campaignDetailCloned->$customLinkKey = !empty($campaignDetailOrigin->details->$customLinkKey) ? $campaignDetailOrigin->details->$customLinkKey : '';
            $campaignDetailCloned->$articleKey    = !empty($campaignDetailOrigin->details->$articleKey) ? $campaignDetailOrigin->details->$articleKey : '';
        }

        $campaignDetailCloned->save();

        return true;
    }


    /**
     * Function generating thumbnail by parent original thumbnail
     *
     * @param $image_url
     * @param $postId
     * @return bool
     */
    public function generateFeaturedImageFromOriginal($image_url){

        $image_url = env("APP_URL") . $image_url;
        $path = 'uploads/campaigns';

        $file = file_get_contents("$image_url");

        $filename = date('YmdHi').'.jpg';
        File::put(public_path($path). "/$filename", $file);
        $imageSrc = "$path/$filename";

        return $imageSrc;
    }


    /**
     * Callback function for loading posts
     *
     */
    public function LoadMoreCampaigns(Request $request)
    {

        $topic       = ( !empty( $request->topics ) ) ? $request->topics : 'all';
        $category    = ( !empty( $request->categories ) )  ? $request->categories  : 'all';
        $campaign_original_edited = ( !empty( $request->cat ) ) ? $request->cat  : '';

        $user  = Auth::user();

        $paged = !empty($request->page) ? $request->page : 0;

        if (($request->total_count + $this->number) < ($this->number * $paged)) {
            return false;
        }

        $campaigns  = Campaign::where('id', '>', 0);
        if (($campaign_original_edited == 'original')) {
            $campaigns = $campaigns->where('original_type', 'original');

            if ( $category != 'all' ) {
                $cats = CampaignCategory::find($category)->campaigns->pluck(['id']);
                $campaigns = $campaigns->whereIn('id', $cats);
            }
            if ( $topic != 'all' ) {
                $topics   = CampaignTopic::find($topic)->campaigns->pluck(['id']);
                $campaigns = $campaigns->whereIn('id', $topics);
            }

        }
        else {

            $campaigns = $campaigns->where('original_type', 'cloned')->where('author_id', $user->id);

//            $postClonedCampaigns  = DB::table('cloned_campaigns_relations')
//                ->where('user_id', $user->id)
//                ->get()->pluck(['child_id'])->toArray();
//            $campaigns = $campaigns->whereIn('id', $postClonedCampaigns);

            if ( $category != 'all' ) {
                $cats = CampaignCategory::find($category)->campaigns->pluck(['id']);
                $campaigns = $campaigns->whereIn('id', $cats);
            }
            if ( $topic != 'all' ) {
                $topics   = CampaignTopic::find($topic)->campaigns->pluck(['id']);
                $campaigns = $campaigns->whereIn('id', $topics);
            }

        }

        $campaigns = $campaigns->paginate($this->number);
        $totalPost = $campaigns->total();

        $result = $this->setHtmlLayout($campaigns, $paged, $totalPost );

        return $result;



    }

    /**
     * Function setting html for ajax request
     *
     * @param $campaigns
     * @param $paged
     * @param $totalPost
     *
     * @return array|void
     */
    private function setHtmlLayout($campaigns, $paged, $totalPost) {

        $paged = (int)$paged;

        if (!empty($campaigns)) {
            $result = [];

            $html = '';
            foreach ($campaigns as $campaign) {
                $html .=  view('userDashboard.items.campaignItem',
                    compact('campaign'))->render();
            }

            $result['html']  = $html;
            $result['count'] = ($paged > 1) ? count($campaigns) + (($paged - 1) * $this->number) : count($campaigns) * $paged;
            $result['total'] = $this->number * $paged;
            $result['all']   = $totalPost;
            $result['page']  = $paged;

            return $result;

        }

    }


    /**
     * Function for downloading process
     *
     */
    public function downloadCampaign(Request $request) {


        $postId        = !empty( $request->post_id ) ? $request->post_id : 0;
        $file_src      = !empty( $request->href ) ? $request->href : '';

        $user           = Auth::user();
        $currentMonth   = date('Y-m');

        $postClonedCampaigns = DB::table('usermeta')->where('user_id', $user->id)
            ->first();
        $getDownloads   = empty($postClonedCampaigns->campaigns_downloads) ? array() : json_decode($postClonedCampaigns->campaigns_downloads, true);
        $monthDownloads = empty( $getDownloads[$currentMonth] ) ? array() : $getDownloads[$currentMonth];

        if ( !in_array( $postId, $monthDownloads ) ) {
            $getDownloads[$currentMonth][] = $postId;
        }


        $getDownloads = json_encode( $getDownloads );

        $arr = [
            'campaigns_downloads' => $getDownloads,
            'user_id'            => $user->id,
        ];

        DB::table('usermeta')
            ->updateOrInsert(
                ['user_id' => $user->id],
                $arr
            );

        //$file_created   = !empty( $file_src ) ? $this->read_save_file_func( $file_src ) : '';

        return ['error'=> false, 'message' => 'Done.'];

    }

}
