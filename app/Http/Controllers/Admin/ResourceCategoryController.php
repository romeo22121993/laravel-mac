<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ResourceCategory;
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

class ResourceCategoryController extends Controller
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
    public function resourcesCategoryPage() {

        $categories = ResourceCategory::paginate($this->number);

        return view('admin.resource.categories.index', compact( 'categories' ) );
    }


    /**
     * Function for add category page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addResourceCategory() {
        return view('admin.resource.categories.create');
    }


    /**
     * Function saving new category
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function StoreResourceCategory( Request $request ){

        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:255', 'unique:resourceCategories'],
            'slug'  => ['unique:resourceCategories'],
        ]);

        $postCat = new ResourceCategory();
        $postCat->title = $request->title;
        $postCat->slug  = \Str::slug( $request->title );
        $postCat->save();

        return Redirect()->route('wpadmin.resources.categories');

    }


    /**
     * Function for edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function EditResourceCategory( $id ) {

        $category = ResourceCategory::find( $id );

        return view('admin.resource.categories.edit', compact( 'category' ) );
    }

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function UpdateResourceCategory( Request $request, $id ) {

        $post = ResourceCategory::find( $id );

        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:255', Rule::unique('resourceCategories')->ignore( $post )],
            'slug'  => ['required', Rule::unique('resourceCategories')->ignore( $post )]
        ]);

        ResourceCategory::whereId( $id )->update([
            'title' => $request->title,
            'slug'  => \Str::slug( $request->slug )
        ]);

        return Redirect()->route('wpadmin.resources.categories');
    }

    /**
     * Function deleting
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DeleteResourceCategory( $id ){

        ResourceCategory::whereId($id)->delete();
        DB::table('resources_and_cats')->where('cat_id', $id)->delete();

        return redirect()->back();

    }

}
