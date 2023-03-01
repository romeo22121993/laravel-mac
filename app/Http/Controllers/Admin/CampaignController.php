<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\ArticleObserverJob;
use App\Models\Article;
use App\Models\CampaignDetail;
use App\Modules\FilesUploads;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Campaign;
use App\Models\CampaignCategory;
use App\Models\CampaignTopic;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Image;

class CampaignController extends Controller
{

    protected $number = 5;

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function campaignsPage()
    {

        $campaigns = Campaign::paginate($this->number);

        return view('admin.campaign.index', compact('campaigns'));
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function originalCampaigns()
    {

        $campaigns = Campaign::where('original_type', 'original')->paginate($this->number);

        return view('admin.campaign.index', compact('campaigns'));
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function clonedCampaigns()
    {

        $campaigns = Campaign::where('original_type', 'cloned')->paginate($this->number);

        return view('admin.campaign.index', compact('campaigns'));
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function campaignsPageByCategory($id)
    {

        $campaignCategory = CampaignCategory::find($id);
        $campaigns        = $campaignCategory->campaigns->pluck(['id']);
        $campaigns        = Campaign::whereIn('id', $campaigns)->paginate($this->number);

        return view('admin.campaign.campaignsbycategories', compact('campaigns', 'campaignCategory'));
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function campaignsPageByTopic($id)
    {

        $campaignCategory = CampaignTopic::find($id);
        $campaigns        = $campaignCategory->campaigns->pluck(['id']);
        $campaigns        = Campaign::whereIn('id', $campaigns)->paginate($this->number);

        return view('admin.campaign.campaignsbycategories', compact('campaigns', 'campaignCategory'));
    }


    /**
     * Function for add category page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addCampaign()
    {

        $categories = CampaignCategory::all();
        $topics     = CampaignTopic::all();
        $articles   = Article::where('original_type', 'original')->get();

        return view('admin.campaign.create', compact('categories', 'topics', 'articles'));
    }


    /**
     * Function saving new category
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeCampaign(Request $request)
    {
        $fileModule = new FilesUploads();

        $request->validate([
            'title'      => ['required', 'string', 'max:255', 'unique:campaigns'],
            'slug'       => ['max:255', 'unique:campaigns'],
            'categories' => ['required'],
            'topics'     => ['required'],
        ]);

        $categories = $request->categories;
        $topics     = $request->topics;

        $campaign = new Campaign();
        $campaign->title         = $request->title;
        $campaign->content       = $request->content1;
        $campaign->slug          = \Str::slug($request->title);
        $campaign->author_id     = Auth::id();
        $campaign->original_type = 'original';

        if ($request->file('img')) {
            $image_src = $fileModule->fileUploadProcess($request->file('img'), 'uploads/campaigns');
            $campaign->img = $image_src;
        }

        if ($request->file('doc_file')) {
            $file_src = $fileModule->fileUploadProcess($request->file('doc_file'), 'uploads/campaigns');
            $campaign->doc_file = $file_src;
        }

        if ($request->file('pdf_file')) {
            $file_src = $fileModule->fileUploadProcess($request->file('pdf_file'), 'uploads/campaigns');
            $campaign->pdf_file = $file_src;
        }

        $campaign->save();

        $this->setDetailsByCampaign($request->all(), $campaign->id);
        $this->setCategoriesByCampaign($categories, $campaign->id);
        $this->setTopicsByCampaign($topics, $campaign->id);

        return Redirect()->route('wpadmin.campaigns');

    }


    /**
     * Function for edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function editCampaign($id)
    {

        $campaign = Campaign::find($id);

        $campaignCategories = $campaign->categories->pluck('id')->toArray();
        $campaignTopics     = $campaign->topics->pluck('id')->toArray();

        $categories = CampaignCategory::all();
        $topics     = CampaignTopic::all();
        $articles   = Article::where('original_type', 'original')->get();

        return view('admin.campaign.edit', compact(
            'categories', 'topics', 'campaign',
            'articles', 'campaignCategories', 'campaignTopics'
        ));

    }

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateCampaign(Request $request, $id)
    {

        $fileModule = new FilesUploads();
        $campaign   = Campaign::find($id);

        $request->validate([
            'title'      => ['required', 'string', 'max:255', Rule::unique('campaigns')->ignore($campaign)],
            'slug'       => ['max:255', Rule::unique('campaigns')->ignore($campaign)],
            'categories' => ['required'],
            'topics'     => ['required'],
        ]);

        $categories = $request->categories;
        $topics     = $request->topics;

        $campaign->title = $request->title;
        $campaign->content = $request->content1;

        if ($request->file('img')) {
            if (file_exists($campaign->img)) {
                unlink($campaign->img);
            }
            $image_src = $fileModule->fileUploadProcess($request->file('img'), 'uploads/campaigns');
            $campaign->img = $image_src;
        }

        if ($request->file('doc_file')) {
            if (file_exists($campaign->doc_file)) {
                unlink($campaign->doc_file);
            }
            $file_src = $fileModule->fileUploadProcess($request->file('doc_file'), 'uploads/campaigns');
            $campaign->doc_file = $file_src;
        }

        if ($request->file('pdf_file')) {
            if (file_exists($campaign->pdf_file)) {
                unlink($campaign->pdf_file);
            }
            $file_src = $fileModule->fileUploadProcess($request->file('pdf_file'), 'uploads/campaigns');
            $campaign->pdf_file = $file_src;
        }


        $campaign->save();

        $this->setDetailsByCampaign($request->all(), $campaign->id, true);
        $this->setCategoriesByCampaign($categories, $campaign->id, true);
        $this->setTopicsByCampaign($topics, $campaign->id, true);

        return redirect()->back();
    }

    /**
     * Function deleting
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteCampaign($id)
    {

        DB::table('campaigns_and_cats')->where('campaign_id', $id)->delete();
        DB::table('campaigns_and_topics')->where('campaign_id', $id)->delete();

        CampaignDetail::where('campaign_id', $id)->delete();

        $campaign = Campaign::find($id);

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

        return redirect()->back();

    }


    /**
     * Function setting courses-Categories table
     *
     * @param $categories
     * @param $campaignId
     * @param $deletingPrevious
     *
     * @return bool
     */
    protected function setDetailsByCampaign($requests, $campaignId, $update = false)
    {

        if (!empty($update)) {
            $campaignDetail = CampaignDetail::find($requests['detail_id']);
        }
        else {
            $campaignDetail = new CampaignDetail();
        }

        for ($i = 1; $i <= 3; $i++) {
            $subjectKey    = "email_subject$i";
            $bodyKey       = "email_body$i";
            $customLinkKey = "use_custom_link$i";
            $articleKey    = "article$i";

            $campaignDetail->campaign_id    = $campaignId;
            $campaignDetail->$subjectKey    = $requests[$subjectKey];
            $campaignDetail->$bodyKey       = $requests[$bodyKey];
            $campaignDetail->$customLinkKey = !empty($requests[$customLinkKey]) ? $requests[$customLinkKey] : '';
            $campaignDetail->$articleKey    = !empty($requests[$articleKey]) ? $requests[$articleKey] : '';
        }

        $campaignDetail->save();

        return true;
    }


    /**
     * Function setting campaigns-Categories table
     *
     * @param $categories
     * @param $campaignId
     * @param $deletingPrevious
     *
     * @return bool
     */
    protected function setCategoriesByCampaign($categories, $campaignId, $deletingPrevious = false)
    {
        $campaignAndCats = [];

        if (!empty($deletingPrevious)) {
            DB::table('campaigns_and_cats')->where('campaign_id', $campaignId)->delete();
        }

        foreach ($categories as $category) {
            $campaignAndCats[] = [
                'campaign_id' => $campaignId,
                'cat_id'     => $category,
            ];
        }

        DB::table('campaigns_and_cats')->insert($campaignAndCats);

        return true;
    }

    /**
     * Function setting campaigns-Categories table
     *
     * @param $categories
     * @param $campaignId
     * @param $deletingPrevious
     *
     * @return bool
     */
    protected function setTopicsByCampaign($topics, $campaignId, $deletingPrevious = false)
    {
        $campaignAndTopic = [];

        if (!empty($deletingPrevious)) {
            DB::table('campaigns_and_topics')->where('campaign_id', $campaignId)->delete();
        }

        foreach ($topics as $topic) {
            $campaignAndTopic[] = [
                'campaign_id' => $campaignId,
                'topic_id'    => $topic,
            ];
        }

        DB::table('campaigns_and_topics')->insert($campaignAndTopic);

        return true;
    }


}
