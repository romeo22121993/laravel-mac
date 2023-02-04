@extends('frontend.master')

@section('title')
    Sign Up Page
@endsection

@section('content')

    <div class="inner_container services_block platform_block">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="inner_content">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 mb-2">
                                <h1>Simple pricing, <br> no hidden fees. </h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-sm-12">
                                <a class="btn btn-signup btn-lg js-scroll-to" data-scroll="#signup" href="http://laravel.loc/sign-up#signup">
                                    CHECK PRICING                                        </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sign_up_custom_content">
        <div class="smaller-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <p class="bigger"> Whether you’re an advisor and know what you want to accomplish from a marketing perspective, or you don't know where to start, we can help your practice. </p>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <p class="bigger">No setup fees. Each element of the platform is exclusive to you through your membership. </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="smaller-padding programs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <h5>THE BENEFITS</h5>
                        <h2>What The Platform Provides</h2>
                    </div>
                </div>

                <div class="row d-flex justify-content-between">
                    <div class="col-lg-4 one-program-card">
                        <h3>A Clear, Concise Plan</h3>
                        <p>We provide you with a marketing framework which includes what content you should be creating, what channels you should market on, and how to execute on everything. </p>
                    </div>
                    <div class="col-lg-4 one-program-card">
                        <h3>Unlimited Ready-to-Go Content</h3>
                        <p>You receive access to ready-to-go, downloadable content that can be sent and deployed directly from the platform or by adding it to your website. Add your branding, send it out. Done.</p>
                    </div>
                    <div class="col-lg-4 one-program-card">
                        <h3>All-Access to Coaching Lab</h3>
                        <p>We enable your marketing through on-demand, digital coaching modules covering a number of marketing topics. This allows you to access them anywhere, anytime, getting up to speed at your own pace.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="smaller-padding our-philosophy platform-holder signup-video">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 text-center">
                        <h2>The Platform</h2>
                        <p class="bigger p_before_video">Paired with our cohort training programs and community - you get access to our platform.</p>
                        <iframe src="https://player.vimeo.com/video/758451249?h=decfec953d" width="880"
                                height="700" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="sv-pricing default-padding sign_up_custom_page container" id="signup" >
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container registration-form-container">
            <div class="row">
                <div class="col">
                    <div class="box box-form pxy-20">
                        <div class="discount_block">
                            <div class="rcp_custom_discounts_fieldset ">
                                <fieldset class="rcp_custom_discounts_fieldset">
                                    <p id="rcpcustom_discount_code_wrap">
                                        <label >
                                            Discount Code                                                <span class="rcp_custom_discount_valid" style="display: none;"> - Success! Your discount has been applied!</span>
                                            <span class="rcp_custom_discount_invalid" style="display: none;"> - That code isn't quite right - please enter the code again</span>
                                            <img src="./dist/img/loader.gif" alt="loader"  id="loader" style=" display: none; width: 20px;  height: 20px;  margin-bottom: 5px;   margin-left: 16px;" />
                                        </label>
                                        <span class="rcp_discount_code_field_wrap">
                                                <input type="text" id="custom_rcp_discount_code" name="custom_rcp_discount" class="rcp_discount_code" value="">
                                                <button class="rcp_button custom_rcp_button" id="custom_rcp_apply_discount"> Apply</button>
                                            </span>
                                    </p>
                                </fieldset>
                            </div>
                        </div>

                        <div class="form_shortcode sign_up_form_inner" data-subscription_plan="Standard">

                            <h3 class="rcp_header">
                                Register New Account	</h3>

                            <form id="rcp_registration_form" class="rcp_form" method="POST" action="http://laravel.loc/sign-up/">
                                <p class="totat_area_text">Monthly Access Fee: $74.99 Per Month for a Minimum Initial Term of Six (6) Months. Cancel any time after six (6) months.</p>
                                <div class="">
                                    <fieldset class="rcp_user_fieldset">
                                        <div class="d-flex" style="flex-wrap: wrap;">
                                            <div class="col-lg-8 offset-lg-2 case-studies text-center">
                                                <h3>Your Information</h3>
                                            </div>
                                            <div class="col-lg-4 col-sm-12">
                                                <p id="rcp_user_login_wrap">
                                                    <label for="rcp_user_login">Username</label>
                                                    <input name="rcp_user_login" id="rcp_user_login" class="required" type="text" />
                                                </p>
                                            </div>
                                            <div class="col-lg-4 col-sm-12">
                                                <p id="rcp_user_first_wrap">
                                                    <label for="rcp_user_first">First Name</label>
                                                    <input name="rcp_user_first" id="rcp_user_first" type="text" />
                                                </p>
                                            </div>
                                            <div class="col-lg-4 col-sm-12">
                                                <p id="rcp_user_last_wrap">
                                                    <label for="rcp_user_last">Last Name</label>
                                                    <input name="rcp_user_last" id="rcp_user_last" type="text" />
                                                </p>
                                            </div>
                                            <div class="col-lg-6 col-sm-12" id="email_block" >
                                                <p id="rcp_user_email_wrap">
                                                    <label for="rcp_user_email">Email</label>
                                                    <input name="rcp_user_email" id="rcp_user_email" class="required" type="email" />
                                                </p>
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <p id="rcp_password_wrap">
                                                    <label for="rcp_password">Password</label>
                                                    <input name="rcp_user_pass" id="rcp_password" class="required" type="password"/>
                                                </p>
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <p id="rcp_password_again_wrap">
                                                    <label for="rcp_password_again">Confirm Password</label>
                                                    <input name="rcp_user_pass_confirm" id="rcp_password_again" class="required" type="password"/>
                                                </p>
                                            </div>
                                        </div>


                                        <input name="rcp_user_phase" id="rcp_user_phase" class="required" type="hidden" value="phase1"/>

                                        <div class="d-flex" style="flex-wrap: wrap;" id="additional_fields_rcp">
                                            <div class="col-lg-6 col-sm-12">
                                                <p id="rcp_user_phone_wrap">
                                                    <label for="rcp_user_phone">Phone number</label>
                                                    <input name="rcp_user_phone" id="rcp_user_phone" class="required" type="tel" value=""/>
                                                </p>
                                            </div>

                                            <div class="col-lg-6 col-sm-12">
                                                <p id="rcp_user_company_wrap">
                                                    <label for="rcp_user_company">Company name</label>
                                                    <input name="rcp_user_company" id="rcp_user_company" class="required" type="tel" value=""/>
                                                </p>
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <p id="rcp_user_position_wrap">
                                                    <label for="rcp_user_position">Position</label>
                                                    <input name="rcp_user_position" id="rcp_user_position" class="required" type="tel" value=""/>
                                                </p>
                                            </div>

                                        </div>


                                    </fieldset>

                                    <div class="col-lg-8 offset-lg-2 col-sm-12 case-studies text-center">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3>Payment information</h3>
                                                <p class="bigger">Monthly Access Fee: $74.99 Per Month for a Minimum Initial Term of Six (6) Months. Cancel any time after six (6) months.</p>
                                            </div>
                                            <div class="col-lg-12">
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <fieldset class="rcp_subscription_fieldset">
                                    <p class="rcp_subscription_message">Choose your membership level</p>
                                    <ul id="rcp_subscription_levels">
                                        <li class="rcp_subscription_level rcp_subscription_level_25">
                                            <input type="radio" id="rcp_subscription_level_25" class="required rcp_level" checked="checked" name="rcp_level" rel="74.99" value="25" />
                                            <label for="rcp_subscription_level_25">
                                                <span class="rcp_subscription_level_name">No discount code Self-Sign Up</span><span class="rcp_separator">&nbsp;-&nbsp;</span><span class="rcp_price" rel="74.99">&#36;74.99</span><span class="rcp_separator">&nbsp;-&nbsp;</span>
                                                <span class="rcp_level_duration">1&nbsp;Month</span>
                                                <div class="rcp_level_description"> No discount code, they be charge the $74.99/m</div>
                                            </label>

                                        </li>
                                        <li class="rcp_subscription_level rcp_subscription_level_26">
                                            <input type="radio" id="rcp_subscription_level_26" class="required rcp_level"  name="rcp_level" rel="60" value="26" data-has-trial="true"/>
                                            <label for="rcp_subscription_level_26">
                                                <span class="rcp_subscription_level_name">XYPNAI/O Self-Sign Up</span><span class="rcp_separator">&nbsp;-&nbsp;</span><span class="rcp_price" rel="60">&#36;60.00</span><span class="rcp_separator">&nbsp;-&nbsp;</span>
                                                <span class="rcp_level_duration">1&nbsp;Month</span>
                                                <div class="rcp_level_description"> XYPNAI/O they'd be charge $60/m with 3 months free</div>
                                            </label>

                                        </li>
                                        <li class="rcp_subscription_level rcp_subscription_level_27">
                                            <input type="radio" id="rcp_subscription_level_27" class="required rcp_level"  name="rcp_level" rel="0" value="27" />
                                            <label for="rcp_subscription_level_27">
                                                <span class="rcp_subscription_level_name">CIONFREE Self-Sign Up</span><span class="rcp_separator">&nbsp;-&nbsp;</span><span class="rcp_price" rel="0">free</span><span class="rcp_separator">&nbsp;-&nbsp;</span>
                                                <span class="rcp_level_duration">1&nbsp;Month</span>
                                                <div class="rcp_level_description"> CIONFREE they'd be charge $0</div>
                                            </label>

                                        </li>
                                        <li class="rcp_subscription_level rcp_subscription_level_28">
                                            <input type="radio" id="rcp_subscription_level_28" class="required rcp_level"  name="rcp_level" rel="60" value="28" data-has-trial="true"/>
                                            <label for="rcp_subscription_level_28">
                                                <span class="rcp_subscription_level_name">SANCAI/O Self Sign up</span><span class="rcp_separator">&nbsp;-&nbsp;</span><span class="rcp_price" rel="60">&#36;60.00</span><span class="rcp_separator">&nbsp;-&nbsp;</span>
                                                <span class="rcp_level_duration">1&nbsp;Month</span>
                                                <div class="rcp_level_description"> SANCAI/O Self Sign up</div>
                                            </label>

                                        </li>
                                    </ul>
                                </fieldset>

                                <div class="rcp_registration_total"></div>

                                <div class="rcp_gateway_fields">
                                    <input type="hidden" name="rcp_gateway" value="stripe" data-supports-recurring="yes" data-supports-trial="yes"/>
                                </div>


                                <input type="hidden" id="rcp-registration-type" name="registration_type" value="" />
                                <input type="hidden" id="rcp-membership-id" name="membership_id" value="0" />
                                <input type="hidden" id="rcp-payment-id" name="rcp_registration_payment_id" value="0" />

                                <p id="rcp_submit_wrap">
                                    <input type="hidden" name="rcp_register_nonce" value="2b8d14f399"/>
                                    <input type="submit" name="rcp_submit_registration" id="rcp_submit" class="rcp-button" value="Register"/>
                                </p>
                            </form>
                            <a href="#" id="custom_signup_form_before_submit" class="sv-button sv-button--green">Register</a>
                        </div>
                        <form action="" id="custom_signup_form" class="d-none">
                            <label>Company</label>
                            <input type="text" name="company"/>
                            <label>First Name*</label>
                            <input type="text" name="name"  required/>
                            <label>Last Name*</label>
                            <input type="text" name="lastname"  required/>
                            <label>Email*</label>
                            <input type="email" name="email" required/>
                            <input type="text" id="subscription_plan" name="subscription_plan" value="Standard" />
                            <input type="submit" value="Send" class="btn btn-primary contact_submit"/>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>


    <div class="privacy_block">
        <div class="col-lg-8 offset-lg-2 col-sm-12 case-studies text-center">
            <div class="row">
                <div class="col-12 one-card pxy-20 mt-3 ">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-start align-items-center flex-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" name="privacy" required id="privacyPolicy" >
                                <label class="form-check-label" for="privacyPolicy" style="display: inline-block;font-weight: normal;">
                                    I have read and agree to the                                        <a class="terms_signup_links" target="_blank" href="http://laravel.loc/privacy-policy/">
                                        Privacy Policy                                        </a>
                                    &                                        <a class="terms_signup_links" target="_blank" href="http://laravel.loc/terms-of-service/">
                                        Terms of Service                                        </a>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
