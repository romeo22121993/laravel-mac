<?php

namespace App\Http\Controllers\Subscriber;

use App\Http\Controllers\Controller;
use App\Jobs\PostObserverJob;
use App\Models\Course;
use App\Models\CourseIteration;
use App\Models\CourseLesson;
use App\Models\CourseProgress;
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

class DashboardCoursesController extends Controller
{

    protected $number = 3;

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function coursesPage() {

        $user = Auth::user();
        $courses = Course::paginate( $this->number );
        $categories = CourseCategory::all();

        $courseProgress = $user->progress;
        $completedCourses   = !empty( $courseProgress->completed_courses ) ? json_decode( $courseProgress->completed_courses, true ) : [];
        $progressingCourses = !empty( $courseProgress->progressing_courses ) ? json_decode( $courseProgress->progressing_courses, true ) : [];

        return view('userDashboard.pages.courses', compact( 'courses', 'categories', 'progressingCourses', 'completedCourses' ) );
    }


    /* Dashboard courses actions */

    /**
     * Funtion single course page
     *
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function singleCoursePage( $slug )
    {
        $course         = Course::where( 'slug', $slug )->first();
        $relatedCourses = Course::where( 'slug', '<>', $slug )->paginate(3);
        $user           = Auth::user();

        $courseProgress = $user->progress;
        $courseLessons  = $course->lessons;

        $lastIteraction = !empty( $courseProgress->last_iteraction ) ? json_decode( $courseProgress->last_iteraction, true ) : [];

        $videosApi      = new VideosApi();
        $progressCourse = !empty( $courseProgress->progress_bar_courses ) ? json_decode( $courseProgress->progress_bar_courses, true ) : [];
        $progressLesson = !empty( $courseProgress->progress_bar_lessons ) ? json_decode( $courseProgress->progress_bar_lessons, true ) : [];
        $progressLesson = !empty( $progressLesson[$course->id] ) ? $progressLesson[$course->id] : 0;

        $lessonSeconds = !empty( $courseProgress->progress_bar_lessons_seconds ) ? json_decode( $courseProgress->progress_bar_lessons_seconds, true ) : '';
        $lessonSeconds = !empty( $lessonSeconds[$course->id] ) ? $lessonSeconds[$course->id] : 0;


        if ( !empty( $lastIteraction ) && ( $course->id == (int)$lastIteraction['course'] ) ) {
            $lastSeconds        = ( empty( $lastIteraction['seconds'] ) )     ? 0  : (int)$lastIteraction['seconds'];
            $lastLink           = ( empty( $lastIteraction['lesson_link'] ) ) ? '' : $lastIteraction['lesson_link'];

            $currentLessonName = $lastIteraction['lesson_name'];
            $currentLessonLink = $lastIteraction['lesson_link'];
        }
        else {
            $firstLink    = !empty( $course->lessons->lesson_link_1 ) ?  $course->lessons->lesson_link_1 : '';
            $firstName    = !empty( $course->lessons->lesson_name_1 )  ?  $course->lessons->lesson_name_1 : '';

            $lastSeconds = !empty( $lessonSeconds['lesson_name_1'] ) ? (int)$lessonSeconds['lesson_name_1'] : 0;

            $lastLink          = $firstLink;
            $currentLessonName = $firstName;
            $currentLessonLink = $lastLink;
        }

        $total       = ( !empty( $progressCourse[$course->id] ) ) ? $videosApi->getTotalLessonsInCourse( $progressCourse[$course->id] ) : 0;
        $allCount    = $videosApi->getAllLessonsByCourse( $courseLessons );
        $percentage  = $videosApi->getPercentByProgressBar( $total, $allCount );
        $disable     = ( (int)$percentage == 100 ) ? "" : "disabled";

        $completedCourses = !empty( $courseProgress->completed_courses ) ? json_decode( $courseProgress->completed_courses, true ) : [];

        return view('userDashboard.course.singleCourse',
            compact('course', 'relatedCourses', 'completedCourses', 'disable', 'percentage',
                'allCount', 'total', 'currentLessonLink', 'currentLessonName', 'lastLink',
                'lastSeconds', 'lessonSeconds', 'progressLesson', 'progressCourse', 'lastIteraction', 'disable'
            )
        );
    }


    /**
     * Function callback for lesson progress via Youtube API
     *
     */
    public function progressLesson( Request $request )
    {

        $videosApi = new VideosApi();
        $user = Auth::user();

        $courseId    = ( !empty( $request->course_id ) ) ? (int)$request->course_id : 0;
        $parentIndex = ( !empty( $request->parent_index ) ) ? (int)$request->parent_index : 0;
        $lessonIndex = ( !empty( $request->active_index ) ) ? (int)$request->active_index : 0;
        $lessonVideo = ( !empty( $request->lesson_video ) ) ? $request->lesson_video : '';
        $lessonName  = ( !empty( $request->lesson_name ) ) ?  $request->lesson_name : '';
        $lessonLink  = ( !empty( $request->lesson_link ) ) ?  $request->lesson_link : '';

        $duration    = ( !empty( $request->duration ) ) ? (int)$request->duration : 0;
        $curTime     = ( !empty( $request->current_time ) ) ? (int)$request->current_time : 0;

        $course         = Course::findOrFail( $courseId );
        $courseProgress = $user->progress;

        $progressLesson = !empty( $courseProgress->progress_bar_lessons ) ? json_decode( $courseProgress->progress_bar_lessons, true ) : [];
        $lessonSeconds  = !empty( $courseProgress->progress_bar_lessons_seconds ) ? json_decode( $courseProgress->progress_bar_lessons_seconds, true ) : [];
        $percentage     = $videosApi->getPercentByProgressBar( $curTime, $duration );


        if ( ( empty( $progressLesson[$courseId] ) || empty( $progressLesson[$courseId][$lessonIndex] ) ) ) {
            $progressLesson[$courseId][$lessonIndex] = $percentage;
            $lessonSeconds[$courseId][$lessonName] = $curTime;
        }
        elseif (
            ( (int)$progressLesson[$courseId][$lessonIndex] != 100)
            &&
            ( (int)$progressLesson[$courseId][$lessonIndex] < $percentage )
        ) {
            $progressLesson[$courseId][$lessonIndex] = $percentage;
            $lessonSeconds[$courseId][$lessonName] = $curTime;
        } else {
            $percentage = (int)$progressLesson[$courseId][$lessonIndex];
        }

        $lastIteration = [
            'course'        => $courseId,
            'parent_lesson' => $parentIndex,
            'lesson'        => $lessonIndex,
            'lesson_name'   => $lessonName,
            'lesson_link'   => $lessonLink,
            'seconds'       => $curTime
        ];

        CourseProgress::updateOrCreate(
            [
                'user_id'   => $user->id,
            ],
            [
                'user_id'       => $user->id,
                'progress_bar_lessons'          => json_encode( $progressLesson ),
                'progress_bar_lessons_seconds'  => json_encode( $lessonSeconds ),
                'last_iteraction'               => json_encode( $lastIteration ),
            ]
        );

        return array( 'error' => false, 'message' => 'Progress is got.', 'percentage' => $percentage );

    }


