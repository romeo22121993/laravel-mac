@extends('frontend.master2')

@section('title')
    Subcategory Product
@endsection

@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="body-content outer-top-xs">
        <div class='container'>
            <div class='row'>
                <div class='col-md-3 sidebar'>
                    <!-- ===== == TOP NAVIGATION ======= ==== -->
                    @include('frontend.site2.common.vertical_menu')
                    <!-- = ==== TOP NAVIGATION : END === ===== -->

                    <div class="sidebar-module-container">
                        <div class="sidebar-filter">
                            <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
                            <div class="sidebar-widget wow fadeInUp">
                                @include('frontend.site2.common.category_plus_menu')
                            </div>
                            <!-- ============================================== SIDEBAR CATEGORY : END ============================================== -->

                            <!-- ============================================== PRICE SILDER============================================== -->
                            <div class="sidebar-widget wow fadeInUp">
                                <div class="widget-header">
                                <h4 class="widget-title">Price Slider</h4>
                                </div>
                                <div class="sidebar-widget-body m-t-10">
                                    <div class="price-range-holder">
                                        <span class="min-max">
                                            <span class="pull-left">$200.00</span>
                                            <span class="pull-right">$800.00</span>
                                        </span>
                                        <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">
                                        <input type="text" class="price-slider" value="" >
                                    </div>
                                    <a href="#" class="lnk btn btn-primary">Show Now</a>
                                </div>
                            </div>
                            <!-- ============================================== PRICE SILDER : END ============================================== -->

                            <!-- == ====== PRODUCT TAGS ==== ======= -->
                            @include('frontend.site2.common.product_tags')
                            <!-- == ====== END PRODUCT TAGS ==== ======= -->

                            <div class="home-banner">
                                <img src="{{ asset('frontend2/assets/images/banners/LHS-banner.jpg') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-md-9'>
                    <!-- == ==== SECTION – HERO === ====== -->
                    <div id="category" class="category-carousel hidden-xs">
                        <div class="item">
                            <div class="image">
                                <img src="{{ asset('frontend2/assets/images/banners/cat-banner-1.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="container-fluid">
                                <div class="caption vertical-top text-left">
                                    <div class="big-text"> Big Sale </div>
                                    <div class="excerpt hidden-sm hidden-md"> Save up to 49% off </div>
                                    <div class="excerpt-normal hidden-sm hidden-md"> Lorem ipsum dolor sit amet, consectetur adipiscing elit </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix filters-container m-t-10">
                        <div class="row">
                            <div class="col col-sm-6 col-md-2">
                                <div class="filter-tabs">
                                    <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                                        <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                                        <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col col-sm-12 col-md-6">
                                <div class="col col-sm-3 col-md-6 no-padding">
                                    <div class="lbl-cnt"> <span class="lbl">Sort by</span>
                                    <div class="fld inline">
                                        <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                            <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Position <span class="caret"></span> </button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li role="presentation"><a href="#">position</a></li>
                                                <li role="presentation"><a href="#">Price:Lowest first</a></li>
                                                <li role="presentation"><a href="#">Price:HIghest first</a></li>
                                                <li role="presentation"><a href="#">Product Name:A to Z</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            <div class="col col-sm-3 col-md-6 no-padding">
                                <div class="lbl-cnt"> <span class="lbl">Show</span>
                                    <div class="fld inline">
                                        <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                            <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> 1 <span class="caret"></span> </button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li role="presentation"><a href="#">1</a></li>
                                                <li role="presentation"><a href="#">2</a></li>
                                                <li role="presentation"><a href="#">3</a></li>
                                                <li role="presentation"><a href="#">4</a></li>
                                                <li role="presentation"><a href="#">5</a></li>
                                                <li role="presentation"><a href="#">6</a></li>
                                                <li role="presentation"><a href="#">7</a></li>
                                                <li role="presentation"><a href="#">8</a></li>
                                                <li role="presentation"><a href="#">9</a></li>
                                                <li role="presentation"><a href="#">10</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col col-sm-6 col-md-4 text-right">
                            </div>
                        </div>
                    </div>

                    <!--    //////////////////// START Product Grid View  ////////////// -->
                    <div class="search-result-container ">
                        <div id="myTabContent" class="tab-content category-list">
                            <div class="tab-pane active " id="grid-container">
                                <div class="category-product">
                                    <div class="row" id="grid_view_product">
                                        @include('frontend.product.grid_view_product')
                                    </div>
                                </div>
                            </div>

                            <!-- //////////////////// Product List View Start ////////////// -->
                            <div class="tab-pane "  id="list-container">
                                <div class="category-product" id="list_view_product">
                                    @include('frontend.product.list_view_product')
                                </div>
                            </div>
                        </div>
                        <div class="clearfix filters-container">
                            <div class="text-right">
                                <div class="pagination-container">
                                    <ul class="list-inline list-unstyled">
                                    </ul>
                                    {{ $products->links() }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="ajax-loadmore-product text-center" style="display: none;">
                    <img src="{{ asset('frontend2/assets/images/loading.gif') }}" style="width: 40px; height: 40px;">
                </div>

            </div>

            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp">
                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="{{ asset('frontend2/assets/images/brands/brand1.png') }}" src="{{ asset('frontend2/assets/images/blank.gif') }}" alt=""> </a> </div>
                        <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="{{ asset('frontend2/assets/images/brands/brand2.png') }}" src="{{ asset('frontend2/assets/images/blank.gif') }}" alt=""> </a> </div>
                        <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend2/assets/images/brands/brand3.png') }}" src="{{ asset('frontend2/assets/images/blank.gif') }}" alt=""> </a> </div>
                        <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend2/assets/images/brands/brand4.png') }}" src="{{ asset('frontend2/assets/images/blank.gif') }}" alt=""> </a> </div>
                        <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend2/assets/images/brands/brand5.png') }}" src="{{ asset('frontend2/assets/images/blank.gif') }}" alt=""> </a> </div>
                        <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend2/assets/images/brands/brand6.png') }}" src="{{ asset('frontend2/assets/images/blank.gif') }}" alt=""> </a> </div>
                        <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend2/assets/images/brands/brand2.png') }}" src="{{ asset('frontend2/assets/images/blank.gif') }}" alt=""> </a> </div>
                        <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend2/assets/images/brands/brand4.png') }}" src="{{ asset('frontend2/assets/images/blank.gif') }}" alt=""> </a> </div>
                        <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend2/assets/images/brands/brand1.png') }}" src="{{ asset('frontend2/assets/images/blank.gif') }}" alt=""> </a> </div>
                        <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend2/assets/images/brands/brand5.png') }}" src="{{ asset('frontend2/assets/images/blank.gif') }}" alt=""> </a> </div>
                    </div>
                </div>
            </div>
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div>
    </div>


@endsection

