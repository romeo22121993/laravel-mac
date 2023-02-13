@extends('userDashboard.master')

@section('title')
    Home Dashboard Page
@endsection

@section('content')

    <div class="container training">
        <div class="investor-holder">
            <div class="row">
                <div class="col-12 col-sm-4 col-lg-8 d-flex flex-row justify-content-start align-items-center">
                    <h4>Marketing Courses</h4>
                </div>
                <div class="col-12 col-sm-4 col-lg d-flex flex-row justify-content-start justify-content-sm-end align-items-center">
                    <h4>Courses ( <span class="count-articles"> 23</span>  )</h4>
                </div>
                <div class="col-12 col-sm-4 col-lg d-flex flex-row justify-content-start justify-content-sm-end align-items-center">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sort By:  All                        </button>
                        <div class="dropdown-menu sorting-categories" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="all">All</a>
                            <a class="dropdown-item" href="content-marketing">Content Marketing</a>
                            <a class="dropdown-item" href="email-marketing">Email Marketing</a>
                            <a class="dropdown-item" href="facebook">Facebook</a>
                            <a class="dropdown-item" href="linkedin">Linkedin</a>
                            <a class="dropdown-item" href="marketing-strategy">Marketing Strategy</a>
                            <a class="dropdown-item" href="measurement">Measurement</a>
                            <a class="dropdown-item" href="messaging">Messaging</a>
                            <a class="dropdown-item" href="paid-search">Paid Search</a>
                            <a class="dropdown-item" href="platform-training">Platform Training</a>
                            <a class="dropdown-item" href="seo">SEO</a>
                            <a class="dropdown-item" href="social-media">Social Media</a>
                            <a class="dropdown-item" href="twitter">Twitter</a>
                            <a class="dropdown-item" href="webinar-marketing">Webinar Marketing</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive video">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Courses</th>
                            <th></th>
                            <th>Number of Courses</th>
                            <th>Status</th>
                            <th>Start Date</th>
                            <th>Topic</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody class="body-items" data-all="23" data-getcat="all" data-cpt="courses">
                        <tr>
                            <td>
                                <a href="http://seven.loc/courses/start-here-welcome-to-advisor-i-o/">
                                    <img src="http://seven.loc/wp-content/uploads/2020/04/Group_2.png" alt="img1">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/courses/start-here-welcome-to-advisor-i-o/">Get Started with Laravel Pro</a>
                                <p class="grey"></p>
                            </td>
                            <td>6</td>
                            <td>In Progress</td>
                            <td>2022/10/18</td>
                            <td>
                                Platform Training    </td>
                            <td>
                                <a class="btn btn-view read-course" data-course-id="11009" href="http://seven.loc/courses/start-here-welcome-to-advisor-i-o/">
                                    View        </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://seven.loc/courses/creating-a-marketing-strategy/">
                                    <img src="http://seven.loc/wp-content/uploads/2019/12/digital-marketing.png" alt="img1">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/courses/creating-a-marketing-strategy/">Build Your Marketing Strategy</a>
                                <p class="grey"></p>
                            </td>
                            <td>11</td>
                            <td>In Progress</td>
                            <td>2022/10/18</td>
                            <td>
                                Marketing Strategy    </td>
                            <td>
                                <a class="btn btn-view read-course" data-course-id="950" href="http://seven.loc/courses/creating-a-marketing-strategy/">
                                    View        </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://seven.loc/courses/a-guide-to-linkedin/">
                                    <img src="http://seven.loc/wp-content/uploads/2019/12/link.png" alt="img1">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/courses/a-guide-to-linkedin/">Setup LinkedIn For Business Success</a>
                                <p class="grey"></p>
                            </td>
                            <td>19</td>
                            <td>In Progress</td>
                            <td>2022/10/18</td>
                            <td>
                                Linkedin, Social Media    </td>
                            <td>
                                <a class="btn btn-view read-course" data-course-id="951" href="http://seven.loc/courses/a-guide-to-linkedin/">
                                    View        </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://seven.loc/courses/how-to-use-linkedin-sales-navigator-to-grow-your-business/">
                                    <img src="http://seven.loc/wp-content/uploads/2021/06/coupon.png" alt="img1">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/courses/how-to-use-linkedin-sales-navigator-to-grow-your-business/">Use LinkedIn Sales Navigator for Content Distribution, Audience Expansion, and Positive Prospecting</a>
                                <p class="grey"></p>
                            </td>
                            <td>2</td>
                            <td>New</td>
                            <td>2022/10/18</td>
                            <td>
                                Linkedin, Social Media    </td>
                            <td>
                                <a class="btn btn-view read-course" data-course-id="3743" href="http://seven.loc/courses/how-to-use-linkedin-sales-navigator-to-grow-your-business/">
                                    View        </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://seven.loc/courses/email-marketing-building-a-consistent-communication/">
                                    <img src="http://seven.loc/wp-content/uploads/2020/01/mailing.png" alt="img1">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/courses/email-marketing-building-a-consistent-communication/">Educate, Entertain, and Serve Your Audience via Email Marketing</a>
                                <p class="grey"></p>
                            </td>
                            <td>10</td>
                            <td>New</td>
                            <td>2022/10/18</td>
                            <td>
                                Email Marketing    </td>
                            <td>
                                <a class="btn btn-view read-course" data-course-id="1062" href="http://seven.loc/courses/email-marketing-building-a-consistent-communication/">
                                    View        </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://seven.loc/courses/using-video-to-grow-your-practice/">
                                    <img src="http://seven.loc/wp-content/uploads/2022/12/Using-Video-to-Grow-Logo-150x150.png" alt="img1">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/courses/using-video-to-grow-your-practice/">Using Video to Grow Your Practice</a>
                                <p class="grey"></p>
                            </td>
                            <td>6</td>
                            <td>New</td>
                            <td>2022/10/18</td>
                            <td>
                                Platform Training    </td>
                            <td>
                                <a class="btn btn-view read-course" data-course-id="12536" href="http://seven.loc/courses/using-video-to-grow-your-practice/">
                                    View        </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://seven.loc/courses/a-new-tool-were-loving-loom/">
                                    <img src="http://seven.loc/wp-content/uploads/2020/08/webinar-150x150-1-150x150.png" alt="img1">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/courses/a-new-tool-were-loving-loom/">Use Loom to Spark Your Email Marketing and LinkedIn Prospecting</a>
                                <p class="grey"></p>
                            </td>
                            <td>1</td>
                            <td>New</td>
                            <td>2022/10/18</td>
                            <td>
                                Email Marketing    </td>
                            <td>
                                <a class="btn btn-view read-course" data-course-id="2176" href="http://seven.loc/courses/a-new-tool-were-loving-loom/">
                                    View        </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://seven.loc/courses/getting-your-social-media-post-copy-right/">
                                    <img src="http://seven.loc/wp-content/uploads/2022/01/link-150x150.png" alt="img1">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/courses/getting-your-social-media-post-copy-right/">Getting Your Social Media Post Copy Right</a>
                                <p class="grey"></p>
                            </td>
                            <td>1</td>
                            <td>New</td>
                            <td>2022/10/18</td>
                            <td>
                                Facebook, Linkedin, Social Media, Twitter    </td>
                            <td>
                                <a class="btn btn-view read-course" data-course-id="5804" href="http://seven.loc/courses/getting-your-social-media-post-copy-right/">
                                    View        </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://seven.loc/courses/organizing-your-content-in-order-to-scale/">
                                    <img src="http://seven.loc/wp-content/uploads/2020/02/innovation.png" alt="img1">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/courses/organizing-your-content-in-order-to-scale/">Organizing Your Content in Order to Scale</a>
                                <p class="grey"></p>
                            </td>
                            <td>6</td>
                            <td>In Progress</td>
                            <td>2022/10/18</td>
                            <td>
                                Content Marketing    </td>
                            <td>
                                <a class="btn btn-view read-course" data-course-id="1141" href="http://seven.loc/courses/organizing-your-content-in-order-to-scale/">
                                    View        </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://seven.loc/courses/getting-your-website-structure-right/">
                                    <img src="http://seven.loc/wp-content/uploads/2020/01/website-150x150-1-150x150.png" alt="img1">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/courses/getting-your-website-structure-right/">How Website Structure Dramatically Impacts User Experience</a>
                                <p class="grey"></p>
                            </td>
                            <td>1</td>
                            <td>New</td>
                            <td>2022/10/18</td>
                            <td>
                                Marketing Strategy    </td>
                            <td>
                                <a class="btn btn-view read-course" data-course-id="1763" href="http://seven.loc/courses/getting-your-website-structure-right/">
                                    View        </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://seven.loc/courses/how-to-remove-friction-in-your-marketing/">
                                    <img src="http://seven.loc/wp-content/uploads/2022/05/friction-150x150.png" alt="img1">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/courses/how-to-remove-friction-in-your-marketing/">How to Remove Friction in Your Marketing</a>
                                <p class="grey"></p>
                            </td>
                            <td>1</td>
                            <td>In Progress</td>
                            <td>2022/05/13</td>
                            <td>
                                Marketing Strategy    </td>
                            <td>
                                <a class="btn btn-view read-course" data-course-id="7346" href="http://seven.loc/courses/how-to-remove-friction-in-your-marketing/">
                                    View        </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://seven.loc/courses/setting-your-growth-goals-for-2022/">
                                    <img src="http://seven.loc/wp-content/uploads/2022/01/target-150x150.png" alt="img1">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/courses/setting-your-growth-goals-for-2022/">Set Growth Goals for 2023</a>
                                <p class="grey"></p>
                            </td>
                            <td>1</td>
                            <td>In Progress</td>
                            <td>2022/05/12</td>
                            <td>
                                Marketing Strategy    </td>
                            <td>
                                <a class="btn btn-view read-course" data-course-id="6035" href="http://seven.loc/courses/setting-your-growth-goals-for-2022/">
                                    View        </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://seven.loc/courses/how-to-create-a-survey-using-google-surveys/">
                                    <img src="http://seven.loc/wp-content/uploads/2022/03/sign-up-150x150.png" alt="img1">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/courses/how-to-create-a-survey-using-google-surveys/">Using Google Forms to Drive your Referral Campaigns</a>
                                <p class="grey"></p>
                            </td>
                            <td>1</td>
                            <td>In Progress</td>
                            <td>2022/03/06</td>
                            <td>
                                Content Marketing, Email Marketing    </td>
                            <td>
                                <a class="btn btn-view read-course" data-course-id="6578" href="http://seven.loc/courses/how-to-create-a-survey-using-google-surveys/">
                                    View        </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://seven.loc/courses/editing-a-video-in-camtasia-a-tactical-guide/">
                                    <img src="http://seven.loc/wp-content/uploads/2021/10/video-player-150x150.png" alt="img1">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/courses/editing-a-video-in-camtasia-a-tactical-guide/">How to Edit a Video in Camtasia</a>
                                <p class="grey"></p>
                            </td>
                            <td>1</td>
                            <td>In Progress</td>
                            <td>2021/10/26</td>
                            <td>
                                Content Marketing    </td>
                            <td>
                                <a class="btn btn-view read-course" data-course-id="5111" href="http://seven.loc/courses/editing-a-video-in-camtasia-a-tactical-guide/">
                                    View        </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://seven.loc/courses/how-to-create-a-webinar-using-everwebinar/">
                                    <img src="http://seven.loc/wp-content/uploads/2021/10/online-class-2-150x150.png" alt="img1">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/courses/how-to-create-a-webinar-using-everwebinar/">How to Create a Webinar Using EverWebinar</a>
                                <p class="grey"></p>
                            </td>
                            <td>1</td>
                            <td>New</td>
                            <td>2021/10/04</td>
                            <td>
                                Webinar Marketing    </td>
                            <td>
                                <a class="btn btn-view read-course" data-course-id="4934" href="http://seven.loc/courses/how-to-create-a-webinar-using-everwebinar/">
                                    View        </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://seven.loc/courses/quick-google-ads-run-through/">
                                    <img src="http://seven.loc/wp-content/uploads/2020/09/logotype-1-150x150-1-150x150.png" alt="img1">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/courses/quick-google-ads-run-through/">Quick Google Ads Run-Through</a>
                                <p class="grey"></p>
                            </td>
                            <td>1</td>
                            <td>In Progress</td>
                            <td>2020/09/16</td>
                            <td>
                                Paid Search    </td>
                            <td>
                                <a class="btn btn-view read-course" data-course-id="2271" href="http://seven.loc/courses/quick-google-ads-run-through/">
                                    View        </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://seven.loc/courses/graphic-creation-a-guide-to-canva/">
                                    <img src="http://seven.loc/wp-content/uploads/2020/05/graphic-design-150x150-1-150x150.png" alt="img1">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/courses/graphic-creation-a-guide-to-canva/">Using Canva to Create Graphics for your Marketing Content</a>
                                <p class="grey"></p>
                            </td>
                            <td>8</td>
                            <td>New</td>
                            <td>2020/05/08</td>
                            <td>
                                Content Marketing, Email Marketing, Social Media    </td>
                            <td>
                                <a class="btn btn-view read-course" data-course-id="1650" href="http://seven.loc/courses/graphic-creation-a-guide-to-canva/">
                                    View        </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://seven.loc/courses/a-guide-to-paid-search/">
                                    <img src="http://seven.loc/wp-content/uploads/2020/02/ppc.png" alt="img1">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/courses/a-guide-to-paid-search/">A Guide to Paid Search</a>
                                <p class="grey"></p>
                            </td>
                            <td>11</td>
                            <td>In Progress</td>
                            <td>2020/02/18</td>
                            <td>
                                Paid Search    </td>
                            <td>
                                <a class="btn btn-view read-course" data-course-id="1148" href="http://seven.loc/courses/a-guide-to-paid-search/">
                                    View        </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://seven.loc/courses/a-guide-to-search-engine-optimization/">
                                    <img src="http://seven.loc/wp-content/uploads/2019/12/tags-1.png" alt="img1">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/courses/a-guide-to-search-engine-optimization/">A Guide to Search Engine Optimization</a>
                                <p class="grey"></p>
                            </td>
                            <td>11</td>
                            <td>In Progress</td>
                            <td>2020/02/08</td>
                            <td>
                                SEO    </td>
                            <td>
                                <a class="btn btn-view read-course" data-course-id="1118" href="http://seven.loc/courses/a-guide-to-search-engine-optimization/">
                                    View        </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://seven.loc/courses/measuring-and-tracking-your-marketing-efforts/">
                                    <img src="http://seven.loc/wp-content/uploads/2019/12/puzzle.png" alt="img1">
                                </a>
                            </td>
                            <td>
                                <a href="http://seven.loc/courses/measuring-and-tracking-your-marketing-efforts/">Measuring and Tracking your Marketing Efforts</a>
                                <p class="grey"></p>
                            </td>
                            <td>7</td>
                            <td>In Progress</td>
                            <td>2019/12/18</td>
                            <td>
                                Measurement    </td>
                            <td>
                                <a class="btn btn-view read-course" data-course-id="954" href="http://seven.loc/courses/measuring-and-tracking-your-marketing-efforts/">
                                    View        </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <a id="load_more_button">Load More</a>
                </div>
            </div>
        </div>
    </div>

@endsection
