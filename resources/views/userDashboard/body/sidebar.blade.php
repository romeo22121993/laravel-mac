<div class="left-menu pr-0">

    <div class="menu_left_close">
        <i class="fa fa-times"></i>
    </div>
    <ul class="main_tabs">
        <li class="nav-item">
            <a class="home_tab nav-link d-flex flex-row justify-content-start align-items-center"
               href="{{ route('dashboard.main') }}">
                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.95376 14.5237C9.40148 14.5237 8.95376 14.076 8.95376 13.5237V11.2794C8.95376 10.2804 8.07903 9.47058 7 9.47058C5.92097 9.47058 5.04624 10.2804 5.04624 11.2794V13.5237C5.04624 14.076 4.59852 14.5237 4.04624 14.5237H1.55853C1.15467 14.5237 0.81733 14.2388 0.780313 13.8665L0.00329517 6.05093C-0.0198219 5.81841 0.0796873 5.58985 0.270513 5.43717L6.489 0.461745C6.78247 0.226944 7.21753 0.226944 7.511 0.461745L13.7295 5.43717C13.9203 5.58985 14.0198 5.81841 13.9967 6.05093L13.2197 13.8665C13.1827 14.2388 12.8453 14.5237 12.4415 14.5237H9.95376Z" fill="#12234C"/>
                </svg>
                Home
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex flex-row justify-content-start align-items-center content_tab"
               href="{{ route('dashboard.articles') }}">
                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 0H14.5V10C14.5 11.1046 13.6055 12 12.5 12H3.5V0ZM12.5 2H5.5V6H12.5V2ZM12.5 7.5H5.5V8.5H12.5V7.5ZM10.5 9.5H5.5V10.5H10.5V9.5Z" fill="#12234C"/>
                    <path d="M2 3H0V10C0 11.1046 0.894531 12 2 12V3Z" fill="#12234C"/>
                </svg>
                Articles
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex flex-row justify-content-start align-items-center campaigns_tab"
               href="{{ route('dashboard.campaigns') }}">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.04297 7.5C8.83789 7.5 10.293 6.04493 10.293 4.25C10.293 2.45507 8.83789 1 7.04297 1C5.24804 1 3.79297 2.45507 3.79297 4.25C3.79297 6.04493 5.24804 7.5 7.04297 7.5ZM7.04297 8.94441C10.0645 8.94441 12.5753 11.1262 13.0859 14H1C1.51063 11.1262 4.02148 8.94441 7.04297 8.94441Z" fill="#12234C"/>
                </svg>
                Campaigns
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex flex-row justify-content-start align-items-center template_tab"
               href="{{ route('dashboard.resources') }}">
                <svg width="10" height="13" viewBox="0 0 10 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.66667V3.35488H10V13H0V0ZM1.66667 5.0323H7.5V5.871H1.66667V5.0323ZM5 2.51617H1.66667V3.35488H5V2.51617ZM1.66667 7.54842H5.83333V8.38713H1.66667V7.54842ZM7.5 10.0646H1.66667V10.9033H7.5V10.0646Z" fill="#12234C"/>
                    <path d="M7.5 2.51613H10L7.5 0V2.51613Z" fill="#12234C"/>
                </svg>
                Resources
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex flex-row justify-content-start align-items-center training_tab"
               href="{{ route('dashboard.courses') }}">
                <svg id="video" width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="13" height="10" fill="url(#pattern0)"/>
                    <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_370_18" transform="translate(0 -0.0665709) scale(0.00191571 0.00249042)"/>
                        </pattern>
                        <image id="image0_370_18" width="522" height="455" xlink:href="data:image/png;base64,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CgBASlAAAFKCAgCQEhQAgJSgAACkBAUAICUoAAApQQEASAkKAEBKUAAAUoICAJASFACAlKAAAKQEBQAgJSgAAClBAQBICQoAQEpQAABSggIAkBIUAICUoAAApAQFACAlKAAAKUEBAEgJCgBASlAAAFKCAgCQEhQAgJSgAACkBAUAICUoAAApQQEASAkKAEBKUAAAUoICAJASFACAlKAAAKQEBQAgJSgAAClBAQBICQoAQEpQAABSggIAkBIUAICUoAAApAQFACAlKAAAKUEBAEgJCgBASlAAAFKCAgCQEhQAgJSgAACkBAUAICUoAAApQQEASAkKAEBKUAAAUoICAJASFACAlKAAAKQEBQAgJSgAAClBAQBICQoAQEpQAABSggIAkBIUAICUoAAApAQFACAlKAAAKUEBAEgJCgBASlAAAFKCAgCQEhQAgJSgAACkBAUAICUoAAApQQEASAkKAEBKUAAAUoICAJASFACAlKAAAKQEBQAgJSgAAClBAQBICQoAQEpQAABSggIAkBIUAICUoAAApAQFACAlKAAAKUEBAEgJCgBASlAAAFKCAgCQEhQAgJSgAACkBAUAICUoAAApQQEASAkKAEBKUAAAUoICAJASFACAlKAAAKQEBQAgJSgAAClBAQBICQoAQEpQAABSggIAkBIUAICUoAAApAQFACAlKAAAKUEBAEgJCgBASlAAAFKCAgCQEhQAgJSgAACkBAUAICUoAAApQQEASAkKAEBKUAAAUoICAJASFACAlKAAAKQEBQAgJSgAAClBAQBICQoAQEpQAABSggIAkBIUAICUoAAApAQFACAlKAAAKUEBAEgJCgBASlAAAFKCAgCQEhQAgJSgAACkBAUAICUoAAApQQEASAkKAEBKUAAAUoICAJASFACAlKAAAKQEBQAgJSgAAClBAQBICQoAQEpQAABSggIAkBIUAICUoAAApAQFACAlKAAAKUEBAEgJCgBASlAAAFKCAgCQEhQAgJSgAACkBAUAICUoAAApQQEASAkKAEBKUAAAUoICAJASFACAlKAAAKQEBQAgJSgAAClBAQBICQoAQEpQAABSggIAkBIUAICUoAAApAQFACAlKAAAKUEBAEgJCgBASlAAAFKCAgCQEhQAgJSgAACkBAUAICUoAAApQQEASAkKAEBKUAAAUoICAJASFACAlKAAAKQEBQAgJSgAAClBAQBICQoAQEpQAABSggIAkBIUAICUoAAApAQFACAlKAAAKUEBAEgJCgBASlAAAFKCAgCQEhQAgJSgAACkBAUAICUoAAApQQEASAkKAEBKUAAAUoICAJASFACAlKAAAKQEBQAgJSgAAClBAQBICQoAQEpQAABSggIAkBIUAICUoAAApAQFACAlKAAAKUEBAEgJCgBASlAAAFKCAgCQEhQAgJSgAACkBAUAICUoAAApQQEASAkKAEBKUAAAUoICAJASFACAlKAAAKQEBQAgJSgAAClBAQBICQoAQEpQAABSggIAkBIUAICUoAAApAQFACB1MCisV8u7AeoAAC7H/faDY2cUPp2pEADg8jxsPzg2KNydpQwA4BIttx8cGxRuz1MHAHBhPqxXy4ftfxwVFDb7FD6cqSAA4HJ0T/+jz6mHm4j4XLISAOCi/Pz8EMPRQWEzDXEdwgIAtOj9erV8+/x/9uqjsF4t7yPiKiLeFyoKAKjrU0T8bb1a3uz6w1dfvnw56Vln88VVRCw2b28i4vvT6gMABvYhHnsl3K1Xy+W+B/5/HPhUkvxOu70AAAAASUVORK5CYII="/>
                    </defs>
                </svg>
                Coaching Videos
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex flex-row justify-content-start align-items-center guides_template_tab"
               href="{{ route('dashboard.guides') }}">
                <svg width="11" height="14" viewBox="0 0 11 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.874999C0 0.39175 0.378836 0 0.846154 0H8.13457C8.60189 0 8.98072 0.391751 8.98072 0.875V10.9327C8.98072 11.416 8.60189 11.8077 8.13457 11.8077H0.846153C0.378835 11.8077 0 11.416 0 10.9327V0.874999ZM7.19231 1.75H1.69231V4.375H7.19231V1.75ZM7.19231 6.125H1.69231V7H7.19231V6.125ZM1.69231 7.875H5.07692V8.75H1.69231V7.875Z" fill="#12234C"/>
                    <path d="M2.10445 13.016C2.30993 13.5893 2.86436 14 3.51607 14H9.50321C10.3299 14 11 13.3392 11 12.524V3.66823C11 3.02559 10.5835 2.47887 10.0021 2.27625V12.4473C10.0021 12.7614 9.70449 13.016 9.33731 13.016H2.10445Z" fill="#12234C"/>
                </svg>
                Coaching Guides
            </a>
        </li>
        <!--						<li class="nav-item pr-0">-->
        <!--                            <a class="nav-link d-flex flex-row justify-content-start align-items-center manage_tab"-->
        <!--                               href="--><!--/admin-campaigns/?page=all_leads">-->
        <!--								<i class="fa fa-list-ul"></i> -->    <!--                            </a>-->
        <!--                        </li>-->
        <!--                        <li class="nav-item">-->
        <!--                            <a class="nav-link d-flex flex-row justify-content-start align-items-center template_tab"-->
        <!--                               href="--><!--/admin-template">-->
        <!--								<i class="fa fa-file-text"></i> -->    <!--                            </a>-->
        <!--                        </li>-->
    </ul>

    <div class="zoom_block">
        <h4>Join Us!</h4>
        <p>We hold monthly office hours.</p>
        <p>February 16, 2023</p>
        <p class="zoom_link">
            <a href="https://zoom.us/j/97143808482?pwd=VE4wSUlib0VTK21Xd0o0QWlDMnBqdz09#success"> Zoom Link</a>
        </p>
    </div>

    <div class="logo_bottom">
        <a href="http://seven.loc"><img src="{{ asset('frontendDashboard/themesAssets/dist/img/logo-dashboard.svg') }}" alt="logo"></a>
    </div>
</div>
