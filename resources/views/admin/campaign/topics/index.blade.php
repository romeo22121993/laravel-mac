@extends('admin.admin_master')

@section('title')
    Campaign Topics Page
@endsection

@section('admin_content')
    <div class="content-wrapper">

        @include('admin.body.banner')

        <div class="row">

            <div class="col-lg-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Campaign Topic</h4>

                        <div class="template-demo" style="margin: 20px 0;">
                            <a href="{{ route('wpadmin.campaigns.topics.add') }}">
                                <button type="button" class="btn btn-primary btn-fw">Add New Topic</button>
                            </a>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form class="forms-sample" method="POST" action="{{ route('wpadmin.campaigns.topics.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Campaign Topic Title</label>
                                <input type="text" required class="form-control" name="title" value="{{ old('title') }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputUsername1">Campaign Topic Slug</label>
                                <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Create</button>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">topics Page ( {{ $topics->total() }} )</h4>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> # </th>
                                    <th>{{ __('Topic Title') }}</th>
                                    <th>{{ __('Topic Slug') }}</th>
                                    <th>{{ __('Count of Campaign') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php($i = 1)
                                    @foreach( $topics as $topic )
                                        <tr>
                                            <td> {{ $i++ }} </td>
                                            <td>
                                                <a href="{{ route('wpadmin.campaigns.by.topics', $topic->id) }}">{{ $topic->title }}</a>
                                            </td>
                                            <td> {{ $topic->slug }}</td>
                                            <td>{{ $topic->campaigns->count() }}</td>
                                            <td>
                                                <a href="{{ route('wpadmin.campaigns.topics.edit',  $topic->id) }}" class="btn btn-info">Edit</a>
                                                <a href="{{ route('wpadmin.campaigns.topics.delete', $topic->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $topics->links('pagination-links') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