    /**
     * Function callback for progress bar in courses
     *
     */
    public function progressCourse( Request $request )
    {

        $user = Auth::user();

        $videosApi = new VideosAPI();

        $courseId    = ( !empty( $request->course_id ) ) ? (int)$request->course_id : 0;
        $parentIndex = ( !empty( $request->parent_index ) ) ? (int)$request->parent_index : 0;
        $lessonIndex = ( !empty( $request->active_index ) ) ? (int)$request->active_index : 0;
        $lessonVideo = ( !empty( $request->lesson_video ) ) ? $request->lesson_video : '';
        $lessonName  = ( !empty( $request->lesson_name ) ) ?  $request->lesson_name : '';
        $lessonLink  = ( !empty( $request->lesson_link ) ) ?  $request->lesson_link : '';

        $courseProgress = $user->progress;
        $course         = Course::findOrFail( $courseId );
        $courseLessons  = $course->lessons;

        $progressCourse = !empty( $courseProgress->progress_bar_courses ) ? json_decode( $courseProgress->progress_bar_courses, true ) : [];

        if ( empty( $progressCourse[$courseId] ) || ( ( is_array( $progressCourse[$courseId] ) ) && !in_array( $lessonIndex, $progressCourse[$courseId] ) ) ) {
            $progressCourse[$courseId][] = $lessonIndex;
        }

        $total      = $videosApi->getTotalLessonsInCourse( $progressCourse[$courseId] );
        $allCount   = $videosApi->getAllLessonsByCourse( $courseLessons );
        $percentage = $videosApi->getPercentByProgressBar( $total, $allCount );

        // add 100% for this lesson

        $progressLesson = !empty( $courseProgress->progress_bar_lessons ) ? json_decode( $courseProgress->progress_bar_lessons, true ) : [];
        $progressLesson[$courseId][$lessonIndex] = 100;

        /* set last iteraction in progress */
        $seconds = VideosApi::getVimeoDuration( $lessonLink, false) ;

        $lastIteration = [
            'course'        => $courseId,
            'parent_lesson' => $parentIndex,
            'lesson'        => $lessonIndex,
            'lesson_video'  => $lessonVideo,
            'lesson_name'   => $lessonName,
            'lesson_link'   => $lessonLink,
            'seconds'       => $seconds
        ];

        CourseProgress::updateOrCreate(
            [
                'user_id'   => $user->id,
            ],
            [
                'user_id'       => $user->id,
                'progress_bar_lessons'  => json_encode( $progressLesson ),
                'progress_bar_courses'  => json_encode( $progressCourse ),
                'last_iteraction'       => json_encode( $lastIteration ),
            ]
        );


        $data = array(
            'percentage' => $percentage,
            'all_count'  => $allCount,
            'total'      => $total,
        );


        return array( 'error' => false, 'message' => 'Progress is 100%.', 'data' => $data );

    }


