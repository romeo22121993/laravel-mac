<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Validation\Rule;

class ProductCategoryController extends Controller
{

    /**
     * Function view for parent category
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function CategoryView(){

        $category  = ProductCategory::where('cat_id', 0)->get();

    	return view('admin.product.category.cat_view', compact('category' ));
    }

    /**
     * Function of creating new category
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function CategoryStore(Request $request){

        $request->validate([
            'name'  => ['required', 'unique:products_categories'],
            'icon'  => ['required'],
        ],[
            'name' => 'Input Category Name',
        ]);

        ProductCategory::insert([
            'name' => $request->name,
            'slug' => \Str::slug( $request->name ),
            'icon' => $request->icon,
        ]);

        return redirect()->back();

    }


    /**
     * Function of editing category view
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function CategoryEdit($id){

    	$category = ProductCategory::findOrFail($id);
    	return view('admin.product.category.cat_edit',compact('category'));
    }

    /**
     * Function updating of category
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function CategoryUpdate( Request $request , $id ){

        $productCat = ProductCategory::findOrFail($id);

        $request->validate([
            'name'  => ['required', Rule::unique('products_categories')->ignore( $productCat )],
            'icon'  => ['required'],
        ],[
            'name' => 'Input Category Name',
        ]);

        $productCat->update([
            'name' => $request->name,
            'slug' => \Str::slug( $request->name ),
            'icon' => $request->icon,
        ]);


        return redirect()->route('wpadmin.products.cats.all');

    }

    /**
     * Function for deleting category
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function CategoryDelete($id){

    	ProductCategory::findOrFail($id)->delete();

		return redirect()->back();

    }


    /**
     * Function for subcategory view page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function SubCategoryView(){

        $categories  = ProductCategory::where('cat_id', 0)->get();
        $subcategory = ProductCategory::where('cat_id', '>', 0)->get();

        return view('admin.product.category.subcat_view', compact( 'subcategory','categories' ) );

    }

    /**
     * Function for subcategory saving
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function SubCategoryStore( Request $request ) {

        $request->validate([
            'name'   => [ 'required', 'unique:products_categories'],
            'cat_id' => ['required'],
        ]);

        ProductCategory::insert([
            'cat_id'  => $request->cat_id,
            'name'    => $request->name,
            'slug'    => \Str::slug( $request->name ),
            'icon'    => 'none',
        ]);

        return redirect()->back();

    }


    /**
     * Function for view for edit sub category
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function SubCategoryEdit( $id ){

        $categories  = ProductCategory::where('cat_id', 0)->orderBy('name','ASC')->get();
        $subcategory = ProductCategory::findOrFail( $id );

        return view('admin.product.category.subcat_edit', compact('subcategory','categories'));

    }

    /**
     * Function for updating subcategory
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function SubCategoryUpdate( Request $request ){

        $subcat_id = $request->id;
        $productCat = ProductCategory::findOrFail( $subcat_id );

        $request->validate([
            'name'    => ['required', Rule::unique('products_categories')->ignore( $productCat )],
            'cat_id'  => ['required'],
        ]);

        ProductCategory::findOrFail($subcat_id)->update([
            'cat_id' => $request->cat_id,
            'name'   => $request->name,
            'slug'   => \Str::slug( $request->name ),
        ]);


        return redirect()->route('wpadmin.products.subcats.all');

    }

    /**
     * Function of deleting subcategory
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function SubCategoryDelete($id){

        ProductCategory::findOrFail($id)->delete();

        return redirect()->back();

    }

    /**
     * Function of getting subcategory for subsubcategory
     *
     * @param $categoryId
     * @return false|string
     */
    public function GetSubCategory( $categoryId ){

        $subcat = ProductCategory::where( 'cat_id', $categoryId)->orderBy('name', 'ASC')->get();

        return json_encode( $subcat );
    }


}
