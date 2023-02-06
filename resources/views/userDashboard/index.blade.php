@extends('userDashboard.master')

@section('title')
    Home Dashboard Page
@endsection

@section('content')
    <div id="collapse-info"  class="welcome_block collapse">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-11">
                    <h4>Let's Get Into It</h4>
                    <p><strong>Content:</strong> You’ll find fully-customizable content across articles, email campaigns, ebooks, webinars, video scripts, etc.</p>
                    <p><strong>Coaching:</strong> Our video and guide-based coaching resources pair up with content, and are structured so that you can work at your own pace, tackle things that are important to you, and get into as much detail as you want.</p>
                    <p>Please ensure you have compliance review and approval prior to using any content through any channel.</p>
                </div>
                <div class="col-12 col-md-1 d-flex justify-content-end align-items-start">
                    <a href="#" class="close-collapse close-welcome"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container home-container ">
        <div class="row">
            <div class="col-12 latest_cpts_section">

                <div class=" template">

                    <!-- Latest Campaigns block -->
                    <div class="campaigns1 template-items">
                        <div class="sv-container all_campaigns_block sv-section ">
                            <h2 class="sv-title weight_title">Spotlight on Content</h2>

                            <div class="columns-grid">

                                <div class="campaign" id="13527">
                                    <div class="item " style="width: auto;">
                                        <p class="article_label_p Articles" >
                                            <a href="http://seven.loc/admin-content/"><b>Articles</b></a>
                                        </p>
                                        <a class="campaign__image d-block ribbon " href="http://seven.loc/articles/recession-recovery-or-both/"
                                           style="background-image: url(http://seven.loc/wp-content/uploads/2023/01/clicker-babu-aKBtbbVP970-unsplash-scaled.jpg);">
                                        </a>
                                        <div class="campaign__info ">
                                            <p class="category item-topic">Timely/Topical</p>
                                            <h3 class="campaign__title">
                                                <a href="http://seven.loc/articles/recession-recovery-or-both/">
                                                    Recession, Recovery, or Both?                                                </a>
                                            </h3>

                                        </div>
                                    </div>
                                </div>

                                <div class="campaign" id="11067">
                                    <div class="item " style="width: auto;">
                                        <p class="article_label_p Campaigns" >
                                            <a href="http://seven.loc/admin-campaigns/"><b>Campaigns</b></a>
                                        </p>
                                        <a class="campaign__image d-block ribbon view_campaign_btn" href="http://seven.loc/campaigns/october-market-commentary-fed-to-economy-drop-dead-economy-wait-no-were-slowing/"
                                           style="background-image: url(http://seven.loc/wp-content/uploads/2022/10/aaron-burden-Qy-CBKUg_X8-unsplash-scaled.jpg);">
                                        </a>
                                        <div class="campaign__info ">
                                            <div class="wordiframe" style="display: none;">
                                                <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2022/10/October-Market-Commentary-1.docx" frameborder="0">
                                                </iframe>
                                            </div>
                                            <p class="category item-topic">Commentary</p>
                                            <h3 class="campaign__title">
                                                <a class="campaign__button view_campaign_btn" >Commentary: October Market Commentary &#8211; Fed to Economy: Drop Dead. Economy: Wait, No – We’re Slowing</a>
                                            </h3>

                                            <div class="campaign__button download_campaign_btn hidden" >
                                                <a href="http://seven.loc/wp-content/uploads/2022/10/October-Market-Commentary-1.docx" class="sv-button sv-button--green"
                                                >
                                                    Download                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="campaign">
                                    <div class="item " style="width: auto;">


                                        <p class="article_label_p Resources" >
                                            <a href="http://seven.loc/admin-template/"><b>Resources</b></a>
                                        </p>
                                        <div class="item-image btn-view">
                                            <img src="http://seven.loc/wp-content/uploads/2022/09/Copy-of-Seven-Group-Blog-Covers-72.png" alt="image" >
                                        </div>


                                        <div class="item-content">
                                            <p class="category item-topic">
                                                Social Media Graphics        </p>
                                            <h4 class="item-title">
                                                <a href="$" class="btn btn-view"> How Do You Create a Retirement “Paycheck?”</a>
                                            </h4>
                                            <div class="item-btn-wrap hidden">
                                                <a class="btn btn-download" href="http://seven.loc/wp-content/uploads/2022/09/Copy-of-Seven-Group-Blog-Covers-72.png" download>
                                                    Download            </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="campaign" id="11009">
                                    <div class="item " style="width: auto;">
                                        <p class="article_label_p Coaching" >
                                            <a href="http://seven.loc/admin-training/"><b>Coaching</b></a>
                                        </p>
                                        <div id="video_module_block1" class="item-image "
                                             data-vimeo-url="https://vimeo.com/758449481/ebe266da72"
                                             data-video-current-seconds="0" style="width: 100%;">
                                        </div>
                                        <script src="https://player.vimeo.com/api/player.js"></script>
                                        <div class="campaign__info ">
                                            <p class="category item-topic">Platform Training</p>
                                            <h3 class="campaign__title">
                                                <a href="http://seven.loc/courses/start-here-welcome-to-advisor-i-o/">
                                                    Get Started with Advisor I/O                                                </a>
                                            </h3>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="template-modal">
                        <div class="template-modal-close-wrap">
                            <span class="template-modal-close"></span>
                        </div>
                        <div class="template-modal-container">

                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!--    <div class="row">-->
        <!--        <div class="col-12">-->
        <!--            <div class="white-element">-->
        <!--                --><!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->

        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="white-element ">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-15">Latest Articles</h2>
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="grey-box">
                                <div class="row no-gutters">
                                    <div class="col-12 col-lg-3">
                                        <a href="http://seven.loc/articles/recession-recovery-or-both/" class="read-article" data-post-id="13527" >
                                            <div class="post-image"
                                                 style="background-image: url(http://seven.loc/wp-content/uploads/2023/01/clicker-babu-aKBtbbVP970-unsplash-150x150.jpg);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-lg-9 d-flex justify-content-center align-items-center pl-0">
                                        <div class="row w-100">
                                            <div class="col-12 col-lg-9 d-flex flex-column justify-content-center align-items-start">
                                                <a href="http://seven.loc/articles/recession-recovery-or-both/" data-post-id="13527" class="read-article">
                                                    <p class="bold">Recession, Recovery, or Both?</p>
                                                </a>
                                                <!-- <p></p> -->
                                            </div>
                                            <div class="col-12 col-lg-3 d-flex flex-row justify-content-end align-items-center">
                                                <a href="http://seven.loc/articles/recession-recovery-or-both/" style="padding-right: 10px;">View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="grey-box">
                                <div class="row no-gutters">
                                    <div class="col-12 col-lg-3">
                                        <a href="http://seven.loc/articles/avoiding-the-big-retirement-risks/" class="read-article" data-post-id="13520" >
                                            <div class="post-image"
                                                 style="background-image: url(http://seven.loc/wp-content/uploads/2023/01/victoire-joncheray-EF0UG0xFgnA-unsplash-150x150.jpg);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-lg-9 d-flex justify-content-center align-items-center pl-0">
                                        <div class="row w-100">
                                            <div class="col-12 col-lg-9 d-flex flex-column justify-content-center align-items-start">
                                                <a href="http://seven.loc/articles/avoiding-the-big-retirement-risks/" data-post-id="13520" class="read-article">
                                                    <p class="bold">Avoiding the Big Retirement Risks</p>
                                                </a>
                                                <!-- <p></p> -->
                                            </div>
                                            <div class="col-12 col-lg-3 d-flex flex-row justify-content-end align-items-center">
                                                <a href="http://seven.loc/articles/avoiding-the-big-retirement-risks/" style="padding-right: 10px;">View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="grey-box">
                                <div class="row no-gutters">
                                    <div class="col-12 col-lg-3">
                                        <a href="http://seven.loc/articles/now-that-the-resolutions-part-is-over-lets-focus-on-resources/" class="read-article" data-post-id="13464" >
                                            <div class="post-image"
                                                 style="background-image: url(http://seven.loc/wp-content/uploads/2023/01/mads-schmidt-rasmussen-fhQ816rFmN0-unsplash-150x150.jpg);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-lg-9 d-flex justify-content-center align-items-center pl-0">
                                        <div class="row w-100">
                                            <div class="col-12 col-lg-9 d-flex flex-column justify-content-center align-items-start">
                                                <a href="http://seven.loc/articles/now-that-the-resolutions-part-is-over-lets-focus-on-resources/" data-post-id="13464" class="read-article">
                                                    <p class="bold">Now That the Resolutions Part Is Over, Let&#8217;s Focus on Resources</p>
                                                </a>
                                                <!-- <p></p> -->
                                            </div>
                                            <div class="col-12 col-lg-3 d-flex flex-row justify-content-end align-items-center">
                                                <a href="http://seven.loc/articles/now-that-the-resolutions-part-is-over-lets-focus-on-resources/" style="padding-right: 10px;">View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="grey-box">
                                <div class="row no-gutters">
                                    <div class="col-12 col-lg-3">
                                        <a href="http://seven.loc/articles/january-market-commentary-the-fed-goes-meta/" class="read-article" data-post-id="12817" >
                                            <div class="post-image"
                                                 style="background-image: url(http://seven.loc/wp-content/uploads/2023/01/cristina-munteanu-8P1ImpCGvno-unsplash3-150x150.jpg);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-lg-9 d-flex justify-content-center align-items-center pl-0">
                                        <div class="row w-100">
                                            <div class="col-12 col-lg-9 d-flex flex-column justify-content-center align-items-start">
                                                <a href="http://seven.loc/articles/january-market-commentary-the-fed-goes-meta/" data-post-id="12817" class="read-article">
                                                    <p class="bold">January Market Commentary: The Fed Goes Meta</p>
                                                </a>
                                                <!-- <p></p> -->
                                            </div>
                                            <div class="col-12 col-lg-3 d-flex flex-row justify-content-end align-items-center">
                                                <a href="http://seven.loc/articles/january-market-commentary-the-fed-goes-meta/" style="padding-right: 10px;">View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="grey-box">
                                <div class="row no-gutters">
                                    <div class="col-12 col-lg-3">
                                        <a href="http://seven.loc/articles/secure-2-0-act-enhancements-across-the-retirement-continuum/" class="read-article" data-post-id="12681" >
                                            <div class="post-image"
                                                 style="background-image: url(http://seven.loc/wp-content/uploads/2023/01/sara-cottle-6iS1PGNwwAI-unsplash1-150x150.jpg);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-lg-9 d-flex justify-content-center align-items-center pl-0">
                                        <div class="row w-100">
                                            <div class="col-12 col-lg-9 d-flex flex-column justify-content-center align-items-start">
                                                <a href="http://seven.loc/articles/secure-2-0-act-enhancements-across-the-retirement-continuum/" data-post-id="12681" class="read-article">
                                                    <p class="bold">SECURE 2.0 Act Enhancements Across the Retirement Continuum</p>
                                                </a>
                                                <!-- <p></p> -->
                                            </div>
                                            <div class="col-12 col-lg-3 d-flex flex-row justify-content-end align-items-center">
                                                <a href="http://seven.loc/articles/secure-2-0-act-enhancements-across-the-retirement-continuum/" style="padding-right: 10px;">View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="grey-box">
                                <div class="row no-gutters">
                                    <div class="col-12 col-lg-3">
                                        <a href="http://seven.loc/articles/the-secure-2-0-act-has-created-some-retirement-planning-opportunities-rmd-edition/" class="read-article" data-post-id="12669" >
                                            <div class="post-image"
                                                 style="background-image: url(http://seven.loc/wp-content/uploads/2023/01/ian-schneider-PAykYb-8Er8-unsplash-150x150.jpg);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-lg-9 d-flex justify-content-center align-items-center pl-0">
                                        <div class="row w-100">
                                            <div class="col-12 col-lg-9 d-flex flex-column justify-content-center align-items-start">
                                                <a href="http://seven.loc/articles/the-secure-2-0-act-has-created-some-retirement-planning-opportunities-rmd-edition/" data-post-id="12669" class="read-article">
                                                    <p class="bold">The SECURE 2.0 Act Has Created Some Retirement Planning Opportunities: RMD Edition</p>
                                                </a>
                                                <!-- <p></p> -->
                                            </div>
                                            <div class="col-12 col-lg-3 d-flex flex-row justify-content-end align-items-center">
                                                <a href="http://seven.loc/articles/the-secure-2-0-act-has-created-some-retirement-planning-opportunities-rmd-edition/" style="padding-right: 10px;">View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 col-12 d-flex flex-row justify-content-end align-items-center link-block">
                            <a href="http://seven.loc/admin-content/" class="read-more">See More <img src="./dist/img/arrow-right.png" alt="arrow right"></a>
                        </div>
                    </div>
                </div>

                <!--            <div class="white-element mb-100">-->
                <!--                <div class="row">-->
                <!--                    --><!--                </div>-->
                <!--            </div>-->

            </div>

            <div class="col-12 col-lg-5">

                <div class="white-element right-holder-video ">
                    <div class="row video_module_block" id="video_module player3">
                        <div class="col-12">

                            <h2>Happy Fall - New Announcements</h2>
                            <div class="video_module_text">
                                <p>h fghfgfgj</p>
                            </div>

                            <div id="video_module_block"
                                 data-vimeo-url="https://vimeo.com/761673430/09760f37c7"
                                 data-video-current-seconds="0">
                            </div>
                            <script src="https://player.vimeo.com/api/player.js"></script>

                        </div>
                    </div>
                </div>


                <div class="white-element feature_ebooks_blocks">
                    <div class="row">

                        <div class="col-12 feature_ebooks_block">
                            <h2 >Featured Resources</h2>
                            <div class="desc">
                                <p>eBooks are design-forward and offer tactical expertise on specific financial topics and niche-targeted areas of interest. They can be used as the asset in Facebook lead gen ads, can gather leads on your website, or can be used in Linkedin outreach.</p>
                            </div>

                            <div class="templates ">
                                <div class="item">


                                    <div class=" template item">
                                        <div class="item-image-wrap">
                                            <div class="item-image btn-view">
                                                <img src='http://seven.loc/wp-content/uploads/2022/05/4.jpg' alt='image'>            </div>
                                            <div class="item-image-ppt-pdf-word hidden" >
                                                <iframe src="http://seven.loc/wp-content/uploads/2022/05/Seven-Steps-to-Financial-Independence-for-Mid-Career-Professionals-1.pdf#view=Fit" frameborder="0" class="iframe-pdf">
                                                </iframe>
                                            </div>
                                        </div>
                                        <div class="item-text-wrap">
                                            <p class="feature_ebook_template_class">EBOOKS &AMP; GUIDES</p>
                                            <h4 class="feature_ebook_template_name item-title">
                                                <a class="btn-view"> 7 Steps to Financial Independence for Mid-Career Professionals eBook</a>
                                            </h4>

                                            <div class="item-btn-wrap">
                                                <a class="btn btn-download" href="http://seven.loc/wp-content/uploads/2022/05/Seven-Steps-to-Financial-Independence-for-Mid-Career-Professionals-1.pdf" download>
                                                    Download                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="item">


                                    <div class=" template item">
                                        <div class="item-image-wrap">
                                            <div class="item-image btn-view">
                                                <img src="http://seven.loc/wp-content/uploads/2022/02/2.png" alt="image" style="width: 100%;">
                                            </div>
                                        </div>
                                        <div class="item-text-wrap">
                                            <p class="feature_ebook_template_class">SOCIAL MEDIA GRAPHICS</p>
                                            <h4 class="feature_ebook_template_name item-title">
                                                <a class="btn-view"> A Note on the Invasion of Ukraine</a>
                                            </h4>

                                            <div class="item-btn-wrap">
                                                <a class="btn btn-download" href="http://seven.loc/wp-content/uploads/2022/02/2.png" download>
                                                    Download                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="item">


                                    <div class=" template item">
                                        <div class="item-image-wrap">
                                            <div class="item-image btn-view">
                                                <iframe src="//view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2021/07/Saving-for-College-Webinar-Emails-1-1.docx" frameborder="0">
                                                </iframe>
                                            </div>
                                        </div>
                                        <div class="item-text-wrap">
                                            <p class="feature_ebook_template_class">COLLEGE PLANNING WEBINAR CAMPAIGN</p>
                                            <h4 class="feature_ebook_template_name item-title">
                                                <a class="btn-view"> College Planning Webinar Campaign Emails</a>
                                            </h4>

                                            <div class="item-btn-wrap">
                                                <a class="btn btn-download" href="http://seven.loc/wp-content/uploads/2021/07/Saving-for-College-Webinar-Emails-1-1.docx" download>
                                                    Download                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="http://seven.loc/admin-template/" class="read-more">See More  <img src="./dist/img/arrow-right.png" alt="arrow right"></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <div class="campaigns-report campaigns-report--widget">

                    <!-- Latest Campaigns block -->
                    <div class="campaigns ">
                        <div class="sv-container all_campaigns_block sv-section ">
                            <h2 class="sv-title weight_title">Featured Campaigns</h2>

                            <div class="columns-grid">
                                <div class="campaign" id="10956">
                                    <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/changing-careers-and-401k-rollovers/"
                                       style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/01/istockphoto-870083342-170667a-e1643128755400.jpeg);">
                                        <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                                    </a>
                                    <div class="campaign__info">
                                        <div class="wordiframe" style="display: none;">
                                            <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2022/10/Changing-Careers-and-401k-Rollovers-1.docx" frameborder="0">
                                            </iframe>
                                        </div>
                                        <span class="campaign__number">
                Mid-Career Professionals, Pre-Retirement Planning, Timely/Topical        </span>
                                        <h3 class="campaign__title"><a href="http://seven.loc/campaigns/changing-careers-and-401k-rollovers/" style="pointer-events: none;">Drip: Changing Careers and 401(k) Rollovers</a></h3>
                                        <div class="campaign__button view_campaign_btn"  >
                                            <a href="http://seven.loc/wp-content/uploads/2022/10/Changing-Careers-and-401k-Rollovers-1.docx" class="sv-button sv-button--green"
                                            >
                                                View            </a>
                                        </div>
                                        <div class="campaign__button download_campaign_btn" >
                                            <a href="http://seven.loc/wp-content/uploads/2022/10/Changing-Careers-and-401k-Rollovers-1.docx" class="sv-button sv-button--green"
                                            >
                                                Download            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="campaign" id="10870">
                                    <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/current-market-environment-survey/"
                                       style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/06/Copy-of-Copy-of-Seven-Group-Blog-Covers-30-1.png);">
                                        <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                                    </a>
                                    <div class="campaign__info">
                                        <div class="wordiframe" style="display: none;">
                                            <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2022/01/Market-Survey-Referral-Campaign-7-1.docx" frameborder="0">
                                            </iframe>
                                        </div>
                                        <span class="campaign__number">
                        </span>
                                        <h3 class="campaign__title"><a href="http://seven.loc/campaigns/current-market-environment-survey/" style="pointer-events: none;">Survey: Current Market Environment</a></h3>
                                        <div class="campaign__button view_campaign_btn"  >
                                            <a href="http://seven.loc/wp-content/uploads/2022/01/Market-Survey-Referral-Campaign-7-1.docx" class="sv-button sv-button--green"
                                            >
                                                View            </a>
                                        </div>
                                        <div class="campaign__button download_campaign_btn" >
                                            <a href="http://seven.loc/wp-content/uploads/2022/01/Market-Survey-Referral-Campaign-7-1.docx" class="sv-button sv-button--green"
                                            >
                                                Download            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="campaign" id="8131">
                                    <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/prospecting-content-download-follow-up/"
                                       style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/06/daria-nepriakhina-guiQYiRxkZY-unsplash.jpg);">
                                        <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                                    </a>
                                    <div class="campaign__info">
                                        <div class="wordiframe" style="display: none;">
                                            <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2022/06/Prospecting-Content-Download-Follow-Up.docx" frameborder="0">
                                            </iframe>
                                        </div>
                                        <span class="campaign__number">
                Benefits Financial Advisor        </span>
                                        <h3 class="campaign__title"><a href="http://seven.loc/campaigns/prospecting-content-download-follow-up/" style="pointer-events: none;">Prospecting &#038; Onboarding: Content Download Follow Up</a></h3>
                                        <div class="campaign__button view_campaign_btn"  >
                                            <a href="http://seven.loc/wp-content/uploads/2022/06/Prospecting-Content-Download-Follow-Up.docx" class="sv-button sv-button--green"
                                            >
                                                View            </a>
                                        </div>
                                        <div class="campaign__button download_campaign_btn" >
                                            <a href="http://seven.loc/wp-content/uploads/2022/06/Prospecting-Content-Download-Follow-Up.docx" class="sv-button sv-button--green"
                                            >
                                                Download            </a>
                                        </div>
                                    </div>
                                </div>
                                <img src="./dist/img/loader.gif" id="loader_campaign" alt="loader" style=" display: none; position: absolute; left: 50%; top: 50%;"/>
                            </div>

                            <a href="http://seven.loc/admin-campaigns/" class="read-more">
                                See More                <img src="./dist/img/arrow-right.png" alt="arrow right">
                            </a>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <!-- <div class="row">
