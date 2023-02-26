@extends('admin.admin_master')

@section('title')
    Campaigns Page
@endsection

@section('admin_content')

    <div class="content-wrapper">

        @include('admin.body.banner')

        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Campaigns Page  ( {{ $campaigns->total() }} )</h4>
                        <div class="template-demo">
                            <a href="{{ route('wpadmin.campaigns.add') }}">
                                <button type="button" class="btn btn-primary btn-fw">Add New Campaign</button>
                            </a>
                            <a href="{{ route('wpadmin.campaigns.original') }}">Original Campaigns</a>
                            <a href="{{ route('wpadmin.campaigns.cloned') }}">Cloned Campaigns</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered sortable searchable">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>{{ __('Campaign Title') }}</th>
                                        <th>{{ __('Campaign Id') }}</th>
                                        <th>{{ __('Categories') }}</th>
                                        <th>{{ __('Topics') }}</th>
                                        <th>{{ __('Featured Image') }}</th>
                                        <th>{{ __('Time') }}</th>
                                        <th>{{ __('Original/Cloned') }}</th>
                                        <th>{{ __('View Campaign') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i = 1)
                                    @foreach( $campaigns as $campaign )
                                        <tr>
                                            <td> {{ $i++ }} </td>
                                            <td> {{ $campaign->title }}</td>
                                            <td> {{ $campaign->id }}</td>
                                            <td> {{ implode(', ', ( $campaign->categories->pluck('title')->toArray() ) ) }} </td>
                                            <td> {{ implode(', ', ( $campaign->topics->pluck('title')->toArray() ) ) }} </td>
                                            <td>
                                                <img style="width: 50px; height: auto;"
                                                    src="@if( !empty( $campaign->img ) ) {{ "/".$campaign->img }} @else {{ asset('/img/none.jpg') }} @endif">
                                            </td>
                                            <td>{{ $campaign->updated_at->diffForHumans() }}</td>
                                            <td>{{ $campaign->original_type }}
                                                @if ($campaign->original_type == 'cloned')
                                                , Parent: {{ \App\Models\Campaign::find($campaign->parent_id)->title }}, Author: {{ \App\Models\User::find($campaign->author_id)->name }}
                                                @endif
                                            </td>
                                            <td><a href="{{ route( 'single.campaign', $campaign->slug ) }}">View Campaign</a></td>
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

