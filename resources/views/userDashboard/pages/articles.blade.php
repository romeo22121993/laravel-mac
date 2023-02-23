@extends('userDashboard.master')

@section('title')
    Articles Dashboard Page
@endsection

@section('content')

    <div class="container content articles_dashboard_page">

        <div class="sv-filter">

            <div class="sv-filter__top">
                <h3 class="sv-filter__title">Customizable Content</h3>
                <p class="sv-filter__description">
                    Our content is written to position you as an expert and connect with clients and prospects by building trust with empathy, humor, and expertise.
                </p>
            </div>

            <p class="sv-filter__statistic sv-tooltip-container">
                {{ count($monthDownloads) }} Downloads for This Month
                <span class="sv-tooltip sv-tooltip--big" data-tooltip="The amount of downloads you have available this month. Every time you download a a piece, this will populate."></span>
            </p>

            <form action="#" method="post" class="sv-filter__form articles_filtering">

                <div class="sv-filter__item">
                    <label for="sv-filter-topic" class="sv-tooltip-container">
                        Topic
                        <span class="sv-tooltip sv-tooltip--big sv-tooltip--in-line" data-tooltip="Use this filter if you're looking for a specific topic like retirement or college planning"></span>
                    </label>
                    <span class="select-wrapper">
                        <select name="topic" id="sv-filter-topic">
                            <option value="all">All</option>
                              <option value="charitable-giving">Charitable Giving</option>
                              <option value="college-saving">College Saving</option>
                              <option value="commentary">Commentary</option>
                              <option value="crypto">Crypto</option>
                              <option value="divorce">Divorce</option>
                              <option value="education-savings">Education Savings</option>
                              <option value="equity-compensation">Equity Compensation</option>

                              <option value="women-investors">Women Investors</option>
                              <option value="working-with-financial-advisor">Working With a Financial Advisor</option>
                        </select>
                    </span>
                </div>

                <div class="sv-filter__item ">
                    <label for="sv-filter-type" class="sv-tooltip-container">
                        Type
                        <span class="sv-tooltip sv-tooltip--big sv-tooltip--in-line" data-tooltip="Use this filter if you're looking for a certain type of communication, whether it be an email or video"></span>
                    </label>
                    <span class="select-wrapper">
                    <select name="type" id="sv-filter-type">
                        <option value="all" selected="">All</option>
                        <option value="article">Article</option>
                        <option value="email">Email</option>
                        <option value="video">Video</option>
                    </select>
                </span>
                </div>

                <div class="sv-filter__item">
                    <label for="sv-filter-original-edited" class="sv-tooltip-container">
                        Original vs Edited
                        <span class="sv-tooltip sv-tooltip--big sv-tooltip--in-line" data-tooltip="You can use this filter to find articles you specifically edited. Use the drop down to show only those articles that you have edited."></span>
                    </label>
                    <span class="select-wrapper">
                    <select name="filter_edited_original" id="sv-filter-original-edited">
                        <option value="all">All</option>
                        <option value="original">Original</option>
                        <option value="cloned">Edited</option>
                    </select>
                </span>
                </div>
                <div class="sv-filter__item loader_block">
                    <img src="./dist/img/loader.gif" alt="loader" id="loader">
                </div>

            </form>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="table-responsive video">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Content</th>
                                <th></th>
                                <th>Upload Date</th>
                                <th>Categories</th>
                                <th>Edited On</th>
                                <th>Type</th>
                                <th>Approval</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="body-items" data-all="{{ $originalArticles->total() }}" data-getcat="all" data-cpt="articles" data-gettype="all" data-getsort="all" data-get_article_type="all" data-page="1">
                            <tr class="item">
                                <td>
                                    <a href="http://seven.loc/articles/recession-recovery-or-both/">
                                        <img alt="img1" src="http://seven.loc/wp-content/uploads/2023/01/clicker-babu-aKBtbbVP970-unsplash-150x150.jpg">
                                    </a>
                                </td>
                                <td>
                                    <a href="http://seven.loc/articles/recession-recovery-or-both/">
                                        Recession, Recovery, or Both?        </a>
                                    <p class="grey"></p>
                                </td>
                                <td> 2023/01/22 </td>
                                <td colspan="1"> Timely/Topical  </td>
                                <td colspan="1"> Original </td>
                                <td>
                                    <p class="type-title type-title--no-margin title-icon title-icon--article">
                                        Article        </p>
                                </td>
                                <td>
                                    <a class="btn btn-line finra" disabled="">
                                        <span>FINRA: Not Reviewed</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-view read-article" data-post-id="13527" href="http://seven.loc/articles/recession-recovery-or-both/">
                                        View        </a>
                                </td>
                            </tr>
                            <tr class="item">
                            <td>
                                <a href="http://seven.loc/articles/avoiding-the-big-retirement-risks/">
                                    <img alt="img1" src="http://seven.loc/wp-content/uploads/2023/01/victoire-joncheray-EF0UG0xFgnA-unsplash-150x150.jpg">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/articles/avoiding-the-big-retirement-risks/">
                                    Avoiding the Big Retirement Risks        </a>
                                <p class="grey"></p>
                            </td>
                            <td> 2023/01/21 </td>
                            <td colspan="1"> Pre-Retirement Planning<br>Retirement Planning  </td>
                            <td colspan="1"> Original </td>
                            <td>
                                <p class="type-title type-title--no-margin title-icon title-icon--article">
                                    Article        </p>
                            </td>
                            <td>
                                <a class="btn btn-line finra" disabled="">
                                    <span>FINRA: Not Reviewed</span>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-view read-article" data-post-id="13520" href="http://seven.loc/articles/avoiding-the-big-retirement-risks/">
                                    View        </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    @if ( $originalArticles->total() >= $countPerPage )
                        <a id="load_more_button_filtering">
                            Load More
                            <img src="./dist/img/loader.gif" alt="loader_more" id="loader_more">
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
