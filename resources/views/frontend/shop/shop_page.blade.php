@extends('frontend.master2')

@section('title')
    Shop Page
@endsection

@section('content')

    <div class="body-content outer-top-xs">
        <div class='container'>
            <form action="{{ route('shop.filter') }}" method="post">
                @csrf

                <div class='row'>
                    <div class='col-md-3 sidebar'>

                        <!-- ===== == TOP NAVIGATION ======= ==== -->
                        @include('frontend.site2.common.vertical_menu')
                        <!-- = ==== TOP NAVIGATION : END === ===== -->

                        <div class="sidebar-module-container">
                            <div class="sidebar-filter">
                                <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
                                <div class="sidebar-widget wow fadeInUp">
                                    <h3 class="section-title">shop by</h3>

                                    <div class="widget-header">
                                        <h4 class="widget-title">Category</h4>
                                    </div>
                                    <div class="sidebar-widget-body">
                                        <div class="accordion">
                                            @if(!empty($_GET['category']))
                                                @php
                                                $filterCat = explode( ',',$_GET['category'] );
                                                @endphp
                                            @endif
                                            @foreach( $productCategories as $category )
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" name="category[]" value="{{ $category->slug }}" @if(!empty($filterCat) && in_array($category->slug, $filterCat)) checked @endif  onchange="this.form.submit()">
                                                            {{ $category->name }}
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!--  /////////// This is for Brand Filder /////////////// -->
                                    <div class="widget-header">
                                        <h4 class="widget-title">Brand Filter</h4>
                                    </div>
                                    <div class="sidebar-widget-body">
                                        <div class="accordion">

                                            @if(!empty($_GET['brand']))
                                                @php
                                                $filterBrand = explode(',',$_GET['brand']);
                                                @endphp
                                            @endif

                                            @foreach($productBrands as $brand)
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" name="brand[]" value="{{ $brand->slug }}" @if(!empty($filterBrand) && in_array($brand->slug, $filterBrand)) checked @endif onchange="this.form.submit()">
                                                             {{ $brand->name }}
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <!-- ============================================== SIDEBAR CATEGORY : END ============================================== -->

                                <!-- ============================================== PRICE SILDER============================================== -->
                                <div class="sidebar-widget wow fadeInUp">
                                    <div class="widget-header">
                                        <h4 class="widget-title">Price Slider</h4>
                                    </div>
                                    <div class="sidebar-widget-body m-t-10">
                                        <div class="price-range-holder"> <span class="min-max"> <span class="pull-left">$200.00</span> <span class="pull-right">$800.00</span> </span>
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


                                <div class="home-banner"> <img src="{{ asset('frontend2/assets/images/banners/LHS-banner.jpg') }}" alt="Image"> </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-9'>
                        <!-- == ==== SECTION – HERO === ====== -->
                        <div id="category" class="category-carousel hidden-xs">
                            <div class="item">
                                <div class="image"> <img src="{{ asset('frontend2/assets/images/banners/cat-banner-1.jpg') }}" alt="" class="img-responsive"> </div>
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
                                <div class="col col-sm-6 col-md-4 text-right">
                                </div>
                            </div>
                        </div>

                        <!--    //////////////////// START Product Grid View  ////////////// -->
                        <div class="search-result-container ">
                            <div id="myTabContent" class="tab-content category-list">
                                <div class="tab-pane active " id="grid-container">
                                    <div class="category-product">
                                        <div class="row">
                                            @include('frontend.product.grid_view_product')
                                        </div>
                                    </div>
                                </div>
                               <!--            //////////////////// END Product Grid View  ////////////// -->

                                <!--            //////////////////// Product List View Start ////////////// -->
                                <div class="tab-pane "  id="list-container">
                                   @include('frontend.product.list_view_product')
                                </div>
                            </div>
                            {{ $products->appends($_GET)->links('vendor.pagination.custom')  }}
                        </div>
                    </div>
                </div>

                @include('frontend.site2.body.brands')
            </form>
        </div>
    </div>

@endsection

