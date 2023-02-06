<!DOCTYPE html>
<html lang="en">
<head>

    <title>@yield('title')</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontendDashboard/fav.ico') }}">
    <link rel="icon" type="image/x-icon"  href="{{ asset('frontendDashboard/fav.ico') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" id="owl-carousel-css" href="{{ asset('frontendDashboard/themesAssets/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}" type="text/css" media="all">
    <link rel='stylesheet' id='campaign-items-style-home-css' href='{{ asset('frontendDashboard/pluginAssets/scss/blocks/campaign-items.css') }} type='text/css' media='all' />
    <link rel='stylesheet' id='template-modal-home-css' href='{{ asset('frontendDashboard/pluginAssets/scss/blocks/template-modal.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css' href='{{ asset('frontendDashboard/pluginAssets/style.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='seven-css' href='{{ asset('frontendDashboard/pluginAssets/seven.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='podcast-css' href='{{ asset('frontendDashboard/pluginAssets/scss/blocks/podcast.css') }}' type='text/css' media='all' />

    <link rel='stylesheet' id='bootstrap-css' href='{{ asset('frontendDashboard/themesAssets/styles/bootstrap4/bootstrap.min.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='main_styles-css' href='{{ asset('frontendDashboard/themesAssets/styles/main_styles.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='{{ asset('frontendDashboard/themesAssets/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}' type='text/css' media='all' />
    <link rel='preload' as='font' type='font/woff2' id='font-awesome-font-css' href='{{ asset('frontendDashboard/themesAssets/plugins/font-awesome-4.7.0/fonts/fontawesome-webfont.woff2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css' href='{{ asset('frontendDashboard/themesAssets/styles/responsive.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='home-css' href='{{ asset('frontendDashboard/themesAssets/styles/home.css') }}' type='text/css' media='all' />

    <script src="{{ asset('frontendDashboard/jquery.js') }}"></script>

    <script type="text/javascript" src="{{ asset('frontendDashboard/themesAssets/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}" id="owl-carousel-js-js"></script>

    <script src="{{ asset('frontendDashboard/pluginAssets/js/moment.min.js') }}"></script>
    <script src="{{ asset('frontendDashboard/pluginAssets/js/moment-timezone.js') }}"></script>
    <script src="{{ asset('frontendDashboard/pluginAssets/js/sv-calendar.js') }}"></script>
    <script src="{{ asset('frontendDashboard/pluginAssets/js/jquery.easypiechart.js') }}"></script>
    <script src="{{ asset('frontendDashboard/pluginAssets/table-sorter.min.js') }}"></script>

</head>
<body  class="home page-template page-template-templates page-template-home page-template-templateshome-php page page-podcast page-id-654 logged-in admin-bar no-customize-support cookies-set cookies-refused  page-home">
    <div class="super_container1">
        @include('frontend.body.mobile_menu')

        @include('frontend.body.header')

        @yield('content')

        @include('frontend.body.banner')
        @include('frontend.body.footer')

    </div>

    <script src="{{ asset('frontendDashboard/pluginAssets/admin-script.js') }}"></script>
    <script src="{{ asset('frontendDashboard/pluginAssets/script.js') }}"></script>
    <script src="{{ asset('frontendDashboard/pluginAssets/audio-podcast.js') }}"></script>

    <script src="{{ asset('frontendDashboard/themesAssets/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('frontendDashboard/themesAssets/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontendDashboard/themesAssets/js/jscustom.js') }}"></script>
    <script src="{{ asset('frontendDashboard/custom-frontend-script.js') }}"></script>

    @yield('individual_scripts')
</body>
</html>

