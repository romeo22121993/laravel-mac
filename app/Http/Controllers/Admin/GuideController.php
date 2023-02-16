<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\PostObserverJob;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Guide;
use App\Models\GuideCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Image;

class GuideController extends Controller
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
    public function guidesPage() {

        $guides = Guide::paginate( $this->number );

        return view('admin.guide.index', compact( 'guides' ) );
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function guidesPageByCategory( $id ) {

        $guideCategory = GuideCategory::find( $id );
        $guides        = $guideCategory->guides->pluck(['id']);
        $guides        = Guide::whereIn('id', $guides )->paginate($this->number);

        return view('admin.guide.guidesbycategories', compact( 'guides', 'guideCategory' ) );
    }


    /**
     * Function for add category page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addGuide() {

        $categories = GuideCategory::all();

        return view('admin.guide.create', compact( 'categories' ) );
    }


    /**
     * Function saving new category
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function StoreGuide( Request $request ) {

        $request->validate([
            'title'      => ['required', 'string', 'max:255', 'unique:guides'],
            'slug'       => ['max:255', 'unique:guides'],
            'categories' => ['required'],
        ]);

        $categories = $request->categories;

        $guide = new Guide();
        $guide->doc_type  = $request->doc_type;
        $guide->title     = $request->title;
        $guide->slug      = \Str::slug( $request->title );

        if ( $request->file('img' ) ) {
            $file = $request->file('img');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move( public_path('uploads/guides/img' ), $filename );
            $image_src = 'uploads/guides/img/' . $filename;
            $guide->img = $image_src;
        }

         if ( $request->file('doc_file' ) ) {
            $file = $request->file('doc_file');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move( public_path('uploads/guides/files' ), $filename );
            $image_src = 'uploads/guides/files/' . $filename;
            $guide->doc_file = $image_src;
        }


        $guide->save();

        $this->setCategoriesByGuide ( $categories, $guide->id );

        return Redirect()->route('wpadmin.guides');

    }


    /**
     * Function for edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function EditGuide( $id ) {

        $guide = Guide::find( $id );

        $guideCategories = $guide->categories->pluck('id')->toArray();
        $categories      = GuideCategory::all();

        return view('admin.guide.edit', compact( 'guide', 'categories', 'guideCategories' ) );
    }

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function UpdateGuide( Request $request, $id ) {

        $guide  = Guide::find( $id );

        $request->validate([
            'title'      => ['required', 'string', 'max:255', Rule::unique('guides')->ignore( $guide )],
            'slug'       => [ 'max:255', Rule::unique('guides')->ignore( $guide )],
            'categories' => ['required'],
        ]);

        $categories = $request->categories;

        $guide->doc_type  = $request->doc_type;
        $guide->title     = $request->title;
        $guide->slug      = \Str::slug( $request->title );


        if ( $request->file('img' ) ) {
            unlink( $guide->img);
            $file = $request->file('img');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move( public_path('uploads/guides/img' ), $filename );
            $image_src = 'uploads/guides/img/' . $filename;
            $guide->img = $image_src;
        }

        if ( $request->file('doc_file' ) ) {
            unlink( $guide->doc_file);
            $file = $request->file('doc_file');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move( public_path('uploads/guides/files' ), $filename );
            $image_src = 'uploads/guides/files/' . $filename;
            $guide->doc_file = $image_src;
        }

        $guide->save();

        $this->setCategoriesByGuide ( $categories, $id, true );

        return redirect()->back();
    }

    /**
     * Function deleting
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DeleteGuide( $id )
    {

        DB::table('guides_and_cats')->where('guide_id', $id)->delete();

        $guide = Guide::find( $id );

        if ( file_exists( $guide->img ) ) {
            unlink( $guide->img );
        }
        if ( file_exists( $guide->doc_file ) ) {
            unlink( $guide->doc_file );
        }

        $guide->delete();

        return redirect()->back();

    }


    /**
     * Function setting Guides-Categories table
     *
     * @param $categories
     * @param $guideId
     * @param $deletingPrevious
     *
     * @return bool
     */
    protected function setCategoriesByGuide ( $categories, $guideId, $deletingPrevious = false ) {
        $guideAndCats = [];

        if ( !empty( $deletingPrevious ) ) {
            DB::table('guides_and_cats')->where('guide_id', $guideId)->delete();
        }

        foreach ( $categories as $category ) {
            $guideAndCats[] = [
                'guide_id' => $guideId,
                'cat_id'  => $category,
            ];
        }

        DB::table('guides_and_cats')->insert( $guideAndCats );

        return true;
    }

}
