<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Custom @yield('title') </title>
        <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/custom.css') }}">
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />
    </head>
    <body>
       <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper ">
                <div class="row w-100 m-0">
                    <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                        @yield('content')
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
