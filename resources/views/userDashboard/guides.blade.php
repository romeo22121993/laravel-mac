@extends('userDashboard.master')

@section('title')
    Guides Page
@endsection

@section('content')

    <div class="container template">
        <div class="sv-filter">
            <div class="sv-filter__top">
                <h3 class="sv-filter__title">
                    Coaching Guides            </h3>
                <p class="sv-filter__description">
                    Coaching Guides provide walkthroughs, step-by-step instructions with screenshots, process flows and narratives to help you with your brand strategy, marketing plan, and content creation and distribution.            </p>
            </div>

            <form action="#" method="post" class="sv-filter__form" id="js_GuideFilter">

                <input type="hidden" name="action" value="svnGetGuides">
                <input type="hidden" name="page" value="1">

                <div class="sv-filter__item  ">
                    <label for="sv-filter-topic" class="sv-tooltip-container">
                        Topic                    </label>
                    <span class="select-wrapper">
                        <select name="topic" id="sv-filter-topic">
                            <option value="0">
                                All                            </option>
                                                            <option value="146">
                                    Content Creation                                </option>
                                                            <option value="147">
                                    Facebook                                </option>
                                                            <option value="148">
                                    Google                                </option>
                                                            <option value="149">
                                    LInkedin                                </option>
                                                            <option value="150">
                                    Marketing Strategy                                </option>
                                                            <option value="151">
                                    Podcast                                </option>
                                                            <option value="152">
                                    PR                                </option>
                                                            <option value="153">
                                    Prospecting                                </option>
                                                            <option value="154">
                                    SEO                                </option>
                                                            <option value="155">
                                    Video                                </option>
                                                            <option value="156">
                                    Webinars                                </option>
                                                    </select>
                    </span>
                </div>
                <div class="sv-filter__item">
                    <label for="sv-filter-type" class="sv-tooltip-container">
                        Type of Asset                    </label>
                    <span class="select-wrapper">
                        <select name="tpasst" id="sv-filter-type">
                            <option value="0">
                                All                            </option>
                                                            <option value="pdf">
                                    PDF                                </option>
                                                            <option value="png">
                                    PNG                                </option>
                                                            <option value="ppt">
                                    Power Point Document                                </option>
                                                            <option value="doc">
                                    Word Document                                </option>
                                                    </select>
                    </span>
                </div>

            </form>
        </div>

        <div class="row">
            <div class="col-12">

                <div class="template-items htmlAjaxFrame">
                    <div class="item">


                        <div class="item-image btn-view">
                            <img src="http://seven.loc/wp-content/uploads/2022/07/google-business-profile.png" alt="image">                    <div class="item-image-ppt-pdf-word hidden">
                                <iframe src="http://seven.loc/wp-content/uploads/2022/07/GBP-Guide-1.pdf#view=Fit" frameborder="0" class="iframe-pdf">
                                </iframe>
                            </div>
                        </div>

                        <div class="item-content">
                    <span class="item-topic">
                Google            </span>
                            <h4 class="item-title">
                                Google Business Profile Guide        </h4>
                            <div class="item-btn-wrap">
                                <a href="#" class="btn btn-view">
                                    View            </a>
                                <a class="btn btn-download" href="http://seven.loc/wp-content/uploads/2022/07/GBP-Guide-1.pdf" download="">
                                    Download            </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">


                        <div class="item-image btn-view">
                            <img src="http://seven.loc/wp-content/uploads/2022/07/facebook-paid-ad.png" alt="image">                    <div class="item-image-ppt-pdf-word hidden">
                                <iframe src="http://seven.loc/wp-content/uploads/2022/07/FB-Ads-Guide-1.pdf#view=Fit" frameborder="0" class="iframe-pdf">
                                </iframe>
                            </div>
                        </div>

                        <div class="item-content">
                    <span class="item-topic">
                Facebook            </span>
                            <h4 class="item-title">
                                Facebook Ads Guide        </h4>
                            <div class="item-btn-wrap">
                                <a href="#" class="btn btn-view">
                                    View            </a>
                                <a class="btn btn-download" href="http://seven.loc/wp-content/uploads/2022/07/FB-Ads-Guide-1.pdf" download="">
                                    Download            </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">


                        <div class="item-image btn-view">
                            <img src="http://seven.loc/wp-content/uploads/2022/06/12.png" alt="image">                    <div class="item-image-ppt-pdf-word hidden">
                                <iframe src="http://seven.loc/wp-content/uploads/2022/06/PR-Process-.pdf#view=Fit" frameborder="0" class="iframe-pdf">
                                </iframe>
                            </div>
                        </div>

                        <div class="item-content">
                    <span class="item-topic">
                PR            </span>
                            <h4 class="item-title">
                                PR Outreach Process        </h4>
                            <div class="item-btn-wrap">
                                <a href="#" class="btn btn-view">
                                    View            </a>
                                <a class="btn btn-download" href="http://seven.loc/wp-content/uploads/2022/06/PR-Process-.pdf" download="">
                                    Download            </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">


                        <div class="item-image btn-view">
                            <img src="http://seven.loc/wp-content/uploads/2022/06/podcast-publishing-process.png" alt="image">                    <div class="item-image-ppt-pdf-word hidden">
                                <iframe src="http://seven.loc/wp-content/uploads/2022/06/Podcast-Publishing-Process-1.pdf#view=Fit" frameborder="0" class="iframe-pdf">
                                </iframe>
                            </div>
                        </div>

                        <div class="item-content">
                    <span class="item-topic">
                Podcast            </span>
                            <h4 class="item-title">
                                Podcast Publishing Process        </h4>
                            <div class="item-btn-wrap">
                                <a href="#" class="btn btn-view">
                                    View            </a>
                                <a class="btn btn-download" href="http://seven.loc/wp-content/uploads/2022/06/Podcast-Publishing-Process-1.pdf" download="">
                                    Download            </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">


                        <div class="item-image btn-view">
                            <img src="http://seven.loc/wp-content/uploads/2022/04/youtube-quick-guide.png" alt="image">                    <div class="item-image-ppt-pdf-word hidden">
                                <iframe src="http://seven.loc/wp-content/uploads/2022/04/YouTube-Optimization-Guide-1.pdf#view=Fit" frameborder="0" class="iframe-pdf">
                                </iframe>
                            </div>
                        </div>

                        <div class="item-content">
                    <span class="item-topic">
                Video            </span>
                            <h4 class="item-title">
                                YouTube Quick Guide        </h4>
                            <div class="item-btn-wrap">
                                <a href="#" class="btn btn-view">
                                    View            </a>
                                <a class="btn btn-download" href="http://seven.loc/wp-content/uploads/2022/04/YouTube-Optimization-Guide-1.pdf" download="">
                                    Download            </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">


                        <div class="item-image btn-view">
                            <img src="http://seven.loc/wp-content/uploads/2022/03/13.png" alt="image">                    <div class="item-image-ppt-pdf-word hidden">
                                <iframe src="//view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2022/03/Brand-Message-Positioning-1.docx" frameborder="0">
                                </iframe>
                            </div>
                        </div>

                        <div class="item-content">
                    <span class="item-topic">
                Marketing Strategy            </span>
                            <h4 class="item-title">
                                Brand and Positioning Guide        </h4>
                            <div class="item-btn-wrap">
                                <a href="#" class="btn btn-view">
                                    View            </a>
                                <a class="btn btn-download" href="http://seven.loc/wp-content/uploads/2022/03/Brand-Message-Positioning-1.docx" download="">
                                    Download            </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="buttonAjaxFrame">
                    <a id="load_more_template" class="tplLoadMore" data-page="2">
                        Load More            </a>
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

@endsection
