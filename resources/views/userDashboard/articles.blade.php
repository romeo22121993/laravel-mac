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
                    Our content is written to position you as an expert and connect with clients and prospects by building trust with empathy, humor, and expertise.            </p>
            </div>

            <p class="sv-filter__statistic sv-tooltip-container">
                0 Downloads for Feb            <span class="sv-tooltip sv-tooltip--big" data-tooltip="The amount of downloads you have available this month. Every time you download a a piece, this will populate."></span>
            </p>

            <form action="#" method="post" class="sv-filter__form articles_filtering">

                <div class="sv-filter__item">
                    <label for="sv-filter-topic" class="sv-tooltip-container">
                        Topic                    <span class="sv-tooltip sv-tooltip--big sv-tooltip--in-line" data-tooltip="Use this filter if you're looking for a specific topic like retirement or college planning"></span>
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
                                                      <option value="estate-planning">Estate Planning</option>
                                                      <option value="executive-compensation">Executive Compensation</option>
                                                      <option value="insurance">Insurance</option>
                                                      <option value="investing">Investing</option>
                                                      <option value="life-management">Life Management</option>
                                                      <option value="lifestyle">Lifestyle</option>
                                                      <option value="mid-career-professionals">Mid-Career Professionals</option>
                                                      <option value="pre-retirement-planning">Pre-Retirement Planning</option>
                                                      <option value="retirement-planning">Retirement Planning</option>
                                                      <option value="small-business-and-practice-management">Small Business &amp; Practice Management</option>
                                                      <option value="social-security">Social Security</option>
                                                      <option value="tax-planning">Tax Planning</option>
                                                      <option value="timely-topical">Timely/Topical</option>
                                                      <option value="women-investors">Women Investors</option>
                                                      <option value="working-with-financial-advisor">Working With a Financial Advisor</option>
                                             </select>
                </span>
                </div>

                <div class="sv-filter__item d-none">
                    <label for="sv-filter-type" class="sv-tooltip-container">
                        Type                    <span class="sv-tooltip sv-tooltip--big sv-tooltip--in-line" data-tooltip="Use this filter if you're looking for a certain type of communication, whether it be an email or video"></span>
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
                        Original vs Edited                    <span class="sv-tooltip sv-tooltip--big sv-tooltip--in-line" data-tooltip="You can use this filter to find articles you specifically edited. Use the drop down to show only those articles that you have edited."></span>
                    </label>
                    <span class="select-wrapper">
                    <select name="filter_edited_original" id="sv-filter-original-edited">
                        <option value="all">All</option>
                        <option value="original">Original</option>
                        <option value="edited">Edited</option>
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

                        <tbody class="body-items" data-all="179" data-getcat="all" data-cpt="articles" data-gettype="all" data-getsort="all" data-get_article_type="all" data-page="1">
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
                        </tr>                        <tr class="item">
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
                        </tr>                        <tr class="item">
                            <td>
                                <a href="http://seven.loc/articles/now-that-the-resolutions-part-is-over-lets-focus-on-resources/">
                                    <img alt="img1" src="http://seven.loc/wp-content/uploads/2023/01/mads-schmidt-rasmussen-fhQ816rFmN0-unsplash-150x150.jpg">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/articles/now-that-the-resolutions-part-is-over-lets-focus-on-resources/">
                                    Now That the Resolutions Part Is Over, Let's Focus on Resources        </a>
                                <p class="grey"></p>
                            </td>
                            <td> 2023/01/20 </td>
                            <td colspan="1"> Life Management<br>Lifestyle<br>Timely/Topical<br>Working With a Financial Advisor  </td>
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
                                <a class="btn btn-view read-article" data-post-id="13464" href="http://seven.loc/articles/now-that-the-resolutions-part-is-over-lets-focus-on-resources/">
                                    View        </a>
                            </td>
                        </tr>                        <tr class="item">
                            <td>
                                <a href="http://seven.loc/articles/january-market-commentary-the-fed-goes-meta/">
                                    <img alt="img1" src="http://seven.loc/wp-content/uploads/2023/01/cristina-munteanu-8P1ImpCGvno-unsplash3-150x150.jpg">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/articles/january-market-commentary-the-fed-goes-meta/">
                                    January Market Commentary: The Fed Goes Meta        </a>
                                <p class="grey"></p>
                            </td>
                            <td> 2023/01/09 </td>
                            <td colspan="1"> Commentary  </td>
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
                                <a class="btn btn-view read-article" data-post-id="12817" href="http://seven.loc/articles/january-market-commentary-the-fed-goes-meta/">
                                    View        </a>
                            </td>
                        </tr>                        <tr class="item">
                            <td>
                                <a href="http://seven.loc/articles/secure-2-0-act-enhancements-across-the-retirement-continuum/">
                                    <img alt="img1" src="http://seven.loc/wp-content/uploads/2023/01/sara-cottle-6iS1PGNwwAI-unsplash1-150x150.jpg">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/articles/secure-2-0-act-enhancements-across-the-retirement-continuum/">
                                    SECURE 2.0 Act Enhancements Across the Retirement Continuum        </a>
                                <p class="grey"></p>
                            </td>
                            <td> 2023/01/01 </td>
                            <td colspan="1"> Pre-Retirement Planning<br>Retirement Planning<br>Timely/Topical  </td>
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
                                <a class="btn btn-view read-article" data-post-id="12681" href="http://seven.loc/articles/secure-2-0-act-enhancements-across-the-retirement-continuum/">
                                    View        </a>
                            </td>
                        </tr>                        <tr class="item">
                            <td>
                                <a href="http://seven.loc/articles/the-secure-2-0-act-has-created-some-retirement-planning-opportunities-rmd-edition/">
                                    <img alt="img1" src="http://seven.loc/wp-content/uploads/2023/01/ian-schneider-PAykYb-8Er8-unsplash-150x150.jpg">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/articles/the-secure-2-0-act-has-created-some-retirement-planning-opportunities-rmd-edition/">
                                    The SECURE 2.0 Act Has Created Some Retirement Planning Opportunities: RMD Edition        </a>
                                <p class="grey"></p>
                            </td>
                            <td> 2023/01/01 </td>
                            <td colspan="1"> Pre-Retirement Planning<br>Retirement Planning<br>Tax Planning  </td>
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
                                <a class="btn btn-view read-article" data-post-id="12669" href="http://seven.loc/articles/the-secure-2-0-act-has-created-some-retirement-planning-opportunities-rmd-edition/">
                                    View        </a>
                            </td>
                        </tr>                        <tr class="item">
                            <td>
                                <a href="http://seven.loc/articles/making-the-retirement-leap-in-2023/">
                                    <img alt="img1" src="http://seven.loc/wp-content/uploads/2022/12/caleb-weiner-7KV6F3YWkg0-unsplash-150x150.jpg">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/articles/making-the-retirement-leap-in-2023/">
                                    Making the Retirement Leap in 2023        </a>
                                <p class="grey"></p>
                            </td>
                            <td> 2022/12/21 </td>
                            <td colspan="1"> Pre-Retirement Planning<br>Retirement Planning<br>Timely/Topical  </td>
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
                                <a class="btn btn-view read-article" data-post-id="12636" href="http://seven.loc/articles/making-the-retirement-leap-in-2023/">
                                    View        </a>
                            </td>
                        </tr>                        <tr class="item">
                            <td>
                                <a href="http://seven.loc/articles/tuning-up-your-portfolio-for-2023/">
                                    <img alt="img1" src="http://seven.loc/wp-content/uploads/2022/12/samuel-ramos-DXWuQdNeSX4-unsplash-150x150.jpg">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/articles/tuning-up-your-portfolio-for-2023/">
                                    Tuning Up Your Portfolio for 2023        </a>
                                <p class="grey"></p>
                            </td>
                            <td> 2022/12/20 </td>
                            <td colspan="1"> Investing<br>Mid-Career Professionals<br>Pre-Retirement Planning<br>Retirement Planning<br>Timely/Topical  </td>
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
                                <a class="btn btn-view read-article" data-post-id="12584" href="http://seven.loc/articles/tuning-up-your-portfolio-for-2023/">
                                    View        </a>
                            </td>
                        </tr>                        <tr class="item">
                            <td>
                                <a href="http://seven.loc/articles/managing-your-stock-options-during-a-transition/">
                                    <img alt="img1" src="http://seven.loc/wp-content/uploads/2022/12/teleterapia-fi-dc__QSLnHoA-unsplash-150x150.jpg">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/articles/managing-your-stock-options-during-a-transition/">
                                    Managing Your Stock Options During a Transition        </a>
                                <p class="grey"></p>
                            </td>
                            <td> 2022/12/11 </td>
                            <td colspan="1"> Equity Compensation<br>Life Management<br>Mid-Career Professionals  </td>
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
                                <a class="btn btn-view read-article" data-post-id="12518" href="http://seven.loc/articles/managing-your-stock-options-during-a-transition/">
                                    View        </a>
                            </td>
                        </tr>                        <tr class="item">
                            <td>
                                <a href="http://seven.loc/articles/december-market-commentary-the-predictive-limits-of-data/">
                                    <img alt="img1" src="http://seven.loc/wp-content/uploads/2022/12/maria-vojtovicova-5ClwlBO8YH8-unsplash-150x150.jpg">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/articles/december-market-commentary-the-predictive-limits-of-data/">
                                    December Market Commentary: The Predictive Limits of Data        </a>
                                <p class="grey"></p>
                            </td>
                            <td> 2022/12/07 </td>
                            <td colspan="1"> Commentary  </td>
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
                                <a class="btn btn-view read-article" data-post-id="12482" href="http://seven.loc/articles/december-market-commentary-the-predictive-limits-of-data/">
                                    View        </a>
                            </td>
                        </tr>                        <tr class="item">
                            <td>
                                <a href="http://seven.loc/articles/401k-plans-arent-just-for-retirement-but-starting-early-matters/">
                                    <img alt="img1" src="http://seven.loc/wp-content/uploads/2022/11/bench-accounting-8D2k7a3wMKQ-unsplash-150x150.jpg">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/articles/401k-plans-arent-just-for-retirement-but-starting-early-matters/">
                                    401(k) Plans Aren't Just for Retirement, But Starting Early Matters        </a>
                                <p class="grey"></p>
                            </td>
                            <td> 2022/11/29 </td>
                            <td colspan="1"> Life Management<br>Mid-Career Professionals<br>Pre-Retirement Planning  </td>
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
                                <a class="btn btn-view read-article" data-post-id="12455" href="http://seven.loc/articles/401k-plans-arent-just-for-retirement-but-starting-early-matters/">
                                    View        </a>
                            </td>
                        </tr>                        <tr class="item">
                            <td>
                                <a href="http://seven.loc/articles/managing-through-an-unexpected-job-transition/">
                                    <img alt="img1" src="http://seven.loc/wp-content/uploads/2022/11/pablo-garcia-saldana-lPQIndZz8Mo-unsplash-150x150.jpg">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/articles/managing-through-an-unexpected-job-transition/">
                                    Managing Through an Unexpected Job Transition        </a>
                                <p class="grey"></p>
                            </td>
                            <td> 2022/11/28 </td>
                            <td colspan="1"> Life Management<br>Timely/Topical  </td>
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
                                <a class="btn btn-view read-article" data-post-id="12441" href="http://seven.loc/articles/managing-through-an-unexpected-job-transition/">
                                    View        </a>
                            </td>
                        </tr>                        <tr class="item">
                            <td>
                                <a href="http://seven.loc/articles/surveying-the-alternatives-landscape/">
                                    <img alt="img1" src="http://seven.loc/wp-content/uploads/2022/11/valeria-fursa-zSrksQgp4W0-unsplash-150x150.jpg">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/articles/surveying-the-alternatives-landscape/">
                                    Surveying the Alternatives Landscape        </a>
                                <p class="grey"></p>
                            </td>
                            <td> 2022/11/27 </td>
                            <td colspan="1"> Investing  </td>
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
                                <a class="btn btn-view read-article" data-post-id="12422" href="http://seven.loc/articles/surveying-the-alternatives-landscape/">
                                    View        </a>
                            </td>
                        </tr>                        <tr class="item">
                            <td>
                                <a href="http://seven.loc/articles/universal-life-insurance-a-primer/">
                                    <img alt="img1" src="http://seven.loc/wp-content/uploads/2022/11/dominik-lange-VUOiQW4OeLI-unsplash-150x150.jpg">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/articles/universal-life-insurance-a-primer/">
                                    Universal Life Insurance: A Primer        </a>
                                <p class="grey"></p>
                            </td>
                            <td> 2022/11/16 </td>
                            <td colspan="1"> Insurance  </td>
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
                                <a class="btn btn-view read-article" data-post-id="12303" href="http://seven.loc/articles/universal-life-insurance-a-primer/">
                                    View        </a>
                            </td>
                        </tr>                        <tr class="item">
                            <td>
                                <a href="http://seven.loc/articles/november-market-commentary-powell-threads-the-needle/">
                                    <img alt="img1" src="http://seven.loc/wp-content/uploads/2022/11/anne-nygard-j-JvnrV0tqg-unsplash-150x150.jpg">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/articles/november-market-commentary-powell-threads-the-needle/">
                                    November Market Commentary: Powell Threads the Needle?        </a>
                                <p class="grey"></p>
                            </td>
                            <td> 2022/11/07 </td>
                            <td colspan="1"> Commentary  </td>
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
                                <a class="btn btn-view read-article" data-post-id="12238" href="http://seven.loc/articles/november-market-commentary-powell-threads-the-needle/">
                                    View        </a>
                            </td>
                        </tr>                        <tr class="item">
                            <td>
                                <a href="http://seven.loc/articles/inflation-has-tax-impacts-too/">
                                    <img alt="img1" src="http://seven.loc/wp-content/uploads/2022/10/todd-quackenbush-RmNAdoJNFJs-unsplash-150x150.jpg">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/articles/inflation-has-tax-impacts-too/">
                                    Inflation Has Tax Impacts, Too        </a>
                                <p class="grey"></p>
                            </td>
                            <td> 2022/10/26 </td>
                            <td colspan="1"> Tax Planning<br>Timely/Topical  </td>
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
                                <a class="btn btn-view read-article" data-post-id="11787" href="http://seven.loc/articles/inflation-has-tax-impacts-too/">
                                    View        </a>
                            </td>
                        </tr>                        <tr class="item">
                            <td>
                                <a href="http://seven.loc/articles/social-security-benefits-are-increasing-how-will-it-affect-your-taxes/">
                                    <img alt="img1" src="http://seven.loc/wp-content/uploads/2022/10/jess-bailey-f94JPVrDbnY-unsplash-150x150.jpg">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/articles/social-security-benefits-are-increasing-how-will-it-affect-your-taxes/">
                                    Social Security Benefits Are Increasing. How Will It Affect Your Taxes?        </a>
                                <p class="grey"></p>
                            </td>
                            <td> 2022/10/23 </td>
                            <td colspan="1"> Social Security<br>Tax Planning<br>Timely/Topical  </td>
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
                                <a class="btn btn-view read-article" data-post-id="11736" href="http://seven.loc/articles/social-security-benefits-are-increasing-how-will-it-affect-your-taxes/">
                                    View        </a>
                            </td>
                        </tr>                        <tr class="item">
                            <td>
                                <a href="http://seven.loc/articles/quitting-out-loud-the-early-retirement-decision/">
                                    <img alt="img1" src="http://seven.loc/wp-content/uploads/2022/10/harli-marten-M9jrKDXOQoU-unsplash-150x150.jpg">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/articles/quitting-out-loud-the-early-retirement-decision/">
                                    Quitting Out Loud – The Early Retirement Decision        </a>
                                <p class="grey"></p>
                            </td>
                            <td> 2022/10/19 </td>
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
                                <a class="btn btn-view read-article" data-post-id="11617" href="http://seven.loc/articles/quitting-out-loud-the-early-retirement-decision/">
                                    View        </a>
                            </td>
                        </tr>                        <tr class="item">
                            <td>
                                <a href="http://seven.loc/articles/keeping-your-balance-lowering-volatility-and-managing-risk/">
                                    <img alt="img1" src="http://seven.loc/wp-content/uploads/2022/10/aziz-acharki-U3C79SeHa7k-unsplash-150x150.jpg">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/articles/keeping-your-balance-lowering-volatility-and-managing-risk/">
                                    Keeping Your Balance: Lowering Volatility and Managing Risk        </a>
                                <p class="grey"></p>
                            </td>
                            <td> 2022/10/15 </td>
                            <td colspan="1"> Investing<br>Tax Planning  </td>
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
                                <a class="btn btn-view read-article" data-post-id="11503" href="http://seven.loc/articles/keeping-your-balance-lowering-volatility-and-managing-risk/">
                                    View        </a>
                            </td>
                        </tr>                        <tr class="item">
                            <td>
                                <a href="http://seven.loc/articles/october-market-commentary-fed-to-economy-drop-dead-economy-wait-no-were-slowing/">
                                    <img alt="img1" src="http://seven.loc/wp-content/uploads/2022/10/aaron-burden-Qy-CBKUg_X8-unsplash-150x150.jpg">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/articles/october-market-commentary-fed-to-economy-drop-dead-economy-wait-no-were-slowing/">
                                    October Market Commentary - Fed to Economy: Drop Dead. Economy: Wait, No – We’re Slowing        </a>
                                <p class="grey"></p>
                            </td>
                            <td> 2022/10/07 </td>
                            <td colspan="1"> Commentary  </td>
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
                                <a class="btn btn-view read-article" data-post-id="11054" href="http://seven.loc/articles/october-market-commentary-fed-to-economy-drop-dead-economy-wait-no-were-slowing/">
                                    View        </a>
                            </td>
                        </tr>                                            </tbody>
                    </table>
                    <a id="load_more_button_filtering">
                        Load More                        <img src="./dist/img/loader.gif" alt="loader_more" id="loader_more">
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
