<div id="brands-carousel" class="logo-slider wow fadeInUp">
    <div class="logo-slider-inner">


{{--        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">--}}
{{--            <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="{{ asset('frontend/assets/images/brands/brand1.png') }}"" src="{{ asset('frontend/assets/images/blank.gif') }}"" alt=""> </a> </div>--}}

{{--            <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="{{ asset('frontend/assets/images/brands/brand2.png') }}" src="{{ asset('frontend/assets/images/blank.gif') }}" alt=""> </a> </div>--}}

{{--           --}}
{{--        </div>--}}


        <div class="owl-carousel owl-theme">

            @foreach( $productBrands as $brand  )
                <div class="item">
                    <a href="#" class="image">
                        <img data-echo="{{ $brand->image }}" src="{{ $brand->image }}" alt="">
                    </a>
                </div>
            @endforeach

        </div>

    </div>
</div>


