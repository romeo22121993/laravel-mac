<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GuideCategory;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Image;

class GuideCategoryController extends Controller
{

    public $number = 5;

    public function __construct(){
        $this->middleware('auth');
    }


    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function guidesCategoryPage() {

        $categories = GuideCategory::paginate($this->number);

        return view('admin.guide.categories.index', compact( 'categories' ) );
    }


    /**
     * Function for add category page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addGuideCategory() {
        return view('admin.guide.categories.create');
    }


    /**
     * Function saving new category
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function StoreGuideCategory( Request $request ){

        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:255', 'unique:guideCategories'],
            'slug'  => ['unique:guideCategories'],
        ]);

        $postCat = new GuideCategory();
        $postCat->title = $request->title;
        $postCat->slug  = \Str::slug( $request->title );
        $postCat->save();

        return Redirect()->route('wpadmin.guides.categories');

    }


    /**
     * Function for edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function EditGuideCategory( $id ) {

        $category = GuideCategory::find( $id );

        return view('admin.guide.categories.edit', compact( 'category' ) );
    }

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function UpdateGuideCategory( Request $request, $id ) {

        $post = GuideCategory::find( $id );

        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:255', Rule::unique('guideCategories')->ignore( $post )],
            'slug'  => ['required', Rule::unique('guideCategories')->ignore( $post )]
        ]);

        GuideCategory::whereId( $id )->update([
            'title' => $request->title,
            'slug'  => \Str::slug( $request->slug )
        ]);

        return Redirect()->route('wpadmin.guides.categories');
    }

    /**
     * Function deleting
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DeleteGuideCategory( $id ){

        GuideCategory::whereId($id)->delete();
        DB::table('guides_and_cats')->where('cat_id', $id)->delete();

        return redirect()->back();

    }

}
