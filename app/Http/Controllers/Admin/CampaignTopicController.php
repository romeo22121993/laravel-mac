<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CampaignTopic;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Campaign;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Image;

class CampaignTopicController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function campaignsTopicPage()
    {

        $topics = CampaignTopic::paginate(5);

        return view('admin.campaign.topics.index', compact( 'topics'));
    }


    /**
     * Function for add Topic page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addCampaignTopic()
    {
        return view('admin.campaign.topics.create');
    }


    /**
     * Function saving new Topic
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeCampaignTopic(Request $request)
    {

        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:255', 'unique:campaigns_topics'],
            'slug'  => ['unique:campaigns_topics'],
        ]);

        $postCat = new CampaignTopic();
        $postCat->title = $request->title;
        $postCat->slug  = \Str::slug( $request->title);
        $postCat->save();

        return Redirect()->route('wpadmin.campaigns.topics');

    }


    /**
     * Function for edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function editCampaignTopic($id)
    {
        $topic = CampaignTopic::find($id);

        return view('admin.campaign.topics.edit', compact('topic'));
    }

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateCampaignTopic(Request $request, $id)
    {

        $post = CampaignTopic::find($id);

        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:255', Rule::unique('campaigns_topics')->ignore($post)],
            'slug'  => ['required', Rule::unique('campaigns_topics')->ignore($post)]
        ]);

        CampaignTopic::whereId($id)->update([
            'title' => $request->title,
            'slug'  => \Str::slug($request->slug)
        ]);

        return Redirect()->route('wpadmin.campaigns.topics');
    }

    /**
     * Function deleting
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteCampaignTopic($id)
    {

        CampaignTopic::whereId($id)->delete();
        DB::table('campaigns_and_topics')->where('topic_id', $id)->delete();

        return redirect()->back();

    }

}