<div class="col-12">
            </div>
</div> -->

        <div class="row paring_webinars_block">
            <div class="col-12 col-lg-12">
                <div class="white-element ">
                    <div class=" pairing_us_block">

                        <h2 class="">Pairing UP Assets with Tactics</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6  left_part">
                                <div class="pairing_us_block_p">
                                    <p><strong>We talk about video a lot.</strong> But with good reason! A quick video intro on Linkedin with a link to a blog will boost your engagement. Using a video as the creative for a Facebook Lead Gen ad can increase conversion rates by as much as 30%. The key is to build your video &#8220;muscles&#8221; and get into a consistent cadence of production. We have a lot of ready-to-go video scripts that you&#8217;ll find in the Resources tab. They&#8217;re all timed for under 3 minutes, so you&#8217;ll get a sense of flow and length without having to worry about running over time.</p>
                                </div>
                                <div class="pairing_us_block_p">
                                    <p>Incorporating video into your marketing can seem like a heavy lift &#8211; but once you get the right tools and understand the process, it becomes a lot easier. <strong>We break down the essential for you.</strong></p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6  right_part">
                                <div class="templates" >

                                    <div class=" article_campaign_template" >


                                        <p class="categories_list">
                                            Article/Campaign/Resource                    </p>
                                        <div class="template">
                                            <div class="item" style="width: auto;">

                                                <h4 class="btn-view">
                                                    <a href="http://seven.loc/svn_tpl/5-things-to-know-if-you-have-stock-options/">
                                                        5 Things to Know if You Have Stock Options eBook        </a>
                                                </h4>

                                                <div class="item-image btn-view">
                                                    <img src='http://seven.loc/wp-content/uploads/2022/04/9.jpg' alt='image'>    </div>

                                                <div class="item-image-ppt-pdf-word hidden" >
                                                    <iframe src="http://seven.loc/wp-content/uploads/2022/04/Five-Things-to-Know-If-You-Have-Stock-Options.pdf#view=Fit" frameborder="0" class="iframe-pdf">
                                                    </iframe>
                                                </div>

                                                <div class="item-content">
                                                    <div class="item-btn-wrap">
                                                        <a class="btn btn-download" href="http://seven.loc/wp-content/uploads/2022/04/Five-Things-to-Know-If-You-Have-Stock-Options.pdf" >
                                                            Download            </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item course_block" >
                                        <p>Coaching</p>

                                        <h4 class="btn-view">
                                            <a href="http://seven.loc/courses/a-guide-to-twitter/">
                                                A Guide to Twitter                            </a>
                                        </h4>
                                        <div id="video_module_block1" class="item-image "
                                             data-vimeo-url="https://vimeo.com/389373480/06ca07d0bf"
                                             data-video-current-seconds="0">
                                        </div>
                                        <script src="https://player.vimeo.com/api/player.js"></script>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- <div class="col-12 col-lg-5">
    <div class="white-element mh-100">
        <h2>Group Coaching</h2>

