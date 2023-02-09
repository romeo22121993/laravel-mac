<header class="header" id="header" data-logged="yes" data-base="http://laravel.loc">
    <div>
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                            <div class="logo">
                                <a href="http://laravel.loc">
                                    <img src="{{ asset('frontendDashboard/themesAssets/dist/img/logo_new.svg') }}" alt="logo" class="logo-desktop"/>
                                    <img src="{{ asset('frontendDashboard/themesAssets/dist/img/logo_new.svg') }}" alt="logo-mobile" class="logo-mobile"/>
                                </a>
                            </div>
                            <div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
                                <div class="header_top_nav">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="menu-custom-header-menu-container"><ul class="d-flex flex-row align-items-center justify-content-start"><li class="a_menu_block"></li><li id="menu-item-765" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-765"><a href="http://laravel.loc/about/" class="a_about_block ">About Us</a></li>
                                                <li id="menu-item-766" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-766"><a href="http://laravel.loc/platform/" class="a_the_platform_block ">The Platform</a></li>
                                                <li id="menu-item-903" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-903"><a href="http://laravel.loc/sign-up/" class="a_pricing_block  ">Pricing</a></li>
                                                <li id="menu-item-767" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-767"><a href="http://laravel.loc/blog/" class="a_blog_block  ">Blog</a></li>
                                                <li id="menu-item-3679" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3679"><a href="http://laravel.loc/podcast/" class="a_podcast_block  ">Podcast</a></li>
                                                <li id="menu-item-768" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-768"><a href="http://laravel.loc/contact/" class="a_contact_block ">Contact Us</a></li>
                                                <li id="menu-item-768" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-768"><a href="{{ route('shop') }}" class="a_contact_block ">Shop</a></li>

                                                @if ( empty( $currentUser ) )
                                                    <li id="menu-item-2469" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2469">
                                                        <div class="sv-login-wrapper">
                                                            <a href="http://laravel.loc/sign-up/" class="a_create an account_block btn btn-primary login">Create an Account</a>
                                                            <div class="sv-login-link">Already a Member?
                                                            <a href="http://laravel.loc/login/">Login Now</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @else
                                                    <li id="menu-item-911" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-911">
                                                        <a href="http://laravel.loc/wpadmin/" class="a_your dashboard_block " >Your Dashboard</a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
