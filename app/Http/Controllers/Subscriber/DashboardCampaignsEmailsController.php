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
use App\Models\CampaignSchedulingEmail;
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

class DashboardCampaignsEmailsController extends Controller
{

    protected $number = 1;

    public function __construct(){
        $this->middleware('auth');
    }


    /**
     * Function callback for action of camapigns ( draft, edit, start, cancel)
     *
     */
    public function campaignsActions(Request $request)
    {

        $user   = Auth::user();
        $data   = $request->all();
        $action = $data['action'];

        parse_str ( $data['data'], $params );

        $userMeta = DB::table('usermeta')->where('user_id', $user->id)->first();
        $userCampaigns  = empty($userMeta->user_campaigns) ? array() : json_decode($userMeta->user_campaigns, true);

        // statuses : active, finished, draft, stopped, paused
        $status          = !empty($data['draft']) ? 'draft' : 'inprogress';
        $status          = strstr($action, 'scheduling_campaign') ? 'inprogress' : $status;

        if ( $action == 'draft_scheduling_campaign') {
            $start_date = $this->saveCampaignProgressFunction($params, $status, $user);
        }
        elseif ( $action == 'edit_draft_campaign') {
            $start_date = $this->editCampaignProgressFunction($params, $status, $user);
        }
        elseif ( $action == 'scheduling_campaign') {
            if ( !empty($userCampaigns['draft'][$params['campaign_id']]) ) {
                unset($userCampaigns['draft'][$params['campaign_id']]);
            }

            $start_date = $this->saveCampaignProgressFunction($params, 'inprogress', $user);
        }
        elseif ( $action == 'edit_scheduling_campaign') {

            if ( !empty($userCampaigns['draft'][$params['campaign_id']]) ) {
                unset($userCampaigns['draft'][$params['campaign_id']]);
            }

            $start_date = $this->editCampaignProgressFunction($params, 'inprogress', $user);
        }

        if ( !in_array($params['campaign_id'], $userCampaigns ) ) {
            $userCampaigns[$status][$params['campaign_id']] = min( $start_date );
        }


        $userCampaigns = json_encode( $userCampaigns );

        DB::table('usermeta')
            ->updateOrInsert(
                ['user_id' => $user->id],
                ['user_campaigns' => $userCampaigns]
            );

        return ['status' => 'Done'];

    }

    protected function saveCampaignProgressFunction($params, $status, $user)
    {
        $start_date = [];
        for ($i=1; $i<=3; $i++) {
            if( !empty($params["email_subject$i"]) && !empty($params["email_body$i"])) {

                $campaignDetailOrigin = Campaign::find($params['campaign_id']);
                $subjectKey    = "email_subject$i";
                $email_subject_original  = $campaignDetailOrigin->details->$subjectKey;


                $start_date[] = $params["date$i"];
                $schedulingEmail = new CampaignSchedulingEmail();
                $schedulingEmail->campaign_id        = (int)$params['campaign_id'];
                $schedulingEmail->campaign_detail_id = (int)$params['campaign_detail'];
                $schedulingEmail->user_id            = $user->id;
                $schedulingEmail->sending_iteration  = 1;
                $schedulingEmail->count_get_users    = 2;
                $schedulingEmail->statistics    = '';
                $schedulingEmail->status        = $status;
                $schedulingEmail->user_list     = 1;
                $schedulingEmail->email_subject = $email_subject_original;
                $schedulingEmail->email_subject_new = ( $email_subject_original != $params["email_subject$i"] ) ? $params["email_subject$i"] : '';
                $schedulingEmail->email_body    = $params["email_body$i"];
                $schedulingEmail->sending_time  = $params["date$i"];
                $schedulingEmail->save();
            }
        }


        return $start_date;
    }

    protected function editCampaignProgressFunction($params, $status, $user)
   {
       $start_date = [];
       for ($i=1; $i<=3; $i++) {
           if( !empty($params["email_subject$i"]) && !empty($params["email_body$i"])) {
               $start_date[] = $params["date$i"];

               $campaignDetailOrigin = Campaign::find($params['campaign_id']);
               $subjectKey    = "email_subject$i";
               $email_subject_original  = $campaignDetailOrigin->details->$subjectKey;

               $schedulingEmail = CampaignSchedulingEmail::find($params["edited_id$i"]);
               $schedulingEmail->campaign_id        = (int)$params['campaign_id'];
               $schedulingEmail->campaign_detail_id = (int)$params['campaign_detail'];
               $schedulingEmail->user_id            = $user->id;
               $schedulingEmail->sending_iteration  = 1;
               $schedulingEmail->count_get_users    = 2;
               $schedulingEmail->statistics    = '';
               $schedulingEmail->status        = $status;
               $schedulingEmail->user_list     = 1;
               $schedulingEmail->email_subject = $email_subject_original;
               $schedulingEmail->email_subject_new = ( $email_subject_original != $params["email_subject$i"] ) ? $params["email_subject$i"] : '';
               $schedulingEmail->email_body    = $params["email_body$i"];
               $schedulingEmail->sending_time  = $params["date$i"];
               $schedulingEmail->save();
           }
       }


       return $start_date;
   }

}
