@extends('admin.admin_master')

@section('title')
    Pages Page
@endsection

@section('admin_content')

    <div class="content-wrapper">

        @include('admin.body.banner')

        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">pages Page  ( {{ $pages->count() }} )</h4>
                        <div class="template-demo">
                            <a href="{{ route('wpadmin.pages.add') }}">
                                <button type="button" class="btn btn-primary btn-fw">Add New Page</button>
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>{{ __('Page Title') }}</th>
                                        <th>{{ __('Page Slug') }}</th>
                                        <th>{{ __('Featured Image') }}</th>
                                        <th>{{ __('Time') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i = 1)
                                    @foreach( $pages as $page )
                                        <tr>
                                            <td> {{ $i++ }} </td>
                                            <td> {{ $page->title }}</td>
                                            <td> {{ $page->slug }}</td>
                                            <td>
                                                <img style="width: 50px; height: auto;"
                                                    src="@if( $page->img != 'none' ) {{ "/$page->img" }} @else {{ asset('/img/none.jpg') }} @endif">
                                            </td>
                                            <td>{{ $page->updated_at->diffForHumans() }}</td>
                                            <td>
                                                <a href="{{ route('wpadmin.pages.edit',  $page->id) }}" class="btn btn-info">Edit</a>
                                                <a href="{{ route('wpadmin.pages.delete', $page->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $pages->links('pagination-links') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
