<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\PostObserverJob;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Resource;
use App\Models\ResourceCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Image;

class ResourceController extends Controller
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
    public function resourcesPage() {

        $resources = Resource::paginate( $this->number );

        return view('admin.resource.index', compact( 'resources' ) );
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function resourcesPageByCategory( $id ) {

        $resourceCategory = ResourceCategory::find( $id );
        $resources        = $resourceCategory->resources->pluck(['id']);
        $resources        = Resource::whereIn('id', $resources )->paginate($this->number);

        return view('admin.resource.resourcesbycategories', compact( 'resources', 'resourceCategory' ) );
    }


    /**
     * Function for add category page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addResource() {

        $categories = ResourceCategory::all();

        return view('admin.resource.create', compact( 'categories' ) );
    }


    /**
     * Function saving new category
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function StoreResource( Request $request ) {

        $request->validate([
            'title'      => ['required', 'string', 'max:255', 'unique:resources'],
            'slug'       => ['max:255', 'unique:resources'],
            'categories' => ['required'],
        ]);

        $categories = $request->categories;

        $resource = new Resource();
        $resource->doc_type  = $request->doc_type;
        $resource->title     = $request->title;
        $resource->slug      = \Str::slug( $request->title );

        if ( $request->file('img' ) ) {
            $file = $request->file('img');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move( public_path('uploads/resources/img' ), $filename );
            $image_src = 'uploads/resources/img/' . $filename;
            $resource->img = $image_src;
        }

         if ( $request->file('doc_file' ) ) {
            $file = $request->file('doc_file');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move( public_path('uploads/resources/files' ), $filename );
            $image_src = 'uploads/resources/files/' . $filename;
            $resource->doc_file = $image_src;
        }


        $resource->save();

        $this->setCategoriesByResource ( $categories, $resource->id );

        return Redirect()->route('wpadmin.resources');

    }


    /**
     * Function for edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function EditResource( $id )
    {

        $resource = Resource::find( $id );

        $resourceCategories = $resource->categories->pluck('id')->toArray();
        $categories      = ResourceCategory::all();

        return view('admin.resource.edit', compact( 'resource', 'categories', 'resourceCategories' ) );
    }

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function UpdateResource( Request $request, $id ) {

        $resource  = Resource::find( $id );

        $request->validate([
            'title'      => ['required', 'string', 'max:255', Rule::unique('resources')->ignore( $resource )],
            'slug'       => [ 'max:255', Rule::unique('resources')->ignore( $resource )],
            'categories' => ['required'],
        ]);

        $categories = $request->categories;

        $resource->doc_type  = $request->doc_type;
        $resource->title     = $request->title;
        $resource->slug      = \Str::slug( $request->title );


        if ( $request->file('img' ) ) {
            unlink( $resource->img);
            $file = $request->file('img');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move( public_path('uploads/resources/img' ), $filename );
            $image_src = 'uploads/resources/img/' . $filename;
            $resource->img = $image_src;
        }

        if ( $request->file('doc_file' ) ) {
            unlink( $resource->doc_file);
            $file = $request->file('doc_file');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move( public_path('uploads/resources/files' ), $filename );
            $image_src = 'uploads/resources/files/' . $filename;
            $resource->doc_file = $image_src;
        }

        $resource->save();

        $this->setCategoriesByResource ( $categories, $id, true );

        return redirect()->back();
    }

    /**
     * Function deleting
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DeleteResource( $id )
    {

        DB::table('resources_and_cats')->where('resource_id', $id)->delete();

        $resource = Resource::find( $id );

        if ( file_exists( $resource->img ) ) {
            unlink( $resource->img );
        }
        if ( file_exists( $resource->doc_file ) ) {
            unlink( $resource->doc_file );
        }

        $resource->delete();

        return redirect()->back();

    }

    /**
     * Function deleting
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DeleteResourceImage( $id )
    {

        $resource = Resource::find( $id );

        if ( file_exists( $resource->img ) ) {
            unlink( $resource->img );
        }

        $resource->img = '';
        $resource->save();

        return redirect()->back();

    }



    /**
     * Function setting resources-Categories table
     *
     * @param $categories
     * @param $resourceId
     * @param $deletingPrevious
     *
     * @return bool
     */
    protected function setCategoriesByResource ( $categories, $resourceId, $deletingPrevious = false )
    {
        $resourceAndCats = [];

        if ( !empty( $deletingPrevious ) ) {
            DB::table('resources_and_cats')->where('resource_id', $resourceId)->delete();
        }

        foreach ( $categories as $category ) {
            $resourceAndCats[] = [
                'resource_id' => $resourceId,
                'cat_id'  => $category,
            ];
        }

        DB::table('resources_and_cats')->insert( $resourceAndCats );

        return true;
    }

}
