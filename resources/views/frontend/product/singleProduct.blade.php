@extends('frontend.master2')

@section('title')
    {{ $product->name }} - Product Details
@endsection

@section('content')

<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row single-product'>
            <div class='col-md-3 sidebar'>
                <div class="sidebar-module-container">

                    <div class="home-banner outer-top-n">
                        <img src="{{ asset('frontend2/assets/images/banners/LHS-banner.jpg') }}" alt="Image">
                    </div>

                    <!-- ====== === HOT DEALS ==== ==== -->
                    @include('frontend.site2.common.hot_deals')
                    <!-- ===== ===== HOT DEALS: END ====== ====== -->

                    <!-- ============================================== Testimonials============================================== -->
                    <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
                        <div id="advertisement" class="advertisement">
                            <div class="item">
                                <div class="avatar"><img src="{{ asset('frontend2/assets/images/testimonials/member1.png') }} " alt="Image"></div>
                                <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                                <div class="clients_author">John Doe	<span>Abc Company</span>	</div><!-- /.container-fluid -->
                            </div>

                            <div class="item">
                                <div class="avatar"><img src="{{ asset('frontend2/assets/images/testimonials/member3.png') }} " alt="Image"></div>
                                <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                                <div class="clients_author">Stephen Doe	<span>Xperia Designs</span>	</div>
                            </div>

                            <div class="item">
                                <div class="avatar"><img src="{{ asset('frontend2/assets/images/testimonials/member2.png') }} " alt="Image"></div>
                                <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                                <div class="clients_author">Saraha Smith	<span>Datsun &amp; Co</span>	</div><!-- /.container-fluid -->
                            </div>

                        </div>
                    </div>
                    <!-- ===== ========== Testimonials: END ======== =============== -->
                </div>
            </div>

            <div class='col-md-9'>
                <div class="detail-block">
                    <div class="row  wow fadeInUp">
                        <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                            <div class="product-item-holder size-big single-product-gallery small-gallery">
                                <div id="owl-single-product">

                                    @foreach($product->multiImgs as $img)
                                        <div class="single-product-gallery-item" id="slide{{ $img->id }}">
                                            <a data-lightbox="image-1" data-title="Gallery" href="{{ asset($img->photo_name ) }} ">
                                                <img class="img-responsive" alt="" src="{{ asset($img->photo_name ) }} " data-echo="{{ asset($img->photo_name ) }} " />
                                            </a>
                                        </div>
                                    @endforeach

                                </div>

                                <div class="single-product-gallery-thumbs gallery-thumbs">

                                    <div id="owl-single-product-thumbnails">

                                        @foreach($product->multiImgs as $img)
                                            <div class="item">
                                                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide{{ $img->id }}">
                                                    <img class="img-responsive" width="85" alt="" src="{{ asset($img->photo_name ) }} " data-echo="{{ asset($img->photo_name ) }} " />
                                                </a>
                                            </div>
                                        @endforeach

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class='col-sm-6 col-md-7 product-info-block'>
                            <div class="product-info">

                                <h1 class="name" id="pname">
                                    {{ $product->name }}
                                </h1>

                                <div class="stock-container info-container m-t-10">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="stock-box">
                                                <span class="label">Availability :</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="stock-box">
                                                <span class="value">@if($product->status == '1') In Stock @else Out of Stock @endif </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="description-container m-t-20">
                                    {!! $product->short_description !!}
                                </div>

                                <div class="price-container info-container m-t-20">
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="price-box">
                                                @if ($product->discount_price == NULL)
                                                    <span class="price">${{ $product->selling_price }}</span>
                                                @else
                                                    <span class="price">${{ $product->discount_price }}</span>
                                                    <span class="price-strike">${{ $product->selling_price }}</span>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-6">

                                        <div class="form-group">

                                            <label class="info-title control-label">Choose Color <span> </span></label>
                                            <select class="form-control unicase-form-control selectpicker" style="display: none;" id="color">
                                                <option selected="" disabled="">--Choose Color--</option>
                                                @foreach( explode(',', $product->color ) as $color)
                                                    <option value="{{ $color }}">{{ ucwords($color) }}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            @if( $product->size == null )

                                            @else
                                                <label class="info-title control-label">Choose Size <span> </span></label>
                                                <select class="form-control unicase-form-control selectpicker" style="display: none;" id="size">
                                                    <option selected="" disabled="">--Choose Size--</option>
                                                    @foreach( explode( ',', $product->size ) as $size1)
                                                        <option value="{{ $size1 }}">{{ ucwords($size1) }}</option>
                                                    @endforeach
                                                </select>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                                <div class="quantity-container info-container">
                                    <div class="row">

                                        <div class="col-sm-2">
                                            <span class="label">Qty :</span>
                                        </div>

                                        <div class="col-sm-2">
                                            <div class="cart-quantity">
                                                <div class="quant-input">
                                                    <div class="arrows">
                                                        <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                        <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                                    </div>
                                                    <input type="number" id="qty" value="1" min="1">
                                                </div>
                                            </div>
                                        </div>

                                        <input type="hidden" id="product_id" value="{{ $product->id }}" min="1">

                                        <div class="col-sm-7">
                                            <button type="submit"  class="btn btn-primary add_to_cart_btn"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</button>
                                        </div>

                                    </div>
                                </div>
                                <div class="addthis_inline_share_toolbox_8tvu"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-tabs inner-bottom-xs  wow fadeInUp">
                    <div class="row">
                        <div class="col-sm-3">
                            <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                                <li><a data-toggle="tab" href="#tags">TAGS</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-9">
                            <div class="tab-content">

                                <div id="description" class="tab-pane in active">
                                    <div class="product-tab">
                                        <p class="text">
                                            {!! $product->long_description !!}
                                        </p>
                                    </div>
                                </div>

                                <div id="tags" class="tab-pane">
                                    <div class="product-tag">

                                        <h4 class="title">Product Tags</h4>
                                        <p>{{ $product->tags }}</p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===== ======= UPSELL PRODUCTS ==== ========== -->
                <section class="section featured-product wow fadeInUp">
                    <h3 class="section-title">Related products</h3>
                    <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
                        @foreach($relatedProduct as $product)

                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="{{ url('products/'.$product->slug ) }}"><img  src="{{ asset($product->thumbnail) }}" alt=""></a>
                                            </div>

                                            <div class="tag sale"><span>sale</span></div>
                                        </div>

                                        <div class="product-info text-left">
                                            <h3 class="name">
                                                <a href="{{ url('products/'.$product->slug ) }}">
                                                   {{ $product->name }}
                                                </a>
                                            </h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>

                                            @if ($product->discount_price == NULL)
                                                <div class="product-price">
                                                    <span class="price">
                                                    ${{ $product->selling_price }}
                                                    </span>
                                                </div>
                                            @else
                                                <div class="product-price">
                                                    <span class="price">${{ $product->discount_price }}	 </span>
                                                    <span class="price-before-discount">$ {{ $product->selling_price }}</span>
                                                </div>
                                            @endif

                                        </div>
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon addToCartBtn" data-toggle="dropdown" type="button">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                    </li>

                                                    <li class="lnk wishlist">
                                                        <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                            <i class="icon fa fa-heart"></i>
                                                        </a>
                                                    </li>

                                                    <li class="lnk">
                                                        <a class="add-to-cart" href="detail.html" title="Compare">
                                                            <i class="fa fa-signal"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </section>
                <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
            </div>

            <div class="clearfix"></div>
        </div>
    </div>

@endsection
