@extends('userDashboard.master')

@section('title')
   Single Course Page
@endsection

@section('content')

    <div class="right-content marketing">
        <div class="top-info">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-start align-items-center flex-row">
                        <div class="progress circle circle_progress_bar" data-value="{{ $percentage }}">
                            <span class="progress-left">
                                <span class="progress-bar border-primary"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar border-primary"></span>
                            </span>
                            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                <div class="h2 font-weight-bold percent_count">
                                    <span class="count"> {{ $percentage }}</span>
                                    <span>%</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3>Keep it up!</h3>
                            <p class="percent_count">Your progress from this module is   <span class="count">{{ $percentage }}</span>%</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="dark-box clearfix">
            <div class="container video-player training">
                <div class="row">
                    <div class="container container_back_modules">
                        <a href="http://seven.loc/admin-training/">Back to All</a>
                    </div>
                </div>
                <div class="row mobile_block">
                    <div class="col-12 video-title mt-5 mt-md-0">
                        <label>Get Started with Advisor I/O</label>
                        <p>An Introduction to Get Started with Advisor I/O</p>
                        <div class="progress_bar" >
                            <span class="percent_count"> {{ $percentage }}</span> % of 100%
                            ( <span class="int_count"> {{ $total }}</span> of  <span class="all_count">{{ $allCount }}</span> )
                            <progress max="100" value="{{ $percentage }}" id="percent"></progress>
                        </div>
                    </div>

                    <div class="col-12  col-lg-8 video-content">
                        <div
                            data-vimeo-url="{{ $lastLink }}"
                            data-vimeo-width="750" data-vimeo-height="465"
                            data-course-id="{{ $course->id }}"
                            id="player"
                            data-video-current-id="0"
                            data-video-current-seconds="{{ $lastSeconds }}" >
{{--                            <iframe src="https://player.vimeo.com/video/758449903?h=57b264e1d2&amp;app_id=122963" width="750" height="465" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" title="Sharing Articles from the Platform-Lesson" data-ready="true"></iframe>--}}
                        </div>


                    </div>


                    <script src="https://player.vimeo.com/api/player.js"></script>
                    <script type='text/javascript' src='{{ asset('frontendDashboard/pluginAssets/vimeo.js') }}' id='vimeo-js'></script>

                    <div class="col-12  col-lg-4 video-list mt-3 mt-md-0">
                        <label>Lessons</label>
                        <ul class="link-holder single_course_list" data-course="{{ $course->id }}">
                            @for ($i = 1; $i <= 10; $i++)
                            @php
                                $nameKey = "lesson_name_$i";
                                $linkKey = "lesson_link_$i";
                                if ( !empty( $lastIteraction ) && ( (int)$lastIteraction['course'] == $course->id ) &&
                                    ( (int)$lastIteraction['lesson'] == $i ) ) {
                                        $checked = "checked";
                                }
                                else {
                                    $checked = ( $i == 1 ) ? "checked" : "";
                                }

                                $progressLessonProcent = ( !empty( $progressLesson[$i] ) ) ? $progressLesson[$i] : 0;

                                $strTime1    = \App\Modules\VideosAPI::getVimeoDuration( $course->lessons->$linkKey );
                                $strTime2    = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $strTime1 );
                                sscanf( $strTime2, "%d:%d:%d", $hours, $minutes, $seconds);

                                $time_seconds = $hours * 3600 + $minutes * 60 + $seconds;
                                $time_seconds = ( $time_seconds * $progressLessonProcent ) / 100;

                                $vimeo_id     = \App\Modules\VideosAPI::getVimeoIdByUrl( $course->lessons->$nameKey );
                                $video_id     = 0;
                                $number       = !empty( $progressLesson[$i] ) ? $progressLesson[$i] : 0;
                            @endphp
                                @if ( !empty( $course->lessons->$linkKey ) &&  !empty( $course->lessons->$linkKey ) )
                                    <li class="lesson {{ $checked }}" data-index="{{ $i }}"
                                        data-video-id="{{ $video_id }}"
                                        data-seconds="{{ $time_seconds }}">
                                        <a href="" class="video-link" data-link="{{ $course->lessons->$linkKey }}"
                                           data-vimeo-id="{{ $vimeo_id }}"
                                        >
                                            @if ( (int)$progressLessonProcent == 100 )
                                                <span class="number"><i class="fa fa-check"></i></span>
                                            @else
                                                <span class="number">{{ $i }}</span>
                                            @endif
                                            <span class="video-name">{{ $course->lessons->$nameKey }}</span>
                                            <span class="time">{{ $strTime1 }}</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar"
                                                     style="width: {{ $number }}%"
                                                     aria-valuenow="{{ $number }}"
                                                     aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endif
                            @endfor
                        </ul>

                    </div>
                </div>

                @if ( empty( $completedCourses ) || ( !empty( $completedCourses ) && is_array( $completedCourses ) && !in_array( $course->id, $completedCourses ) ) )
                    <p class="complete_task_button btn btn-view {{ $disable }}" data-course-id="{{ $course->id }}">I've completed this course.</p>
                @else
                    <p class="btn btn-view">Already completed</p>
                @endif
            </div>

        </div>

        <div class="container course-single">

            <div class="row">
                <div class="col-12 investment-right-holder">
                    <div class="row">
                        <div class="col-12">
                            <nav>
                                <div class="nav nav-tabs hide-after-element" id="nav-tab" role="tablist">
                                    <a class="nav-link active" id="nav-faq-tab" data-toggle="tab" href="#nav-faq" role="tab" aria-controls="nav-faq" aria-selected="false">FAQ</a>
                                    <a class="nav-link " id="nav-transcript-tab" data-toggle="tab" href="#nav-transcript" role="tab" aria-controls="nav-transcript" aria-selected="true">Transcript</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 investment-right-holder  border-right">

                    <div class="row">
                        <div class="col-12">

                            <div class="tab-content video-tabs" id="nav-tabContent">

                                <div class="tab-pane fade show active" id="nav-faq" role="tabpanel" aria-labelledby="nav-faq-tab">
                                    <div class="faq">
                                        <h6>Welcome Aboard!</h6>
                                        {!! $course->faq_block  !!}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-transcript" role="tabpanel" aria-labelledby="nav-transcript-tab">
                                    <div class="transcript">
                                        <h6>Transcription</h6>
                                        {!! $course->transcription  !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 investment-right-holder">
                    <div class="row">
                        <div class="col-12">
                            <h3>Helpful Articles</h3>
                            <p class="grey">Some useful membership articles to support your learning.</p>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="useful-holder">
                                <div class="row">
                                    <div class="col-5">
                                        <a href="http://seven.loc/marketing-steps-financial-advisor/">
                                            <div class="user-img" style="background-image: url(http://seven.loc/wp-content/uploads/2022/06/Steps-Taken-150x150.jpg);"></div>
                                        </a>
                                    </div>
                                    <div class="col-7 pl-0  flex-row justify-content-start align-items-center">
                                        <p>
                                            <a href="http://seven.loc/marketing-steps-financial-advisor/" class="read-article" data-post-id="7944">
                                                The Long and Short of It – How to Prioritize Your Marketing Initiatives as Financial Advisor                    </a>
                                        </p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="useful-holder">
                                <div class="row">
                                    <div class="col-5">
                                        <a href="http://seven.loc/10-questions-financial-advisor-marketing/">
                                            <div class="user-img" style="background-image: url(http://seven.loc/wp-content/uploads/2021/11/Financial-Advisor-Questions-150x150.jpeg);"></div>
                                        </a>
                                    </div>
                                    <div class="col-7 pl-0  flex-row justify-content-start align-items-center">
                                        <p>
                                            <a href="http://seven.loc/10-questions-financial-advisor-marketing/" class="read-article" data-post-id="5153">
                                                10 Biggest Questions We Get from Financial Advisors Regarding Marketing                    </a>
                                        </p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="useful-holder">
                                <div class="row">
                                    <div class="col-5">
                                        <a href="http://seven.loc/financial-advisor-marketing-pain-points-content-marketing/">
                                            <div class="user-img" style="background-image: url(http://seven.loc/wp-content/uploads/2021/05/photo-1550418290-a8d86ad674a6-150x150.jpeg);"></div>
                                        </a>
                                    </div>
                                    <div class="col-7 pl-0  flex-row justify-content-start align-items-center">
                                        <p>
                                            <a href="http://seven.loc/financial-advisor-marketing-pain-points-content-marketing/" class="read-article" data-post-id="3681">
                                                Fixing the Two Biggest Financial Advisor Marketing Pain Points: Content Creation &amp; Marketing Execution                    </a>
                                        </p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
