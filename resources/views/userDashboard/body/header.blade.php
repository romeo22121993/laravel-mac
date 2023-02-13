<div class="dashboard-page">

    <header class="header white-header" id="header" data-logged="yes">
        <div>
            <div class="header_top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-1 col-sm-1 d-block d-md-none d-flex align-items-center justify-content-center flex-row first_header order-2 order-sm-1">
                            <div class="hamburger-left mr-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                        </div>
                        <div class="col-12 col-sm-8 col-md dashboard_top_content logo-holder d-flex flex-column flex-sm-row align-items-center justify-content-md-start justify-content-left min-left second_header order-1 order-sm-2">
                            <a href="http://seven.loc/admin-dashboard/">
                                <img src="{{ asset('frontendDashboard/themesAssets/dist/img/logo-dashboard.svg') }}" id="logo_style_image" alt="logo">
                            </a>
                            <p id="welcome_p">Welcome, <span>{{ $currentUser->name }}</span></p>
                        </div>

                        <div class="col-11 col-sm col-md third_header order-3">

                            <div class="row dashboard_top_content d-flex flex-row align-items-center justify-content-end">
                                <div class="col-10 col-md-12 col-lg-12 border-left d-flex flex-row align-items-center justify-content-end">

                                    <div class="search">
                                        <div class="probox">
                                            <div class='proinput'>
                                                <form role="search" action='#' autocomplete="off" aria-label="Search form">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 512 512"><path d="M460.355 421.59l-106.51-106.512c20.04-27.553 31.884-61.437 31.884-98.037C385.73 124.935 310.792 50 218.685 50c-92.106 0-167.04 74.934-167.04 167.04 0 92.107 74.935 167.042 167.04 167.042 34.912 0 67.352-10.773 94.184-29.158L419.945 462l40.41-40.41zM100.63 217.04c0-65.095 52.96-118.055 118.056-118.055 65.098 0 118.057 52.96 118.057 118.056 0 65.097-52.96 118.057-118.057 118.057-65.096 0-118.055-52.96-118.055-118.056z"></path></svg>
                                                    <input type='search' class='orig'
                                                           placeholder='Find Content'
                                                           name='phrase' value=''
                                                           aria-label="Search input"
                                                           autocomplete="off"/>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sv-notifications js-notifications">
                                        <div class="sv-notifications__alert">
                                                            <span class="sv-notifications__counter">
                                                                28                                                        </span>
                                        </div>

                                        <div class="sv-notifications__wrapper">
                                            <p class="sv-notifications__head">Notifications</p>
                                            <ul class="sv-notifications__list">
                                                <li class="sv-notifications__item 543">
                                                    <a href="http://seven.loc/articles/recession-recovery-or-both/" class="sv-notifications__link articles"
                                                       data-id="543" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Recession, Recovery, or Both?                                                                                </span>
                                                        <span class="sv-notifications__time">2 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 542">
                                                    <a href="http://seven.loc/articles/recession-recovery-or-both/" class="sv-notifications__link articles"
                                                       data-id="542" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Recession, Recovery, or Both?                                                                                </span>
                                                        <span class="sv-notifications__time">2 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 541">
                                                    <a href="http://seven.loc/articles/avoiding-the-big-retirement-risks/" class="sv-notifications__link articles"
                                                       data-id="541" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Avoiding the Big Retirement Risks                                                                                </span>
                                                        <span class="sv-notifications__time">2 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 540">
                                                    <a href="http://seven.loc/articles/choosing-a-divorce-process-litigation-is-not-the-only-option/" class="sv-notifications__link articles"
                                                       data-id="540" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Choosing A Divorce Process - Litigation Is Not The Only Option                                                                                </span>
                                                        <span class="sv-notifications__time">2 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 539">
                                                    <a href="http://seven.loc/articles/your-investment-portfolio-asset-allocation-the-long-and-the-short-of-it/" class="sv-notifications__link articles"
                                                       data-id="539" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Your Investment Portfolio Asset Allocation – The Long and the Short of It                                                                                </span>
                                                        <span class="sv-notifications__time">2 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 538">
                                                    <a href="http://seven.loc/articles/your-investment-plan-should-reflect-your-needs/" class="sv-notifications__link articles"
                                                       data-id="538" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Women Invest Differently                                                                                </span>
                                                        <span class="sv-notifications__time">2 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 537">
                                                    <a href="http://seven.loc/articles/now-that-the-resolutions-part-is-over-lets-focus-on-resources/" class="sv-notifications__link articles"
                                                       data-id="537" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Now That the Resolutions Part Is Over, Let's Focus on Resources                                                                                </span>
                                                        <span class="sv-notifications__time">2 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 536">
                                                    <a href="http://seven.loc/articles/stock-options-an-owners-manual/" class="sv-notifications__link articles"
                                                       data-id="536" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Stock Options: An Owner's Manual                                                                                </span>
                                                        <span class="sv-notifications__time">2 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 535">
                                                    <a href="http://seven.loc/articles/reducing-the-tax-impact-of-equity-compensation-the-83b-election-3/" class="sv-notifications__link articles"
                                                       data-id="535" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Reducing the Tax Impact of Equity Compensation: The 83(b) Election                                                                                </span>
                                                        <span class="sv-notifications__time">2 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 534">
                                                    <a href="http://seven.loc/articles/managing-a-volatile-market-when-youre-close-to-retirement-three-things-to-know/" class="sv-notifications__link articles"
                                                       data-id="534" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Managing a Volatile Market When You're Close to Retirement - Three Things to Know                                                                                </span>
                                                        <span class="sv-notifications__time">2 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 533">
                                                    <a href="http://seven.loc/articles/your-guide-to-trusts-a-flexible-financial-planning-tool/" class="sv-notifications__link articles"
                                                       data-id="533" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Your Guide to Trusts: A Flexible Financial Planning Tool                                                                                 </span>
                                                        <span class="sv-notifications__time">2 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 532">
                                                    <a href="http://seven.loc/articles/its-called-an-estate-plan-but-successful-ones-start-now/" class="sv-notifications__link articles"
                                                       data-id="532" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Tax-Advantaged Gifting Strategies to Simplify Estate Planning                                                                                </span>
                                                        <span class="sv-notifications__time">2 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 531">
                                                    <a href="http://seven.loc/articles/three-questions-to-ask-yourself-for-a-better-financial-future/" class="sv-notifications__link articles"
                                                       data-id="531" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Three Questions to Ask Yourself for a Better Financial Future                                                                                </span>
                                                        <span class="sv-notifications__time">2 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 530">
                                                    <a href="http://seven.loc/articles/charitable-giving-is-increasing-and-evolving/" class="sv-notifications__link articles"
                                                       data-id="530" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Charitable Giving is Increasing – and Evolving                                                                                </span>
                                                        <span class="sv-notifications__time">2 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 529">
                                                    <a href="http://seven.loc/articles/the-structure-matters-choosing-the-right-one-for-your-business/" class="sv-notifications__link articles"
                                                       data-id="529" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Structure Matters: Choosing the Right One for Your Business                                                                                </span>
                                                        <span class="sv-notifications__time">2 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 528">
                                                    <a href="http://seven.loc/articles/long-term-care-insurance-an-evolved-and-essential-part-of-your-financial-plan/" class="sv-notifications__link articles"
                                                       data-id="528" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Long-Term Care Insurance: An Evolved and Essential Part of Your Financial Plan                                                                                </span>
                                                        <span class="sv-notifications__time">3 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 527">
                                                    <a href="http://seven.loc/articles/tax-planning-at-the-mid-stage-of-your-career/" class="sv-notifications__link articles"
                                                       data-id="527" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Tax Planning at the Mid-Stage of Your Career                                                                                </span>
                                                        <span class="sv-notifications__time">3 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 526">
                                                    <a href="http://seven.loc/articles/is-it-time-to-hire-a-financial-advisor-how-do-you-even-do-that/" class="sv-notifications__link articles"
                                                       data-id="526" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Is it Time to Hire a Financial Advisor? How Do You Even Do That?                                                                                </span>
                                                        <span class="sv-notifications__time">3 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 525">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="525" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">3 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 524">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="524" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">3 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 523">
                                                    <a href="http://seven.loc/articles/january-market-commentary-the-fed-goes-meta/" class="sv-notifications__link articles"
                                                       data-id="523" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | January Market Commentary: The Fed Goes Meta                                                                                </span>
                                                        <span class="sv-notifications__time">4 weeks ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 522">
                                                    <a href="http://seven.loc/articles/secure-2-0-act-enhancements-across-the-retirement-continuum/" class="sv-notifications__link articles"
                                                       data-id="522" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | SECURE 2.0 Act Enhancements Across the Retirement Continuum                                                                                </span>
                                                        <span class="sv-notifications__time">1 month ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 521">
                                                    <a href="http://seven.loc/articles/the-secure-2-0-act-has-created-some-retirement-planning-opportunities-rmd-edition/" class="sv-notifications__link articles"
                                                       data-id="521" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The SECURE 2.0 Act Has Created Some Retirement Planning Opportunities: RMD Edition                                                                                </span>
                                                        <span class="sv-notifications__time">1 month ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 520">
                                                    <a href="http://seven.loc/articles/making-the-retirement-leap-in-2023/" class="sv-notifications__link articles"
                                                       data-id="520" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Making the Retirement Leap in 2023                                                                                </span>
                                                        <span class="sv-notifications__time">1 month ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 519">
                                                    <a href="http://seven.loc/articles/tuning-up-your-portfolio-for-2023/" class="sv-notifications__link articles"
                                                       data-id="519" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Tuning Up Your Portfolio for 2023                                                                                </span>
                                                        <span class="sv-notifications__time">1 month ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 518">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="518" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">1 month ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 517">
                                                    <a href="http://seven.loc/articles/managing-your-stock-options-during-a-transition/" class="sv-notifications__link articles"
                                                       data-id="517" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Managing Your Stock Options During a Transition                                                                                </span>
                                                        <span class="sv-notifications__time">1 month ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 516">
                                                    <a href="http://seven.loc/articles/december-market-commentary-the-predictive-limits-of-data/" class="sv-notifications__link articles"
                                                       data-id="516" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | December Market Commentary: The Predictive Limits of Data                                                                                </span>
                                                        <span class="sv-notifications__time">1 month ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 515">
                                                    <a href="http://seven.loc/articles/401k-plans-arent-just-for-retirement-but-starting-early-matters/" class="sv-notifications__link articles"
                                                       data-id="515" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | 401(k) Plans Aren't Just for Retirement, But Starting Early Matters                                                                                </span>
                                                        <span class="sv-notifications__time">2 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 514">
                                                    <a href="http://seven.loc/articles/managing-through-an-unexpected-job-transition/" class="sv-notifications__link articles"
                                                       data-id="514" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Managing Through an Unexpected Job Transition                                                                                </span>
                                                        <span class="sv-notifications__time">2 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 513">
                                                    <a href="http://seven.loc/articles/surveying-the-alternatives-landscape/" class="sv-notifications__link articles"
                                                       data-id="513" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Surveying the Alternatives Landscape                                                                                </span>
                                                        <span class="sv-notifications__time">2 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 512">
                                                    <a href="http://seven.loc/articles/changing-jobs-what-happens-to-your-401k/" class="sv-notifications__link articles"
                                                       data-id="512" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Changing Jobs: What Happens to Your 401(k)?                                                                                </span>
                                                        <span class="sv-notifications__time">2 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 511">
                                                    <a href="http://seven.loc/articles/universal-life-insurance-a-primer/" class="sv-notifications__link articles"
                                                       data-id="511" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Universal Life Insurance: A Primer                                                                                </span>
                                                        <span class="sv-notifications__time">2 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 510">
                                                    <a href="http://seven.loc/articles/november-market-commentary-powell-threads-the-needle/" class="sv-notifications__link articles"
                                                       data-id="510" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | November Market Commentary: Powell Threads the Needle?                                                                                </span>
                                                        <span class="sv-notifications__time">2 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 509">
                                                    <a href="http://seven.loc/articles/tactics-to-boost-your-retirement-savings-if-youre-over-50-2/" class="sv-notifications__link articles"
                                                       data-id="509" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Tactics to Boost Your Retirement Savings – If You’re Over 50                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 508">
                                                    <a href="http://seven.loc/articles/its-called-an-estate-plan-but-successful-ones-start-now/" class="sv-notifications__link articles"
                                                       data-id="508" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Tax-Advantaged Gifting Strategies to Simplify Estate Planning                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 507">
                                                    <a href="http://seven.loc/articles/donor-advised-funds-tax-benefits-growth-and-control/" class="sv-notifications__link articles"
                                                       data-id="507" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Donor Advised Funds: Tax Benefits, Growth and Control                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 506">
                                                    <a href="http://seven.loc/articles/the-great-resignation-assessing-a-career-change/" class="sv-notifications__link articles"
                                                       data-id="506" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Great Resignation: Assessing a Career Change                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 505">
                                                    <a href="http://seven.loc/articles/long-term-care-insurance-an-evolved-and-essential-part-of-your-financial-plan/" class="sv-notifications__link articles"
                                                       data-id="505" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Long-Term Care Insurance: An Evolved and Essential Part of Your Financial Plan                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 504">
                                                    <a href="http://seven.loc/articles/staying-stable-with-sudden-wealth/" class="sv-notifications__link articles"
                                                       data-id="504" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Staying Stable With Sudden Wealth                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 503">
                                                    <a href="http://seven.loc/articles/is-it-time-for-an-umbrella-policy/" class="sv-notifications__link articles"
                                                       data-id="503" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Is it Time for an Umbrella Policy?                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 502">
                                                    <a href="http://seven.loc/articles/inflation-has-tax-impacts-too/" class="sv-notifications__link articles"
                                                       data-id="502" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Inflation Has Tax Impacts, Too                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 501">
                                                    <a href="http://seven.loc/articles/social-security-benefits-are-increasing-how-will-it-affect-your-taxes/" class="sv-notifications__link articles"
                                                       data-id="501" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Social Security Benefits Are Increasing. How Will It Affect Your Taxes?                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 500">
                                                    <a href="http://seven.loc/courses/organizing-your-content-in-order-to-scale/" class="sv-notifications__link courses"
                                                       data-id="500" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | Organizing Your Content in Order to Scale                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 499">
                                                    <a href="http://seven.loc/courses/email-marketing-building-a-consistent-communication/" class="sv-notifications__link courses"
                                                       data-id="499" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | How to Educate, Entertain, and Serve Your Audience via Email Marketing                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 498">
                                                    <a href="http://seven.loc/courses/start-here-welcome-to-advisor-i-o/" class="sv-notifications__link courses"
                                                       data-id="498" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | Get Started with Laravel Pro                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 497">
                                                    <a href="http://seven.loc/courses/graphic-creation-a-guide-to-canva/" class="sv-notifications__link courses"
                                                       data-id="497" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | Using Canva to Create Graphics for your Marketing Content                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 496">
                                                    <a href="http://seven.loc/courses/editing-a-video-in-camtasia-a-tactical-guide/" class="sv-notifications__link courses"
                                                       data-id="496" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | How to Edit a Video in Camtasia                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 495">
                                                    <a href="http://seven.loc/articles/quitting-out-loud-the-early-retirement-decision/" class="sv-notifications__link articles"
                                                       data-id="495" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Quitting Out Loud – The Early Retirement Decision                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 494">
                                                    <a href="http://seven.loc/articles/quitting-out-loud-the-early-retirement-decision/" class="sv-notifications__link articles"
                                                       data-id="494" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Quitting Out Loud – The Early Retirement Decision                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 493">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="493" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 492">
                                                    <a href="http://seven.loc/articles/keeping-your-balance-lowering-volatility-and-managing-risk/" class="sv-notifications__link articles"
                                                       data-id="492" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Keeping Your Balance: Lowering Volatility and Managing Risk                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 491">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="491" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Email Marketing Playbook                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 490">
                                                    <a href="http://seven.loc/articles/choosing-a-divorce-process-litigation-is-not-the-only-option/" class="sv-notifications__link articles"
                                                       data-id="490" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Choosing A Divorce Process - Litigation Is Not The Only Option                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 489">
                                                    <a href="http://seven.loc/articles/deciding-to-divorce-a-financial-action-plan/" class="sv-notifications__link articles"
                                                       data-id="489" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Deciding to Divorce: A Financial Action Plan                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 488">
                                                    <a href="http://seven.loc/articles/optimizing-spending-and-investing-during-retirement/" class="sv-notifications__link articles"
                                                       data-id="488" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Optimizing Spending and Investing During Retirement                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 487">
                                                    <a href="http://seven.loc/articles/the-great-resignation-assessing-a-career-change/" class="sv-notifications__link articles"
                                                       data-id="487" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Great Resignation: Assessing a Career Change                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 486">
                                                    <a href="http://seven.loc/campaigns/october-market-commentary-fed-to-economy-drop-dead-economy-wait-no-were-slowing/" class="sv-notifications__link campaigns"
                                                       data-id="486" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | October Market Commentary - Fed to Economy: Drop Dead. Economy: Wait, No – We’re Slowing                                                                                </span>
                                                        <span class="sv-notifications__time">3 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 485">
                                                    <a href="http://seven.loc/campaigns/changing-careers-and-401k-rollovers/" class="sv-notifications__link campaigns"
                                                       data-id="485" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Changing Careers and 401(k) Rollovers                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 484">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="484" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 483">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="483" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 482">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="482" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 481">
                                                    <a href="http://seven.loc/campaigns/win-back-campaign-email-template/" class="sv-notifications__link campaigns"
                                                       data-id="481" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Win-Back Campaign Email Template                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 480">
                                                    <a href="http://seven.loc/campaigns/onboarding-welcome-email-sequence/" class="sv-notifications__link campaigns"
                                                       data-id="480" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Onboarding Welcome Email Sequence                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 479">
                                                    <a href="http://seven.loc/campaigns/client-experience-survey/" class="sv-notifications__link campaigns"
                                                       data-id="479" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Client Experience Survey                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 478">
                                                    <a href="http://seven.loc/campaigns/current-market-environment-survey/" class="sv-notifications__link campaigns"
                                                       data-id="478" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Current Market Environment Survey                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 477">
                                                    <a href="http://seven.loc/campaigns/one-thing-survey/" class="sv-notifications__link campaigns"
                                                       data-id="477" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | One-Thing Survey                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 476">
                                                    <a href="http://seven.loc/campaigns/retirement-planning-survey-referral-campaign/" class="sv-notifications__link campaigns"
                                                       data-id="476" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Retirement Planning Survey-Referral Campaign                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 475">
                                                    <a href="http://seven.loc/campaigns/inbound-inquiry-email-sequence/" class="sv-notifications__link campaigns"
                                                       data-id="475" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Inbound Inquiry: Email Sequence                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 474">
                                                    <a href="http://seven.loc/campaigns/google-review-email-template/" class="sv-notifications__link campaigns"
                                                       data-id="474" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Google Review Email Template                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 473">
                                                    <a href="http://seven.loc/articles/how-do-you-create-a-retirement-paycheck/" class="sv-notifications__link articles"
                                                       data-id="473" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | How Do You Create a Retirement “Paycheck?”                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>

                                                <li class="sv-notifications__item 188">
                                                    <a href="http://seven.loc/articles/october-market-commentary-the-most-volatile-month/" class="sv-notifications__link articles"
                                                       data-id="188" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | October Market Commentary: The Most Volatile Month?                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 187">
                                                    <a href="http://seven.loc/articles/your-holiday-wellness-plan-comes-down-to-avoiding-stress-and-taxes/" class="sv-notifications__link articles"
                                                       data-id="187" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Your Holiday Wellness Plan Comes Down to Avoiding Stress and Taxes                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 186">
                                                    <a href="http://seven.loc/courses/editing-a-video-in-camtasia-a-tactical-guide/" class="sv-notifications__link courses"
                                                       data-id="186" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | Editing a Video in Camtasia: A Tactical Guide                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 185">
                                                    <a href="http://seven.loc/articles/charitable-giving-is-increasing-and-evolving/" class="sv-notifications__link articles"
                                                       data-id="185" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Charitable Giving is Increasing – and Evolving                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 184">
                                                    <a href="http://seven.loc/articles/charitable-giving-is-increasing-and-evolving/" class="sv-notifications__link articles"
                                                       data-id="184" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Charitable Giving is Increasing – and Evolving                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 183">
                                                    <a href="http://seven.loc/articles/the-other-crypto-meet-stablecoin/" class="sv-notifications__link articles"
                                                       data-id="183" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Other Crypto: Meet Stablecoin                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 182">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="182" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 181">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="181" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 2">
                                                    <a href="http://seven.loc/articles/building-a-balanced-portfolio/" class="sv-notifications__link articles"
                                                       data-id="2" >
                                                        <span class="sv-notifications__event">
                                                        <b>New Article</b> | Building a Balanced Portfolio                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="sv-user border-left d-flex flex-row align-items-center justify-content-end">
                                        <img
                                            src="@if( empty( $currentUser->avatar_img ) || ( $currentUser->avatar_img == 'none' ) ) {{ asset('/img/face.jpeg') }} @else {{ asset('/uploads/users/'.$currentUser->avatar_img) }}  @endif"
                                            alt="oval" class="logo_main logo_main_style "/>
                                        <div class="name-holder">
                                            <p class="bold">{{ $currentUser->name }}</p>
                                            <p>{{ $currentUser->firstname }} {{ $currentUser->lastname }}</p>
                                        </div>
                                        <a class="user-info" href="#"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @include('userDashboard/body/accountInfo')
</div>
