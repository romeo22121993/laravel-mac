@extends('userDashboard.master')

@section('title')
    Campaigns Dashboard Page
@endsection

@section('content')

    <div class="container campaigns" data-count-userlists-limit="30">

        <div class="all_campaigns_block template new" data-all="{{ $originalCampaigns->total() }}" data-getcat1="{{$typeCampaigns}}"
             data-gettype="all" data-gettopic="all" data-page="1" data-getcat="all" data-cpt="campaigns">

            <div class="row" style="margin-top: 25px;">
                <div class="col-12">

                    <div class="tabs buttons-line d-flex flex-column flex-md-row justify-content-center align-items-start">
                        <a class="tab tab1 sv-button sv-button--nav active" href="{{ route('dashboard.campaigns') }}">New Campaigns </a>
                        <a class="tab tab2 sv-button sv-button--nav " href="{{ route('dashboard.campaigns.cloned') }}">Cloned Campaigns </a>
                    </div>


                    <div class="sv-filter">
                        <h2 class="sv-title">Campaigns
                        <p style="color: #CA090A;font-weight: bold;font-family: 'Work Sans',sans-serif;">Email campaign sending is currently offline, however, all email content is available to edit, save, and download for use on any external email system.</p>
                        </h2>
                        <p class="sv-filter__description">
                            Whether you need an educational drip campaign for prospects, a timely email for clients, or to keep your entire list updated on what's happening in the market, here you'll find all email campaigns.
                            You can directly download the content for your own email systems.
                        </p>
                        <form action="#" method="post" class="sv-filter__form campaigns_filter_form">

                            <div class="sv-filter__item">
                                <label for="sv-filter-topic" class="sv-tooltip-container">
                                    Topic
                                    <span class="sv-tooltip sv-tooltip--big sv-tooltip--in-line" data-tooltip="Here you can filter by Campaign Topic, whether it's retirement college planning, or even a client survey. "></span>
                                </label>
                                <span class="select-wrapper">
                                    <select name="topics" id="sv-filter-topic">
                                        <option value="all">All</option>
                                        @foreach($topics as $topic)
                                            <option value="{{$topic->id}}">{{$topic->title}}</option>
                                        @endforeach
                                    </select>
                                </span>
                            </div>

                            <div class="sv-filter__item">
                                <label for="sv-filter-type" class="sv-tooltip-container">
                                    Type of Asset
                                    <span class="sv-tooltip sv-tooltip--big sv-tooltip--in-line" data-tooltip="Looking for a specific type of campaign? Find the best campaign for you across commentaries, timely emails, and drips. "></span>
                                </label>
                                <span class="select-wrapper">
                                    <select name="categories" id="sv-filter-type">
                                        <option value="all" selected="">All</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </span>
                            </div>

                            <div class="sv-filter__item loader_block">
                                <img src="{{ asset('frontendDashboard/pluginAssets/img/loader.gif') }}" alt="loader" id="loader">
                            </div>
                        </form>
                    </div>

                    <div class="columns-grid">
                        @foreach($originalCampaigns as $campaign)
                            @include('userDashboard.items.campaignItem')
                        @endforeach

                        @if($originalCampaigns->total() > $countPerPage)
                            <img src="{{ asset('frontendDashboard/pluginAssets/img/loader.gif') }}" id="loader_campaign" alt="loader" style=" display: none; position: absolute; left: 50%; top: 50%;">
                        @endif
                    </div>
                </div>

                <div class="sv-load-more-space">
                    <a href="#" id="load_more_campaigns" class="new sv-button--border">See More
                        <img src="{{ asset('frontendDashboard/pluginAssets/img/loader.gif') }}" alt="loader_more" id="loader_more">
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


@section('individual_scripts')
    <script type='text/javascript' src='{{ asset('frontendDashboard/pluginAssets/campaigns.js') }}' id='campaign-script-js'></script>
@endsection
