@extends('admin.admin_master')

@section('title')
    Campaigns Page By Category
@endsection

@section('admin_content')

    <div class="content-wrapper">

        @include('admin.body.banner')

        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Campaigns Page for category *{{ $campaignCategory->title  }}* ( {{ $campaigns->total() }} )</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>{{ __('Article Title') }}</th>
                                        <th>{{ __('Article Slug') }}</th>
                                        <th>{{ __('Categories') }}</th>
                                        <th>{{ __('Featured Image') }}</th>
                                        <th>{{ __('View Article') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i = 1)
                                    @foreach( $campaigns as $campaign )
                                        <tr>
                                            <td> {{ $i++ }} </td>
                                            <td> {{ $campaign['title'] }}</td>
                                            <td> {{ $campaign->slug }}</td>
                                            <td> {{ implode(', ', ( $campaign->categories->pluck('title')->toArray() ) ) }} </td>
                                            <td>
                                                <img style="width: 50px; height: auto;"
                                                    src="@if( $campaign->img != 'none' ) {{ "/$campaign->img" }} @else {{ asset('/img/none.jpg') }} @endif">
                                            </td>
                                            <td>
                                                <a href="{{ route('single.article', $campaign->slug) }}">View Article</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('wpadmin.campaigns.edit',  $campaign->id) }}" class="btn btn-info">Edit</a>
                                                <a href="{{ route('wpadmin.campaigns.delete', $campaign->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $campaigns->links('pagination-links') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
