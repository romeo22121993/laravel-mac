@extends('admin.admin_master')

@section('title')
    Create Pose
@endsection

@section('admin_content')

<div class="content-wrapper">
    @include('admin.body.banner')

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Page Insert</h4>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="forms-sample" action="{{ route('wpadmin.pages.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Page Title</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="title" value="{{ old('title') }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Page Slug</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="slug" value="{{ old('slug') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">Page Content</label>
                        <textarea class="form-control" name="content" id="summernote">{{ old('content') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Feature Image </label>
                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
