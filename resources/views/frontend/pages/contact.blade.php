@extends('frontend.master')

@section('title')
   Contact Page
@endsection

@section('content')

    <div class="inner_container services_block platform_block">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="inner_content">
                        <div class="row">
                            <div class="col-xs-12 col-lg-8">
                                <h4>Contact Us</h4>

                                <h3>Thanks for joining our community!</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-form" style="margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-8 contact_page_block">
                    <div class="box form_contact_box form_contact_box_css">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="" id="contact_form" method="post">
                            @csrf
                            <label>Company</label>
                            <input type="text" name="company">
                            <label>First Name*</label>
                            <input type="text" name="name" required="">
                            <label>Last Name*</label>
                            <input type="text" name="lastname" required="">
                            <input type="hidden" name="user_id" value="{{ $currentUserId }}">
                            <label>Email*</label>
                            <input type="email" name="email" required="">
                            <textarea class="box form input" name="message" style="width: 100%"></textarea>
                            <input type="submit" value="Send" class="btn btn-primary contact_submit">
                        </form>
                        <br>
                    </div>
                    <div class="success_message_block success_message_block_none">
                        <h3>We’ll keep you updated on Advisor Lab, our latest content, and trends we’re seeing.</h3>
                    </div>
                    <img src="{{ asset('frontendDashboard/themesAssets/dist/img/loader.gif') }}" alt="loader" id="loader">
                </div>
                <div class="col-xs-12 col-lg-4 d-flex d-lg-block contact-form__info">
                    <div class="contact-form__col">
                        <h4>Contact Info</h4>
                        <a href="mailto:info@laravel.loc">info@laravel.loc</a>
                    </div>

                    <br><br>

                    <div class="contact-form__col">
                        <h4>Visit Us</h4>

                        <p>100 Park Ave</p>
                        <p>New York, NY 10017</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