    /**
     * Function callback for progress bar in courses
     *
     */
    public function completeCourse( Request $request )
    {

        $user = Auth::user();

        $courseProgress     = $user->progress;

        $completedCourses   = !empty( $courseProgress->completed_courses ) ? json_decode( $courseProgress->completed_courses, true ) : [];
        $progressingCourses = !empty( $courseProgress->progressing_courses ) ? json_decode( $courseProgress->progressing_courses, true ) : [];

        $courseId           = ( !empty( $request->course_id ) ) ? (int)$request->course_id : 0;

        if ( empty( $completedCourses ) || !in_array( $courseId, $completedCourses ) ) {

            if ( !empty( $progressingCourses ) ) {
                foreach ( $progressingCourses as $k => $course ) {
                    if ( (int)$course == (int)$courseId ) {
                        unset( $progressingCourses[$k] );
                    }
                }
            }

            $completedCourses[] = $courseId;
        }


        CourseProgress::updateOrCreate(
            [
                'user_id'   => $user->id,
            ],
            [
                'progressing_courses' => json_encode( $progressingCourses ),
                'completed_courses'   => json_encode( $completedCourses ),
            ]
        );


        return array( 'status' => 'Done' );

    }


    /**
     * Function reading course ( status *in progress* )
     *
     */
    public function readCourse( Request $request )
    {

        $courseId           = ( !empty( $request->course_id ) ) ? (int)$request->course_id : 0;
        $user               = Auth::user();
        $courseProgress     = $user->progress;

        $completedCourses   = !empty( $courseProgress->completed_courses ) ? json_decode( $courseProgress->completed_courses, true ) : [];
        $progressingCourses = !empty( $courseProgress->progressing_courses ) ? json_decode( $courseProgress->progressing_courses, true ) : [];

        if ( in_array( $courseId, $completedCourses ) ) {
            return;
        }

        if ( empty( $progressingCourses ) || !in_array( $courseId, $progressingCourses ) ) {
            $progressingCourses[] = $courseId;
        }

        CourseProgress::updateOrCreate(
            [ 'user_id'   => $user->id ],
            [ 'progressing_courses' => json_encode( $progressingCourses ) ]
        );

        return array( 'status' => 'Done' );

    }


    /**
     * Function callback for getting last iteraction of user
     *
     */
    public function lastIteractionFunction(  Request $request )
    {

        $courseId       = ( !empty( $request->course_id ) ) ? $request->course_id : 0;
        $parentLessonId = ( !empty( $request->parent_lesson ) ) ? $request->parent_lesson : 0;
        $lessonId       = ( !empty( $request->lesson_id ) ) ? $request->lesson_id : 0;
        $lessonSeconds  = ( !empty( $request->lesson_seconds ) ) ? $request->lesson_seconds : 0;

        $lessonName     = ( !empty( $request->lesson_name ) ) ?  $request->lesson_name : '';
        $lessonLink     = ( !empty( $request->lesson_link ) ) ?  $request->lesson_link : '';
        $lessonVideo    = ( !empty( $request->lesson_video ) ) ?  $request->lesson_video : '';




        $user = Auth::user();

        $lastIteration = array(
            'course'        => $courseId,
            'parent_lesson' => $parentLessonId,
            'lesson'        => $lessonId,
            'lesson_video'  => $lessonVideo,
            'lesson_link'   => $lessonLink,
            'lesson_name'   => $lessonName,
            'seconds'       => $lessonSeconds
        );

        CourseProgress::updateOrCreate(
            [
                'user_id'   => $user->id,
            ],
            [
                'user_id'         => $user->id,
                'last_iteraction' => json_encode( $lastIteration ),
            ]
        );


        return array( 'error' => false, 'done' => 1, 'message' => 'Iteraction is updated.' );
    }

}
