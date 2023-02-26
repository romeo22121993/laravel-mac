<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Article;
use App\Models\CampaignCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Image;

class CampaignCategoryController extends Controller
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
    public function campaignsCategoryPage()
    {

        $categories = CampaignCategory::paginate($this->number);

        return view('admin.campaign.categories.index', compact( 'categories'));
    }


    /**
     * Function for add category page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addCampaignCategory()
    {
        return view('admin.campaign.categories.create');
    }


    /**
     * Function saving new category
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeCampaignCategory(Request $request)
    {

        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:255', 'unique:campaigns_cats'],
            'slug'  => ['unique:campaigns_cats'],
        ]);

        $postCat = new CampaignCategory();
        $postCat->title = $request->title;
        $postCat->slug  = \Str::slug( $request->title);
        $postCat->save();

        return Redirect()->route('wpadmin.campaigns.categories');

    }


    /**
     * Function for edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function editCampaignCategory($id)
    {
        $category = CampaignCategory::find($id);

        return view('admin.campaign.categories.edit', compact('category'));
    }

    /**
     * Function updating user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function UpdateCampaignCategory(Request $request, $id)
    {

        $post = CampaignCategory::find($id);

        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:255', Rule::unique('campaigns_cats')->ignore($post)],
            'slug'  => ['required', Rule::unique('campaigns_cats')->ignore($post)]
        ]);

        CampaignCategory::whereId($id)->update([
            'title' => $request->title,
            'slug'  => \Str::slug($request->slug)
        ]);

        return Redirect()->route('wpadmin.campaigns.categories');
    }

    /**
     * Function deleting
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DeleteCampaignCategory($id)
    {

        CampaignCategory::whereId($id)->delete();
        DB::table('campaigns_and_cats')->where('cat_id', $id)->delete();

        return redirect()->back();

    }

}
