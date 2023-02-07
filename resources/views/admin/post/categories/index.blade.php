@extends('admin.admin_master')

@section('title')
    Post Categories Page
@endsection

@section('admin_content')
    <div class="content-wrapper">

        @include('admin.body.banner')

        <div class="row">

            <div class="col-lg-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Post Category</h4>

                        <div class="template-demo" style="margin: 20px 0;">
                            <a href="{{ route('wpadmin.posts.categories.add') }}">
                                <button type="button" class="btn btn-primary btn-fw">Add New Category</button>
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

                        <form class="forms-sample" method="POST" action="{{ route('wpadmin.posts.categories.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Post Category Title</label>
                                <input type="text" required class="form-control" name="title" value="{{ old('title') }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputUsername1">Post Category Slug</label>
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
                        <h4 class="card-title">Categories Page ( {{ $categories->total() }} )</h4>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> # </th>
                                    <th>{{ __('Category Title') }}</th>
                                    <th>{{ __('Category Slug') }}</th>
                                    <th>{{ __('Count of post') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php($i = 1)
                                    @foreach( $categories as $category )
                                        <tr>
                                            <td> {{ $i++ }} </td>
                                            <td>
                                                <a href="{{ route('wpadmin.posts.by.categories', $category->id) }}">{{ $category->title }}</a>
                                            </td>
                                            <td> {{ $category->slug }}</td>
                                            <td>{{ $category->posts->count() }}</td>
                                            <td>
                                                <a href="{{ route('wpadmin.posts.categories.edit',  $category->id) }}" class="btn btn-info">Edit</a>
                                                <a href="{{ route('wpadmin.posts.categories.delete', $category->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $categories->links('pagination-links') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
