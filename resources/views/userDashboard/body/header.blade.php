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
                                                <li class="sv-notifications__item 472">
                                                    <a href="http://seven.loc/articles/how-do-you-create-a-retirement-paycheck/" class="sv-notifications__link articles"
                                                       data-id="472" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | How Do You Create a Retirement “Paycheck?”                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 471">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="471" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | How Do You Create a Retirement “Paycheck?”                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 470">
                                                    <a href="http://seven.loc/articles/how-do-you-create-a-retirement-paycheck/" class="sv-notifications__link articles"
                                                       data-id="470" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | How Do You Create a Retirement “Paycheck?”                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 469">
                                                    <a href="http://seven.loc/courses/getting-your-website-structure-right/" class="sv-notifications__link courses"
                                                       data-id="469" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | Getting Your Website Structure Right                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 468">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="468" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Should a Trust Be Part of Your Estate Plan?                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 467">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="467" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | A Disability Insurance Primer                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 466">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="466" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Is it Time for an Umbrella Policy?                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 465">
                                                    <a href="http://seven.loc/articles/is-it-time-for-an-umbrella-policy/" class="sv-notifications__link articles"
                                                       data-id="465" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Is it Time for an Umbrella Policy?                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 464">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="464" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Do You Need A Budget In Retirement?                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 463">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="463" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Planning for the Five Big Tax Challenges in Retirement                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 462">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="462" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | September Market Commentary: If the Fed Is Having a Goldilocks Moment, Is the Economy Baby Bear?                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 461">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="461" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | The Benefits of a Living Inheritance                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 460">
                                                    <a href="http://seven.loc/articles/a-disability-insurance-primer/" class="sv-notifications__link articles"
                                                       data-id="460" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | A Disability Insurance Primer                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 459">
                                                    <a href="http://seven.loc/articles/do-you-need-a-budget-in-retirement/" class="sv-notifications__link articles"
                                                       data-id="459" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Do You Need A Budget In Retirement?                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 458">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="458" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 457">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="457" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 456">
                                                    <a href="http://seven.loc/campaigns/market-volatility-win-back-campaign/" class="sv-notifications__link campaigns"
                                                       data-id="456" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Timely: Market Volatility Win-Back Campaign                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 455">
                                                    <a href="http://seven.loc/campaigns/mid-career-financial-planning-goals-choices-and-options/" class="sv-notifications__link campaigns"
                                                       data-id="455" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Drip: Mid-Career Financial Planning: Goals, Choices, and Options                                                                                </span>
                                                        <span class="sv-notifications__time">4 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 454">
                                                    <a href="http://seven.loc/articles/planning-for-the-five-big-tax-challenges-in-retirement/" class="sv-notifications__link articles"
                                                       data-id="454" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Planning for the Five Big Tax Challenges in Retirement                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 453">
                                                    <a href="http://seven.loc/campaigns/september-market-commentary-the-fed-is-focused-on-inflation-what-does-that-mean-for-the-markets-and-the-economy/" class="sv-notifications__link campaigns"
                                                       data-id="453" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | September Market Commentary: The Fed Is Focused on Inflation. What Does That Mean for the Markets and the Economy?                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 452">
                                                    <a href="http://seven.loc/articles/september-market-commentary-if-the-fed-is-having-a-goldilocks-moment-is-the-economy-baby-bear/" class="sv-notifications__link articles"
                                                       data-id="452" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | September Market Commentary: If the Fed Is Having a Goldilocks Moment, Is the Economy Baby Bear?                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 451">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="451" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | The College Payment Puzzle eBook                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 450">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="450" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Maximizing Your Tax Loss Harvest                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 449">
                                                    <a href="http://seven.loc/campaigns/the-college-payment-puzzle-for-high-earning-families/" class="sv-notifications__link campaigns"
                                                       data-id="449" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | The College Payment Puzzle for High-Earning Families                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 448">
                                                    <a href="http://seven.loc/articles/the-benefits-of-a-living-inheritance/" class="sv-notifications__link articles"
                                                       data-id="448" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Benefits of a Living Inheritance                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 447">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="447" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Student Loan Forgiveness: A Primer                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 446">
                                                    <a href="http://seven.loc/articles/student-loan-forgiveness-a-primer/" class="sv-notifications__link articles"
                                                       data-id="446" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Student Loan Forgiveness: A Primer                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 445">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="445" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | The College Payment Puzzle for High-Earning Families                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 444">
                                                    <a href="http://seven.loc/articles/the-college-payment-puzzle-for-high-earning-families/" class="sv-notifications__link articles"
                                                       data-id="444" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The College Payment Puzzle for High-Earning Families                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 443">
                                                    <a href="http://seven.loc/campaigns/drip-building-wealth-and-creating-flexibility/" class="sv-notifications__link campaigns"
                                                       data-id="443" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Drip: Building Wealth and Creating Flexibility                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 442">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="442" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Maximizing the Tax Advantages of Business Ownership                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 441">
                                                    <a href="http://seven.loc/articles/staying-stable-with-sudden-wealth/" class="sv-notifications__link articles"
                                                       data-id="441" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Staying Stable With Sudden Wealth                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 440">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="440" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 439">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="439" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Maximizing the Tax Advantages of Business Ownership                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 438">
                                                    <a href="http://seven.loc/articles/avoiding-the-penalty-for-early-roth-ira-withdrawals/" class="sv-notifications__link articles"
                                                       data-id="438" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Avoiding the Penalty for Early Roth IRA Withdrawals                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 437">
                                                    <a href="http://seven.loc/articles/maximizing-the-tax-advantages-of-business-ownership/" class="sv-notifications__link articles"
                                                       data-id="437" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Maximizing the Tax Advantages of Business Ownership                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 436">
                                                    <a href="http://seven.loc/campaigns/survey-retirement-planning/" class="sv-notifications__link campaigns"
                                                       data-id="436" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Survey: Retirement Planning                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 435">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="435" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Retirement Planning Survey-Referral Campaign                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 434">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="434" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Is Tax-Loss Harvesting Right for Your Portfolio?                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 433">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="433" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | How to Have “The Talk” With Your Aging Parents                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 432">
                                                    <a href="http://seven.loc/articles/is-tax-loss-harvesting-right-for-your-portfolio/" class="sv-notifications__link articles"
                                                       data-id="432" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Is Tax-Loss Harvesting Right for Your Portfolio?                                                                                </span>
                                                        <span class="sv-notifications__time">5 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 431">
                                                    <a href="http://seven.loc/articles/how-to-have-the-talk-with-your-aging-parents/" class="sv-notifications__link articles"
                                                       data-id="431" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | How to Have “The Talk” With Your Aging Parents                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 430">
                                                    <a href="http://seven.loc/articles/a-new-approach-to-paying-for-college/" class="sv-notifications__link articles"
                                                       data-id="430" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | A New Approach to Paying for College                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 429">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="429" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Women and Wealth eBook                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 428">
                                                    <a href="http://seven.loc/campaigns/august-market-commentary-will-a-month-of-fresh-data-change-the-feds-aggressive-stance/" class="sv-notifications__link campaigns"
                                                       data-id="428" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | August Market Commentary: Will A Month of Fresh Data Change the Fed’s Aggressive Stance?                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 427">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="427" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | August Market Commentary: Will a Month of Fresh Data Change the Fed’s Aggressive Stance?                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 426">
                                                    <a href="http://seven.loc/articles/august-market-commentary-will-a-month-of-fresh-data-change-the-feds-aggressive-stance/" class="sv-notifications__link articles"
                                                       data-id="426" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | August Market Commentary: Will a Month of Fresh Data Change the Fed’s Aggressive Stance?                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 425">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="425" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Inflation vs. Volatility                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 424">
                                                    <a href="http://seven.loc/campaigns/how-retirement-is-evolving/" class="sv-notifications__link campaigns"
                                                       data-id="424" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Drip: How Retirement is Evolving                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 423">
                                                    <a href="http://seven.loc/campaigns/timely-its-not-about-inflation-its-about-volatility/" class="sv-notifications__link campaigns"
                                                       data-id="423" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Timely: It’s Not About Inflation, It’s About Volatility                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 422">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="422" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | The Modern Family Office Is a New Model of Advice                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 421">
                                                    <a href="http://seven.loc/articles/the-modern-family-office-is-a-new-model-of-advice/" class="sv-notifications__link articles"
                                                       data-id="421" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Modern Family Office Is a New Model of Advice                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 420">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="420" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Is it Time to Hire a Financial Advisor? How Do You Even Do That?                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 419">
                                                    <a href="http://seven.loc/campaigns/timely-double-trouble-rates-up-gdp-down-times-2/" class="sv-notifications__link campaigns"
                                                       data-id="419" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Timely: Double Trouble - Rates Up, GDP Down Times 2                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 418">
                                                    <a href="http://seven.loc/articles/spousal-ira-a-strategy-for-tax-advantaged-saving/" class="sv-notifications__link articles"
                                                       data-id="418" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Spousal IRA: A Strategy for Tax-Advantaged Saving                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 417">
                                                    <a href="http://seven.loc/articles/market-volatility-is-rearing-its-head-what-to-do-stay-the-course/" class="sv-notifications__link articles"
                                                       data-id="417" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Market Volatility is Rearing its Head. What to Do? Stay the Course.                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 416">
                                                    <a href="http://seven.loc/articles/happy-mothers-day-planning-for-flexibility-and-balance/" class="sv-notifications__link articles"
                                                       data-id="416" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Financial Planning for Women is About Flexibility and Balance                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 415">
                                                    <a href="http://seven.loc/articles/july-market-commentary-will-the-feds-rate-resolve-lead-to-recession/" class="sv-notifications__link articles"
                                                       data-id="415" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | July Market Commentary: Will the Fed’s Rate Resolve Lead to Recession?                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 414">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="414" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | How to Manage Through Volatile Markets                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 413">
                                                    <a href="http://seven.loc/articles/is-it-time-to-hire-a-financial-advisor-how-do-you-even-do-that/" class="sv-notifications__link articles"
                                                       data-id="413" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Is it Time to Hire a Financial Advisor? How Do You Even Do That?                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 412">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="412" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Are You Working Remote in a Different State? Do You Know the Tax Implications?                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 411">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="411" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 410">
                                                    <a href="http://seven.loc/campaigns/is-a-roth-conversion-the-right-move/" class="sv-notifications__link campaigns"
                                                       data-id="410" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Is a Roth Conversion the Right Move?                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 409">
                                                    <a href="http://seven.loc/articles/are-you-working-remote-in-a-different-state-do-you-know-the-tax-implications/" class="sv-notifications__link articles"
                                                       data-id="409" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Are You Working Remote in a Different State? Do You Know the Tax Implications?                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 408">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="408" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Google My Business Guide                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 407">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="407" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Women and Money: An Evolved Approach                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 406">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="406" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Inflation, the Fed, and Recession. It's Not Linear.                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 405">
                                                    <a href="http://seven.loc/articles/women-and-money-an-evolved-approach/" class="sv-notifications__link articles"
                                                       data-id="405" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Women and Money: An Evolved Approach                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 404">
                                                    <a href="http://seven.loc/campaigns/timely-are-we-in-or-close-to-a-recession/" class="sv-notifications__link campaigns"
                                                       data-id="404" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Timely: Are We In – or Close to – a Recession?                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 403">
                                                    <a href="http://seven.loc/articles/inflation-the-fed-and-recession-its-not-linear/" class="sv-notifications__link articles"
                                                       data-id="403" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Inflation, the Fed, and Recession. It's Not Linear.                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 402">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="402" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Facebook Ads Guide                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 401">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="401" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | July Market Commentary: Will the Fed’s Rate Resolve Lead to Recession?                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 400">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="400" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Retiring in a Volatile Market: Control What You Can                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 399">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="399" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Tax Planning at the Mid-Stage of Your Career                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 398">
                                                    <a href="http://seven.loc/articles/tax-planning-at-the-mid-stage-of-your-career/" class="sv-notifications__link articles"
                                                       data-id="398" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Tax Planning at the Mid-Stage of Your Career                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 397">
                                                    <a href="http://seven.loc/articles/retiring-in-a-volatile-market-control-what-you-can/" class="sv-notifications__link articles"
                                                       data-id="397" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Retiring in a Volatile Market: Control What You Can                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 396">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="396" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 395">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="395" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 394">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="394" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Turning the Bear Market into a Goldilocks Moment                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 393">
                                                    <a href="http://seven.loc/articles/turning-the-bear-market-into-a-goldilocks-moment/" class="sv-notifications__link articles"
                                                       data-id="393" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Turning the Bear Market into a Goldilocks Moment                                                                                </span>
                                                        <span class="sv-notifications__time">6 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 392">
                                                    <a href="http://seven.loc/campaigns/july-market-commentary-will-the-feds-rate-resolve-lead-to-recession/" class="sv-notifications__link campaigns"
                                                       data-id="392" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | July Market Commentary: Will the Fed’s Rate Resolve Lead to Recession?                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 391">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="391" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | What to Tackle Financially as a Mid-Career Professional                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 390">
                                                    <a href="http://seven.loc/articles/july-market-commentary-will-the-feds-rate-resolve-lead-to-recession/" class="sv-notifications__link articles"
                                                       data-id="390" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | July Market Commentary: Will the Fed’s Rate Resolve Lead to Recession?                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 389">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="389" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Staying Safe Around Bears                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 388">
                                                    <a href="http://seven.loc/articles/staying-safe-around-bears/" class="sv-notifications__link articles"
                                                       data-id="388" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Staying Safe Around Bears                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 387">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="387" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Mistakes are Expensive: A New Generation Embraces Financial Planning at the Mid-Stage                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 386">
                                                    <a href="http://seven.loc/articles/mistakes-are-expensive-a-new-generation-embraces-financial-planning-at-the-mid-stage/" class="sv-notifications__link articles"
                                                       data-id="386" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Mistakes are Expensive: A New Generation Embraces Financial Planning at the Mid-Stage                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 385">
                                                    <a href="http://seven.loc/campaigns/drip-tax-planning-is-even-more-important-in-retirement/" class="sv-notifications__link campaigns"
                                                       data-id="385" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Drip: Tax Planning Is Even More Important in Retirement                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 384">
                                                    <a href="http://seven.loc/campaigns/prospecting-content-download-follow-up/" class="sv-notifications__link campaigns"
                                                       data-id="384" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Prospecting: Content Download Follow Up                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 383">
                                                    <a href="http://seven.loc/campaigns/survey-client-experience-content-feedback/" class="sv-notifications__link campaigns"
                                                       data-id="383" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Survey: Client Experience & Content Feedback                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 382">
                                                    <a href="http://seven.loc/campaigns/survey-one-thing-financially-that-keeps-you-up-at-night/" class="sv-notifications__link campaigns"
                                                       data-id="382" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Survey: One Thing Financially That Keeps You Up at Night                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 381">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="381" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | PR Outreach Process                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 380">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="380" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Podcast Publishing Process                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 379">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="379" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Is a Self-Directed 401(k) Right for You?                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 378">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="378" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Inherited 401(k): A Guide for Beneficiaries                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 377">
                                                    <a href="http://seven.loc/articles/inherited-401k-a-guide-for-beneficiaries/" class="sv-notifications__link articles"
                                                       data-id="377" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Inherited 401(K): A Guide for Beneficiaries                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 376">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="376" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 375">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="375" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | What Just Happened? The Fed Increases Velocity and Accepts Reality                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 374">
                                                    <a href="http://seven.loc/articles/what-just-happened-the-fed-increases-velocity-and-accepts-reality/" class="sv-notifications__link articles"
                                                       data-id="374" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | What Just Happened? The Fed Increases Velocity and Accepts Reality                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 373">
                                                    <a href="http://seven.loc/campaigns/timely-what-just-happened-the-fed-increases-velocity-and-accepts-reality/" class="sv-notifications__link campaigns"
                                                       data-id="373" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Timely: What Just Happened? The Fed Increases Velocity and Accepts Reality                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 372">
                                                    <a href="http://seven.loc/articles/a-charitable-strategy-for-tax-efficiency/" class="sv-notifications__link articles"
                                                       data-id="372" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | A Charitable Strategy for Tax-Efficiency                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 371">
                                                    <a href="http://seven.loc/articles/golf-x-planning/" class="sv-notifications__link articles"
                                                       data-id="371" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Golf X Planning                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 370">
                                                    <a href="http://seven.loc/articles/its-not-about-inflation/" class="sv-notifications__link articles"
                                                       data-id="370" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | It’s Not About Inflation                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 369">
                                                    <a href="http://seven.loc/articles/april-market-commentary-in-like-a-lamb-out-like-a-lion-2/" class="sv-notifications__link articles"
                                                       data-id="369" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | April Market Commentary: In Like A Lamb, Out Like a Lion?                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 368">
                                                    <a href="http://seven.loc/articles/april-market-commentary-in-like-a-lamb-out-like-a-lion/" class="sv-notifications__link articles"
                                                       data-id="368" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | April Market Commentary: In Like A Lamb, Out Like a Lion?                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 367">
                                                    <a href="http://seven.loc/articles/long-term-care-insurance-an-evolved-and-essential-part-of-your-financial-plan-2/" class="sv-notifications__link articles"
                                                       data-id="367" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Long-Term Care Insurance: An Evolved and Essential Part of Your Financial Plan                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 366">
                                                    <a href="http://seven.loc/articles/changing-jobs-what-happens-to-your-401k-2/" class="sv-notifications__link articles"
                                                       data-id="366" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Changing Jobs: What Happens to Your 401(k)?                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 365">
                                                    <a href="http://seven.loc/articles/alalalalpa/" class="sv-notifications__link articles"
                                                       data-id="365" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | alalalalpa                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 364">
                                                    <a href="http://seven.loc/articles/love-is-looking-together-in-the-same-direction-2/" class="sv-notifications__link articles"
                                                       data-id="364" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Love Is Looking Together in the Same Direction                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 363">
                                                    <a href="http://seven.loc/articles/its-not-about-inflation-its-about-volatility-2/" class="sv-notifications__link articles"
                                                       data-id="363" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | It’s Not About Inflation, It’s About Volatility                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 362">
                                                    <a href="http://seven.loc/articles/love-is/" class="sv-notifications__link articles"
                                                       data-id="362" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Love IS.....                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 361">
                                                    <a href="http://seven.loc/articles/inflation-vs-vol/" class="sv-notifications__link articles"
                                                       data-id="361" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Inflation vs. Vol                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 360">
                                                    <a href="http://seven.loc/campaigns/timely-its-not-about-inflation-its-about-volatility/" class="sv-notifications__link campaigns"
                                                       data-id="360" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Timely: It’s Not About Inflation, It’s About Volatility                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 359">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="359" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Inflation vs. Volatility                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 358">
                                                    <a href="http://seven.loc/campaigns/google-review-campaign/" class="sv-notifications__link campaigns"
                                                       data-id="358" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Survey: Google Review Campaign                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 357">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="357" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | It’s Not About Inflation, It’s About Volatility                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 356">
                                                    <a href="http://seven.loc/articles/its-not-about-inflation-its-about-volatility/" class="sv-notifications__link articles"
                                                       data-id="356" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | It’s Not About Inflation, It’s About Volatility                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 355">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="355" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | LinkedIn Follow-Up Message Template                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 354">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="354" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Love Is Looking Together in the Same Direction                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 353">
                                                    <a href="http://seven.loc/articles/love-is-looking-together-in-the-same-direction/" class="sv-notifications__link articles"
                                                       data-id="353" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Love Is Looking Together in the Same Direction                                                                                </span>
                                                        <span class="sv-notifications__time">7 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 352">
                                                    <a href="http://seven.loc/campaigns/june-market-commentary-lions-and-tigers-and-bears-oh-my/" class="sv-notifications__link campaigns"
                                                       data-id="352" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | June Market Commentary: Lions and Tigers and Bears, Oh My!                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 351">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="351" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | June Market Commentary: Lions and Tigers and Bears, Oh My                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 350">
                                                    <a href="http://seven.loc/articles/june-market-commentary-lions-and-tigers-and-bears-oh-my/" class="sv-notifications__link articles"
                                                       data-id="350" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | June Market Commentary: Lions and Tigers and Bears, Oh My                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 349">
                                                    <a href="http://seven.loc/campaigns/financial-fitness-mid-year-2022-check-in/" class="sv-notifications__link campaigns"
                                                       data-id="349" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Financial Fitness Mid-Year 2022 Check-In                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 348">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="348" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> |                                                                                 </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 347">
                                                    <a href="http://seven.loc/articles/financial-fitness-mid-year-2022-check-in/" class="sv-notifications__link articles"
                                                       data-id="347" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Financial Fitness – Mid-Year 2022 Check-In                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 346">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="346" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Tax Planning for Retirement: The Long Game                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 345">
                                                    <a href="http://seven.loc/articles/tax-planning-for-retirement-the-long-game/" class="sv-notifications__link articles"
                                                       data-id="345" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Tax Planning for Retirement: The Long Game                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 344">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="344" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Changing Jobs - What Happens to Your 401(k)?                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 343">
                                                    <a href="http://seven.loc/articles/tactics-to-boost-your-retirement-savings-if-youre-over-50-test/" class="sv-notifications__link articles"
                                                       data-id="343" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Tactics to Boost Your Retirement Savings – If You’re Over 50-test                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 342">
                                                    <a href="http://seven.loc/articles/a-charitable-strategy-for-tax-efficiency-qualified-charitable-distributions/" class="sv-notifications__link articles"
                                                       data-id="342" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | A Charitable Strategy for Tax-Efficiency: Qualified Charitable Distributions                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 341">
                                                    <a href="http://seven.loc/articles/how-to-find-balance-in-your-spending/" class="sv-notifications__link articles"
                                                       data-id="341" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | How to Find Balance in Your Spending                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 340">
                                                    <a href="http://seven.loc/articles/investing-in-alternatives-a-spotlight-on-collectibles/" class="sv-notifications__link articles"
                                                       data-id="340" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Investing in Alternatives: A Spotlight on Collectibles                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 339">
                                                    <a href="http://seven.loc/articles/an-upside-of-inflation-retirement-savings-limits-are-increasing-too/" class="sv-notifications__link articles"
                                                       data-id="339" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | An Upside of Inflation? Retirement Savings Limits Are Increasing Too                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 338">
                                                    <a href="http://seven.loc/articles/timing-retirement-balancing-social-security-and-retirement-plan-distributions/" class="sv-notifications__link articles"
                                                       data-id="338" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Timing Retirement: Balancing Social Security and Retirement Plan Distributions                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 337">
                                                    <a href="http://seven.loc/articles/investing-for-college-5-things-to-think-about/" class="sv-notifications__link articles"
                                                       data-id="337" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Investing For College: 5 Things to Think About                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 336">
                                                    <a href="http://seven.loc/articles/setting-your-goals-the-intentional-approach-for-life-investing/" class="sv-notifications__link articles"
                                                       data-id="336" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Setting Your Goals: The Intentional Approach for Life & Investing                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 335">
                                                    <a href="http://seven.loc/articles/retirement-is-about-income-and-taxes/" class="sv-notifications__link articles"
                                                       data-id="335" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Retirement Is About Income … and Taxes                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 334">
                                                    <a href="http://seven.loc/articles/understanding-supplemental-executive-retirement-plans/" class="sv-notifications__link articles"
                                                       data-id="334" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Understanding Supplemental Executive Retirement Plans                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 333">
                                                    <a href="http://seven.loc/articles/the-structure-matters-choosing-the-right-one-for-your-business/" class="sv-notifications__link articles"
                                                       data-id="333" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Structure Matters: Choosing the Right One for Your Business                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 332">
                                                    <a href="http://seven.loc/articles/whats-driving-the-recent-volatility-a-quick-guide/" class="sv-notifications__link articles"
                                                       data-id="332" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | What’s Driving the Recent Volatility? A Quick Guide                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 331">
                                                    <a href="http://seven.loc/campaigns/are-you-part-of-the-great-resignation-what-about-your-401k/" class="sv-notifications__link campaigns"
                                                       data-id="331" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Are You Part of the Great Resignation? What About Your 401(k)?                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 330">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="330" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Long-Term Care Insurance: An Evolved and Essential Part of Your Financial Plan                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 329">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="329" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Changing Jobs: What Happens to Your 401(k)?                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 328">
                                                    <a href="http://seven.loc/articles/changing-jobs-what-happens-to-your-401k/" class="sv-notifications__link articles"
                                                       data-id="328" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Changing Jobs: What Happens to Your 401(k)?                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 327">
                                                    <a href="http://seven.loc/courses/how-to-remove-friction-in-your-marketing/" class="sv-notifications__link courses"
                                                       data-id="327" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | How to Remove Friction in Your Marketing                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 326">
                                                    <a href="http://seven.loc/campaigns/timely-are-the-feds-actions-working-parsing-the-new-data/" class="sv-notifications__link campaigns"
                                                       data-id="326" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Timely: Are the Fed’s Actions Working? Parsing the New Data                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 325">
                                                    <a href="http://seven.loc/articles/avoiding-the-medicare-surcharge-what-you-need-to-know-about-irmaa-2/" class="sv-notifications__link articles"
                                                       data-id="325" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Avoiding the Medicare Surcharge: What You Need to Know About IRMAA                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 324">
                                                    <a href="http://seven.loc/campaigns/timely-markets-are-increasingly-volatile-is-there-an-end-in-sight/" class="sv-notifications__link campaigns"
                                                       data-id="324" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Timely: Markets are Increasingly Volatile. Is There an End in Sight?                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 323">
                                                    <a href="http://seven.loc/campaigns/customizable-template/" class="sv-notifications__link campaigns"
                                                       data-id="323" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Customizable Template                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 322">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="322" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Avoiding the Medicare Surcharge: What You Need to Know About IRMAA                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 321">
                                                    <a href="http://seven.loc/articles/avoiding-the-medicare-surcharge-what-you-need-to-know-about-irmaa/" class="sv-notifications__link articles"
                                                       data-id="321" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Avoiding the Medicare Surcharge: What You Need to Know About IRMAA                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 320">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="320" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Benchmarking Your Business for Growth                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 319">
                                                    <a href="http://seven.loc/campaigns/test-campaign-deploy-this-campaign-first/" class="sv-notifications__link campaigns"
                                                       data-id="319" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Test Campaign - Deploy This Campaign First                                                                                </span>
                                                        <span class="sv-notifications__time">8 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 318">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="318" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | May Market Commentary: The Fed Owned It, But Can They Control It?                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 317">
                                                    <a href="http://seven.loc/campaigns/may-market-commentary-the-fed-owned-it-but-can-they-control-it/" class="sv-notifications__link campaigns"
                                                       data-id="317" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | May Market Commentary: The Fed Owned It, But Can They Control It?                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 316">
                                                    <a href="http://seven.loc/articles/may-market-commentary-the-fed-owned-it-but-can-they-control-it/" class="sv-notifications__link articles"
                                                       data-id="316" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | May Market Commentary: The Fed Owned It, But Can They Control It?                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 315">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="315" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | 7 Steps to Financial Independence for Mid-Career Professionals eBook                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 314">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="314" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Happy Mother’s Day! Planning for Flexibility and Balance                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 313">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="313" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Estate Planning for Business Owners                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 312">
                                                    <a href="http://seven.loc/articles/happy-mothers-day-planning-for-flexibility-and-balance/" class="sv-notifications__link articles"
                                                       data-id="312" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Happy Mother’s Day! Planning for Flexibility and Balance                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 311">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="311" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Five Steps to Creating Blended Family Finances eBook                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 310">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="310" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 309">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="309" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Benchmarking Your Business For Growth                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 308">
                                                    <a href="http://seven.loc/campaigns/kick-off-email-to-all-prospects-and-clients/" class="sv-notifications__link campaigns"
                                                       data-id="308" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Kick-Off Email to All Prospects and Clients                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 307">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="307" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | The Business Owner's Guide to Wealth Guide                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 306">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="306" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Retirement Income eBook                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 305">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="305" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | 5 Things to Know if You Have Stock Options                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 304">
                                                    <a href="http://seven.loc/articles/benchmarking-your-business-for-growth/" class="sv-notifications__link articles"
                                                       data-id="304" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Benchmarking Your Business For Growth                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 303">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="303" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | YouTube Optimization Guide                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 302">
                                                    <a href="http://seven.loc/campaigns/timely-markets-are-increasingly-volatile-is-there-an-end-in-sight/" class="sv-notifications__link campaigns"
                                                       data-id="302" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Timely: Markets are Increasingly Volatile. Is There an End in Sight?                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 301">
                                                    <a href="http://seven.loc/articles/whats-driving-the-recent-volatility-a-quick-guide/" class="sv-notifications__link articles"
                                                       data-id="301" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | What’s Driving the Recent Volatility? A Quick Guide                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 300">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="300" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | The Financial Future is Female                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 299">
                                                    <a href="http://seven.loc/articles/the-financial-future-is-female/" class="sv-notifications__link articles"
                                                       data-id="299" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Financial Future is Female                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 298">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="298" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Getting to a Closing in a Red-Hot Real Estate Market                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 297">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="297" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | The Great Resignation: Assessing a Career Change                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 296">
                                                    <a href="http://seven.loc/articles/the-great-resignation-assessing-a-career-change/" class="sv-notifications__link articles"
                                                       data-id="296" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Great Resignation: Assessing a Career Change                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 295">
                                                    <a href="http://seven.loc/campaigns/tuning-up-your-pre-retirement-planning/" class="sv-notifications__link campaigns"
                                                       data-id="295" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Tuning Up Your Pre-Retirement Planning                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 294">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="294" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | A Plan for Managing Stock Sales: 10b5-1s and SEC Rules                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 293">
                                                    <a href="http://seven.loc/articles/a-plan-for-managing-stock-sales-10b5-1s-and-sec-rules/" class="sv-notifications__link articles"
                                                       data-id="293" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | A Plan for Managing Stock Sales: 10b5-1s and SEC Rules                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 292">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="292" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Cash Flow Planning When Approaching Retirement                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 291">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="291" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Getting to a Closing in a Red-Hot Real Estate Market                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 290">
                                                    <a href="http://seven.loc/articles/getting-to-a-closing-in-a-red-hot-real-estate-market/" class="sv-notifications__link articles"
                                                       data-id="290" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Getting to a Closing in a Red-Hot Real Estate Market                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 289">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="289" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | What’s the Fed Up To? Rates, Inversions and Quantitative Tightening About Retirement                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 288">
                                                    <a href="http://seven.loc/campaigns/timely-whats-the-fed-up-to-rates-inversions-and-quantitative-tightening/" class="sv-notifications__link campaigns"
                                                       data-id="288" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Timely: What’s the Fed Up To? Rates, Inversions and Quantitative Tightening                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 287">
                                                    <a href="http://seven.loc/articles/whats-the-fed-up-to-rates-inversions-and-quantitative-tightening/" class="sv-notifications__link articles"
                                                       data-id="287" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | What’s the Fed Up To? Rates, Inversions and Quantitative Tightening                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 286">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="286" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">9 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 285">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="285" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | April Market Commentary: In Like A Lamb, Out Like a Lion?                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 284">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="284" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Cash Flow Planning When You're Thinking  About Retirement                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 283">
                                                    <a href="http://seven.loc/campaigns/april-market-commentary-in-like-a-lamb-out-like-a-lion/" class="sv-notifications__link campaigns"
                                                       data-id="283" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | April Market Commentary: In Like A Lamb, Out Like a Lion?                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 282">
                                                    <a href="http://seven.loc/articles/march-market-commentary-in-like-a-lamb-out-like-a-lion/" class="sv-notifications__link articles"
                                                       data-id="282" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | March Market Commentary: In Like A Lamb, Out Like a Lion?                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 281">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="281" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | One Thing Survey-Referral Email Content                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 280">
                                                    <a href="http://seven.loc/articles/cash-flow-planning-when-youre-thinking-about-retirement/" class="sv-notifications__link articles"
                                                       data-id="280" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Cash Flow Planning When You’re Thinking About Retirement                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 279">
                                                    <a href="http://seven.loc/articles/gen-x-and-money-five-things-that-set-this-generation-apart/" class="sv-notifications__link articles"
                                                       data-id="279" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Gen X and Money: Five Things That Set This Generation Apart                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 278">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="278" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | The Equity Compensation Guide to Retirement Planning                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 277">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="277" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | A Guide for Blended Family Finances                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 276">
                                                    <a href="http://seven.loc/articles/a-guide-for-blended-family-finances/" class="sv-notifications__link articles"
                                                       data-id="276" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | A Guide for Blended Family Finances                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 275">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="275" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Reducing the Tax Impact of Equity Compensation: The 83(b) Election                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 274">
                                                    <a href="http://seven.loc/articles/reducing-the-tax-impact-of-equity-compensation-the-83b-election/" class="sv-notifications__link articles"
                                                       data-id="274" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Reducing the Tax Impact of Equity Compensation: The 83(b) Election                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 273">
                                                    <a href="http://seven.loc/campaigns/a-business-owners-retirement-plan/" class="sv-notifications__link campaigns"
                                                       data-id="273" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | A Business Owner’s Retirement Plan                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 272">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="272" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Gen X and Money: Five Things That Set This Generation Apart                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 271">
                                                    <a href="http://seven.loc/articles/gen-x-and-money-five-things-that-set-this-generation-apart/" class="sv-notifications__link articles"
                                                       data-id="271" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Gen X and Money: Five Things That Set This Generation Apart                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 270">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="270" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Brand and Positioning Worksheet                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 269">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="269" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Why Complex Compensation Requires a Different FA                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 268">
                                                    <a href="http://seven.loc/articles/the-federal-reserve-vs-inflation-round-one/" class="sv-notifications__link articles"
                                                       data-id="268" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Federal Reserve vs. Inflation: Round One                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 267">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="267" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 266">
                                                    <a href="http://seven.loc/campaigns/mid-career-financial-planning-goals-choices-and-options/" class="sv-notifications__link campaigns"
                                                       data-id="266" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Mid-Career Financial Planning: Goals, Choices, and Options                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 265">
                                                    <a href="http://seven.loc/articles/estate-planning-for-small-business-owners/" class="sv-notifications__link articles"
                                                       data-id="265" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Estate Planning for Small Business Owners                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 264">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="264" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | More Money More Problems? Complex Compensation Requires a Different Kind of Advisor                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 263">
                                                    <a href="http://seven.loc/articles/more-money-more-problems-complex-compensation-requires-a-different-kind-of-advisor/" class="sv-notifications__link articles"
                                                       data-id="263" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | More Money More Problems? Complex Compensation Requires a Different Kind of Advisor                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 262">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="262" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Financial Planning for the Early Stage of Your Career                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 261">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="261" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | The Mid-Point of Your Career: Creating Options in Life and Work                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 260">
                                                    <a href="http://seven.loc/articles/the-mid-point-of-your-career-creating-options-in-life-and-work/" class="sv-notifications__link articles"
                                                       data-id="260" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Mid-Point of Your Career: Creating Options in Life and Work                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 259">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="259" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | 5 Things to Know If You're Considering Early Retirement                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 258">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="258" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 257">
                                                    <a href="http://seven.loc/courses/how-to-create-a-survey-using-google-surveys/" class="sv-notifications__link courses"
                                                       data-id="257" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | How to Create a Survey Using Google Surveys                                                                                </span>
                                                        <span class="sv-notifications__time">10 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 256">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="256" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | February Market Commentary: Action and Reaction                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 255">
                                                    <a href="http://seven.loc/campaigns/march-market-commentary-action-and-reaction/" class="sv-notifications__link campaigns"
                                                       data-id="255" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | March Market Commentary: Action and Reaction                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 254">
                                                    <a href="http://seven.loc/articles/february-market-commentary-action-and-reaction/" class="sv-notifications__link articles"
                                                       data-id="254" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | February Market Commentary: Action and Reaction                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 253">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="253" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | In Celebration of International Women’s Day: A Look at Women’s Financial Milestones                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 252">
                                                    <a href="http://seven.loc/articles/in-celebration-of-international-womens-day-a-look-at-womens-financial-milestones/" class="sv-notifications__link articles"
                                                       data-id="252" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | In Celebration of International Women’s Day: A Look at Women’s Financial Milestones                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 251">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="251" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Financial Planning for the Early Stage of Your Career                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 250">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="250" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | A Note on the Invasion of Ukraine                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 249">
                                                    <a href="http://seven.loc/articles/financial-planning-for-the-early-stage-of-your-career/" class="sv-notifications__link articles"
                                                       data-id="249" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Financial Planning for the Early Stage of Your Career                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 248">
                                                    <a href="http://seven.loc/articles/a-note-on-the-invasion-of-ukraine/" class="sv-notifications__link articles"
                                                       data-id="248" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | A Note on the Invasion of Ukraine                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 247">
                                                    <a href="http://seven.loc/campaigns/retirement-planning-for-business-owners/" class="sv-notifications__link campaigns"
                                                       data-id="247" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Campaign</b> | Retirement Planning for Business Owners                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 246">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="246" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Advisor Meeting Wraps                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 245">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="245" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Buy-Sell agreements: Ensuring Smooth Business Transitions                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 244">
                                                    <a href="http://seven.loc/articles/buy-sell-agreements-ensuring-smooth-business-transitions/" class="sv-notifications__link articles"
                                                       data-id="244" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Buy-Sell agreements: Ensuring Smooth Business Transitions                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 243">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="243" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Having Successful Money Conversations as a Couple                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 242">
                                                    <a href="http://seven.loc/articles/having-successful-money-conversations-as-a-couple/" class="sv-notifications__link articles"
                                                       data-id="242" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Having Successful Money Conversations as a Couple                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 241">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="241" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Seven Monthly Cadence                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 240">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="240" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Launching a Small Business? What to Consider                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 239">
                                                    <a href="http://seven.loc/articles/value-your-business-like-its-your-retirement-plan-because-it-is/" class="sv-notifications__link articles"
                                                       data-id="239" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Value Your Business Like It’s Your Retirement Plan, Because it Is.                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 238">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="238" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | LinkedIn Outreach Framework                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 237">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="237" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | A Social Security Primer: Breaking Down Your Options                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 236">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="236" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | Creating Flexible Income in Retirement: Roth Conversions                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 235">
                                                    <a href="http://seven.loc/admin-dashboard/#template" class="sv-notifications__link svn_tpl"
                                                       data-id="235" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Template</b> | January Market Commentary: Inflation + Rising Rates = Volatility                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 234">
                                                    <a href="http://seven.loc/articles/a-social-security-primer-breaking-down-your-options/" class="sv-notifications__link articles"
                                                       data-id="234" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | A Social Security Primer: Breaking Down Your Options                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 233">
                                                    <a href="http://seven.loc/articles/a-social-security-primer-breaking-down-your-options/" class="sv-notifications__link articles"
                                                       data-id="233" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | A Social Security Primer: Breaking Down Your Options                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 232">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="232" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 231">
                                                    <a href="http://seven.loc/articles/creating-flexible-income-in-retirement-roth-conversions/" class="sv-notifications__link articles"
                                                       data-id="231" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Creating Flexible Income in Retirement: Roth Conversions                                                                                </span>
                                                        <span class="sv-notifications__time">11 months ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 227">
                                                    <a href="http://seven.loc/articles/january-market-commentary-inflation-rising-rates-volatility/" class="sv-notifications__link articles"
                                                       data-id="227" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | January Market Commentary: Inflation + Rising Rates = Volatility                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 226">
                                                    <a href="http://seven.loc/articles/youve-maximized-your-401k-should-you-invest-after-tax-in-an-ira/" class="sv-notifications__link articles"
                                                       data-id="226" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | You’ve Maximized Your 401(k). Should You Invest After-Tax in an IRA?                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 225">
                                                    <a href="http://seven.loc/articles/market-volatility-is-rearing-its-head-what-to-do-stay-the-course/" class="sv-notifications__link articles"
                                                       data-id="225" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Market Volatility is Rearing its Head. What to Do? Stay the Course.                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 224">
                                                    <a href="http://seven.loc/articles/the-investors-journey-financial-planning-for-starting-a-family/" class="sv-notifications__link articles"
                                                       data-id="224" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Financial Planning For Starting a Family                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 223">
                                                    <a href="http://seven.loc/articles/the-new-value-of-advice-a-return-to-traditional-roles/" class="sv-notifications__link articles"
                                                       data-id="223" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The New Value of Advice: A Holistic Approach for Everyone                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 222">
                                                    <a href="http://seven.loc/courses/setting-your-growth-goals-for-2022/" class="sv-notifications__link courses"
                                                       data-id="222" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | Setting Your Growth Goals for 2022                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 221">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="221" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 220">
                                                    <a href="http://seven.loc/articles/planning-for-retirement-with-equity-compensation/" class="sv-notifications__link articles"
                                                       data-id="220" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Planning for Retirement with Equity Compensation                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 219">
                                                    <a href="http://seven.loc/articles/small-business-retirement-plans-simple-sep-ira-and-solo-401k/" class="sv-notifications__link articles"
                                                       data-id="219" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Small Business Retirement Plans— SIMPLE, SEP-IRA and SOLO 401(k)                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 218">
                                                    <a href="http://seven.loc/articles/encore-encore-your-career-deserves-it/" class="sv-notifications__link articles"
                                                       data-id="218" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Encore, Encore – Your Career Deserves It                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 217">
                                                    <a href="http://seven.loc/articles/cash-flow-planning-when-youre-at-the-mid-point-of-your-career/" class="sv-notifications__link articles"
                                                       data-id="217" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Cash Flow Planning When You’re at the Mid-Point of Your Career                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 216">
                                                    <a href="http://seven.loc/articles/understanding-the-fee-only-fiduciary-advisor-model/" class="sv-notifications__link articles"
                                                       data-id="216" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Understanding the Fee-Only, Fiduciary Advisor Model                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 215">
                                                    <a href="http://seven.loc/articles/understanding-the-fee-only-fiduciary-advisor-model/" class="sv-notifications__link articles"
                                                       data-id="215" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Understanding the Fee-Only, Fiduciary Advisor Model                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 214">
                                                    <a href="http://seven.loc/articles/the-abcs-of-college-planning/" class="sv-notifications__link articles"
                                                       data-id="214" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The ABCs of College Planning                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 213">
                                                    <a href="http://seven.loc/articles/december-market-commentary-in-at-the-finish/" class="sv-notifications__link articles"
                                                       data-id="213" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | December Market Commentary: In at the Finish                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 212">
                                                    <a href="http://seven.loc/articles/december-market-commentary-in-at-the-finish/" class="sv-notifications__link articles"
                                                       data-id="212" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | December Market Commentary: In at the Finish                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 211">
                                                    <a href="http://seven.loc/courses/quick-guide-to-cloning-campaigns/" class="sv-notifications__link courses"
                                                       data-id="211" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | Quick Guide to Cloning Campaigns                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 210">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="210" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 209">
                                                    <a href="http://seven.loc/courses/getting-your-social-media-post-copy-right/" class="sv-notifications__link courses"
                                                       data-id="209" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | Getting Your Social Media Post Copy Right                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 208">
                                                    <a href="http://seven.loc/articles/five-money-moves-to-make-in-2022/" class="sv-notifications__link articles"
                                                       data-id="208" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Five Money Moves to Make in 2022                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 207">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="207" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 206">
                                                    <a href="http://seven.loc/articles/what-does-the-feds-hawkish-pivot-on-inflation-mean/" class="sv-notifications__link articles"
                                                       data-id="206" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | What Does the Fed’s Hawkish Pivot on Inflation Mean?                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 205">
                                                    <a href="http://seven.loc/articles/the-trade-offs-starting-a-small-business/" class="sv-notifications__link articles"
                                                       data-id="205" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Trade-Offs: Starting a Small Business                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 204">
                                                    <a href="http://seven.loc/articles/planning-for-2022-the-irs-has-increased-several-key-deductions-and-exemptions/" class="sv-notifications__link articles"
                                                       data-id="204" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Planning for 2022: The IRS Has Increased Several Key Deductions and Exemptions                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 203">
                                                    <a href="http://seven.loc/articles/should-you-buy-your-castle-or-just-rent-it/" class="sv-notifications__link articles"
                                                       data-id="203" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Should You Buy Your Castle, or Just Rent It?                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 202">
                                                    <a href="http://seven.loc/articles/how-to-buy-your-kids-an-nft-the-coolest-gift-of-2021/" class="sv-notifications__link articles"
                                                       data-id="202" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | How to Buy Your Kids an NFT – The Coolest Gift of 2021                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 201">
                                                    <a href="http://seven.loc/articles/november-market-commentary-well-that-was-going-well/" class="sv-notifications__link articles"
                                                       data-id="201" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | November Market Commentary: Well, That Was Going Well                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 200">
                                                    <a href="http://seven.loc/articles/estate-planning-for-digital-assets/" class="sv-notifications__link articles"
                                                       data-id="200" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Estate Planning for Digital Assets                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 199">
                                                    <a href="http://seven.loc/articles/an-upside-of-inflation-retirement-savings-limits-are-increasing-too/" class="sv-notifications__link articles"
                                                       data-id="199" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | An Upside of Inflation? Retirement Savings Limits Are Increasing Too                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 198">
                                                    <a href="http://seven.loc/articles/managing-investments-means-managing-your-emotions/" class="sv-notifications__link articles"
                                                       data-id="198" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Managing Investments Means Managing Your Emotions                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 197">
                                                    <a href="http://seven.loc/articles/the-structure-matters-choosing-the-right-one-for-your-business/" class="sv-notifications__link articles"
                                                       data-id="197" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Structure Matters: Choosing the Right One for Your Business                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 196">
                                                    <a href="http://seven.loc/articles/your-credit-score-an-often-overlooked-financial-tool/" class="sv-notifications__link articles"
                                                       data-id="196" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Your Credit Score: An Often-Overlooked Financial Tool                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 195">
                                                    <a href="http://seven.loc/articles/getting-close-to-retirement-accentuate-the-positive/" class="sv-notifications__link articles"
                                                       data-id="195" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Getting Close to Retirement? Accentuate the Positive                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 194">
                                                    <a href="http://seven.loc/articles/spousal-ira-a-strategy-for-tax-advantaged-saving/" class="sv-notifications__link articles"
                                                       data-id="194" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Spousal IRA: A Strategy for Tax-Advantaged Saving                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 193">
                                                    <a href="http://seven.loc/articles/asset-location-a-tax-lens-on-retirement-investing/" class="sv-notifications__link articles"
                                                       data-id="193" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Asset Location: A Tax Lens on Retirement Investing                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 192">
                                                    <a href="http://seven.loc/articles/disability-insurance-how-to-protect-your-income/" class="sv-notifications__link articles"
                                                       data-id="192" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Disability Insurance: How to Protect Your Income                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 191">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="191" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 190">
                                                    <a href="http://seven.loc/courses/how-to-easy-add-blog-to-any-email-campaign/" class="sv-notifications__link courses"
                                                       data-id="190" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | How to Easy-Add Blog to Any Email Campaign                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 189">
                                                    <a href="http://seven.loc/articles/your-year-end-financial-planning-checklist/" class="sv-notifications__link articles"
                                                       data-id="189" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Your Year-End Financial Planning Checklist                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
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
                                                <li class="sv-notifications__item 180">
                                                    <a href="http://seven.loc/articles/understanding-supplemental-executive-retirement-plans/" class="sv-notifications__link articles"
                                                       data-id="180" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Understanding Supplemental Executive Retirement Plans                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 179">
                                                    <a href="http://seven.loc/articles/safeguarding-and-passing-on-your-digital-assets/" class="sv-notifications__link articles"
                                                       data-id="179" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Safeguarding and Passing On Your Digital Assets                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 178">
                                                    <a href="http://seven.loc/articles/stock-options-an-owners-manual/" class="sv-notifications__link articles"
                                                       data-id="178" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Stock Options: An Owner's Manual                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 177">
                                                    <a href="http://seven.loc/articles/the-new-value-of-advice-a-return-to-traditional-roles/" class="sv-notifications__link articles"
                                                       data-id="177" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The New Value of Advice: A Return to Traditional Roles                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 176">
                                                    <a href="http://seven.loc/articles/navigating-employee-stock-purchase-plans/" class="sv-notifications__link articles"
                                                       data-id="176" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Navigating Employee Stock Purchase Plans                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 175">
                                                    <a href="http://seven.loc/articles/navigating-employee-stock-purchase-plans/" class="sv-notifications__link articles"
                                                       data-id="175" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Navigating Employee Stock Purchase Plans                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 174">
                                                    <a href="http://seven.loc/articles/stock-options-an-owners-manual-test/" class="sv-notifications__link articles"
                                                       data-id="174" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Stock Options: An Owner’s Manual-test                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 173">
                                                    <a href="http://seven.loc/articles/september-market-commentary-hostage-to-headlines/" class="sv-notifications__link articles"
                                                       data-id="173" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | September Market Commentary: Hostage to Headlines?                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 172">
                                                    <a href="http://seven.loc/courses/how-to-create-a-webinar-using-everwebinar/" class="sv-notifications__link courses"
                                                       data-id="172" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | How to Create a Webinar Using EverWebinar                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 171">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="171" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 170">
                                                    <a href="http://seven.loc/articles/stock-options-an-owners-manual-new/" class="sv-notifications__link articles"
                                                       data-id="170" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Stock Options: An Owner’s Manual-new                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 169">
                                                    <a href="http://seven.loc/articles/five-things-to-know-about-taxes-in-retirement-new/" class="sv-notifications__link articles"
                                                       data-id="169" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Five Things to Know About Taxes in Retirement-new                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 168">
                                                    <a href="http://seven.loc/articles/stock-options-an-owners-manual-new/" class="sv-notifications__link articles"
                                                       data-id="168" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Stock Options: An Owner’s Manual-new                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 167">
                                                    <a href="http://seven.loc/articles/limiting-a-retirement-classic-the-ira-may-see-some-unwelcome-changes/" class="sv-notifications__link articles"
                                                       data-id="167" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Limiting a Retirement Classic: The IRA May See Some Unwelcome Changes                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 166">
                                                    <a href="http://seven.loc/articles/five-things-to-know-about-taxes-in-retirement/" class="sv-notifications__link articles"
                                                       data-id="166" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Five Things to Know About Taxes in Retirement                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 165">
                                                    <a href="http://seven.loc/articles/stock-options-an-owners-manual/" class="sv-notifications__link articles"
                                                       data-id="165" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Stock Options: An Owner’s Manual                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 164">
                                                    <a href="http://seven.loc/articles/roths-as-a-retirement-strategy-locking-the-backdoor/" class="sv-notifications__link articles"
                                                       data-id="164" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Roths as a Retirement Strategy: Locking the Backdoor?                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 163">
                                                    <a href="http://seven.loc/courses/connecting-your-domain-to-our-email-sender/" class="sv-notifications__link courses"
                                                       data-id="163" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | Connecting Your Domain to Our Email Sender                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 162">
                                                    <a href="http://seven.loc/articles/tapping-into-home-equity-to-build-wealth/" class="sv-notifications__link articles"
                                                       data-id="162" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Tapping Into Home Equity to Build Wealth                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 161">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="161" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 160">
                                                    <a href="http://seven.loc/articles/deferred-compensation-a-plan-for-unlimited-retirement-savings/" class="sv-notifications__link articles"
                                                       data-id="160" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Deferred Compensation: A Plan for Unlimited Retirement Savings                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 159">
                                                    <a href="http://seven.loc/articles/deferred-compensation-a-plan-for-unlimited-retirement-savings/" class="sv-notifications__link articles"
                                                       data-id="159" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Deferred Compensation: A Plan for Unlimited Retirement Savings                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 158">
                                                    <a href="http://seven.loc/articles/the-positive-effects-of-working-in-your-senior-years/" class="sv-notifications__link articles"
                                                       data-id="158" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Positive Effects of Working in Your Senior Years                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 157">
                                                    <a href="http://seven.loc/articles/timing-retirement-when-to-claim-social-security-benefits/" class="sv-notifications__link articles"
                                                       data-id="157" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Timing Retirement: When to Claim Social Security Benefits                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 156">
                                                    <a href="http://seven.loc/articles/your-investment-plan-should-reflect-your-needs/" class="sv-notifications__link articles"
                                                       data-id="156" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Women Invest Differently                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 155">
                                                    <a href="http://seven.loc/articles/make-your-kids-money-smart/" class="sv-notifications__link articles"
                                                       data-id="155" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Make Your Kids Money-Smart                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 154">
                                                    <a href="http://seven.loc/articles/investing-in-alternatives-a-spotlight-on-collectibles/" class="sv-notifications__link articles"
                                                       data-id="154" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Investing in Alternatives: A Spotlight on Collectibles                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 153">
                                                    <a href="http://seven.loc/articles/august-market-commentary-a-turning-point/" class="sv-notifications__link articles"
                                                       data-id="153" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | August Market Commentary: A Turning Point?                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 152">
                                                    <a href="http://seven.loc/articles/the-pre-ipo-checklist-for-employees/" class="sv-notifications__link articles"
                                                       data-id="152" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Pre-IPO Checklist for Employees                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 151">
                                                    <a href="http://seven.loc/articles/maximizing-the-value-of-an-asset-sale-deferred-sales-trusts/" class="sv-notifications__link articles"
                                                       data-id="151" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Maximizing the Value of an Asset Sale: Deferred Sales Trusts                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 150">
                                                    <a href="http://seven.loc/articles/the-backdoor-roth-ira-a-strategy-for-tax-advantaged-savings-for-high-earners/" class="sv-notifications__link articles"
                                                       data-id="150" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Backdoor Roth IRA: A Strategy for Tax-Advantaged Savings for High Earners?                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 149">
                                                    <a href="http://seven.loc/articles/donor-advised-funds-tax-benefits-growth-and-control/" class="sv-notifications__link articles"
                                                       data-id="149" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Donor Advised Funds: Tax Benefits, Growth and Control                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 148">
                                                    <a href="http://seven.loc/articles/understanding-life-insurance/" class="sv-notifications__link articles"
                                                       data-id="148" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Understanding Life Insurance                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 147">
                                                    <a href="http://seven.loc/articles/charitable-remainder-trusts-planning-for-now-and-leaving-a-legacy/" class="sv-notifications__link articles"
                                                       data-id="147" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Charitable Remainder Trusts: Planning for Now and Leaving a Legacy                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 146">
                                                    <a href="http://seven.loc/articles/how-to-find-balance-in-your-spending/" class="sv-notifications__link articles"
                                                       data-id="146" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | How to Find Balance in Your Spending                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 145">
                                                    <a href="http://seven.loc/courses/an-updated-way-to-share-articles-from-our-platform/" class="sv-notifications__link courses"
                                                       data-id="145" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | An Updated Way to Share Articles From Our Platform                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 144">
                                                    <a href="http://seven.loc/courses/an-updated-way-to-share-articles-from-our-platform/" class="sv-notifications__link courses"
                                                       data-id="144" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | An Updated Way to Share Articles From Our Platform                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 143">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="143" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 142">
                                                    <a href="http://seven.loc/articles/5-questions-to-ask-yourself-before-investing-in-cryptocurrency/" class="sv-notifications__link articles"
                                                       data-id="142" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | 5 Questions to Ask Yourself Before Investing in Cryptocurrency                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 141">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="141" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 140">
                                                    <a href="http://seven.loc/articles/how-to-find-balance-in-your-spending/" class="sv-notifications__link articles"
                                                       data-id="140" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | How to Find Balance in Your Spending                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 139">
                                                    <a href="http://seven.loc/articles/july-market-commentary-recovery-in-the-balance/" class="sv-notifications__link articles"
                                                       data-id="139" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | July Market Commentary: Recovery in the Balance?                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 138">
                                                    <a href="http://seven.loc/articles/july-market-commentary-recovery-in-the-balance/" class="sv-notifications__link articles"
                                                       data-id="138" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | July Market Commentary: Recovery in the Balance?                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 137">
                                                    <a href="http://seven.loc/articles/setting-your-retirement-on-fire/" class="sv-notifications__link articles"
                                                       data-id="137" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Setting Your Retirement on FIRE                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 136">
                                                    <a href="http://seven.loc/articles/the-executive-way-treat-your-career-like-a-sport/" class="sv-notifications__link articles"
                                                       data-id="136" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Executive Way: Treat Your Career Like a Sport                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 135">
                                                    <a href="http://seven.loc/articles/the-stepped-up-basis-may-be-getting-stepped-on/" class="sv-notifications__link articles"
                                                       data-id="135" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Stepped-Up Basis May Be Getting Stepped On                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 134">
                                                    <a href="http://seven.loc/articles/turning-your-side-hustle-into-a-full-time-gig/" class="sv-notifications__link articles"
                                                       data-id="134" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Turning Your Side Hustle into a Full-Time Gig                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 133">
                                                    <a href="http://seven.loc/articles/three-questions-to-ask-yourself-for-a-better-financial-future/" class="sv-notifications__link articles"
                                                       data-id="133" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Three Questions to Ask Yourself for a Better Financial Future                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 132">
                                                    <a href="http://seven.loc/articles/building-your-life-team/" class="sv-notifications__link articles"
                                                       data-id="132" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Building Your Life Team                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 131">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="131" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 130">
                                                    <a href="http://seven.loc/courses/how-to-build-lead-lists-in-linkedin-sales-navigator/" class="sv-notifications__link courses"
                                                       data-id="130" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | How to Build Lead Lists in LinkedIn Sales Navigator                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 129">
                                                    <a href="http://seven.loc/articles/the-more-things-change-a-new-generation-hits-the-road/" class="sv-notifications__link articles"
                                                       data-id="129" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The More Things Change: A New Generation Hits the Road                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 128">
                                                    <a href="http://seven.loc/courses/how-to-use-the-content-from-the-templates-feature/" class="sv-notifications__link courses"
                                                       data-id="128" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | How to Use the Content From the Templates Feature                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 127">
                                                    <a href="http://seven.loc/articles/june-market-commentary-everythings-coming-up-roses/" class="sv-notifications__link articles"
                                                       data-id="127" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | June Market Commentary: Everything’s Coming Up Roses?                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 126">
                                                    <a href="http://seven.loc/articles/summer-financial-fitness-mid-year-check-in/" class="sv-notifications__link articles"
                                                       data-id="126" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Summer Financial Fitness: Mid-Year Check In                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 125">
                                                    <a href="http://seven.loc/articles/zooming-in-on-micro-investing/" class="sv-notifications__link articles"
                                                       data-id="125" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Zooming in on Micro Investing                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 124">
                                                    <a href="http://seven.loc/courses/taking-content-from-seven-group-platform-and-publishing-on-your-blog-social/" class="sv-notifications__link courses"
                                                       data-id="124" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | Taking Content from Seven Group Platform and Publishing on Your Blog & Social                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 123">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="123" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 122">
                                                    <a href="http://seven.loc/articles/investor-concerns-in-a-changed-world/" class="sv-notifications__link articles"
                                                       data-id="122" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Investor Concerns in a Changed World                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 121">
                                                    <a href="http://seven.loc/articles/a-new-approach-to-paying-for-college/" class="sv-notifications__link articles"
                                                       data-id="121" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | A New Approach to Paying for College                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 120">
                                                    <a href="http://seven.loc/courses/how-to-use-linkedin-sales-navigator-to-grow-your-business/" class="sv-notifications__link courses"
                                                       data-id="120" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | How to Use LinkedIn Sales Navigator to Grow Your Business                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 119">
                                                    <a href="http://seven.loc/courses/4-linkedin-hacks-we-use-daily/" class="sv-notifications__link courses"
                                                       data-id="119" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | 4 LinkedIn Hacks We Use Daily                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 118">
                                                    <a href="http://seven.loc/articles/real-estate-investing-closing-in-on-1031-exchanges/" class="sv-notifications__link articles"
                                                       data-id="118" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Real Estate Investing: Closing in on 1031 Exchanges                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 117">
                                                    <a href="http://seven.loc/articles/selling-a-family-business-preparing-for-a-transformational-event/" class="sv-notifications__link articles"
                                                       data-id="117" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Selling a Family Business: Preparing for a Transformational Event                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 116">
                                                    <a href="http://seven.loc/articles/market-commentary-stay-in-may-itll-be-okay/" class="sv-notifications__link articles"
                                                       data-id="116" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Market Commentary: Stay in May, It’ll Be Okay?                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 115">
                                                    <a href="http://seven.loc/articles/charitable-remainder-trusts-planning-for-now-and-leaving-a-legacy/" class="sv-notifications__link articles"
                                                       data-id="115" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Charitable Remainder Trusts: Planning for Now and Leaving a Legacy                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 114">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="114" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 113">
                                                    <a href="http://seven.loc/articles/rising-rates-whats-the-impact-on-investment-portfolios/" class="sv-notifications__link articles"
                                                       data-id="113" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Rising Rates: What’s the Impact on Investment Portfolios?                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 112">
                                                    <a href="http://seven.loc/articles/esg-aligning-investing-with-your-values/" class="sv-notifications__link articles"
                                                       data-id="112" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | ESG: Aligning Investing with Your Values                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 111">
                                                    <a href="http://seven.loc/articles/converting-high-income-into-lasting-wealth/" class="sv-notifications__link articles"
                                                       data-id="111" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Converting High Income into Lasting Wealth                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 110">
                                                    <a href="http://seven.loc/articles/zeroing-in-on-target-date-funds/" class="sv-notifications__link articles"
                                                       data-id="110" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Zeroing in on Target Date Funds                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 109">
                                                    <a href="http://seven.loc/articles/your-investment-plan-should-reflect-your-needs/" class="sv-notifications__link articles"
                                                       data-id="109" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Women Invest Differently Because They Have Different Needs                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 108">
                                                    <a href="http://seven.loc/articles/retirement-is-about-income-and-taxes/" class="sv-notifications__link articles"
                                                       data-id="108" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Retirement Is About Income … and Taxes                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 107">
                                                    <a href="http://seven.loc/articles/an-april-without-a-tax-deadline-and-other-good-news/" class="sv-notifications__link articles"
                                                       data-id="107" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | An April Without A Tax Deadline, and Other Good News                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 106">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="106" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 105">
                                                    <a href="http://seven.loc/articles/the-stepped-up-basis-may-be-getting-stepped-on/" class="sv-notifications__link articles"
                                                       data-id="105" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Stepped-Up Basis May Be Getting Stepped On                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 104">
                                                    <a href="http://seven.loc/articles/blurred-lines-the-difference-between-trading-and-investing/" class="sv-notifications__link articles"
                                                       data-id="104" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Blurred Lines: The Difference Between Trading and Investing                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 103">
                                                    <a href="http://seven.loc/articles/rising-rates-whats-the-impact-on-investment-portfolios/" class="sv-notifications__link articles"
                                                       data-id="103" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Rising Rates: What’s the Impact on Investment Portfolios?                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 102">
                                                    <a href="http://seven.loc/articles/retirement-withdrawals-know-the-risks/" class="sv-notifications__link articles"
                                                       data-id="102" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Retirement Withdrawals: Know The Risks                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 101">
                                                    <a href="http://seven.loc/articles/your-investment-portfolio-asset-allocation-the-long-and-the-short-of-it/" class="sv-notifications__link articles"
                                                       data-id="101" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Your Investment Portfolio Asset Allocation – The Long and the Short of It                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 100">
                                                    <a href="http://seven.loc/articles/managing-a-volatile-market-when-youre-close-to-retirement-three-things-to-know/" class="sv-notifications__link articles"
                                                       data-id="100" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Managing a Volatile Market When You're Close to Retirement - Three Things to Know                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 99">
                                                    <a href="http://seven.loc/articles/your-credit-score-an-often-overlooked-financial-tool/" class="sv-notifications__link articles"
                                                       data-id="99" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Your Credit Score: An Often-Overlooked Financial Tool                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 98">
                                                    <a href="http://seven.loc/articles/whats-the-impact-of-the-stimulus-on-my-long-term-financial-plan/" class="sv-notifications__link articles"
                                                       data-id="98" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | What’s the Impact of the Stimulus on My Long-Term Financial Plan?                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 97">
                                                    <a href="http://seven.loc/articles/whats-the-impact-of-the-stimulus-on-my-long-term-financial-plan/" class="sv-notifications__link articles"
                                                       data-id="97" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | What’s the Impact of the Stimulus on My Long-Term Financial Plan?                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 96">
                                                    <a href="http://seven.loc/articles/make-your-kids-money-smart/" class="sv-notifications__link articles"
                                                       data-id="96" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Make Your Kids Money-Smart                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 95">
                                                    <a href="http://seven.loc/articles/decoding-cryptocurrencies/" class="sv-notifications__link articles"
                                                       data-id="95" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Decoding Cryptocurrencies                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 94">
                                                    <a href="http://seven.loc/articles/executive-compensation-cash-balance-plans/" class="sv-notifications__link articles"
                                                       data-id="94" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Executive Compensation: Cash Balance Plans                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 93">
                                                    <a href="http://seven.loc/articles/your-guide-to-trusts-a-flexible-financial-planning-tool/" class="sv-notifications__link articles"
                                                       data-id="93" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Your Guide to Trusts: A Flexible Financial Planning Tool                                                                                 </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 92">
                                                    <a href="http://seven.loc/articles/an-eventful-month-on-all-fronts/" class="sv-notifications__link articles"
                                                       data-id="92" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | An Eventful Month on All Fronts                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 91">
                                                    <a href="http://seven.loc/articles/managing-a-volatile-market-when-youre-close-to-retirement-three-things-to-know/" class="sv-notifications__link articles"
                                                       data-id="91" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Managing a Volatile Market When You're Close to Retirement - Three Things to Know                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 90">
                                                    <a href="http://seven.loc/articles/tax-season-is-extended-but-tax-cuts-might-not-be/" class="sv-notifications__link articles"
                                                       data-id="90" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Tax Season is Extended, But Tax Cuts Might Not Be                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 89">
                                                    <a href="http://seven.loc/articles/time-bucketing-a-retirement-investing-plan/" class="sv-notifications__link articles"
                                                       data-id="89" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Time-Bucketing A Retirement Investing Plan                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 88">
                                                    <a href="http://seven.loc/articles/whats-the-impact-of-the-stimulus-on-my-long-term-financial-plan/" class="sv-notifications__link articles"
                                                       data-id="88" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | What’s the Impact of the Stimulus on My Long-Term Financial Plan?                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 87">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="87" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 86">
                                                    <a href="http://seven.loc/courses/campaign-function/" class="sv-notifications__link courses"
                                                       data-id="86" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | Get Up to Speed on The Campaign Function                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 85">
                                                    <a href="http://seven.loc/articles/eggs-in-how-many-baskets-prioritizing-building-wealth-while-you-build-your-business/" class="sv-notifications__link articles"
                                                       data-id="85" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Eggs in How Many Baskets? Prioritizing Building Wealth While You Build Your Business                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 84">
                                                    <a href="http://seven.loc/articles/markets-are-moving-what-will-it-take-to-keep-up/" class="sv-notifications__link articles"
                                                       data-id="84" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Markets Are Moving. What Will It Take to Keep Up?                                                                                </span>
                                                        <span class="sv-notifications__time">1 year ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 83">
                                                    <a href="http://seven.loc/articles/over-the-finish-line-did-somebody-say-go/" class="sv-notifications__link articles"
                                                       data-id="83" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Over the Finish Line. Did Somebody Say Go?                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 82">
                                                    <a href="http://seven.loc/articles/the-roth-ira-conversion-retirement-planning-tool/" class="sv-notifications__link articles"
                                                       data-id="82" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Roth IRA Conversion: Retirement Planning Tool?                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 81">
                                                    <a href="http://seven.loc/articles/its-the-season-for-gifting-strategies-for-a-change-in-estate-taxes/" class="sv-notifications__link articles"
                                                       data-id="81" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | It’s the Season for Gifting – Strategies for a Change in Estate Taxes                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 80">
                                                    <a href="http://seven.loc/articles/esg-investing-a-strategy-for-making-a-difference/" class="sv-notifications__link articles"
                                                       data-id="80" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | ESG Investing – A Strategy for Making a Difference                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 79">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="79" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 78">
                                                    <a href="http://seven.loc/articles/monetize-your-practice-by-adding-a-cash-balance-plan/" class="sv-notifications__link articles"
                                                       data-id="78" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Monetize Your Practice by Adding a Cash Balance Plan                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 77">
                                                    <a href="http://seven.loc/articles/everything-is-different-now-or-is-it/" class="sv-notifications__link articles"
                                                       data-id="77" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Everything Is Different Now. Or Is It?                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 76">
                                                    <a href="http://seven.loc/articles/does-a-new-administration-mean-higher-estate-taxes/" class="sv-notifications__link articles"
                                                       data-id="76" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Does a New Administration Mean Higher Estate Taxes?                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 75">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="75" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 74">
                                                    <a href="http://seven.loc/articles/the-impact-of-a-new-administration-on-your-investment-planning/" class="sv-notifications__link articles"
                                                       data-id="74" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | The Impact of a New Administration on Your Investment Planning                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 73">
                                                    <a href="http://seven.loc/articles/out-of-the-frying-pan-onto-the-plate-or-into-the-fire/" class="sv-notifications__link articles"
                                                       data-id="73" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Out of the Frying Pan. Onto the Plate or Into the Fire?                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 72">
                                                    <a href="http://seven.loc/articles/getting-close-to-retirement-accentuate-the-positive/" class="sv-notifications__link articles"
                                                       data-id="72" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Getting Close to Retirement? Accentuate the Positive                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 71">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="71" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 70">
                                                    <a href="http://seven.loc/articles/do-presidents-affect-the-market-over-the-long-term-you-might-be-surprised-by-the-answer/" class="sv-notifications__link articles"
                                                       data-id="70" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Do Presidents Affect the Market Over the Long Term? You Might Be Surprised by the Answer                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 69">
                                                    <a href="http://seven.loc/articles/your-investment-plan-should-reflect-your-needs/" class="sv-notifications__link articles"
                                                       data-id="69" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Your Investment Plan Should Reflect Your Needs                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 68">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="68" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 67">
                                                    <a href="http://seven.loc/articles/deciding-on-early-retirement-lining-up-the-moving-parts/" class="sv-notifications__link articles"
                                                       data-id="67" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Deciding on Early Retirement: Lining Up the Moving Parts                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 66">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="66" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 65">
                                                    <a href="http://seven.loc/articles/funding-a-legacy-three-ways-to-get-creative/" class="sv-notifications__link articles"
                                                       data-id="65" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Funding A Legacy: Three Ways To Get Creative                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 57">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="57" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 56">
                                                    <a href="http://seven.loc/courses/quick-google-ads-run-through/" class="sv-notifications__link courses"
                                                       data-id="56" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | Quick Google Ads Run-Through                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 55">
                                                    <a href="http://seven.loc/articles/timing-social-security-a-tax-perspective/" class="sv-notifications__link articles"
                                                       data-id="55" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Timing Social Security: A Tax Perspective                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 54">
                                                    <a href="http://seven.loc/courses/a-new-tool-were-loving-loom/" class="sv-notifications__link courses"
                                                       data-id="54" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | A New Tool We're Loving: Loom                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 53">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="53" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 50">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="50" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 49">
                                                    <a href="http://seven.loc/courses/new-linkedin-platform-test/" class="sv-notifications__link courses"
                                                       data-id="49" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | New LinkedIn Platform Test                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 48">
                                                    <a href="http://seven.loc/courses/how-to-use-the-seven-platform/" class="sv-notifications__link courses"
                                                       data-id="48" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | How to Use the Seven Platform                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 47">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="47" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 43">
                                                    <a href="http://seven.loc/articles/understanding-life-insurance/" class="sv-notifications__link articles"
                                                       data-id="43" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Understanding Life Insurance                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 41">
                                                    <a href="http://seven.loc/articles/understanding-life-insurance/" class="sv-notifications__link articles"
                                                       data-id="41" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Article</b> | Understanding Life Insurance                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 16">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="16" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 15">
                                                    <a href="http://seven.loc/courses/getting-your-website-structure-right/" class="sv-notifications__link courses"
                                                       data-id="15" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | Getting Your Website Structure Right                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 8">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="8" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 7">
                                                    <a href="http://seven.loc/courses/new-features-on-the-seven-platform/" class="sv-notifications__link courses"
                                                       data-id="7" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Training</b> | New Features on the Seven Platform                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
                                                    </a>
                                                </li>
                                                <li class="sv-notifications__item 3">
                                                    <a href="http://seven.loc/admin-dashboard/#video_module" class="sv-notifications__link video_link"
                                                       data-id="3" >
                                                                                    <span class="sv-notifications__event">
                                                                                        <b>New Weekly Video</b> | Video module link                                                                                </span>
                                                        <span class="sv-notifications__time">2 years ago</span>
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
                                        <img src="http://seven.loc/wp-content/uploads/2021/04/ava_13.svg" alt="oval" class="logo_main logo_main_style "/>
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
