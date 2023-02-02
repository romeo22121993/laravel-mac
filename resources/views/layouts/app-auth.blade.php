<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Custom @yield('title') </title>
        <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/custom.css') }}">
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />
    </head>
    <body>
        @yield('content')
    </body>
</html>
