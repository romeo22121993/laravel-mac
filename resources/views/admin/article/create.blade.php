@extends('admin.admin_master')

@section('title')
    Create  Article
@endsection

@section('admin_content')

<div class="content-wrapper">
    @include('admin.body.banner')

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Article Insert</h4>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="forms-sample" action="{{ route('wpadmin.articles.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Article Title</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="title" value="{{ old('title') }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Article Slug</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="slug" value="{{ old('slug') }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputName1">Category</label>
                            <select class="form-control" id="exampleSelectGender" name="categories[]" multiple="">
                                @foreach( $categories as $category )
                                    <option value="{{ $category->id }}">{{ $category->title  }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputName1">Article Type</label>
                            <select class="form-control" id="exampleSelectGender" name="article_type" required >
                                @foreach( $articleTypes as $k => $v )
                                    <option value="{{ $v }}">{{ ucfirst($v) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputName1">Review Status</label>
                            <select class="form-control" id="exampleSelectGender" name="review_status" required>
                                @foreach( $reviewStatuses as $k => $v )
                                    <option value="{{ $k }}">{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">Article Content</label>
                        <textarea class="form-control" name="content" id="summernote">{{ old('content') }}</textarea>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlFile1">Feature Image </label>
                            <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleFormControlFile1">Document File </label>
                            <input type="file" name="doc_file" required class="form-control-file" id="exampleFormControlFile1">
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
