<div class="campaign" id="{{$campaign->id}}">
    <a class="campaign__image d-block ribbon" href="{{ route('dashboard.single.campaign', $campaign->slug) }}"
       style="pointer-events: none; background-image: url('/{{ $campaign->img }}');">
    </a>
    <div class="campaign__info"  style="justify-content: space-between;">
        <div class="wordiframe" style="display: none;">
            {{--                                    <iframe src="/{{ $campaign->doc_file }}" frameborder="0">--}}
            {{--                                    </iframe>--}}
        </div>
        <span class="campaign__number">{{ implode(', ', ( $campaign->categories->pluck('title')->toArray() ) ) }}</span>
        <ht/>
        <span class="campaign__number">{{ implode(', ', ( $campaign->topics->pluck('title')->toArray() ) ) }}</span>
        <h3 class="campaign__title">
            <a href="{{ route('dashboard.single.campaign', $campaign->slug) }}" style="pointer-events: none;">{{$campaign->title}}</a>
        </h3>

        <div class="campaign__button" style="display: initial;">
            <a href="{{ route('dashboard.single.campaign', $campaign->slug) }}" class="sv-button sv-button--green">View Campaign</a>
        </div>
        <div class="campaign__button" style="display: initial;">
            <a href="{{ route('dashboard.single.campaign', $campaign->slug) }}/?report=1" class="sv-button sv-button--green">View Report</a>
        </div>

        <div class="campaign__button" style="display: initial;">
            <a href="" data-id="{{ $campaign->id }}" class="sv-button sv-button--green clone_campaign_btn">Clone Campaign</a>
        </div>
    </div>
</div>
