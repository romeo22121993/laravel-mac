<h3 class="section-title">shop by</h3>
<div class="widget-header">
    <h4 class="widget-title">Category</h4>
</div>
<div class="sidebar-widget-body">
    <div class="accordion">
        @foreach($categories as $category)
            <div class="accordion-group">
                <div class="accordion-heading">
                    <a href="#collapse{{ $category->id }}" data-toggle="collapse" class="accordion-toggle collapsed">
                        {{ $category->name }}
                    </a>
                </div>
                <div class="accordion-body collapse" id="collapse{{ $category->id }}" style="height: 0px;">
                    <div class="accordion-inner">
                        @php
                            $subcategories = App\Models\ProductCategory::where('cat_id', $category->id)->orderBy('name','ASC')->get();
                        @endphp
                        @foreach($subcategories as $subcategory)
                            <ul>
                                <li>
                                    <a href=#collapse">
                                        {{ $subcategory->name }}
                                    </a>
                                </li>
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
