<?php /*

    @include('frontend.body.banner')

    @yield('individual_scripts')

*/?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Dashboard - @yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon"  href="{{ asset('frontendDashboard/fav.ico') }}">
    <script type="text/javascript" src="{{ asset('frontendDashboard/themesAssets/js/jquery-3.3.1.min.js') }}" id="jequryjs"></script>

    <link rel='stylesheet' id='campaign-items-style-home-css' href='{{ asset('frontendDashboard/pluginAssets/scss/blocks/campaign-items.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='template-modal-home-css' href='{{ asset('frontendDashboard/pluginAssets/scss/blocks/template-modal.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='fonts-css' href='{{ asset('frontendDashboard/themesAssets/dist/fonts/fonts.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css' href='{{ asset('frontendDashboard/pluginAssets/style.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='seven-css' href='{{ asset('frontendDashboard/pluginAssets/seven.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='podcast-css' href='{{ asset('frontendDashboard/pluginAssets/scss/blocks/podcast.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='{{ asset('frontendDashboard/themesAssets/styles/bootstrap4/bootstrap.min.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='main_styles-css' href='{{ asset('frontendDashboard/themesAssets/styles/main_styles.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='{{ asset('frontendDashboard/themesAssets/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}' type='text/css' media='all' />
    <link rel='preload' as='font' type='font/woff2' id='font-awesome-font-css' href='{{ asset('frontendDashboard/themesAssets/plugins/font-awesome-4.7.0/fonts/fontawesome-webfont.woff2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css' href='{{ asset('frontendDashboard/themesAssets/styles/responsive.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='dashboard1-css' href='{{ asset('frontendDashboard/themesAssets/styles/dashboard.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='home-css' href='{{ asset('frontendDashboard/themesAssets/styles/home.css') }}' type='text/css' media='all' />

    @yield('individual_styles')

    <script type='text/javascript' src='{{ asset('frontendDashboard/pluginAssets/courses.js') }}' id='moment-js-js'></script>
    <script type='text/javascript' src='{{ asset('frontendDashboard/pluginAssets/js/moment.min.js') }}' id='moment-js-js'></script>
    <script type='text/javascript' src='{{ asset('frontendDashboard/pluginAssets/js/moment-timezone.js') }}' id='moment-timezone-js-js'></script>
    <script type='text/javascript' src='{{ asset('frontendDashboard/pluginAssets/js/sv-calendar.js') }}' id='sv-calendar-js-js'></script>
    <script type='text/javascript' src='{{ asset('frontendDashboard/pluginAssets/js/jquery.easypiechart.js') }}' id='pie-chart-js'></script>
    <script type='text/javascript' src='{{ asset('frontendDashboard/pluginAssets/table-sorter.min.js') }}' id='sorter-js'></script>

</head>
<body class="page-template page-template-templates page-template-dashboard-home page-template-templatesdashboard-home-php page page-id-704 logged-in admin-bar no-customize-support cookies-set cookies-refused  page-admin-dashboard" data-timezone="America/New_York" data-default-timezone="America/New_York" data-time-backend="2023-02-06 14:20:48">

    <div class="preloader">
        <div class="preloader__row">
            <div class="preloader__item"></div>
            <div class="preloader__item"></div>
        </div>
    </div>

    <div class="super_container" >

        @include('userDashboard.body.header')

        <div class="main-content">

            @include('userDashboard.body.sidebar')

            <div class="right-content">
                @yield('content')
            </div>

        </div>
    </div>

    @include('userDashboard.body.footer')

    <script type='text/javascript' src='{{ asset('frontendDashboard/themesAssets/styles/bootstrap4/popper.js') }}' id='styles-js'></script>
    <script type='text/javascript' src='{{ asset('frontendDashboard/themesAssets/styles/bootstrap4/bootstrap.min.js') }}' id='bootstrap1-js'></script>
    <script type='text/javascript' src='{{ asset('frontendDashboard/themesAssets/js/jscustom.js') }}' id='jscustom-js'></script>

    <script type='text/javascript' src='{{ asset('frontendDashboard/pluginAssets/admin-script.js') }}' id='admin-script-js'></script>
    <script type='text/javascript' src='{{ asset('frontendDashboard/pluginAssets/script.js') }}' id='script-js'></script>
    <script type='text/javascript' src='{{ asset('frontendDashboard/pluginAssets/audio-podcast.js') }}' id='audio-podcast-js'></script>

    @yield('individual_scripts')

</body>
</html>

