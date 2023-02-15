@extends('userDashboard.master')

@section('title')
    Home Dashboard Page
@endsection

@section('content')

    <div class="container campaigns" data-count-userlists-limit="30">

        <div class="all_campaigns_block template new" data-all="63" data-getcat1="original" data-gettype="all" data-gettopic="all" data-page="1" data-getcat="all" data-cpt="campaigns">
            <div class="row">
            </div>

            <div class="row" style="margin-top: 25px;">
                <div class="col-12">
                    <div class="sv-filter">
                        <h2 class="sv-title">Campaigns<!--                    <p style="color: #CA090A;font-weight: bold;font-family: 'Work Sans',sans-serif;">Email campaign sending is currently offline, however, all email content is available to edit, save, and download for use on any external email system.</p>-->
                        </h2>
                        <p class="sv-filter__description">
                            Whether you need an educational drip campaign for prospects, a timely email for clients, or to keep your entire list updated on what's happening in the market, here you'll find all email campaigns. You can directly download the content for your own email systems.                    </p>
                        <form action="#" method="post" class="sv-filter__form campaigns_filter_form">

                            <div class="sv-filter__item">
                                <label for="sv-filter-topic" class="sv-tooltip-container">
                                    Topic                                <span class="sv-tooltip sv-tooltip--big sv-tooltip--in-line" data-tooltip="Here you can filter by Campaign Topic, whether it's retirement college planning, or even a client survey. "></span>
                                </label>
                                <span class="select-wrapper">
                                <select name="topic" id="sv-filter-topic">
                                    <option value="all">All</option>
                                                                              <option value="benefits-financial-advisor">Benefits Financial Advisor</option>
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
                                                                              <option value="mid-career-professionals">Mid-Career Professionals</option>
                                                                              <option value="pre-retirement-planning">Pre-Retirement Planning</option>
                                                                              <option value="retirement-planning">Retirement Planning</option>
                                                                              <option value="small-business-and-practice-management">Small Business and Practice Management</option>
                                                                              <option value="social-security">Social Security</option>
                                                                              <option value="tax-planning">Tax Planning</option>
                                                                              <option value="timely-topical">Timely/Topical</option>
                                                                              <option value="women-investors">Women Investors</option>
                                                                     </select>
                            </span>
                            </div>

                            <div class="sv-filter__item">
                                <label for="sv-filter-type" class="sv-tooltip-container">
                                    Type of Asset                                <span class="sv-tooltip sv-tooltip--big sv-tooltip--in-line" data-tooltip="Looking for a specific type of campaign? Find the best campaign for you across commentaries, timely emails, and drips. "></span>
                                </label>
                                <span class="select-wrapper">
                                    <select name="type" id="sv-filter-type">
                                        <option value="all" selected="">All</option>
                                                                                    <option value="commentary">Commentary</option>
                                                                                    <option value="educational-drip">Educational Drip</option>
                                                                                    <option value="prospecting-onboarding">Prospecting &amp; Onboarding</option>
                                                                                    <option value="surveys">Surveys</option>
                                                                                    <option value="timely">Timely</option>
                                                                            </select>
                                </span>
                            </div>

                            <div class="sv-filter__item loader_block">
                                <img src="./dist/img/loader.gif" alt="loader" id="loader">
                            </div>
                        </form>
                    </div>

                    <div class="columns-grid">
                        <div class="campaign" id="11067">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/october-market-commentary-fed-to-economy-drop-dead-economy-wait-no-were-slowing/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/10/aaron-burden-Qy-CBKUg_X8-unsplash-scaled.jpg);">
                                <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                            </a>
                            <div class="campaign__info">
                                <div class="wordiframe" style="display: none;">
                                    <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2022/10/October-Market-Commentary-1.docx" frameborder="0">
                                    </iframe>
                                </div>
                                <span class="campaign__number">
            Commentary        </span>
                                <h3 class="campaign__title"><a href="http://seven.loc/campaigns/october-market-commentary-fed-to-economy-drop-dead-economy-wait-no-were-slowing/" style="pointer-events: none;">Commentary: October Market Commentary – Fed to Economy: Drop Dead. Economy: Wait, No – We’re Slowing</a></h3>
                                <div class="campaign__button view_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/10/October-Market-Commentary-1.docx" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/10/October-Market-Commentary-1.docx" class="sv-button sv-button--green">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <div class="campaign" id="10956">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/changing-careers-and-401k-rollovers/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/01/istockphoto-870083342-170667a-e1643128755400.jpeg);">
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
                                <div class="campaign__button view_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/10/Changing-Careers-and-401k-Rollovers-1.docx" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/10/Changing-Careers-and-401k-Rollovers-1.docx" class="sv-button sv-button--green">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <div class="campaign" id="10876">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/win-back-campaign-email-template/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/10/Copy-of-Seven-Group-Blog-Covers-40.png);">
                                <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                            </a>
                            <div class="campaign__info">
                                <div class="wordiframe" style="display: none;">
                                    <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2021/07/Win-Back-Campaign-3-1.docx" frameborder="0">
                                    </iframe>
                                </div>
                                <span class="campaign__number">
            Benefits Financial Advisor        </span>
                                <h3 class="campaign__title"><a href="http://seven.loc/campaigns/win-back-campaign-email-template/" style="pointer-events: none;">Prospecting &amp; Onboarding: Win-Back Campaign Email Template</a></h3>
                                <div class="campaign__button view_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2021/07/Win-Back-Campaign-3-1.docx" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2021/07/Win-Back-Campaign-3-1.docx" class="sv-button sv-button--green">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <div class="campaign" id="10874">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/onboarding-welcome-email-sequence/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/03/Copy-of-Copy-of-Seven-Group-Blog-Covers-4-1.png);">
                                <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                            </a>
                            <div class="campaign__info">
                                <div class="wordiframe" style="display: none;">
                                    <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2022/01/Welcome-Program-2.docx" frameborder="0">
                                    </iframe>
                                </div>
                                <span class="campaign__number">
            Benefits Financial Advisor        </span>
                                <h3 class="campaign__title"><a href="http://seven.loc/campaigns/onboarding-welcome-email-sequence/" style="pointer-events: none;">Prospecting &amp; Onboarding: Onboarding Welcome Email Sequence</a></h3>
                                <div class="campaign__button view_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/01/Welcome-Program-2.docx" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/01/Welcome-Program-2.docx" class="sv-button sv-button--green">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <div class="campaign" id="10872">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/client-experience-survey/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/05/Copy-of-Seven-Group-Blog-Covers-30.png);">
                                <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                            </a>
                            <div class="campaign__info">
                                <div class="wordiframe" style="display: none;">
                                    <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2021/08/Client-Experience-Survey-1.docx" frameborder="0">
                                    </iframe>
                                </div>
                                <span class="campaign__number">
                    </span>
                                <h3 class="campaign__title"><a href="http://seven.loc/campaigns/client-experience-survey/" style="pointer-events: none;">Survey: Client Experience</a></h3>
                                <div class="campaign__button view_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2021/08/Client-Experience-Survey-1.docx" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2021/08/Client-Experience-Survey-1.docx" class="sv-button sv-button--green">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <div class="campaign" id="10870">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/current-market-environment-survey/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/06/Copy-of-Copy-of-Seven-Group-Blog-Covers-30-1.png);">
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
                                <div class="campaign__button view_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/01/Market-Survey-Referral-Campaign-7-1.docx" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/01/Market-Survey-Referral-Campaign-7-1.docx" class="sv-button sv-button--green">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <div class="campaign" id="10868">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/one-thing-survey/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/02/linkedin-sales-solutions-Z4BTpfQx_q4-unsplash.jpg);">
                                <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                            </a>
                            <div class="campaign__info">
                                <div class="wordiframe" style="display: none;">
                                    <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2022/04/One-Thing-Survey-Referral-Campaign-1-1-1.docx" frameborder="0">
                                    </iframe>
                                </div>
                                <span class="campaign__number">
                    </span>
                                <h3 class="campaign__title"><a href="http://seven.loc/campaigns/one-thing-survey/" style="pointer-events: none;">Survey: One-Thing</a></h3>
                                <div class="campaign__button view_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/04/One-Thing-Survey-Referral-Campaign-1-1-1.docx" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/04/One-Thing-Survey-Referral-Campaign-1-1-1.docx" class="sv-button sv-button--green">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <div class="campaign" id="10866">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/retirement-planning-survey-referral-campaign/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/08/seven-group-blog-covers-2.png);">
                                <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                            </a>
                            <div class="campaign__info">
                                <div class="wordiframe" style="display: none;">
                                    <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2022/08/Retirement-Survey-Referral-Campaign-1.docx" frameborder="0">
                                    </iframe>
                                </div>
                                <span class="campaign__number">
            Retirement Planning        </span>
                                <h3 class="campaign__title"><a href="http://seven.loc/campaigns/retirement-planning-survey-referral-campaign/" style="pointer-events: none;">Survey: Retirement Planning Survey-Referral Campaign</a></h3>
                                <div class="campaign__button view_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/08/Retirement-Survey-Referral-Campaign-1.docx" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/08/Retirement-Survey-Referral-Campaign-1.docx" class="sv-button sv-button--green">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <div class="campaign" id="10862">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/inbound-inquiry-email-sequence/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/08/Copy-of-Seven-Group-Blog-Covers-51.png);">
                                <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                            </a>
                            <div class="campaign__info">
                                <div class="wordiframe" style="display: none;">
                                    <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2021/09/Form-Fill-or-Inquiry-Email-Sequence-1.docx" frameborder="0">
                                    </iframe>
                                </div>
                                <span class="campaign__number">
            Benefits Financial Advisor        </span>
                                <h3 class="campaign__title"><a href="http://seven.loc/campaigns/inbound-inquiry-email-sequence/" style="pointer-events: none;">Prospecting &amp; Onboarding: Inbound Inquiry Email Sequence</a></h3>
                                <div class="campaign__button view_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2021/09/Form-Fill-or-Inquiry-Email-Sequence-1.docx" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2021/09/Form-Fill-or-Inquiry-Email-Sequence-1.docx" class="sv-button sv-button--green">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <div class="campaign" id="10852">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/google-review-email-template/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/03/Copy-of-Seven-Group-Blog-Covers-19.png);">
                                <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                            </a>
                            <div class="campaign__info">
                                <div class="wordiframe" style="display: none;">
                                    <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2021/12/Google-Review-Template.docx" frameborder="0">
                                    </iframe>
                                </div>
                                <span class="campaign__number">
                    </span>
                                <h3 class="campaign__title"><a href="http://seven.loc/campaigns/google-review-email-template/" style="pointer-events: none;">Survey: Google Review Email Template</a></h3>
                                <div class="campaign__button view_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2021/12/Google-Review-Template.docx" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2021/12/Google-Review-Template.docx" class="sv-button sv-button--green">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <div class="campaign" id="9745">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/september-market-commentary-the-fed-is-focused-on-inflation-what-does-that-mean-for-the-markets-and-the-economy/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/09/janko-ferlic-OAvt5bJUWSI-unsplash-1-scaled.jpg);">
                                <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                            </a>
                            <div class="campaign__info">
                                <div class="wordiframe" style="display: none;">
                                    <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2022/09/September-Market-Commentary.docx" frameborder="0">
                                    </iframe>
                                </div>
                                <span class="campaign__number">
            Commentary        </span>
                                <h3 class="campaign__title"><a href="http://seven.loc/campaigns/september-market-commentary-the-fed-is-focused-on-inflation-what-does-that-mean-for-the-markets-and-the-economy/" style="pointer-events: none;">Commentary: September Market Commentary: The Fed Is Focused on Inflation. What Does That Mean for the Markets and the Economy?</a></h3>
                                <div class="campaign__button view_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/09/September-Market-Commentary.docx" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/09/September-Market-Commentary.docx" class="sv-button sv-button--green">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <div class="campaign" id="9715">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/the-college-payment-puzzle-for-high-earning-families/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/08/casey-olsen-NlFyPKxXORo-unsplash.jpg);">
                                <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                            </a>
                            <div class="campaign__info">
                                <div class="wordiframe" style="display: none;">
                                    <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2022/08/The-College-Payment-Puzzle-for-High-Earning-Families-1.docx" frameborder="0">
                                    </iframe>
                                </div>
                                <span class="campaign__number">
            College Saving, Mid-Career Professionals, Timely/Topical        </span>
                                <h3 class="campaign__title"><a href="http://seven.loc/campaigns/the-college-payment-puzzle-for-high-earning-families/" style="pointer-events: none;">Timely: The College Payment Puzzle for High-Earning Families</a></h3>
                                <div class="campaign__button view_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/08/The-College-Payment-Puzzle-for-High-Earning-Families-1.docx" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/08/The-College-Payment-Puzzle-for-High-Earning-Families-1.docx" class="sv-button sv-button--green">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <div class="campaign" id="9655">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/drip-building-wealth-and-creating-flexibility/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/08/alex-guillaume-xTeGDHbkHQ4-unsplash.jpg);">
                                <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                            </a>
                            <div class="campaign__info">
                                <div class="wordiframe" style="display: none;">
                                    <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2022/08/Building-Wealth-and-Creating-Flexibility.docx" frameborder="0">
                                    </iframe>
                                </div>
                                <span class="campaign__number">
            Small Business and Practice Management        </span>
                                <h3 class="campaign__title"><a href="http://seven.loc/campaigns/drip-building-wealth-and-creating-flexibility/" style="pointer-events: none;">Drip: Building Wealth and Creating Flexibility</a></h3>
                                <div class="campaign__button view_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/08/Building-Wealth-and-Creating-Flexibility.docx" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/08/Building-Wealth-and-Creating-Flexibility.docx" class="sv-button sv-button--green">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <div class="campaign" id="9409">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/survey-retirement-planning/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/08/ran-berkovich-kSLNVacFehs-unsplash.jpg);">
                                <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                            </a>
                            <div class="campaign__info">
                                <div class="wordiframe" style="display: none;">
                                    <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2022/08/Survey-Retirement-Planning.docx" frameborder="0">
                                    </iframe>
                                </div>
                                <span class="campaign__number">
            Retirement Planning        </span>
                                <h3 class="campaign__title"><a href="http://seven.loc/campaigns/survey-retirement-planning/" style="pointer-events: none;">Survey: Retirement Planning</a></h3>
                                <div class="campaign__button view_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/08/Survey-Retirement-Planning.docx" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/08/Survey-Retirement-Planning.docx" class="sv-button sv-button--green">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <div class="campaign" id="9303">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/august-market-commentary-will-a-month-of-fresh-data-change-the-feds-aggressive-stance/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/08/Copy-of-Seven-Group-Blog-Covers-48.png);">
                                <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                            </a>
                            <div class="campaign__info">
                <span class="campaign__number">
            Commentary        </span>
                                <h3 class="campaign__title"><a href="http://seven.loc/campaigns/august-market-commentary-will-a-month-of-fresh-data-change-the-feds-aggressive-stance/" style="pointer-events: none;">Private: August Market Commentary: Will A Month of Fresh Data Change the Fed’s Aggressive Stance?</a></h3>
                                <div class="campaign__button view_campaign_btn">
                                    <a href="" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="" class="sv-button sv-button--green" style="pointer-events: none;">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <div class="campaign" id="9069">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/timely-double-trouble-rates-up-gdp-down-times-2/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/07/erik-mclean-MAttqoT9atI-unsplash.jpg);">
                                <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                            </a>
                            <div class="campaign__info">
                <span class="campaign__number">
            Timely/Topical        </span>
                                <h3 class="campaign__title"><a href="http://seven.loc/campaigns/timely-double-trouble-rates-up-gdp-down-times-2/" style="pointer-events: none;">Private: Timely: Double Trouble – Rates Up, GDP Down Times 2</a></h3>
                                <div class="campaign__button view_campaign_btn">
                                    <a href="" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="" class="sv-button sv-button--green" style="pointer-events: none;">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <div class="campaign" id="8659">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/is-a-roth-conversion-the-right-move/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/07/nathan-dumlao-KEniowKfX3k-unsplash.jpg);">
                                <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                            </a>
                            <div class="campaign__info">
                                <div class="wordiframe" style="display: none;">
                                    <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2022/07/Is-a-Roth-Conversion-the-Right-Move.docx" frameborder="0">
                                    </iframe>
                                </div>
                                <span class="campaign__number">
            Retirement Planning, Tax Planning        </span>
                                <h3 class="campaign__title"><a href="http://seven.loc/campaigns/is-a-roth-conversion-the-right-move/" style="pointer-events: none;">Drip: Is a Roth Conversion the Right Move?</a></h3>
                                <div class="campaign__button view_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/07/Is-a-Roth-Conversion-the-Right-Move.docx" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/07/Is-a-Roth-Conversion-the-Right-Move.docx" class="sv-button sv-button--green">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <div class="campaign" id="8586">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/timely-are-we-in-or-close-to-a-recession/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/07/jason-pofahl-zLtXrNXJpKM-unsplash.jpg);">
                                <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                            </a>
                            <div class="campaign__info">
                <span class="campaign__number">
            Timely/Topical        </span>
                                <h3 class="campaign__title"><a href="http://seven.loc/campaigns/timely-are-we-in-or-close-to-a-recession/" style="pointer-events: none;">Private: Timely: Are We In – or Close to – a Recession?</a></h3>
                                <div class="campaign__button view_campaign_btn">
                                    <a href="" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="" class="sv-button sv-button--green" style="pointer-events: none;">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <div class="campaign" id="8293">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/july-market-commentary-will-the-feds-rate-resolve-lead-to-recession/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/07/matteo-miliddi-kxn6gCYMnX0-unsplash-scaled.jpg);">
                                <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                            </a>
                            <div class="campaign__info">
                <span class="campaign__number">
            Commentary        </span>
                                <h3 class="campaign__title"><a href="http://seven.loc/campaigns/july-market-commentary-will-the-feds-rate-resolve-lead-to-recession/" style="pointer-events: none;">Private: July Market Commentary: Will the Fed’s Rate Resolve Lead to Recession?</a></h3>
                                <div class="campaign__button view_campaign_btn">
                                    <a href="" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="" class="sv-button sv-button--green" style="pointer-events: none;">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <div class="campaign" id="8137">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/drip-tax-planning-is-even-more-important-in-retirement/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/06/diana-polekhina-bMOIEj0sLfM-unsplash.jpg);">
                                <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                            </a>
                            <div class="campaign__info">
                                <div class="wordiframe" style="display: none;">
                                    <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2022/06/Tax-Planning-is-Even-More-Important-In-Retirement.docx" frameborder="0">
                                    </iframe>
                                </div>
                                <span class="campaign__number">
            Pre-Retirement Planning, Retirement Planning, Tax Planning        </span>
                                <h3 class="campaign__title"><a href="http://seven.loc/campaigns/drip-tax-planning-is-even-more-important-in-retirement/" style="pointer-events: none;">Drip: Tax Planning Is Even More Important in Retirement</a></h3>
                                <div class="campaign__button view_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/06/Tax-Planning-is-Even-More-Important-In-Retirement.docx" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/06/Tax-Planning-is-Even-More-Important-In-Retirement.docx" class="sv-button sv-button--green">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <div class="campaign" id="8131">
                            <a class="campaign__image d-block ribbon" href="http://seven.loc/campaigns/prospecting-content-download-follow-up/" style="pointer-events: none; background-image: url(http://seven.loc/wp-content/uploads/2022/06/daria-nepriakhina-guiQYiRxkZY-unsplash.jpg);">
                                <!--        <span class="ribbon-target" style="--><!--">--><!--</span>-->
                            </a>
                            <div class="campaign__info">
                                <div class="wordiframe" style="display: none;">
                                    <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2022/06/Prospecting-Content-Download-Follow-Up.docx" frameborder="0">
                                    </iframe>
                                </div>
                                <span class="campaign__number">
            Benefits Financial Advisor        </span>
                                <h3 class="campaign__title"><a href="http://seven.loc/campaigns/prospecting-content-download-follow-up/" style="pointer-events: none;">Prospecting &amp; Onboarding: Content Download Follow Up</a></h3>
                                <div class="campaign__button view_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/06/Prospecting-Content-Download-Follow-Up.docx" class="sv-button sv-button--green">
                                        View            </a>
                                </div>
                                <div class="campaign__button download_campaign_btn">
                                    <a href="http://seven.loc/wp-content/uploads/2022/06/Prospecting-Content-Download-Follow-Up.docx" class="sv-button sv-button--green">
                                        Download            </a>
                                </div>
                            </div>
                        </div>
                        <img src="./dist/img/loader.gif" id="loader_campaign" alt="loader" style=" display: none; position: absolute; left: 50%; top: 50%;">
                    </div>
                </div>

                <div class="sv-load-more-space">
                    <a href="#" id="load_more_campaigns" class="new sv-button--border">See More                        <img src="./dist/img/loader.gif" alt="loader_more" id="loader_more">
                    </a>
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
