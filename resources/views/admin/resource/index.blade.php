@extends('admin.admin_master')

@section('title')
    Resources Page
@endsection

@section('admin_content')

    <div class="content-wrapper">

        @include('admin.body.banner')

        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Resources Page ( {{ $resources->total() }} )</h4>
                        <div class="template-demo">
                            <a href="{{ route('wpadmin.resources.add') }}">
                                <button type="button" class="btn btn-primary btn-fw">Add New Resource</button>
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>{{ __('Resource Title') }}</th>
                                        <th>{{ __('Resource Slug') }}</th>
                                        <th>{{ __('Categories') }}</th>
                                        <th>{{ __('Featured Image') }}</th>
                                        <th>{{ __('Document Type') }}</th>
                                        <th>{{ __('Time') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i = 1)
                                    @foreach( $resources as $resource )
                                        <tr>
                                            <td> {{ $i++ }} </td>
                                            <td> {{ $resource->title }}</td>
                                            <td> {{ $resource->slug }}</td>
                                            <td> {{ implode(', ', ( $resource->categories->pluck('title')->toArray() ) ) }} </td>
                                            <td>
                                                <img style="width: 50px; height: auto;"
                                                    src="@if( !empty( $resource->img ) ) {{ "/" . $resource->img }} @else {{ asset('/img/none.jpg') }} @endif">
                                            </td>
                                            <td>{{ $resource->doc_type }}</td>
                                            <td>{{ $resource->updated_at->diffForHumans() }}</td>
                                            <td>
                                                <a href="{{ route('wpadmin.resources.edit',  $resource->id) }}" class="btn btn-info">Edit</a>
                                                <a href="{{ route('wpadmin.resources.delete', $resource->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $resources->links('pagination-links') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
