@extends('frontend.master2')

@section('title')
    Product Search Page
@endsection

@section('content')


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
                                <h3 class="section-title">shop by</h3>
                                <div class="widget-header">
                                    <h4 class="widget-title">Category</h4>
                                </div>
                                <div class="sidebar-widget-body">
                                    <div class="accordion">
                                        @foreach($productCategories as $category)
                                            <div class="accordion-group">
                                                <div class="accordion-heading">
                                                    <a href="#collapse{{ $category->id }}" data-toggle="collapse" class="accordion-toggle collapsed">
                                                        {{ $category->name }}
                                                    </a>
                                                </div>
                                                <div class="accordion-body collapse" id="collapse{{ $category->id }}" style="height: 0px;">
                                                    <div class="accordion-inner">
                                                        @php
                                                        $subcategories = App\Models\ProductCategory::where('cat_id', $category->id)->orderBy('name','ASC')->get();
                                                        @endphp

                                                        @foreach($subcategories as $subcategory)
                                                            <ul>
                                                                <li>
                                                                    <a href="{{ url('subcategory/product/'.$subcategory->id.'/'.$subcategory->subcategory_slug_en ) }}">
                                                                        {{ $subcategory->name }}
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================== SIDEBAR CATEGORY : END ============================================== -->


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
                            <div class="image"> <img src="{{ asset('frontend2/assets/images/banners/cat-banner-1.jpg') }}" alt="" class="img-responsive"> </div>
                            <div class="container-fluid">
                                <div class="caption vertical-top text-left">
                                    <div class="big-text"> Big Sale </div>
                                    <div class="excerpt hidden-sm hidden-md"> Save up to 49% off </div>
                                    <div class="excerpt-normal hidden-sm hidden-md"> Lorem ipsum dolor sit amet, consectetur adipiscing elit </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4><b>Total Search </b><span class="badge badge-danger" style="background: #FF0000;"> {{ count($products) }} </span> Items  </h4>
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
                                    @include('frontend.product.grid_view_product')
                                </div>
                            </div>
                            <!--            //////////////////// END Product Grid View  ////////////// -->
                            <!--            //////////////////// Product List View Start ////////////// -->
                            <div class="tab-pane "  id="list-container">
                                <div class="category-product">
                                    @include('frontend.product.list_view_product')
                                </div>
                            </div>
                        </div>
                        <div class="clearfix filters-container">
                            <div class="text-right">
                                <div class="pagination-container">
                                    {{ $products->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

