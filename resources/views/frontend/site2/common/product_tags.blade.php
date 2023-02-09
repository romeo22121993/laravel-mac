<div class="sidebar-widget product-tag wow fadeInUp">
    <h3 class="section-title">Product tags</h3>
    <div class="sidebar-widget-body outer-top-xs">
        <div class="tag-list">
            @foreach($tags as $tag)
                @php
                    $class = ( $chosen_tag == $tag ) ? "active" : "";
                @endphp
                <a class="item {{ $class }}" title="Phone" href="{{ url('product/tag/'.$tag) }}">
                    {{ str_replace(',', ' ', $tag)  }}
                </a>
            @endforeach

        </div>
    </div>
</div>
