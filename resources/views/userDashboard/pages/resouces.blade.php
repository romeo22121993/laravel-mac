@extends('userDashboard.master')

@section('title')
    Resources Dashboard Page
@endsection

@section('content')
    <div class="container template">
        <div class="sv-filter">
            <div class="sv-filter__top">
                <h3 class="sv-filter__title">
                    Resources            </h3>
                <p class="sv-filter__description">
                    Whether you need an outreach template for a client, social media graphic, or client presentation, here you'll find all of the downloads you'll need to conduct business development and marketing.            </p>
            </div>

            <form action="#" method="post" class="sv-filter__form" id="js_svTplFilter">

                <input type="hidden" name="action" value="svnGetTemplates">
                <input type="hidden" name="page" value="1">

                <div class="sv-filter__item">
                    <label for="sv-filter-topic" class="sv-tooltip-container">
                        Topic                    </label>
                    <span class="select-wrapper">
                        <select name="topic" id="sv-filter-topic">
                            <option value="0">
                                All                            </option>
                                                            <option value="68">
                                    College Planning Webinar Campaign                                </option>
                                                            <option value="101">
                                    eBooks &amp; Guides                                </option>
                                                            <option value="98">
                                    Executive Compensation Webinar Campaign                                </option>
                                                            <option value="75">
                                    LinkedIn Outreach Templates                                </option>
                                                            <option value="69">
                                    Retirement Income Webinar Campaign                                </option>
                                                            <option value="61">
                                    Social Media Graphics                                </option>
                                                            <option value="70">
                                    Social Security Webinar Campaign                                </option>
                                                            <option value="76">
                                    Survey-Referral Campaigns                                </option>
                                                            <option value="73">
                                    Tax Planning Webinar Campaign                                </option>
                                                            <option value="65">
                                    Video Scripts                                </option>
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
                            <img src="http://seven.loc/wp-content/uploads/2022/09/Copy-of-Seven-Group-Blog-Covers-72.png" alt="image">
                        </div>

                        <div class="item-content">
                    <span class="item-topic">
                Social Media Graphics            </span>
                            <h4 class="item-title">
                                How Do You Create a Retirement “Paycheck?”        </h4>
                            <div class="item-btn-wrap">
                                <a href="#" class="btn btn-view">
                                    View            </a>
                                <a class="btn btn-download" href="http://seven.loc/wp-content/uploads/2022/09/Copy-of-Seven-Group-Blog-Covers-72.png" download="">
                                    Download            </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">


                        <div class="item-image btn-view">
                            <img src="http://seven.loc/wp-content/uploads/2022/09/Copy-of-Seven-Group-Blog-Covers-70.png" alt="image">
                        </div>

                        <div class="item-content">
                    <span class="item-topic">
                Social Media Graphics            </span>
                            <h4 class="item-title">
                                Should a Trust Be Part of Your Estate Plan?        </h4>
                            <div class="item-btn-wrap">
                                <a href="#" class="btn btn-view">
                                    View            </a>
                                <a class="btn btn-download" href="http://seven.loc/wp-content/uploads/2022/09/Copy-of-Seven-Group-Blog-Covers-70.png" download="">
                                    Download            </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">


                        <div class="item-image btn-view">
                            <img src="http://seven.loc/wp-content/uploads/2022/09/Copy-of-Seven-Group-Blog-Covers-68.png" alt="image">
                        </div>

                        <div class="item-content">
                    <span class="item-topic">
                Social Media Graphics            </span>
                            <h4 class="item-title">
                                A Disability Insurance Primer        </h4>
                            <div class="item-btn-wrap">
                                <a href="#" class="btn btn-view">
                                    View            </a>
                                <a class="btn btn-download" href="http://seven.loc/wp-content/uploads/2022/09/Copy-of-Seven-Group-Blog-Covers-68.png" download="">
                                    Download            </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">


                        <div class="item-image btn-view">
                            <img src="http://seven.loc/wp-content/uploads/2022/09/Copy-of-Seven-Group-Blog-Covers-67.png" alt="image">
                        </div>

                        <div class="item-content">
                    <span class="item-topic">
                Social Media Graphics            </span>
                            <h4 class="item-title">
                                Is it Time for an Umbrella Policy?        </h4>
                            <div class="item-btn-wrap">
                                <a href="#" class="btn btn-view">
                                    View            </a>
                                <a class="btn btn-download" href="http://seven.loc/wp-content/uploads/2022/09/Copy-of-Seven-Group-Blog-Covers-67.png" download="">
                                    Download            </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">


                        <div class="item-image btn-view">
                            <img src="http://seven.loc/wp-content/uploads/2022/09/Copy-of-Seven-Group-Blog-Covers-64.png" alt="image">
                        </div>

                        <div class="item-content">
                    <span class="item-topic">
                Social Media Graphics            </span>
                            <h4 class="item-title">
                                Do You Need A Budget In Retirement?        </h4>
                            <div class="item-btn-wrap">
                                <a href="#" class="btn btn-view">
                                    View            </a>
                                <a class="btn btn-download" href="http://seven.loc/wp-content/uploads/2022/09/Copy-of-Seven-Group-Blog-Covers-64.png" download="">
                                    Download            </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">


                        <div class="item-image btn-view">
                            <img src="http://seven.loc/wp-content/uploads/2022/09/Copy-of-Seven-Group-Blog-Covers-63.png" alt="image">
                        </div>

                        <div class="item-content">
                    <span class="item-topic">
                Social Media Graphics            </span>
                            <h4 class="item-title">
                                Planning for the Five Big Tax Challenges in Retirement        </h4>
                            <div class="item-btn-wrap">
                                <a href="#" class="btn btn-view">
                                    View            </a>
                                <a class="btn btn-download" href="http://seven.loc/wp-content/uploads/2022/09/Copy-of-Seven-Group-Blog-Covers-63.png" download="">
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
