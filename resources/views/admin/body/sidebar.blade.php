<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="{{ route('home') }}"><img src="{{ asset('frontendDashboard/themesAssets/dist/img/logo_new.svg') }}" alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini" href="{{ route('home') }}"><img src="{{ asset('frontendDashboard/themesAssets/dist/img/logo_new.svg') }}" alt="logo" /></a>
        </div>
        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle " src="{{ asset('backend/assets/images/faces/face15.jpg') }}" alt="">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                            <span>{{ Auth::user()->email }}</span>
                        </div>
                    </div>
                    <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                    <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                        <a href="{{ route('wpadmin.change.profile') }}" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-settings text-primary"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('wpadmin.change.password') }}" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-onepassword  text-info"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-calendar-today text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Menu</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ route('wpadmin.main') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-speedometer"></i>
                    </span>
                    <span class="menu-title">Admin Dashboard</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ route('dashboard.main') }}">
                    <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                    </span>
                    <span class="menu-title">Subscriber Dashboard</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Users</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.users') }}">Users</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.users.add') }}">Add User</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Posts</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic1">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.posts') }}">Posts</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.posts.categories') }}">Post Categories</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.posts.add') }}">Add Post</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Pages</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic2">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.pages') }}">Pages</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.pages.add') }}">Add Page</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Products</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic3">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.products.main') }}">Products</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.products.cats.all') }}">Product Categories</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.products.subcats.all') }}">Product SubCategories</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.products.brands.all') }}">Product Brands</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.products.add') }}">Add Product</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic6">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Shipping Items</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic6">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.shipping.division.all') }}">Divisions</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.shipping.district.all') }}">Districts</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.shipping.state.all') }}">States</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic7" aria-expanded="false" aria-controls="ui-basic7">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Orders</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic7">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="{{ route('wpadmin.orders.pending') }}"><i class="ti-more"></i>Pending Orders</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('wpadmin.orders.confirmed') }}"><i class="ti-more"></i>Confirmed Orders</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('wpadmin.orders.processing') }}"><i class="ti-more"></i>Processing Orders</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('wpadmin.orders.picked') }}"><i class="ti-more"></i> Picked Orders</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('wpadmin.orders.shipped') }}"><i class="ti-more"></i> Shipped Orders</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('wpadmin.orders.delivered') }}"><i class="ti-more"></i> Delivered Orders</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('wpadmin.orders.canceled') }}"><i class="ti-more"></i> Canceled Orders</a></li>

                    </ul>
                </div>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Contacts</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic4">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.contacts') }}">Contacts</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic5">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Coupons</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic5">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.coupons.all') }}">Coupons</a></li>
                    </ul>
                </div>
            </li>


            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic9" aria-expanded="false" aria-controls="ui-basic9">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Reports</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic9">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.reports.all') }}">Reports</a></li>
                    </ul>
                </div>
            </li>


            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic10" aria-expanded="false" aria-controls="ui-basic10">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Stock</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic10">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.product.stock') }}">Stock</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic11" aria-expanded="false" aria-controls="ui-basic11">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Courses</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic11">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.courses') }}">Courses</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.courses.categories') }}">Courses Categories</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.courses.add') }}">Add Coursee</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic12" aria-expanded="false" aria-controls="ui-basic12">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Guides</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic12">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.guides') }}">Guides</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.guides.categories') }}">Guide Categories</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.guides.add') }}">Add Guide</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic13" aria-expanded="false" aria-controls="ui-basic13">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Resources</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic13">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.resources') }}">Resources</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.resources.categories') }}">Resource Categories</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.resources.add') }}">Add Resource</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic14" aria-expanded="false" aria-controls="ui-basic14">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Articles</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic14">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.articles') }}">Articles</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.articles.categories') }}">Article Categories</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.articles.add') }}">Add Article</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic15" aria-expanded="false" aria-controls="ui-basic15">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Campaigns</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic15">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.campaigns') }}">Campaigns</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.campaigns.categories') }}">Campaign Categories</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.campaigns.topics') }}">Campaign Topics</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('wpadmin.campaigns.add') }}">Add Campaign</a></li>
                    </ul>
                </div>
            </li>

        </ul>
    </nav>
