@extends('admin.admin_master')

@section('title')
    Add new Product
@endsection

@section('admin_content')

<div class="container-full product_add">

    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Add Product </h4>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col">
                        @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                        @endforeach

                        <form method="post" action="{{ route('wpadmin.products.store') }}" enctype="multipart/form-data" >
                            @csrf

                            <div class="row">
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <h5>Brand Select <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="brand_id" class="form-control" required="" >
                                                <option value="" selected="" disabled="">Select Brand</option>
                                                @foreach($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('brand_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <h5>Category Select <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="cat_id" class="form-control" required="" >
                                                <option value="" selected="" disabled="">Select Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('cat_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <h5>SubCategory Select <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="subcat_id" class="form-control" required="" >
                                                <option value="" selected="" disabled="">Select SubCategory</option>
                                            </select>
                                            @error('subcat_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <h5>Product Name  <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control" required="">
                                            @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <h5>Product Code <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="code" class="form-control" required="">
                                            @error('code')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <h5>Product Quantity <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="qty" class="form-control" required="">
                                            @error('qty')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <h5>Product Tags<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="tags" class="form-control" value="Lorem" data-role="tagsinput" required="">
                                            @error('tags')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <h5>Product Size <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="size" class="form-control" value="Small,Large" data-role="tagsinput" required="">
                                            @error('size')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <h5>Product Color <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="color" class="form-control" value="red,Black" data-role="tagsinput" required="">
                                            @error('color')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <h5>Product Selling Price <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="selling_price" class="form-control" required="">
                                            @error('selling_price')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <h5>Product Discount Price <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="discount_price" class="form-control"  required="">
                                            @error('discount_price')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <h5>Main Thumbnail <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="thumbnail" class="form-control product_thambnail" required="" >
                                            @error('thumbnail')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <img src="" id="mainThmb">
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <h5>Short Description <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="short_description" id="summernote" class="form-control" required placeholder="Textarea text"></textarea>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-8">

                                    <div class="form-group">
                                        <h5>Long Description <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea id="summernote" name="long_description" rows="10" cols="80" required="">Long Description English</textarea>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <h5>Multiple Image <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="multi_img[]" class="form-control" multiple="" id="multiImg" required="" >
                                            @error('multi_img')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="row" id="preview_img"></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <h5>Digital Product <span class="text-danger">pdf,xlx,csv</span></h5>
                                        <div class="controls">
                                            <input type="file" name="file" class="form-control" >
                                        </div>
                                        @error('file')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                            </div>

                            <hr>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">

                                        <div class="controls">
                                            <fieldset>
                                                <input type="checkbox" id="checkbox_2" name="hot_deals" value="1">
                                                <label for="checkbox_2">Hot Deals</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="checkbox_3" name="featured" value="1">
                                                <label for="checkbox_3">Featured</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">

                                        <div class="controls">
                                            <fieldset>
                                                <input type="checkbox" id="checkbox_4" name="special_offer" value="1">
                                                <label for="checkbox_4">Special Offer</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="checkbox_5" name="special_deals" value="1">
                                                <label for="checkbox_5">Special Deals</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-xs-right">
                                <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Product">
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>


    </section>

</div>


@endsection
