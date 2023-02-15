<?php

namespace App\Modules;

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

class VideosAPI
{

    public $countPerPage;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->countPerPage = 1;
    }

    /**
    public function init_actions() {

        add_action( 'wp_ajax_last_iteraction',           [ $this,            'last_iteraction_function' ] );
        add_action( 'wp_ajax_nopriv_last_iteraction',    [ $this,            'last_iteraction_function' ] );

        add_action( 'wp_ajax_progress_course',           [ $this,            'progress_course_function' ] );
        add_action( 'wp_ajax_nopriv_progress_course',    [ $this,            'progress_course_function' ] );

        add_action( 'wp_ajax_progress_lesson',           [ $this,            'progress_lesson_function' ] );
        add_action( 'wp_ajax_nopriv_progress_lesson',    [ $this,            'progress_lesson_function' ] );
    }
    */



    /**
     * Function getting all lessons by course id
     *
     * @param $courseLessons
     * @return int
     */
    public function getAllLessonsByCourse( $courseLessons )
    {

        $count = 0;

        for ( $i = 1; $i <= 10; $i++ ) {
            $nameKey = "lesson_name_$i";
            $linkKey = "lesson_link_$i";

            if ( !empty( $courseLessons->$nameKey ) &&  !empty( $courseLessons->$linkKey ) ) {
                $count++;
            }
        }


        return $count;
    }

    /**
     * Function getting count of lessons in course
     *
     * @param $array
     * @return int
     */
    public function getTotalLessonsInCourse( $array )
    {

        $total = 0;
        $count_simples = !empty( $array ) ? count( $array ) : 0;

        return (int)$count_simples;

    }

    /**
     * Function getting percentage of array and course id
     *
     * @param $array
     * @param $allCount
     *
     * @return mixed
     */
    public function getPercentByProgressBar( $total, $allCount )
    {

        $percent = !empty( $total ) ? ( $total * 100 ) : 0;

        if ( !empty( $allCount ) && !empty( $total ) && !empty( $percent ) ) {
            $percent = $percent / $allCount;
        } else {
            $percent = 0;
        }

        return round( $percent );
    }

    /**
     * Function getting duration by video id
     *  for Youtube
     * @param $videoID
     * @return string
     */
    public static function get_video_duration($video_id)
    {

        $youtube_api_key = get_field('youtube_api_key', 'options');
        $apikey = (!empty($youtube_api_key)) ? $youtube_api_key : '';
        $dur = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id=$video_id&key=$apikey");
        $VidDuration = json_decode($dur, true);
        if (!empty($VidDuration['items'])) {
            foreach ($VidDuration['items'] as $vidTime) {
                $VidDuration = $vidTime['contentDetails']['duration'];
            }
        }
        preg_match_all('/(\d+)/', $VidDuration, $parts);

        $result = '';

        if (empty($parts[0][2])) {
            $result = $parts[0][0] . ":" . $parts[0][1];
        } else {
            $result = $parts[0][0] . ":" . $parts[0][1] . ":" . $parts[0][2];
        }

        return $result;

    }

    /**
     * Function getting video duration by url
     *
     * @param $video_url
     * @return string
     */
    public static function getVimeoDuration($video_url, $format = true)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://vimeo.com/api/oembed.json?url=" . $video_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $result = '';
        if ($err) {
            $result = "cURL Error #:" . $err;
        } else {
            $result = $response;
        }

        $result   = json_decode($result, true);
        $result   = !empty($result) ? $result : array();
        $t        = !empty($result['duration']) ? $result['duration'] : 0;
        $response = '';

        if (!$format) {
            $response = $t;
        } else {
            $response = sprintf('%02d:%02d:%02d', ($t / 3600), ($t / 60 % 60), $t % 60);
        }

        return $response;

    }

    /**
     * Function getting video duration by url
     *
     * @param $video_url
     * @return string
     */
    public static function getVimeoIdByUrl($video_url)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://vimeo.com/api/oembed.json?url=" . $video_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "cbUniqueFormId=_4c94bf376eb9e6&appKey=95e46000e0fd9bda596c4969902a&pathname=http%3A%2F%2Fapi.loc%2Flogin%2F%3Fcbr%3D95e46000e0fd9bda596c4969902a&ajaxDeploy=False&PrevPageID=0&Login=1&cbPageType=Auth&cbAP=cb&xip_WM_User_Email=samplecityaduser%40gmail.com&password=samplecity122&js=true&GridMode=False",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
                "origin: http://api.loc",
                "sec-fetch-mode: cors"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
//            $response = "cURL Error #:" . $err;
            $response = 0;
            $result = '';
        } else {
            $result = $response;
            $result = json_decode($result, true);
            $result = !empty($result) ? $result : array();
            $response = $result['video_id'] ?? 0;
        }

        return $response;
    }


}
