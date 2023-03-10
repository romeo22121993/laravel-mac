@extends('frontend.master2')

@section('title')
    Payment By Cash
@endsection

@section('content')

    <div class="body-content">
        <div class="container">
            <div class="checkout-box ">
                <div class="row">

                    <div class="col-md-6">
                        <!-- checkout-progress-sidebar -->
                        <div class="checkout-progress-sidebar ">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="unicase-checkout-title">Your Shopping Amount </h4>
                                    </div>
                                    <div class="">
                                        <ul class="nav nav-checkout-progress list-unstyled">
                                            <hr>
                                            <li>
                                                @if(Session::has('coupon'))
                                                    <strong>SubTotal: </strong> ${{ $cartTotal }} <hr>
                                                    <strong>Coupon Name : </strong> {{ session()->get('coupon')['coupon_name'] }}
                                                        ( {{ session()->get('coupon')['coupon_discount'] }} % )
                                                    <hr>

                                                    <strong>Coupon Discount : </strong> ${{ session()->get('coupon')['discount_amount'] }}
                                                    <hr>

                                                    <strong>Grand Total : </strong> ${{ session()->get('coupon')['total_amount'] }}
                                                    <hr>
                                                @else
                                                    <strong>SubTotal: </strong> ${{ $cartTotal }} <hr>
                                                    <strong>Grand Total : </strong> ${{ $cartTotal }} <hr>
                                                @endif
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- checkout-progress-sidebar -->
                    </div>

                    <div class="col-md-6">
                        <!-- checkout-progress-sidebar -->
                        <div class="checkout-progress-sidebar ">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="unicase-checkout-title">Select Payment Method</h4>
                                    </div>

                                    <form action="{{ route('cash.order') }}" method="post" id="payment-form">
                                        @csrf
                                        <div class="form-row">
                                            <img src="{{ asset('frontend2/assets/images/payments/5.png') }}">
                                            <label for="card-element">
                                                <input type="hidden" name="name" value="{{ $data['shipping_name'] }}">
                                                <input type="hidden" name="email" value="{{ $data['shipping_email'] }}">
                                                <input type="hidden" name="phone" value="{{ $data['shipping_phone'] }}">
                                                <input type="hidden" name="post_code" value="{{ $data['post_code'] }}">
                                                <input type="hidden" name="division_id" value="{{ $data['division_id'] }}">
                                                <input type="hidden" name="district_id" value="{{ $data['district_id'] }}">
                                                <input type="hidden" name="state_id" value="{{ $data['state_id'] }}">
                                                <input type="hidden" name="notes" value="{{ $data['notes'] }}">
                                            </label>
                                        </div>
                                        <br>
                                        <button class="btn btn-primary">Submit Payment</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- checkout-progress-sidebar -->
                    </div>

                </div>
            </div>
             <!-- === ===== BRANDS CAROUSEL ==== ======== -->
        </div>
    </div>

@endsection
