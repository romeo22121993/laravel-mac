<div class="sidebar-widget product-tag wow fadeInUp">
    <h3 class="section-title">Product tags</h3>
    <div class="sidebar-widget-body outer-top-xs">
        <div class="tag-list">
            @foreach($productTags as $tag)
                <a class="item " title="Phone" href="{{ route( 'products.tags.list', $tag ) }}">
                    {{ str_replace(',', ' ', $tag)  }}
                </a>
            @endforeach

        </div>
    </div>
</div>


<div class="sidebar-widget product-tag wow fadeInUp">
    <h3 class="section-title">Product colors</h3>
    <div class="sidebar-widget-body outer-top-xs">
        <div class="tag-list">
            @foreach($productColors as $tag)
                <a class="item " title="Phone" href="{{ url('product/tag/'.$tag) }}">
                    {{ str_replace(',', ' ', $tag)  }}
                </a>
            @endforeach

        </div>
    </div>
</div>


<div class="sidebar-widget product-tag wow fadeInUp">
    <h3 class="section-title">Product Sizes</h3>
    <div class="sidebar-widget-body outer-top-xs">
        <div class="tag-list">
            @foreach($productSizes as $tag)
                <a class="item " title="Phone" href="{{ url('product/tag/'.$tag) }}">
                    {{ str_replace(',', ' ', $tag)  }}
                </a>
            @endforeach

        </div>
    </div>
</div>
