@extends('frontend.master')

@section('title')
    Home Page
@endsection

@section('content')
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="col-lg-6 col-sm-12">
                            <h1 style="	font-size:45px;	font-weight:300;">
                                The content marketing platform and coaching system built for the independent financial advisor.</h1>
                            <a href="http://seven.loc/sign-up/" target="" class="btn btn-primary">Create an Account</a>
                        </div>
                        <div class="video-holder video-holder-home" style="background: url(http://seven.loc/wp-content/uploads/2022/07/Group-72-min.png);"><a></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="default-padding sv-social-proof">
        <div class="container container-wide">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto text-center">
                    <h2 class="sv-social-proof__title">
                        <span>As Featured In</span>
                    </h2>
                </div>
            </div>

            <div class="row justify-content-center justify-content-sm-start justify-content-lg-center">
                <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
                    <div class="sv-social-proof__img">
                        <img src="http://seven.loc/wp-content/uploads/2020/08/Bitmap.png"
                             alt="Wealth Management"
                             class=""
                        >
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
                    <div class="sv-social-proof__img">
                        <img src="http://seven.loc/wp-content/uploads/2020/08/header-logo-2.png"
                             alt="Financial advisor"
                             class=""
                        >
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
                    <div class="sv-social-proof__img">
                        <img src="http://seven.loc/wp-content/uploads/2020/08/Think-Advisor-Logo.png"
                             alt="Think Advisor"
                             class=""
                        >
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
                    <div class="sv-social-proof__img">
                        <img src="http://seven.loc/wp-content/uploads/2022/05/XY_Planning_Network_Logo-transparent-1.png"
                             alt="XY_Planning_Network_Logo-transparent (1)"
                             class=""
                        >
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
                    <div class="sv-social-proof__img">
                        <img src="http://seven.loc/wp-content/uploads/2022/05/Kitcescom-1.png"
                             alt="Kitcescom-1"
                             class="last"
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center text-lg-left mb-lg-0 mb-4">
                    <div class="home-video-container" >
                        <div id="video_module_block"
                             style='width:640px; height:390px'
                             data-vimeo-url="https://vimeo.com/513770381/a721b23165"
                             data-video-current-seconds="0">
                        </div>
                        <script src="https://player.vimeo.com/api/player.js" defer async></script>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('frontend-dashboard/themes-assets/dist/img/icon-logo_io.png') }}" style="max-width: 50px" alt="seven icon"/>
                    <h2>Why Advisor I/O?</h2>
                    <p class="bigger bigger_video_block" >Advisor I/O helps financial advisors get clear on their marketing and succeed in a digital world. With on-demand coaching, engaging content, and scalable tools, the platform and process help advisors drive growth and lower marketing costs over time.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="default-padding our-philosophy">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Our Philosophy</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-6">
                    <img src="http://seven.loc/wp-content/uploads/2019/11/timley_topics.png" alt=""/>
                    <h3>We Help You Save Time</h3>
                    <p>We've built our content and coaching system to help you scale rapidly. We pair content with coaching so you have assets you need, and the know-how to deploy them.</p>
                </div>


                <div class="col-lg-6">
                    <img src="http://seven.loc/wp-content/uploads/2019/11/icon_care.svg" alt=""/>
                    <h3>We Coach You Through It All</h3>
                    <p>We are only successful if our members are successful, which is why we act as your coach to help you build and maintain marketing excellence.</p>
                </div>

            </div>
            <div class="row">

                <div class="col-lg-6">
                    <img src="http://seven.loc/wp-content/uploads/2019/11/icon_build-1.svg" alt=""/>
                    <h3>We Provide You With 100% Customizable Content</h3>
                    <p>Your marketing needs to be unique to your practice. No cookie-cutter marketing content - our content is 100% customizable for your voice.</p>
                </div>


                <div class="col-lg-6">
                    <img src="http://seven.loc/wp-content/uploads/2019/11/icon_practice.svg" alt=""/>
                    <h3>We Practice What We Preach</h3>
                    <p>We’ve done this ourselves, so we know what it takes to build a valuable marketing engine within the financial services industry. All of our strategies and tactics are battle tested. </p>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <a href="http://seven.loc/about/">See More <img src="{{ asset('frontend-dashboard/themes-assets/dist/img/arrow-right.png') }}" alt="arrow right"/></a>
                </div>
            </div>
        </div>
    </div>

    <div class="sv-pricing default-padding container">
        <div class="sv-pricing__heading">
            <div class="container">
                <div class="row">
                    <div class="col-10 mx-auto text-center">
                        <span>PRICING</span>
                        <h2>The Perfect Plan for Your Practice</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container sv-pricing__container">
            <div class="row">
                <div class="col-12">
                    <div class="sv-pricing__content mx-auto sv-price-new">
                        <div class="sv-price ">
                            <div class="sv-price__header text-center">
                                <span class="sv-price__subtitle">We provide you with the content, coaching, and peer learning to help you grow. All at a simple price.</span>
                            </div>
                            <div class="sv-price__body">
                                <div class="sv-price__body-left">
                                    <p class="sv-price__price text-center">$74.99</p>
                                    <span class="sv-price__payment-repeat text-center">/month</span>
                                    <h5 class="sv-price__title text-center">Per Advisor or Team Member. Minimum Initial Term of Six (6) Months.</h5>
                                    <a class="sv-price__button text-center" href="http://seven.loc/sign-up/" >Create an Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="default-padding platform">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h2>The Platform</h2>
                    <p class="bigger">You receive full access to our platform that includes coaching, ready-to-go content, presentations, sales scripts, and email campaigns.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <h3>Deploy Content Faster</h3>
                    <p>We’ve thought through the most effective ways to connect you to your clients by focusing on the issues that are meaningful to them. We’ve created quality, timely ready-to-send content and campaigns that expand your brand. </p>
                    <h3>Drive More Leads</h3>
                    <p>Your marketing program is only is good as the impact it's having. Our campaign tools and tactics help you drive more leads into your practice.</p>
                    <h3>Stay on Track</h3>
                    <p>A strategy is only as good as the execution of it. Digital marketing morphs and expands continually – we keep you up-to-date on the latest strategies performing. </p>
                    <h3>Get Smart on Marketing</h3>
                    <p>We want to make you dangerous. In-depth coaching on every element of digital marketing, in quick, scalable steps. We breakdown: building a marketing strategy, driving growth through social platforms, successful email campaigns, unique content marketing, and more.</p>
                    <a href=" http://seven.loc/contact/" class="read-more">
                        LEARN MORE   <img src="{{ asset('frontend-dashboard/themes-assets/dist/img/arrow-right.png') }}" alt="arrow right"/>
                    </a>
                </div>
                <img src="http://seven.loc/wp-content/uploads/2022/07/Group-71-min.png" class="position-absolute" alt=""/>
            </div>
        </div>
    </div>
    <div class="default-padding ">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 offset-lg-1">
                    <img src="{{ asset('frontend-dashboard/themes-assets/dist/img/icon-logo_io.png') }}" style="max-width: 50px" alt="site logo" />

                    <h2>Interested in learning more? <span><a href="http://seven.loc/contact/">Let's connect.</a></span></h2>
                </div>
            </div>
        </div>
    </div>
@endsection
