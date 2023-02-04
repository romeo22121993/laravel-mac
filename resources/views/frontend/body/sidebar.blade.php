<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('backend/assets/images/logo.svg') }}" alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{ asset('backend/assets/images/logo-mini.svg') }}" alt="logo" /></a>
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
            @if(Auth::user()->district == 1)
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#district" aria-expanded="false" aria-controls="district">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
                    <span class="menu-title">District</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="district">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('districts') }}">District </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('subdistricts') }}"> SubDistrict </a></li>

                    </ul>
                </div>
            </li>
            @endif
            @if(Auth::user()->post == 1)
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#posts" aria-expanded="false" aria-controls="ui-basic">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Posts</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="posts">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('posts.all') }}">All Posts</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('posts.create') }}">Add Post</a></li>
                    </ul>
                </div>
            </li>
            @endif
            @if(Auth::user()->setting == 1)
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="false" aria-controls="ui-basic">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Settings</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="settings">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('settings.socials') }}">Social Settings</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('settings.seo') }}">SEO Settings</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('settings.prayers') }}">Prayers Settings</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('settings.livetv') }}">Live TV Settings</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('settings.notices') }}">Notices Settings</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('website.setting') }}">Website Settings </a></li>
                    </ul>
                </div>
            </li>
            @endif
            @if(Auth::user()->website == 1)
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#websites" aria-expanded="false" aria-controls="ui-basic">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Websites</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="websites">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('settings.website.add') }}">Add Website</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('settings.website') }}">All Websites</a></li>
                    </ul>
                </div>
            </li>
            @endif
            @if(Auth::user()->gallery == 1)
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#gallery" aria-expanded="false" aria-controls="photo">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Gallery</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="gallery">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('gallery.photo') }}">Photo Gallery</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('gallery.video') }}">Video Gallery</a></li>
                    </ul>
                </div>
            </li>
            @endif
            @if(Auth::user()->ads == 1)

            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ads" aria-expanded="false" aria-controls="ads">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
                    <span class="menu-title">Advertisement</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ads">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('list.add') }}">Ads List </a></li>
                    </ul>
                </div>
            </li>
            @endif

            @if(Auth::user()->role == 1)
                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
                        <span class="menu-title">User Roles</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('add.writer') }}"> Add Writer </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('all.writer') }}"> All Writer </a></li>

                        </ul>
                    </div>
                </li>
            @endif

        </ul>
    </nav>
