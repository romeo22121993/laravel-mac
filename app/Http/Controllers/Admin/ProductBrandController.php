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
        return view('backend.brand.brand_edit',compact('brand'));
    }

    /**
     * Function of updating brand
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function BrandUpdate(Request $request){

        $brand_id = $request->id;
        $old_img = $request->old_image;

        if ( $request->file('image') ) {

            if ( file_exists($old_img) ) {
                unlink($old_img);
            }

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('upload/brands/'.$name_gen);
            $save_url = 'upload/brands/'.$name_gen;

            ProductBrand::findOrFail($brand_id)->update([
                'brand_name_en' => $request->brand_name_en,
                'brand_name_hin' => $request->brand_name_hin,
                'brand_slug_en' => strtolower(str_replace(' ', '-',$request->brand_name_en)),
                'brand_slug_hin' => strtolower(str_replace(' ', '-',$request->brand_name_hin)),
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Brand Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('brands.all')->with($notification);

        }else{

            ProductBrand::findOrFail( $brand_id )->update([
                'brand_name_en'  => $request->brand_name_en,
                'brand_name_hin' => $request->brand_name_hin,
                'brand_slug_en'  => strtolower(str_replace(' ', '-',$request->brand_name_en)),
                'brand_slug_hin' => str_replace(' ', '-',$request->brand_name_hin),
            ]);

            $notification = array(
                'message' => 'Brand Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('brands.all')->with($notification);

        }
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