<div class="top-border">
<div class="upcoming-accordion" id="accordion-upcoming">
                                <div class="card">
                <div class="card-header active " id="heading-1">
                    <div class="row">
                        <div class="col-12">
                            <h5>Replay: Getting Your Marketing Strategy in Order</h5>
                        </div>
                        <div class="col-12 card-link">
                            <a href="https://zoom.us/rec/share/FxNpP6NkenP3Ul_kDwDyEenZ8c9fsbfcbGaOnvlvHsGqy5MIorhBgoJ0ayeT2rXE.OklShhjpTXJWtWGs?startTime=1657825182000" target="_blank" class="sign_up_webinar">
                                Watch Replay                                    </a>
                        </div>
                        <div class="col-6 col-md-6 d-flex flex-row justify-content-start align-items-center">
                            <p>12:00am</p>
                            <p class="border-left">01/01/2024</p>
                        </div>
                        <div class="col-6 col-md-6 d-flex flex-row justify-content-end align-items-center">
                            <button class="btn btn-link card-button view_details" type="button"
                                    data-toggle="collapse"
                                    data-target="#collapse-9378" aria-expanded="true"
                                    aria-controls="collapse-9378"
                                    data-heading="heading-9378">
                                VIEW DETAILS                                    </button>
                        </div>
                    </div>
                </div>

                <div id="collapse-9378" class="collapse show"
                     aria-labelledby="headingOne"
                     data-parent="#accordion-upcoming">
                    <div class="card-body 1">
                        In this webinar, we dive into: How to Create a Marketing Strategy From Scratch, What to Do When it Comes to Content, and How You Should Define...                            </div>
                </div>
            </div>
                                        <div class="card">
                <div class="card-header  " id="heading-1">
                    <div class="row">
                        <div class="col-12">
                            <h5>The Financial Advisor&#8217;s Guide to Growing, Engaging, and Converting Your Email Lists</h5>
                        </div>
                        <div class="col-12 card-link">
                            <a href="https://zoom.us/rec/play/tzMPbGjZWCzU6d1axU9-CD5XZgi2eFzUUrjNGb0-jgw9BFzCpd8e8Cbqu_d12OtslQZHmorIPGS7y5iB.4pyNURKZglnbiB9f?startTime=1652903821000" target="_blank" class="sign_up_webinar">
                                Watch Now                                    </a>
                        </div>
                        <div class="col-6 col-md-6 d-flex flex-row justify-content-start align-items-center">
                            <p>2:00pm</p>
                            <p class="border-left">01/08/2023</p>
                        </div>
                        <div class="col-6 col-md-6 d-flex flex-row justify-content-end align-items-center">
                            <button class="btn btn-link card-button view_details" type="button"
                                    data-toggle="collapse"
                                    data-target="#collapse-7714" aria-expanded="true"
                                    aria-controls="collapse-7714"
                                    data-heading="heading-7714">
                                VIEW DETAILS                                    </button>
                        </div>
                    </div>
                </div>

                <div id="collapse-7714" class="collapse "
                     aria-labelledby="headingOne"
                     data-parent="#accordion-upcoming">
                    <div class="card-body 1">
                        Email marketing is still the workhorse for conversion within marketing. In fact,  On average, businesses can earn $44 for every dollar spent on email marketing. Watch Now.                            </div>
                </div>
            </div>
                                        <div class="card">
                <div class="card-header  " id="heading-1">
                    <div class="row">
                        <div class="col-12">
                            <h5>Workshop: Niches, Themes, and Channels: Building a Marketing Plan that Scales in 2022</h5>
                        </div>
                        <div class="col-12 card-link">
                            <a href="https://zoom.us/rec/play/La9efGLFDb4HedjysEqUtXGXgxCKxceEATR3Bu7_foDuk6aCBG2LXTdZXfpwubUvgG0efLYNI2zCdvEM.f27cFc262YcFoTOn?startTime=1639601806000" target="_blank" class="sign_up_webinar">
                                Watch the Replay                                    </a>
                        </div>
                        <div class="col-6 col-md-6 d-flex flex-row justify-content-start align-items-center">
                            <p>4:00pm</p>
                            <p class="border-left">18/05/2023</p>
                        </div>
                        <div class="col-6 col-md-6 d-flex flex-row justify-content-end align-items-center">
                            <button class="btn btn-link card-button view_details" type="button"
                                    data-toggle="collapse"
                                    data-target="#collapse-5570" aria-expanded="true"
                                    aria-controls="collapse-5570"
                                    data-heading="heading-5570">
                                VIEW DETAILS                                    </button>
                        </div>
                    </div>
                </div>

                <div id="collapse-5570" class="collapse "
                     aria-labelledby="headingOne"
                     data-parent="#accordion-upcoming">
                    <div class="card-body 1">
                        2021 was the year of the digital strategy. 2022 will be the year of scale. Carolyn Dalle-Molle and Alex Cavalieri will sit down to discuss.                            </div>
                </div>
            </div>
                                                                                                                    </div>
</div>
    </div>
</div> -->
        </div>

    </div>

@endsection
