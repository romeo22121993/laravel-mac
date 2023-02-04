@extends('frontend.master')

@section('title')
    Blog Page
@endsection

@section('content')

    <div class="inner_container services_block platform_block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Our Blog</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="small-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h1 class="d-none">Blog</h1>
                    <h2>Articles</h2>
                </div>
                <div class="col-lg-8">
                    <ul class="navbar topics-nav d-flex justify-content-start align-items-center all_posts_categories">
                        <li><a href="#" data-href="all" class="nav-link cat active" data-cat="ALL TOPICS">ALL TOPICS</a></li>
                        <li><a href="#" data-href="content" class="cat nav-link" data-cat="CONTENT MARKETING">CONTENT MARKETING</a></li>
                        <li><a href="#" data-href="marketing-strategy" class="cat nav-link" data-cat="MARKETING STRATEGY">MARKETING STRATEGY</a></li>
                        <li><a href="#" data-href="press-releases" class="cat nav-link" data-cat="PRESS RELEASES">PRESS RELEASES</a></li>
                        <li><a href="#" data-href="seo" class="cat nav-link" data-cat="SEO">SEO</a></li>
                        <li><a href="#" data-href="social-media" class="cat nav-link" data-cat="SOCIAL MEDIA">SOCIAL MEDIA</a></li>
                        <li><a href="#" data-href="technology" class="cat nav-link" data-cat="TECHNOLOGY">TECHNOLOGY</a></li>
                        <li><a href="#" data-href="web" class="cat nav-link" data-cat="WEB">WEB</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="default-padding case-studies">
        <div class="container">
            <div class="row d-flex justify-content-between all_posts" data-all="48" data-getcat="all" data-cpt="post">

                <div class="sv-blog-post col-lg-6 col-sm-12 col-xs-12">
                    <div class="one-card">
                        <div class="blog-top-card">
                            <a href="http://seven.loc/cion-investment-group-acquires-full-stake-in-seven-group/">
                                <img src="http://seven.loc/wp-content/uploads/2022/07/Blue-and-Red-Graduation-Class-2022-Greetings-Banner-1.png" alt="">
                            </a>
                        </div>
                        <div class="card-content blog_list">
                            <h3><a href="http://seven.loc/cion-investment-group-acquires-full-stake-in-seven-group/">CION Investment Group Acquires Full Stake in Seven Group</a></h3>
                            <a href="http://seven.loc/cion-investment-group-acquires-full-stake-in-seven-group/">Read article</a>
                        </div>
                    </div>
                </div>                                    <div class="sv-blog-post col-lg-6 col-sm-12 col-xs-12">
                    <div class="one-card">
                        <div class="blog-top-card">
                            <a href="http://seven.loc/marketing-steps-financial-advisor/">
                                <img src="http://seven.loc/wp-content/uploads/2022/06/Steps-Taken.jpg" alt="">
                            </a>
                        </div>
                        <div class="card-content blog_list">
                            <h3><a href="http://seven.loc/marketing-steps-financial-advisor/">The Long and Short of It – How to Prioritize Your Marketing Initiatives as Financial Advisor</a></h3>
                            <a href="http://seven.loc/marketing-steps-financial-advisor/">Read article</a>
                        </div>
                    </div>
                </div>                                    <div class="sv-blog-post col-lg-6 col-sm-12 col-xs-12">
                    <div class="one-card">
                        <div class="blog-top-card">
                            <a href="http://seven.loc/financial-advisor-marketing-volatility/">
                                <img src="http://seven.loc/wp-content/uploads/2022/05/Market-Volatility.jpg" alt="Market Volatility">
                            </a>
                        </div>
                        <div class="card-content blog_list">
                            <h3><a href="http://seven.loc/financial-advisor-marketing-volatility/">Cutting Through the Noise During Times of Volatility</a></h3>
                            <a href="http://seven.loc/financial-advisor-marketing-volatility/">Read article</a>
                        </div>
                    </div>
                </div>                                    <div class="sv-blog-post col-lg-6 col-sm-12 col-xs-12">
                    <div class="one-card">
                        <div class="blog-top-card">
                            <a href="http://seven.loc/seven-group-presults-partnership/">
                                <img src="http://seven.loc/wp-content/uploads/2022/05/2.png" alt="">
                            </a>
                        </div>
                        <div class="card-content blog_list">
                            <h3><a href="http://seven.loc/seven-group-presults-partnership/">Seven Group &amp; Presults Partner to Give Financial Advisors Integrated Access to AI-Based Compliance Engine</a></h3>
                            <a href="http://seven.loc/seven-group-presults-partnership/">Read article</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" id="load_more_posts_button" class="btn btn-primary btn-load">Load More</a>
                </div>
            </div>
        </div>
    </div>




@endsection
