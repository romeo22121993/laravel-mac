@php
$categories    = \App\Models\ProductCategory::where('cat_id', 0)->orderBy('name','ASC')->get();
@endphp
<header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <i class="icon fa fa-user"></i> My Account
                            </a>
                        </li>
                        <li>
{{--                            <a href="{{ route('wishlist') }}">--}}
                            <a href="">
                                <i class="icon fa fa-heart"></i> Wishlist
                            </a>
                        </li>
                        <li>
{{--                            <a href="{{ route('mycart') }}">--}}
                            <a href="">
                                <i class="icon fa fa-shopping-cart"></i> My Cart
                            </a>
                        </li>
                        <li>
                            <a href="" type="button" data-toggle="modal" data-target="#ordertraking">
                                <i class="icon fa fa-check"></i>  Order Tracking
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon fa fa-check"></i> Checkout
                            </a>
                        </li>
                        @auth
                            <li><a href="{{ route('dashboard.main') }}"><i class="icon fa fa-lock"></i>Profile</a></li>
                        @else
                            <li>
                                <a href="{{ route('login') }}"><i class="icon fa fa-lock"></i>
                                    Login
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}"><i class="icon fa fa-lock"></i>
                                    Register
                                </a>
                            </li>
                        @endauth
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo">
                        <a href="/">
                            <img style="  width: auto;  height: 50px;" src="{{ asset('frontendDashboard/themesAssets/dist/img/logo_new.svg') }}" alt="logo">
                        </a>
                    </div>
                    <!-- ============================================================= LOGO : END ============================================================= --> </div>

                <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                    <!-- ============================================================= SEARCH AREA ============================================================= -->
                    <div class="search-area">
                        <form method="post" action="{{ route('product.search') }}">
                            @csrf
                            <div class="control-group">
                                <ul class="categories-filter animate-dropdown">
                                    <li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
                                        <ul class="dropdown-menu" role="menu" >
                                            <li class="menu-header">Computer</li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Clothing</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Electronics</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Shoes</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Watches</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <input class="search-field"  id="search" name="search" placeholder="Search here..." />
                                <button class="search-button" type="submit"></button> </div>
                        </form>
                        <div id="searchProducts"></div>
                    </div>
                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                </div>

                <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                    <div class="dropdown dropdown-cart">
                        <a href="" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="basket">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>
                                <div class="basket-item-count"><span class="count" id="cartQty"> </span></div>
                                <div class="total-price-basket">
                                    <span class="lbl">
                                        cart-
                                    </span>
                                    <span class="total-price"> <span class="sign">$</span>
                                    <span class="value" id="cartSubTotal"> </span> </span> </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div id="miniCart">
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="clearfix cart-total">
                                <div class="pull-right">
                                    <span class="text">Count: <span class='price' id="cartSubQut"> </span></span>
                                    <br/>
                                    <span class="text">Sub Total :</span>
                                    <span class='price' id="cartSubTotal"> </span>
                                </div>
                                <div class="clearfix"></div>
                                <a href="{{ url('/checkout') }}" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                            </li>
                        </ul>
                    </div>
                    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
            </div>
        </div>
    </div>

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li class="active dropdown yamm-fw"> <a href="{{ url('') }}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a> </li>
                                @foreach($categories as $category)
                                    <li class="dropdown yamm mega-menu">
                                        <a href="{{ route('home') }}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">
                                            {{ $category->name }}
                                        </a>
                                        <ul class="dropdown-menu container">
                                        <li>
                                            <div class="yamm-content ">
                                                <div class="row">
                                                    @php
                                                    $subcategories = App\Models\ProductCategory::where('cat_id', $category->id)->orderBy('name','ASC')->get();
                                                    @endphp
                                                    @foreach($subcategories as $subcategory)
                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            <h2 class="title">
                                                                <a href="{{ route( 'products.categories.list', $subcategory->slug ) }}" style="padding: 0;">
                                                                    {{ $subcategory->name }}
                                                                </a>
                                                            </h2>
                                                            <ul class="links">
                                                                <li>
                                                                    <a href="{{ route( 'products.categories.list', $subcategory->slug) }}">
                                                                        {{ $subcategory->name }}
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    @endforeach
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                                                        <img class="img-responsive" src="{{ asset('frontend/assets/images/banners/top-menu-banner.jpg') }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    </li>
                                @endforeach
                                <li class="dropdown yamm mega-menu">
                                    <a href="{{ route('shop') }}" >
                                        Shop
                                    </a>
                                </li>
                                <li class="dropdown yamm mega-menu">
{{--                                    <a href="{{ route('chat1') }}" >--}}
                                    <a href="" >
                                        Chat-Vue-Pusher
                                    </a>
                                </li>
                                <li class="dropdown yamm mega-menu">
{{--                                    <a href="{{ route('game-tik-tok') }}" >--}}
                                    <a href="" >
                                        Game Tic To
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ============================================== NAVBAR : END ============================================== -->

    <!-- Order Traking Modal -->
    <div class="modal fade" id="ordertraking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Track Your Order </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

{{--                    <form method="post" action="{{ //route('order.tracking') */ }}">--}}
                    <form method="post" action="">
                        @csrf
                        <div class="modal-body">
                            <label>Invoice Code</label>
                            <input type="text" name="code" required="" class="form-control" placeholder="Your Order Invoice Number">
                        </div>
                        <button class="btn btn-danger" type="submit" style="margin-left: 17px;"> Track Now </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
