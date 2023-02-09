<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon"  href="{{ asset('frontendDashboard/fav.ico') }}">
    <meta name="robots" content="all">
    <title>@yield('title') </title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('frontend2/assets/css/bootstrap.min.css') }}">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{ asset('frontend2/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend2/assets/css/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend2/assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend2/assets/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend2/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend2/assets/css/rateit.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend2/assets/css/bootstrap-select.min.css') }}">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{ asset('frontend2/assets/css/font-awesome.css') }}">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('frontend2/assets/js/jquery-1.11.1.min.js') }}"></script>
    <script src="https://js.pusher.com/7.0.3/pusher.min.js"></script>

</head>
<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    @include('frontend.site2.body.header')
    <!-- ============================================== HEADER : END ============================================== -->

    @yield('content')

    <!-- ============================================================= FOOTER ============================================================= -->
    @include('frontend.site2.body.footer')
    <!-- ============================================================= FOOTER : END============================================================= -->

    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="{{ asset('frontend2/assets/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('frontend2/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend2/assets/js/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ asset('frontend2/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend2/assets/js/echo.min.js') }}"></script>
    <script src="{{ asset('frontend2/assets/js/jquery.easing-1.3.min.js') }}"></script>
    <script src="{{ asset('frontend2/assets/js/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('frontend2/assets/js/jquery.rateit.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend2/assets/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('frontend2/assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend2/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend2/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('frontend2/assets/products-scripts.js') }}"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong><span id="pname"></span> </strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModel">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src=" " class="card-img-top" alt="..." style="height: 200px; width: 200px;" id="pimage">
                        </div>
                    </div>

                    <div class="col-md-4">

                        <ul class="list-group">
                            <li class="list-group-item">Product Price: <strong class="text-danger">$<span id="pprice"></span></strong>
                                <del id="oldprice">$</del>
                            </li>
                            <li class="list-group-item">Product Code: <strong id="pcode"></strong></li>
                            <li class="list-group-item">Category: <strong id="pcategory"></strong></li>
                            <li class="list-group-item">Brand: <strong id="pbrand"></strong></li>
                            <li class="list-group-item">Stock: <span class="badge badge-pill badge-success" id="aviable" style="background: green; color: white;"></span>
                                <span class="badge badge-pill badge-danger" id="stockout" style="background: red; color: white;"></span>
                            </li>
                        </ul>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="color">Choose Color</label>
                            <select class="form-control" id="color" name="color">
                            </select>
                        </div>

                        <div class="form-group" id="sizeArea">
                            <label for="size">Choose Size</label>
                            <select class="form-control" id="size" name="size">
                                <option>1</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="qty">Quantity</label>
                            <input type="number" class="form-control" id="qty" value="1" min="1" >
                        </div>

                        <input type="hidden" id="product_id">
                        <button type="submit" class="btn btn-primary mb-2 addToCartBtn" >Add to Cart</button>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
</body>
</html>

