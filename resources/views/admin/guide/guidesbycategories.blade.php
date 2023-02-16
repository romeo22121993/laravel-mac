@extends('admin.admin_master')

@section('title')
    Guides Page By Category
@endsection

@section('admin_content')

    <div class="content-wrapper">

        @include('admin.body.banner')

        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Posts Page for category *{{ $guideCategory->title  }}* ( {{ $guides->total() }} )</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>{{ __('Post Title') }}</th>
                                        <th>{{ __('Post Slug') }}</th>
                                        <th>{{ __('Categories') }}</th>
                                        <th>{{ __('Featured Image') }}</th>
                                        <th>{{ __('Published?') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i = 1)
                                    @foreach( $guides as $guide )
                                        <tr>
                                            <td> {{ $i++ }} </td>
                                            <td> {{ $guide->title }}</td>
                                            <td> {{ $guide->slug }}</td>
                                            <td> {{ implode(', ', ( $guide->categories->pluck('title')->toArray() ) ) }} </td>
                                            <td>
                                                <img style="width: 50px; height: auto;"
                                                     src="@if( !empty( $guide->img ) ) {{ "/" . $guide->img }} @else {{ asset('/img/none.jpg') }} @endif">
                                            </td>
                                            <td>{{ $guide->doc_type }}</td>
                                            <td>{{ $guide->updated_at->diffForHumans() }}</td>
                                            <td>
                                                <a href="{{ route('wpadmin.guides.edit',  $guide->id) }}" class="btn btn-info">Edit</a>
                                                <a href="{{ route('wpadmin.guides.delete', $guide->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $guides->links('pagination-links') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
