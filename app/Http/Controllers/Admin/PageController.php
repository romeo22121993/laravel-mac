<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\FilesUploads;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Post;
use App\Models\Page;
use App\Models\PostCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Image;

class PageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function pagesPage() {

        $pages = Page::paginate(3);

        return view('admin.page.index', compact( 'pages' ) );
    }


    /**
     * Function for add category page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addPage() {

        return view('admin.page.create' );
    }


    /**
     * Function saving new category
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function StorePage( Request $request ) {

        $request->validate([
            'title'      => ['required', 'string', 'max:255', 'unique:pages'],
            'slug'       => [ 'max:255', 'unique:pages'],
            'content'    => ['required', 'string', 'max:955'],
        ]);

        $data1 = $request->all();

        $page = new Page();
        $slug = \Str::slug( $request->title );

        $page->content   = $data1['content'];
        $page->title     = $request->title;
        $page->slug      = $slug;
        $page->author_id = Auth::id();

        $image_src = 'none';

        $fileModule = new FilesUploads();
        if ($request->file('image')) {
            $file_src = $fileModule->fileUploadProcess($request->file('image'), 'uploads/pages');
        }

        $page->img = $file_src;
        $page->save();

        return Redirect()->route('wpadmin.pages');

    }


    /**
     * Function for edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function EditPage( $id ) {

        $page = Page::find( $id );

        return view('admin.page.edit', compact( 'page' ) );
    }

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function UpdatePage( Request $request, $id ) {

        $page  = Page::find( $id );

        $request->validate([
            'title'      => ['required', 'string', 'max:255', Rule::unique('pages')->ignore( $page )],
            'slug'       => [ 'max:255', Rule::unique('pages')->ignore( $page )],
            'content'    => ['required', 'string', 'max:955']
        ]);

        $data1 = $request->all();

        $slug  = !empty( $request->slug ) ? \Str::slug( $request->slug ) : \Str::slug( $request->title );

        $page->content   = $data1['content'];
        $page->title     = $request->title;
        $page->slug      = $slug;
        $page->author_id = Auth::id();


        $fileModule = new FilesUploads();
        if ($request->file('image')) {
            if (file_exists($page->img)) {
                unlink($page->img);
            }
            $file_src = $fileModule->fileUploadProcess($request->file('image'), 'uploads/pages');
            $page->img = $file_src;
        }


        $page->save();

        return redirect()->back();
    }

    /**
     * Function deleting
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DeletePage( $id ){

        $page = Page::find( $id );
        if (file_exists($page->img)){
            unlink($page->img);
        }
        $page->delete();

        return redirect()->back();

    }

}
