<div class="account-info">
    <div class="bottom-border">
        <div class="row">
            <div class="col-10">
                <h4>Account Info</h4>
            </div>
            <div class="col-2">
                <a class="user-info-close" href="#"><i class="fa fa-times"></i></a>
            </div>
        </div>
    </div>
    <div class="person-holder bottom-border">
        <div class="row">
            <div class="col-12 col-md-4">
                <form id="user-image" method="post" enctype="multipart/form-data" >
                    <img src="http://seven.loc/wp-content/uploads/2021/04/ava_13.svg" alt="info-img" id="user_img_style" />
                    <div class="justify-content-start align-items-left">
                        <label for="user_image" class="custom-file-upload small">
                            <i class="fa fa-upload"></i>
                            Upload new                    </label>
                        <input type="file" required name="user_image" id="user_image"
                               value="Upload new" >
                    </div>
                </form>
                <img src="{{ asset('frontendDashboard/pluginAssets/img/loader.gif') }}"  id="loader-image" alt="loader" />
            </div>
            <div class="col-12 col-md-8">
                <h3>Roman Last Name</h3>
                <p>Roman LiveSite</p>
                <p>position1</p>
                <p>roman@growthlabs.info</p>
                <p>395</p>
                <p class="big">Connected Accounts</p>
                <div class="d-flex flex-row justify-content-start align-items-center">
                    <a class="social-link" href="https://www.linkedin.com/in/valeriia-dziaruk/"><i class="fa fa-linkedin"></i></a>
                    <a class="social-link" href="https://upqode.com/"><i class="fa fa-twitter"></i></a>
                    <a class="social-link" href="https://qoders.co/"><i class="fa fa-facebook"></i></a>
                    <div id="response"></div>
                    <a class="social-link" href="youtube"><i class="fa fa-youtube-play"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="joined-holder bottom-border">
        <div class="row">
            <div class="col-12">
                <p>
                    <span class="bold_span">
                        0  out of   23
                    </span>
                    lessons completed
                </p>
                <p>Joined since 2019</p>
                <p>
                    <span class="bold_span">0</span>
                    content downloads this month
                </p>
            </div>
        </div>
    </div>

    <div class="settings">
        <div class="row">
            <div class="col-12 ">
                <div class="settings-accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <div class="col-12 pl-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#acc-info-1" aria-expanded="false"
                                        aria-controls="acc-info-1">
                                    Settings
                                    <i class="fa fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                        <div id="acc-info-1" class="collapse">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <form id="account-info" method="post">

                                            <label for="credit-card" class="hidden">HubspotCollectedFormsWorkaround https://community.hubspot.com/t5/APIs-Integrations/How-to-stop-collected-forms-from-collecting-a-form/m-p/299172#M28102</label>

                                            <label for="cc-num" class="hidden">credit card HubspotCollectedFormsWorkaround https://community.hubspot.com/t5/APIs-Integrations/How-to-stop-collected-forms-from-collecting-a-form/m-p/299172#M28102</label>
                                            <input name="cc-num" class="hidden" required="" value="HubspotCollectedFormsWorkaround" id="cc-num">
                                            <input class="hidden InputElement is-empty Input Input--empty" autocomplete="cc-number" autocorrect="off" spellcheck="false" type="text" name="cardnumber" data-elements-stable-field-name="cardNumber" inputmode="numeric" aria-label="Credit or debit card number" placeholder="Card number" aria-invalid="false" value="">

                                            <div class="row">
                                                <div class="col-12 col-md-10">
                                                    <label for="" class="account-info-label">First Name *</label>
                                                    <input type="text" class="form-control" name="first_name" required
                                                           placeholder="First Name"
                                                           value="Roman">
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <label for="" class="account-info-label">Last Name *</label>
                                                    <input type="text" class="form-control" name="last_name" required
                                                           placeholder="Last Name"
                                                           value="Last Name">
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <label for="" class="account-info-label">Company Name *</label>
                                                    <input type="text" class="form-control" name="name" required
                                                           placeholder="Company Name"
                                                           value="Roman LiveSite">
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <label for="" class="account-info-label">Position *</label>
                                                    <input type="text" class="form-control" name="job-title" required
                                                           placeholder="Position"
                                                           value="position1">
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <label for="" class="account-info-label">Email *</label>
                                                    <input type="email" class="form-control" name="email" required
                                                           placeholder="Email"
                                                           value="roman@growthlabs.info">
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <label for="" class="account-info-label">Phone *</label>
                                                    <input type="text" class="form-control" name="phone" required
                                                           placeholder="Phone"
                                                           value="395">
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <label for="" class="account-info-label">Your Website *</label>
                                                    <input type="text" class="form-control" name="custom_site" required
                                                           placeholder="Your Website"
                                                           value="http://seven.loc/">
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <label for="" class="account-info-label">Facebook</label>
                                                    <input type="text" class="form-control" name="fb_link"
                                                           placeholder="Facebook"
                                                           value="https://qoders.co/">
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <label for="" class="account-info-label">Twitter</label>
                                                    <input type="text" class="form-control" name="tw_link"
                                                           placeholder="Twitter"
                                                           value="https://upqode.com/">
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <label for="" class="account-info-label">Linkedin</label>
                                                    <input type="text" class="form-control" name="lnkd_link"
                                                           placeholder="Linkedin"
                                                           value="https://www.linkedin.com/in/valeriia-dziaruk/">
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <label for="" class="account-info-label">YouTube</label>
                                                    <input type="text" class="form-control" name="ytb_link"
                                                           placeholder="YouTube"
                                                           value="youtube">
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <label for="" class="account-info-label">Meeting Calendar</label>
                                                    <input type="text" class="form-control" name="meet_link"
                                                           placeholder="Meeting Calendar"
                                                           value="https://apps.google.com/meet/">
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <label for="" class="account-info-label">Article Disclosure</label>
                                                    <textarea type="text" class="form-control" name="article_disclosure"
                                                              placeholder="Article Disclosure">TEST</textarea>
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <label for="" class="account-info-label">Set New Password Here</label>
                                                    <input type="text" class="form-control" name="password"
                                                           placeholder="Set New Password Here">
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <input type="submit" value="Save"
                                                           class="save_button_profile" >
                                                </div>
                                            </div>
                                        </form>
                                        <img src="{{ asset('frontendDashboard/pluginAssets/img/loader.gif') }}" id="loader"
                                             class="loader_style_settings_profile" alt="loader"  />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <div class="col-12 pl-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#acc-info-2" aria-expanded="false" aria-controls="acc-info-2">
                                    Contact Us                                <i class="fa fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                        <div id="acc-info-2" class="collapse">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-10">
                                        <a href="mailto:info@advisorio.co" target="_blank" rel="nofollow">info@advisorio.co</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <div class="col-12 pl-0">
                                <a href="http://seven.loc/history-of-invoices/">History of Invoices</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3">
        <p>Advisor I/O 2023 -
            <a href="/privacy-policy/">Privacy Policy</a>
            -
            <a href="/terms-of-service/">Terms of Service</a>
        </p>
    </div>
    <div class="mt-3">
        <p>
            <a href="http://seven.loc/wp-login.php?action=logout&amp;_wpnonce=94e541e3af" class="logout_button">
                Logout        </a>
        </p>
    </div>                </div>
