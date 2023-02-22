@extends('admin.admin_master')

@section('title')
    Edit Page
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

                <form class="forms-sample" action="{{ route('wpadmin.pages.update', $page->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Page Title</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="title" value="{{ $page->title }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Page Slug</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="slug" value="{{ $page->slug }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">Page Content</label>
                        <textarea class="form-control" name="content" id="summernote">{{ $page->content }}</textarea>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlFile1">Feature Image </label>
                            <input type="file" name="image" class="form-control-file" id="image">
                        </div>
                        <div class="form-group col-md-6">
                            <img id="showImage" src="@if($page->img != 'none') {{ "/$page->img" }} @else {{ asset('/img/none.jpg') }} @endif"
                                 style="width: 200px;  height: auto;" >
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
