@extends('admin.admin_master')

@section('admin_content')

    <div class="content-wrapper">
        @include('admin.body.banner')

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Guide Category</h4>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="forms-sample" method="POST" action="{{ route('wpadmin.guides.categories.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Guide Category Title</label>
                            <input type="text" required class="form-control" name="title" value="{{ old('title') }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputUsername1">Guide Category Slug</label>
                            <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Create</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
