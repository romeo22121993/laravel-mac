<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Custom @yield('title') </title>
        <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />
    </head>
    <body>
        <div class="container-scroller">
            @yield('content')
        </div>
    </body>
</html>
