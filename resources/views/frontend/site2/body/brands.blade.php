<div id="brands-carousel" class="logo-slider wow fadeInUp">
    <div class="logo-slider-inner">
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


