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
                                            <a href="{{ route('dashboard.courses') }}"><b>Coaching</b></a>
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
                                                    Get Started with Laravel Pro                                                </a>
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
        <div class="row">
            <div class="col-12">
                <div class="white-element">

                    <div class="row">

                        <div class="col-12">
                            <h3>{{ $currentUser->name }}: <p>Let’s take a look at your recent activity.</p>
                            </h3>
                        </div>
                        <div class="col-12 col-md-4 border-r">
                            <div class="general-holder d-flex flex-column justify-content-center align-items-center">
                                <p>You’ve read</p>
                                <label>49</label>
                                <p>next-level insights</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 border-r">
                            <div class="general-holder d-flex flex-column justify-content-center align-items-center">
                                <p>You’ve taken</p>
                                <label>0</label>
                                <p>lessons</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="general-holder d-flex flex-column justify-content-center align-items-center">
                                <p>You’ve shared</p>
                                <label>26</label>
                                <p>items with clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <h4>Care to pick up where you left off?:                <a href="http://seven.loc/courses/start-here-welcome-to-advisor-i-o/">Get Started with Laravel Pro</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="white-element ">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-15">Latest Articles</h2>
                        </div>
                        @foreach($articles as $article)
                            <div class="col-12 col-md-6 col-lg-12">
                                <div class="grey-box">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-3">
                                            <a href="{{ route('dashboard.single.article', $article->slug)}}" class="read-article" data-post-id="13527" >
                                                <div class="post-image"
                                                     style="background-image: url(/{{$article->img}});">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-lg-9 d-flex justify-content-center align-items-center pl-0">
                                            <div class="row w-100">
                                                <div class="col-12 col-lg-9 d-flex flex-column justify-content-center align-items-start">
                                                    <a href="{{ route('dashboard.single.article', $article->slug)}}" data-post-id="13527" class="read-article">
                                                        <p class="bold">{{$article->title}}</p>
                                                    </a>
                                                </div>
                                                <div class="col-12 col-lg-3 d-flex flex-row justify-content-end align-items-center">
                                                    <a href="{{ route('dashboard.single.article', $article->slug)}}" style="padding-right: 10px;">View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="w-100 col-12 d-flex flex-row justify-content-end align-items-center link-block">
                            <a href="http://seven.loc/admin-content/" class="read-more">See More
                                <img src="{{ asset('frontendDashboard/themesAssets/dist/img/arrow-right.png') }}" alt="arrow right">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="white-element mb-100">
                    <div class="row">

                        <div class="col-12">
                            <h4>Coaching for You</h4>
                        </div>

                        @foreach($courses as $course)
                            @php
                                $status = '';
                                if ( !empty( $progressingCourses ) && is_array( $progressingCourses ) && in_array( $course->id, $progressingCourses ) ) {
                                    $status = 'In Progress';
                                }
                                elseif ( !empty( $completedCourses ) && is_array( $completedCourses ) && in_array( $course->id, $completedCourses ) ) {
                                    $status = 'Completed';
                                }
                                else {
                                    $status = 'New';
                                }
                            @endphp
                            <div class="col-12 col-md-6 col-xl-4">
                                <div class="white-element grey-bg-sect strategies-holder status-new d-flex flex-column justify-content-start align-items-center">
                                    <a href="{{ route('dashboard.single.course', $course->slug ) }}">
                                        <img
                                         src="@if( $course->img != 'none' ) {{"/".$course->img}} @else {{ asset('/img/none.jpg') }} @endif">
                                    </a>
                                    <div class="point-holder d-flex flex-row justify-content-center align-items-center">
                                        <div class="point-dot"></div>
                                        <div class="point-dot"></div>
                                        <div class="point-dot"></div>
                                        <div class="point-dot"></div>
                                        <div class="point-dot"></div>
                                        <div class="point-dot"></div>
                                    </div>
                                    <p>
                                        <a href="{{ route('dashboard.single.course', $course->slug ) }}" class="read-course" data-course-id="{{$course->id}}">
                                            {{ $course->title }}
                                        </a>
                                    </p>
                                    <p class="grey">{{$status}}</p>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-12">
                            <div class="link-box d-flex flex-row justify-content-end align-items-center">
                                <a href="{{ route('dashboard.courses') }}" class="read-more">See More
                                    <img src="{{ asset('frontendDashboard/themesAssets/dist/img/arrow-right.png') }}" alt="arrow right">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

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

                <div class="white-element right-holder">
                    <div class="row">
                        <div class="sv-tasklist">
                            <div class="sv-tasklist__header">
                                <h4 class="sv-tasklist__title">Things to Do This Week</h4>
                                <p class="sv-tasklist__period">Feb 6th - Feb 12th</p>
                            </div>

                            <ul class="tabs">
                                <li class="tab-link active" data-tab="tab-1">This Week</li>
                                <li class="tab-link" data-tab="tab-2">Saved</li>
                            </ul>

                            <div id="tab-1" class="tab-content active">
                                <div class="tab-content__head">
                                    <span></span>
                                    <div class="tab-content__labels">
                                        <span>Done</span>
                                        <span>Save</span>
                                        <span>Not for Me</span>
                                    </div>
                                </div>

                                <div class="sv-task">
                                    <p class="sv-task__aim">If you’ve had your marketing meeting, save your marketing strategy down somewhere easily accessible.</p>
                                    <div class="sv-task__checkboxes">
                                        <form action="" class="thing_to_do" method="post">
                                            <div class="checkout__recomendation-checkbox">
                                                <input id="recomendation-done1808" type="checkbox" name="recomendation" data-type="done" data-idr="1808" data-idu="13" disabled="">
                                                <label for="recomendation-done1808">
                                                    <span class="checkout__recomendation-box" style="background: lightgrey"></span>
                                                </label>
                                            </div>
                                            <div class="checkout__recomendation-checkbox">
                                                <input id="recomendation-save1808" type="checkbox" name="recomendation" data-idr="1808" data-idu="13" data-type="save" disabled="">
                                                <label for="recomendation-save1808">
                                                    <span class="checkout__recomendation-box" style="background: lightgrey"></span>
                                                </label>
                                            </div>
                                            <div class="checkout__recomendation-checkbox">
                                                <input id="recomendation-not-for-me1808" type="checkbox" name="recomendation" data-idr="1808" data-idu="13" data-type="not-for-me" disabled="">
                                                <label for="recomendation-not-for-me1808">
                                                    <span class="checkout__recomendation-box" style="background: lightgrey"></span>
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="sv-task">
                                    <p class="sv-task__aim">Document your marketing goals, root them in measurable metrics.</p>
                                    <div class="sv-task__checkboxes">
                                        <form action="" class="thing_to_do" method="post">
                                            <div class="checkout__recomendation-checkbox">
                                                <input id="recomendation-done1809" type="checkbox" name="recomendation" data-type="done" data-idr="1809" data-idu="13" disabled="">
                                                <label for="recomendation-done1809">
                                                    <span class="checkout__recomendation-box" style="background: lightgrey"></span>
                                                </label>
                                            </div>
                                            <div class="checkout__recomendation-checkbox">
                                                <input id="recomendation-save1809" type="checkbox" name="recomendation" data-idr="1809" data-idu="13" data-type="save" disabled="">
                                                <label for="recomendation-save1809">
                                                    <span class="checkout__recomendation-box" style="background: lightgrey"></span>
                                                </label>
                                            </div>
                                            <div class="checkout__recomendation-checkbox">
                                                <input id="recomendation-not-for-me1809" type="checkbox" name="recomendation" data-idr="1809" data-idu="13" data-type="not-for-me" disabled="">
                                                <label for="recomendation-not-for-me1809">
                                                    <span class="checkout__recomendation-box" style="background: lightgrey"></span>
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="sv-task">
                                    <p class="sv-task__aim">Send the Seven team your email and article disclosures for your custom-share link.</p>
                                    <div class="sv-task__checkboxes">
                                        <form action="" class="thing_to_do" method="post">
                                            <div class="checkout__recomendation-checkbox">
                                                <input id="recomendation-done1811" type="checkbox" name="recomendation" data-type="done" data-idr="1811" data-idu="13" disabled="">
                                                <label for="recomendation-done1811">
                                                    <span class="checkout__recomendation-box" style="background: lightgrey"></span>
                                                </label>
                                            </div>
                                            <div class="checkout__recomendation-checkbox">
                                                <input id="recomendation-save1811" type="checkbox" name="recomendation" data-idr="1811" data-idu="13" data-type="save" disabled="">
                                                <label for="recomendation-save1811">
                                                    <span class="checkout__recomendation-box" style="background: lightgrey"></span>
                                                </label>
                                            </div>
                                            <div class="checkout__recomendation-checkbox">
                                                <input id="recomendation-not-for-me1811" type="checkbox" name="recomendation" data-idr="1811" data-idu="13" data-type="not-for-me" disabled="">
                                                <label for="recomendation-not-for-me1811">
                                                    <span class="checkout__recomendation-box" style="background: lightgrey"></span>
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-content">
                                <div class="tab-content__head">
                                    <span></span>
                                    <div class="tab-content__labels">
                                        <span>Done</span>
                                        <span>Save</span>
                                        <span>Not for Me</span>
                                    </div>
                                </div>
                            </div>

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
                                @foreach($resources as $resource)

                                    @php

                                        $featuredImage = !empty( $resource->img ) ? "/" . $resource->img : '';
                                        $assetType     = $resource->doc_type;

                                        ob_start();
                                        switch ( $assetType ) {
                                           case 'pdf' : ?>
                                               <iframe src="<?php echo '/' . $resource->doc_file; ?>#view=Fit" frameborder="0" class="iframe-pdf">
                                               </iframe>
                                               <?php
                                               break;
                                           case 'png' :
                                               ?>
                                               <img src="<?php echo '/' . $resource->doc_file; ?>" alt="image">
                                               <?php
                                               break;
                                           default :
                                               ?>
                                               <iframe src="//view.officeapps.live.com/op/embed.aspx?src=<?php echo '/' . $resource->doc_file; ?>" frameborder="0">
                                               </iframe>
                                               <?php
                                           break;
                                        }

                                        $itemImageContent = ob_get_clean();

                                        $imgCustom  = "<img src='". $featuredImage . "' alt='image'>";
                                        $assetImage = ( !empty( $featuredImage ) && ( $assetType != 'png' ) ) ? true : false;

                                    @endphp
                                    <div class="item">
                                        <div class=" template item">
                                            <div class="item-image-wrap">
                                                <div class="item-image btn-view">
                                                    @if ( !empty( $assetImage ) && !empty( $featuredImage ) )
                                                        {!! $imgCustom !!}
                                                    @else
                                                        {!! $itemImageContent !!}
                                                    @endif
                                                </div>
                                                @if ( !empty( $assetImage ) && !empty( $featuredImage ) )
                                                    <div class="item-image-ppt-pdf-word hidden" >
                                                        {!! $itemImageContent !!}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="item-text-wrap">
                                                <p class="feature_ebook_template_class">
                                                    {{ implode(', ', ( $resource->categories->pluck('title')->toArray() ) ) }}
                                                </p>
                                                <h4 class="feature_ebook_template_name item-title">
                                                    <a class="btn-view"> {{ $resource->title }}</a>
                                                </h4>

                                                <div class="item-btn-wrap">
                                                    <a class="btn btn-download" href="{{ '/' . $resource->doc_file }}" download>
                                                        Download
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            <a href="{{ route('dashboard.resources')}}" class="read-more">See More
                                <img src="{{ asset('frontendDashboard/themesAssets/dist/img/arrow-right.png') }}" alt="arrow right">
                            </a>

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
                                @foreach($campaigns as $campaign)
                                    <div class="campaign" id="{{$campaign->id}}">
                                        <a class="campaign__image d-block ribbon"
                                           href="{{ route('dashboard.single.campaign', $campaign->slug) }}"
                                            style="pointer-events: none; background-image: url('/{{ $campaign->img }}');">
                                        </a>
                                        <div class="campaign__info">
                                            <div class="wordiframe" style="display: none;">
                                                <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://seven.loc/wp-content/uploads/2022/10/Changing-Careers-and-401k-Rollovers-1.docx" frameborder="0">
                                                </iframe>
                                            </div>
                                            <span class="campaign__number">{{ implode(', ', ( $campaign->categories->pluck('title')->toArray() ) ) }}</span>
                                            <h3 class="campaign__title">
                                                <a href="{{ route('dashboard.single.campaign', $campaign->slug) }}"
                                                   style="pointer-events: none;">{{$campaign->title}}
                                                </a>
                                            </h3>
                                            <div class="campaign__button view_campaign_btn"  >
                                                <a href="{{ route('dashboard.single.campaign', $campaign->slug) }}" class="sv-button sv-button--green">
                                                    View
                                                </a>
                                            </div>
                                            <div class="campaign__button download_campaign_btn" >
                                                <a href="{{ $campaign->pdf_file }}" class="sv-button sv-button--green">
                                                    Download
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <img src="./dist/img/loader.gif" id="loader_campaign" alt="loader" style=" display: none; position: absolute; left: 50%; top: 50%;"/>
                            </div>

                            <a href="{{route('dashboard.campaigns')}}" class="read-more">
                                See More
                                <img src="{{ asset('frontendDashboard/themesAssets/dist/img/arrow-right.png') }}" alt="arrow right">
                            </a>
                        </div>

                    </div>

                </div>

            </div>
        </div>


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
            <div class="col-12 col-lg-5">
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
</div>
        </div>


        <div class="row">
            <div class="col-12">

                <div class="campaigns-report__charts">

                    <div class="row">
                        <div class="col-12">
                            <div class="sv-container sv-section sv-section--radius-top" style="border-radius: 12px;">
                                <h2 class="sv-title">How Your Campaigns Have Performed</h2>


                                <div class="sv-tale__select sv-campaigns-select">
                                    <select class="time_sorting single" data-campaign-id="">
                                        <option selected="" value="all_time">All Time</option>
                                        <option value="7_days">Last 7 days</option>
                                        <option value="30_days">Last 30 days</option>
                                    </select>
                                </div>

                                <div class="campaigns-report__charts">
                                    <div class="sv-progress-bar count_contacts" style="flex-basis: 385px;">
                                        <h4 class="sv-progress-bar__title">Number of Emails Sent in Campaigns</h4>
                                        <div class="sv-progress-bar__chart ">
                        <span class="count">
                            <span class="sent_emails">
                                0                            </span> /
                            <span class="all_emails">0</span>
                            emails                        </span>
                                        </div>
                                    </div>

                                    <div class="sv-progress-bar number_contacts_sent" style="flex-basis: 385px;">
                                        <h4 class="sv-progress-bar__title">Number of Contacts Sent </h4>
                                        <div class="sv-progress-bar__chart ">
                                            <span class="count">0</span>
                                        </div>
                                    </div>

                                    <div class="sv-progress-bar sent_delivered" style="flex-basis: 385px;">
                                        <h4 class="sv-progress-bar__title">Number of Emails Successfully Delivered</h4>
                                        <div class="sv-progress-bar__chart "><span class="count"><span class="sent_emails">0</span> emails</span></div>
                                    </div>

                                    <div class="sv-progress-bar sent" style="flex-basis: 385px;">
                                        <h4 class="sv-progress-bar__title">Delivery Rate</h4>
                                        <div class="sv-progress-bar__chart js-chart" data-percent="0"><span class="count">0%</span><canvas height="120" width="120" style="height: 60px; width: 60px;"></canvas></div>
                                    </div>

                                </div>

                                <div class="campaigns-report__charts">

                                    <div class="sv-progress-bar opened" style="flex-basis: 385px;">
                                        <h4 class="sv-progress-bar__title">Average Open Rate</h4>
                                        <div class="sv-progress-bar__chart add_count">
                        <span class="count">
                            <span class="emails">0</span> emails                        </span>
                                        </div>
                                        <div class="sv-progress-bar__chart js-chart" data-percent="0"><span class="count">0%</span><canvas height="120" width="120" style="height: 60px; width: 60px;"></canvas></div>
                                    </div>

                                    <div class="sv-progress-bar clicked" style="flex-basis: 385px;">
                                        <h4 class="sv-progress-bar__title">Average Click Through Rate</h4>
                                        <div class="sv-progress-bar__chart add_count">
                        <span class="count">
                            <span class="emails">0</span> emails                        </span>
                                        </div>
                                        <div class="sv-progress-bar__chart js-chart" data-percent="0"><span class="count">0%</span><canvas height="120" width="120" style="height: 60px; width: 60px;"></canvas></div>
                                    </div>

                                    <div class="sv-progress-bar unsubscribers_count" style="flex-basis: 385px;">
                                        <h4 class="sv-progress-bar__title">Unsubscribers</h4>
                                        <div class="sv-progress-bar__chart ">
                                            <div class="sv-progress-bar__chart ">
                            <span class="count">
                                <span class="emails">0</span> contacts                            </span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="sv-progress-bar unsubscriber_rate" style="flex-basis: 385px;">
                                        <h4 class="sv-progress-bar__title">Unsubscribe Rate</h4>
                                        <div class="sv-progress-bar__chart js-chart" data-percent="0"><span class="count">0%</span><canvas height="120" width="120" style="height: 60px; width: 60px;"></canvas></div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>        </div>
                <div class="sv-container">
                    <h2 class="sv-title">Recent Campaigns You've Sent</h2>

                    <table class="sv-table">
                        <thead>
                            <tr>
                            <th>Status</th>
                            <th>Campaign Title</th>
                            <th>Start Date</th>
                            <th>Open Rate</th>
                            <th>CTR</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($campaigns as $campaign)
                                <tr>
                                    <td data-th="Status">
                                        <div class="sv-table__status noactive">Draft</div>
                                    </td>
                                    <td data-th=" {{$campaign->title}}">
                                        <a href="{{ route('dashboard.single.campaign', $campaign->slug) }}">
                                            {{$campaign->title}}
                                        </a>
                                    </td>
                                    <td data-th="Start Date"></td>
                                    <td data-th="Open Rate">0%</td>
                                    <td data-th="CTR">0%</td>
                                    <td>
                                        <a href="http://seven.loc/campaigns/market-volatility-win-back-campaign/?report=1">
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="campaigns-report__link">
                    <a href="{{route('dashboard.campaigns')}}">
                        See More
                        <img src="{{ asset('frontendDashboard/themesAssets/dist/img/arrow-right.png') }}" alt="arrow right">
                    </a>
                </div>

            </div>
        </div>
    </div>

@endsection
