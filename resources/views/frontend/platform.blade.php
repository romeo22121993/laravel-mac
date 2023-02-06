@extends('frontend.master')

@section('title')
    Platform Page
@endsection

@section('content')

    <div class="inner_container services_block platform_block">
        <div class="container ">
            <div class="row">
                <div class="col">
                    <div class="inner_content">
                        <div class="row">
                            <div class="col-lg-8 col-sm-12">
                                <h4></h4>

                                <h1>Ready-to-go content. Email nurture campaigns. Sales presentations. All at your fingertips.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="smaller-padding programs">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h5></h5>
                    <h2>The Content, Tools, and Coaching <br>You Need to Scale</h2>
                    <p class="bigger"></p>
                </div>

            </div>
            <div class="row d-flex justify-content-between">


                <div class="col-lg-4 one-program-card">
                    <img src="{{ asset('frontend-dashboard/themes-assets/dist/img/icon_launchpad_alt.png') }}" alt=""/>
                    <h4></h4>
                    <h3>Fully-Customizable Content</h3>
                    <p>We provide ready-to-go content, out-of-the-box email campaigns, and downloadable resources to help you scale your content creation. </p>
                </div>


                <div class="col-lg-4 one-program-card">
                    <img src="{{ asset('frontend-dashboard/themes-assets/dist/img/icon_build.svg') }}" alt=""/>
                    <h4></h4>
                    <h3>On-Demand Coaching</h3>
                    <p>A full suite of video and guide-based coaching across every topic you need to market your practice in a digital world. You move at the pace that works for you; we coach you on marketing best practices and where others are finding success.</p>
                </div>


                <div class="col-lg-4 one-program-card">
                    <img src="{{ asset('frontend-dashboard/themes-assets/dist/img/icon_runway_alt.png') }}" alt=""/>
                    <h4></h4>
                    <h3>Peer Group Learning</h3>
                    <p> Topic-based group coaching, led and facilitated by experts, allows you to make contacts, get motivated and stay in touch with the financial advisor community.</p>
                </div>

            </div>
        </div>
    </div>

    <div class="smaller-padding our-philosophy platform-holder">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12 text-center">
                    <h2>The Platform</h2>
                    <p class="bigger p_before_video">Paired with our cohort training programs and community - you get access to our platform.</p>
                    <iframe src="https://player.vimeo.com/video/758451249?h=decfec953d" width="880"
                            height="700" frameborder="0"></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="box full mb-5">
                        <div class="row">
                            <div class="col-xs-12 col-lg-12 text-left">
                                <h3>Ready-to-Go Content, Campaigns, and Presentations</h3>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-xs-12 col-lg-6 text-left">
                                <div class="row">
                                    <div class="col-lg-3 d-flex justify-content-center align-items-start flex-row">
                                        <img src="{{ asset('frontend-dashboard/themes-assets/dist/img/timley_topics.png') }}" alt="p-img-1"/>
                                    </div>
                                    <div class="col-lg-9 d-flex justify-content-center align-items-start flex-column">
                                        <h5>Timely Topics</h5>
                                        <p>Your content needs to reflect what going on in the markets and how that impacts your clients. We position you as the expert at keeping your clients updated.</p>
                                    </div>
                                </div>
                            </div>



                            <div class="col-xs-12 col-lg-6 text-left">
                                <div class="row">
                                    <div class="col-lg-3 d-flex justify-content-center align-items-start flex-row">
                                        <img src="{{ asset('frontend-dashboard/themes-assets/dist/img/written.png') }}" alt="p-img-1"/>
                                    </div>
                                    <div class="col-lg-9 d-flex justify-content-center align-items-start flex-column">
                                        <h5>Written for the Investor</h5>
                                        <p>Great content means complex topics made simple and told through interesting stories. </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>

                        <div class="row">

                            <div class="col-xs-12 col-lg-6 text-left">
                                <div class="row">
                                    <div class="col-lg-3 d-flex justify-content-center align-items-start flex-row">
                                        <img src="{{ asset('frontend-dashboard/themes-assets/dist/img/finra.png') }}" alt="p-img-1"/>
                                    </div>
                                    <div class="col-lg-9 d-flex justify-content-center align-items-start flex-column">
                                        <h5>Ready-to-Send</h5>
                                        <p>All of our content is written with compliance in mind. Add your branding, send it out. Done. </p>
                                    </div>
                                </div>
                            </div>



                            <div class="col-xs-12 col-lg-6 text-left">
                                <div class="row">
                                    <div class="col-lg-3 d-flex justify-content-center align-items-start flex-row">
                                        <img src="{{ asset('frontend-dashboard/themes-assets/dist/img/custom.png') }}" alt="p-img-1"/>
                                    </div>
                                    <div class="col-lg-9 d-flex justify-content-center align-items-start flex-column">
                                        <h5>Customizable</h5>
                                        <p>The platform gives you the ability to customize/publish/distribute all articles, presentations, and campaigns – as easy as that.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>

                    </div>
                </div>
            </div>
            <div class="box full mb-5">
                <div class="row">
                    <div class="col-xs-12 col-lg-12 text-left">
                        <h3>Next-Gen Coaching Platform</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-lg-6 text-left">
                        <div class="row">
                            <div class="col-lg-3 d-flex justify-content-center align-items-start flex-row">
                                <img src="{{ asset('frontend-dashboard/themes-assets/dist/img/digital.png') }}" alt="http://seven.loc/wp-content/uploads/2019/11/digital.png"/>
                            </div>
                            <div class="col-lg-9 d-flex justify-content-center align-items-start flex-column">
                                <h5> Digestible Sessions</h5>
                                <p>Our approach to coaching breaks down digital into channels and strategies, so you can take it at your own speed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6 text-left">
                        <div class="row">
                            <div class="col-lg-3 d-flex justify-content-center align-items-start flex-row">
                                <img src="{{ asset('frontend-dashboard/themes-assets/dist/img/action.png') }}" alt="http://seven.loc/wp-content/uploads/2019/11/action.png"/>
                            </div>
                            <div class="col-lg-9 d-flex justify-content-center align-items-start flex-column">
                                <h5>Action-Oriented</h5>
                                <p>No theory – just proven, scalable, concrete steps to get you in front of clients and prospects.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-lg-6 text-left">
                        <div class="row">
                            <div class="col-lg-3 d-flex justify-content-center align-items-start flex-row">
                                <img src="{{ asset('frontend-dashboard/themes-assets/dist/img/digest.png') }}" alt="http://seven.loc/wp-content/uploads/2019/11/digest.png"/>
                            </div>
                            <div class="col-lg-9 d-flex justify-content-center align-items-start flex-column">
                                <h5>Digital-First</h5>
                                <p>We know your time is valuable. All training is done digitally, allowing you to access it anywhere, anytime. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6 text-left">
                        <div class="row">
                            <div class="col-lg-3 d-flex justify-content-center align-items-start flex-row">
                                <img src="{{ asset('frontend-dashboard/themes-assets/dist/img/custom.png') }}" alt="http://seven.loc/wp-content/uploads/2019/11/custom.png"/>
                            </div>
                            <div class="col-lg-9 d-flex justify-content-center align-items-start flex-column">
                                <h5>Topical</h5>
                                <p>Topic-oriented and based on your feedback, so we’re consistently in position to back you up. </p>
                            </div>
                        </div>
                    </div>
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

        <div class="container  sv-pricing__container">
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

    <div class="smaller-padding dashboard services_dashboard bg-color-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h5>The Dashboard</h5>
                    <h2>Your Dashboard</h2>
                </div>

            </div>
            <div id="slider" class="owl-carousel">


                <div class="item">
                    <div class="row">
                        <div class="col-xs-12 col-lg-7">
                            <img src="{{ asset('frontend-dashboard/themes-assets/dist/img/Body-min-2.png') }}" alt="Body-min"/>
                        </div>
                        <div class="col-xs-12 col-lg-5">
                            <h3>Hub Page</h3>
                            <p>Your central hub for all your marketing needs. The dashboard home page keeps you on-track with creating and distributing content to prospects and clients. This includes a weekly progress tracker, access to the latest investor-approved content and in-depth training modules, and upcoming live webinars.</p>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="row">
                        <div class="col-xs-12 col-lg-7">
                            <img src="{{ asset('frontend-dashboard/themes-assets/dist/img/Body-min-1.png') }}" alt="Body-min"/>
                        </div>
                        <div class="col-xs-12 col-lg-5">
                            <h3>Investor Content</h3>
                            <p>Educational and thought leadership articles, emails, and presentations on investing, savings, and retirement topics, including estate planning, social security, college savings, and macro trends. Each piece, customizable, created specifically for end-investors.</p>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="row">
                        <div class="col-xs-12 col-lg-7">
                            <img src="{{ asset('frontend-dashboard/themes-assets/dist/img/Body-min.png') }}" alt="Body-min"/>
                        </div>
                        <div class="col-xs-12 col-lg-5">
                            <h3>Coaching Lab</h3>
                            <p>In-depth coaching on every element of marketing, enabling you to become the marketing expert yourself. Features trainings on how to build a marketing strategy, to leveraging LinkedIn for growth, to building effective email campaigns.</p>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row slider-menu sv-slider-menu">
                <div class="col-xs-12 col-lg-7">
                    <div class="sv-slider-pagination">

                        <div class="slider-menu__dots">
                            <div class="loc_slider_nav prev">
                                <img src="{{ asset('frontend-dashboard/themes-assets/dist/img/arrow-left.svg') }}" alt="arrow left"/>
                            </div>
                            <div class="dot active"
                                 data-next="Investor Content"
                            >
                                <div></div>
                            </div>
                            <div class="dot "
                                 data-next="Coaching Lab"
                            >
                                <div></div>
                            </div>
                            <div class="dot "
                                 data-next="Hub Page"
                            >
                                <div></div>
                            </div>
                            <div class="loc_slider_nav next">
                                <img src="{{ asset('frontend-dashboard/themes-assets/dist/img/arrow-right.png') }}" alt="arrow right"/>
                            </div>

                            <div class="up-next">
                                <span>Next: </span>Investor Content
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
