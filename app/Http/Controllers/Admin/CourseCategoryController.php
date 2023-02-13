<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

class CourseCategoryController extends Controller
{
    protected $number = 3;

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function coursesCategoryPage()
    {

        $categories = CourseCategory::paginate($this->number);

        return view('admin.course.categories.index', compact( 'categories' ) );
    }


    /**
     * Function for add category page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addCourseCategory()
    {
        return view('admin.course.categories.create');
    }


    /**
     * Function saving new category
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function StoreCourseCategory( Request $request )
    {

        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:255', 'unique:courseCategories'],
            'slug'  => ['unique:courseCategories'],
        ]);

        $postCat = new CourseCategory();
        $postCat->title = $request->title;
        $postCat->slug  = \Str::slug( $request->title );
        $postCat->save();

        return Redirect()->route('wpadmin.courses.categories');

    }


    /**
     * Function for edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function EditCourseCategory( $id )
    {
        $category = CourseCategory::find( $id );

        return view('admin.course.categories.edit', compact( 'category' ) );
    }

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function UpdateCourseCategory( Request $request, $id )
    {

        $post = CourseCategory::find( $id );

        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:255', Rule::unique('courseCategories')->ignore( $post )],
            'slug'  => ['required', Rule::unique('courseCategories')->ignore( $post )]
        ]);

        CourseCategory::whereId( $id )->update([
            'title' => $request->title,
            'slug'  => \Str::slug( $request->slug )
        ]);

        return Redirect()->route('wpadmin.courses.categories');
    }

    /**
     * Function deleting
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DeleteCourseCategory( $id )
    {

        CourseCategory::whereId($id)->delete();
        //DB::table('posts_and_cats')->where('cat_id', $id)->delete();

        return redirect()->back();

    }

}
