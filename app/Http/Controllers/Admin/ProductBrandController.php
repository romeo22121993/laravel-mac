<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\ProductBrand;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class ProductBrandController extends Controller
{

    protected $number = 10;

    /**
     * Function for view page for brands
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function BrandView(){

        $brands = ProductBrand::paginate( $this->number );

        return view('admin.product.brand.view', compact('brands' ) );

    }

    /**
     * Function of creating brand process
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function BrandStore( Request $request ){

        $request->validate([
            'name'  => 'required', 'unique:products_brands',
            'image' => 'required',
        ],[
            'name' => 'Input Brand Name',
        ]);

        $image = $request->file('image');
        $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image_resize = Image::make($image->getRealPath());
        $image_resize->fit(250);
        $image_resize->save(public_path('/uploads/brands/'.$filename));
        $save_url = '/uploads/brands/'.$filename;

        ProductBrand::insert([
            'name'  => $request->name,
            'slug'  => \Str::slug( $request->name ),
            'image' => $save_url,
        ]);


        return redirect()->back();

    }

    /**
     * Function for editing page
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function BrandEdit($id){
        $brand = ProductBrand::findOrFail($id);
        return view('admin.product.brand.edit',compact('brand'));
    }

    /**
     * Function of updating brand
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function BrandUpdate( Request $request )
    {

        $brand_id  = $request->id;
        $old_img   = $request->old_image;

        $productBrand = ProductBrand::find( $brand_id );
        $productBrand->name = $request->name;
        $productBrand->slug = \Str::slug( $request->name );

        if ( $request->file('image' ) ) {

            if ( file_exists( $old_img ) ) {
                unlink( $old_img );
            }

            $image = $request->file('image');
            $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->fit(250);
            $image_resize->save( public_path( '/uploads/brands/'.$filename )) ;
            $save_url = '/uploads/brands/'.$filename;

            $productBrand->image = $save_url;

        }

        $productBrand->save();

        return redirect()->route('wpadmin.products.brands.all');

    }


    /**
     * Function for brands deletions
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function BrandDelete($id){

        $brand = ProductBrand::findOrFail($id);
        $img   = public_path( $brand->image );
        if ( file_exists( $img ) ) {
            unlink($img);
        }

        ProductBrand::findOrFail( $id )->delete();

        return redirect()->back();

    }

}
