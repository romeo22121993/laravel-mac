@extends('userDashboard.master')

@section('title')
    Guides Page
@endsection

@section('content')

    <div class="container template">
        <div class="sv-filter">
            <div class="sv-filter__top">
                <h3 class="sv-filter__title">
                    Coaching Guides
                </h3>
                <p class="sv-filter__description">
                    Coaching Guides provide walkthroughs, step-by-step instructions with screenshots, process flows and narratives to help you with your brand strategy, marketing plan, and content creation and distribution.
                </p>
            </div>

            <form action="#" method="post" class="sv-filter__form" id="js_GuideFilter">

                <input type="hidden" name="page" value="1">

                <div class="sv-filter__item  ">
                    <label for="sv-filter-topic" class="sv-tooltip-container">
                        Topic
                    </label>
                    <span class="select-wrapper">
                        <select name="category" id="sv-filter-topic">
                            <option value="all">All</option>
                            @foreach( $categories as $category )
                                <option value="{{ $category->id }}">
                                   {{ $category->title }}
                                </option>
                            @endforeach
                        </select>
                    </span>
                </div>
                <div class="sv-filter__item">
                    <label for="sv-filter-type" class="sv-tooltip-container">
                        Type of Asset
                    </label>
                    <span class="select-wrapper">
                        <select name="doc_type" id="sv-filter-type">
                            <option value="all">All</option>
                            <option value="pdf">PDF</option>
                            <option value="png"> PNG </option>
                            <option value="ppt"> Power Point Document</option>
                            <option value="word"> Word Document </option>
                        </select>
                    </span>
                </div>

            </form>
        </div>

        <div class="row">
            <div class="col-12">

                <div class="template-items htmlAjaxFrame">
                    @foreach( $guides as $guide )
                        @include('userDashboard.items.guideItem')
                    @endforeach
                </div>

                <div class="buttonAjaxFrame">
                    <a id="load_more_template" class="tplLoadMore" data-page="2">
                        Load More
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
    <script type='text/javascript' src='{{ asset('frontendDashboard/pluginAssets/templates-scripts.js') }}' id='admin-script-js'></script>
@endsection
