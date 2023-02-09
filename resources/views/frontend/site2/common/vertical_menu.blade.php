<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
    <nav class="yamm megamenu-horizontal">
        <ul class="nav">
            @foreach($categories as $category)
                <li class="dropdown menu-item">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon fa fa-shopping-bag" aria-hidden="true"></i>
                        {{ $category->name }}
                    </a>
                    <ul class="dropdown-menu mega-menu">
                        <li class="yamm-content">
                            <div class="row">
                                @php
                                $subcategories = App\Models\ProductCategory::where('cat_id', $category->id)->orderBy('name','ASC')->get();
                                @endphp
                                @foreach($subcategories as $subcategory)
                                    <div class="col-sm-12 col-md-3">
                                        <h2 class="title">
                                            <a href="{{ route( 'products.categories.list', $subcategory->slug ) }}" style="padding: 0;">
                                               {{ $subcategory->name }}
                                            </a>
                                        </h2>
                                        <ul class="links list-unstyled">
                                            <li>
                                                <a href="{{ route( 'products.categories.list', $subcategory->slug ) }}">
                                                    {{ $subcategory->name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>

                        </li>
                    </ul>
                </li>
            @endforeach
        </ul>
        <!-- /.nav -->
    </nav>
    <!-- /.megamenu-horizontal -->
</div>
