<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductBrand;

use App\Models\Product;
use App\Models\MultiImg;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Image;

class ProductController extends Controller
{

    //public $settings = [];

    public function __construct() {
        //$this->settings = SiteSetting::find(1);
    }

    /**
    * Function for view all products page
    *
    * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    */
    public function mainPage(){

        $products = Product::latest()->get();

        return view('admin.product.index',compact('products'));
    }

    /**
    * Function for view of adding products
    *
    * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    */
    public function AddProduct(){

        $categories = ProductCategory::where('cat_id', 0)->get();
        $brands     = ProductBrand::latest()->get();

        return view('admin.product.add', compact('categories','brands'));
    }

    /**
    * Function of creating product
    *
    * @param Request $request
    * @return \Illuminate\Http\RedirectResponse
    */
    public function StoreProduct(Request $request){

        $digitalItem = '';

        $request->validate([
            'file' => 'required|mimes:doc,docx,pdf|max:2048',
            'name' => 'required|unique:products',
            'slug' => 'unique:products',
        ]);

        if ( !empty( $request->file('file') ) && ( $files = $request->file('file') )) {
            $destinationPath = 'uploads/products/docs';
            $digitalItem = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $digitalItemPath = $destinationPath . '/' . $digitalItem;
            $files->move( $destinationPath,$digitalItem );
        }

        $image = $request->file('thumbnail');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,500)->save('uploads/products/thumbnail/'.$name_gen);
        $save_url = 'uploads/products/thumbnail/'.$name_gen;

        $product_id = Product::insertGetId([
            'brand_id'  => $request->brand_id,
            'cat_id'    => $request->cat_id,
            'subcat_id' => $request->subcat_id,
            'name'      => $request->name,
            'slug'      => \Str::slug( $request->name ),
            'code'      => $request->code,

            'qty'       => $request->qty,
            'tags'      => $request->tags,
            'size'      => $request->size,
            'color'     => $request->color,

            'selling_price'     => $request->selling_price,
            'discount_price'    => $request->discount_price,
            'short_description' => $request->short_description,
            'long_description'  => $request->long_description,

            'hot_deals'         => $request->hot_deals,
            'featured'          => $request->featured,
            'special_offer'     => $request->special_offer,
            'special_deals'     => $request->special_deals,

            'thumbnail'         => $save_url,
            'digital_file'      => $digitalItemPath,
            'status'            => 1,

        ]);

        $images = $request->file('multi_img');
        foreach ( $images as $img ) {
            $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            $uploadPath = 'uploads/products/multiImages/'. $make_name;
            Image::make($img)->resize(300,500)->save($uploadPath);

            MultiImg::insert([
                'product_id' => $product_id,
                'photo_name' => $uploadPath,
                'created_at' => Carbon::now(),
            ]);
        }

        return redirect()->route('wpadmin.products.main');

    }

    /**
    * Function of editing product
    *
    * @param $id
    * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    */
    public function EditProduct($id){

        $product      = Product::findOrFail($id);
        $multiImgs    = MultiImg::where('product_id', $id)->get();

        $categories   = ProductCategory::where('cat_id', 0)->get();
        $subcategory  = ProductCategory::where('cat_id', $product->cat_id )->get();

        $brands       = ProductBrand::latest()->get();

        return view('admin.product.edit',compact(  'categories','brands','subcategory', 'product', 'multiImgs'));

    }

    /**
     * Function updating product
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function ProductDataUpdate( Request $request ){

        $productId = $request->id;

        $product  = Product::find( $productId );

        $request->validate([
            'name' => ['required', Rule::unique('products')->ignore( $product )],
            'slug' => ['unique:products', Rule::unique('products')->ignore( $product )],
        ]);

        if ( !empty( $request->file('file') ) && ( $files = $request->file('file') ) ) {
            @unlink( $product->file );
            $destinationPath = 'uploads/products/docs';
            $digitalItem = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $digitalItemPath = $destinationPath . '/' . $digitalItem;
            $files->move( $destinationPath,$digitalItem );

            $product->digital_file = $digitalItemPath;
        }

        if ( !empty( $request->file('thumbnail') ) ) {
            @unlink( $product->thumbnail );
            $image = $request->file('thumbnail');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 500)->save('uploads/products/thumbnail/' . $name_gen);
            $save_url = 'uploads/products/thumbnail/' . $name_gen;

            $product->thumbnail = $save_url;
        }

        if ( !empty( $request->file('multi_img') ) ) {
            $images = $request->file('multi_img');

            $this->multiImagesDelete( $productId );

            foreach ( $images as $img ) {
                $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
                $uploadPath = 'uploads/products/multiImages/'. $make_name;
                Image::make($img)->resize(300,500)->save($uploadPath);

                MultiImg::insert([
                    'product_id' => $productId,
                    'photo_name' => $uploadPath,
                    'created_at' => Carbon::now(),
                ]);
            }
        }


        $product->brand_id  = $request->brand_id;
        $product->cat_id    = $request->cat_id;
        $product->subcat_id = $request->subcat_id;
        $product->name      = $request->name;
        $product->slug      = \Str::slug( $request->name );
        $product->code      = $request->code;

        $product->qty       = $request->qty;
        $product->tags      = $request->tags;
        $product->size      = $request->size;
        $product->color     = $request->color;

        $product->selling_price     = $request->selling_price;
        $product->discount_price    = $request->discount_price;
        $product->short_description = $request->short_description;
        $product->long_description  = $request->long_description;

        $product->hot_deals         = $request->hot_deals;
        $product->featured          = $request->featured;
        $product->special_offer     = $request->special_offer;
        $product->special_deals     = $request->special_deals;
        $product->status            = 1;


        $product->save();

        return redirect()->route('wpadmin.products.main');

    }


    //// Multi Image Delete ////
    /**
     * Function of deleting multi image from edit product page
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function multiImagesDelete( $id ) {
        $imgs = MultiImg::where( 'product_id', $id )->get();

        foreach ( $imgs as $id => $img) {
            $imgDel = MultiImg::findOrFail($id);
            unlink($imgDel->photo_name);
            $imgDel->delete();
        }

        return true;

    }

    /**
     * Function of inactivate product by id
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function ProductInactive($id){

        Product::findOrFail( $id )->update(['status' => 0]);

        return redirect()->back();
    }


    /**
     * Function of activation for product
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function ProductActive($id){

        Product::findOrFail( $id )->update( ['status' => 1] );
        $notification = array(
            'message' => 'Product Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Function deleting product
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function ProductDelete( $id ){

        $product = Product::findOrFail( $id );
        if ( file_exists( $product->thumbnail ) ) {
            unlink( $product->thumbnail );
        }
        if ( file_exists( $product->digital_file ) ) {
            unlink( $product->digital_file );
        }

        Product::findOrFail($id)->delete();
        $images = MultiImg::where('product_id',$id)->get();
        foreach ($images as $img) {
            if ( file_exists( $img->photo_name ) ){
                unlink($img->photo_name);
            }
        }

        MultiImg::where('product_id',$id)->delete();


        return redirect()->back();

    }

    /**
     * Function product stock
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function ProductStock(){

        $products = Product::latest()->get();
        $settings = $this->settings;
        return view('admin.product.product_stock',compact('products', 'settings'));

    }

}
