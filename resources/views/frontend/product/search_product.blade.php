{{--@foreach($products as $item)--}}
{{--<li> <img src="{{ asset($item->thumbnail) }}" style="width: 30px; height: 30px;"> {{ $item->name }}  </li>--}}
{{--@endforeach--}}

@if($products -> isEmpty())
    <h3 class="text-center text-danger">Product Not Found </h3>
@else
    <div class="container mt-5 search">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-6">
                <div class="card">

                    @foreach($products as $item)
                        <a href="{{ url('product/details/'.$item->id) }}">
                            <div class="list border-bottom">  <img src="{{ asset($item->thumbnail) }}" style="width: 30px; height: 30px;">
                                <div class="d-flex flex-column ml-3" style="margin-left: 10px;"> <span>{{ $item->name }} </span> <small> ${{ $item->selling_price }}</small> </div>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endif
