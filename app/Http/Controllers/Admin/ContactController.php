<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Post;
use App\Models\Contact;
use App\Models\PostCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Image;

class ContactController extends Controller
{

    protected $number = 10;

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Function main of category controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function indexPage() {

        $contacts = Contact::paginate( $this->number );

        return view('admin.contact.index', compact( 'contacts' ) );
    }


    /**
     * Function for edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showContact( $id ) {

        $contact = Contact::find( $id );
        return view('admin.contact.show', compact( 'contact' ) );
    }


    /**
     * Function deleting
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DeleteContact( $id ){

        Contact::whereId( $id )->delete();

        return redirect()->back();

    }

    /**
     * Function setting Posts-Categories table
     *
     * @param $categories
     * @param $postId
     * @param $deletingPrevious
     *
     * @return bool
     */
    protected function setCategoriesByPost ( $categories, $postId, $deletingPrevious = false ) {
        $postAndCats = [];

        if ( !empty( $deletingPrevious ) ) {
            DB::table('posts_and_cats')->where('post_id', $postId)->delete();
        }

        foreach ( $categories as $category ) {
            $postAndCats[] = [
                'post_id' => $postId,
                'cat_id'  => $category,
            ];
        }

        DB::table('posts_and_cats')->insert( $postAndCats );

        return true;
    }

}
