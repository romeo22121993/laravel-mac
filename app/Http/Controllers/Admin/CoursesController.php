<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\PostObserverJob;
use App\Models\Course;
use App\Models\CourseIteration;
use App\Models\CourseLesson;
use App\Models\CourseProgress;
use App\Modules\FilesUploads;
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

class CoursesController extends Controller
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
    public function coursesPage()
    {

        $courses = Course::paginate($this->number);

        return view('admin.course.index', compact('courses'));
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function coursesPageByCategory($id)
    {

        $courseCategory = CourseCategory::find($id);
        $courses        = $courseCategory->courses->pluck(['id']);
        $courses        = Course::whereIn('id', $courses)->paginate($this->number);

        return view('admin.course.coursesbycategories', compact('courses', 'courseCategory'));
    }


    /**
     * Function for add category page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addCourse()
    {

        $categories = CourseCategory::all();

        return view('admin.course.create', compact('categories'));
    }


    /**
     * Function saving new category
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function StoreCourse(Request $request)
    {

        $request->validate([
            'title'      => ['required', 'string', 'max:255', 'unique:courses'],
            'slug'       => [ 'max:255', 'unique:courses'],
            'categories' => ['required'],
        ]);

        $categories = $request->categories;

        $course = new Course();
        $course->faq_block = $request->faq_block;
        $course->transcription = $request->transcription;
        $course->title     = $request->title;
        $course->slug      = \Str::slug($request->title);
        $course->published = $request->published;

        $fileModule = new FilesUploads();
        if ($request->file('image')) {
            $file_src = $fileModule->fileUploadProcess($request->file('image'), 'uploads/courses');
            $course->img = $file_src;
        }

        $course->save();

        $this->setCategoriesByPost ($categories, $course->id);
        $this->setLessonsByCourse ($request->all(), $course->id);

        return Redirect()->route('wpadmin.courses');

    }


    /**
     * Function for edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function EditCourse($id)
    {

        $course = Course::find($id);

        $courseCategories = $course->categories->pluck('id')->toArray();
        $categories       = CourseCategory::all();

        return view('admin.course.edit', compact('course', 'categories', 'courseCategories'));

    }

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function UpdateCourse(Request $request, $id)
    {

        $course  = Course::find($id);

        $request->validate([
            'title'      => ['required', 'string', 'max:255', Rule::unique('courses')->ignore($course)],
            'slug'       => [ 'max:255', Rule::unique('courses')->ignore($course)],
            'categories' => ['required'],
        ]);

        $categories = $request->categories;


        $course->faq_block = $request->faq_block;
        $course->transcription = $request->transcription;
        $course->title     = $request->title;
        $course->slug      = \Str::slug($request->title);
        $course->published = $request->published;


        $fileModule = new FilesUploads();
        if ($request->file('image')) {
            if (file_exists($course->img)) {
                unlink($course->img);
            }
            $file_src = $fileModule->fileUploadProcess($request->file('image'), 'uploads/courses');
            $course->img = $file_src;
        }

        $course->save();

        $this->setCategoriesByPost ($categories, $id, true);
        $this->setLessonsByCourse ($request->all(), $id, true);

        return redirect()->back();
    }

    /**
     * Function deleting
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DeleteCourse($id)
    {

        DB::table('courses_and_cats')->where('course_id', $id)->delete();

        $course = Course::find($id);
        if (file_exists($course->img)) {
            unlink($course->img);
        }

        $course->delete();

        return redirect()->back();

    }


    /**
     * Function setting courses-Categories table
     *
     * @param $categories
     * @param $courseId
     * @param $deletingPrevious
     *
     * @return bool
     */
    protected function setCategoriesByPost ($categories, $courseId, $deletingPrevious = false)
    {
        $courseAndCats = [];

        if (!empty($deletingPrevious)) {
            DB::table('courses_and_cats')->where('course_id', $courseId)->delete();
        }

        foreach ($categories as $category) {
            $courseAndCats[] = [
                'course_id' => $courseId,
                'cat_id'    => $category,
            ];
        }

        DB::table('courses_and_cats')->insert($courseAndCats);

        return true;
    }

    /**
     * Function setting courses-Categories table
     *
     * @param $categories
     * @param $courseId
     * @param $deletingPrevious
     *
     * @return bool
     */
    protected function setLessonsByCourse($requests, $courseId, $update = false)
    {

        if (!empty($update)) {
            $courseLesson = CourseLesson::find($requests['detail_id']);
        }
        else {
            $courseLesson = new CourseLesson();
        }

        for ($i = 1; $i <= 10; $i++) {
            $nameKey = "lesson_name_$i";
            $linkKey = "lesson_link_$i";

            $courseLesson->course_id = $courseId;
            $courseLesson->$nameKey  = $requests[$nameKey];
            $courseLesson->$linkKey  = $requests[$linkKey];
        }

        $courseLesson->save();

        return true;
    }


}
