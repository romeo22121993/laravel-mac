@extends('frontend.master2')

@section('title')
    WishList Page
@endsection

@section('content')

    <div class="body-content">
        <div class="container">
            <div class="my-wishlist-page">
                <div class="row">
                    <div class="col-md-12 my-wishlist">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="4" class="heading-title">My Wishlist</th>
                                    </tr>
                                </thead>
                                <tbody id="wishlist">
                                    @if ( !$wishlist->isEmpty() )
                                        @foreach( $wishlist as $row)
                                        <tr class="td-{{ $row->id }}">
                                            <td class="col-md-2"><img src="{{ asset($row->products->thumbnail) }}" alt="imga"></td>
                                            <td class="col-md-7">
                                                <div class="product-name">
                                                    <a href="{{ route('product.details', $row->products->id) }}">{{ $row->products->name }}</a>
                                                </div>
                                                <div class="price"
                                                    @if ( $row->products->discount_price == null )
                                                        {{  $row->product->selling_price }} $
                                                    @else
                                                        {{ $row->products->discount_price }}
                                                        <span>{{ $row->products->selling_price }} $</span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="col-md-2">
                                                <button class="btn btn-primary icon productViewBtn" type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal" id="{{ $row->products->id }}" >Add to Cart</button>
                                            </td>
                                            <td class="col-md-1 close-btn">
                                                <button type="submit" class="wishlistRemoveBtn" id="{{ $row->id }}"><i class="fa fa-times"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                        <td><h4>There are no items in wishlist yet.!</h4></td>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            @include('frontend.site2.body.brands')
        </div>
    </div>
@endsection
