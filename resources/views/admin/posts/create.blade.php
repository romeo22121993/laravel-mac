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
                <h4 class="card-title">New Post Insert</h4>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="forms-sample" action="{{ route('wpadmin.posts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Post Title</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="title" value="{{ old('title') }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Post Slug</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="slug" value="{{ old('slug') }}">
                        </div>
                    </div> <!-- End Row  -->
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Category</label>
                            <select class="form-control" id="exampleSelectGender" name="categories[]" multiple="">
                                @foreach( $categories as $category )
                                    <option value="{{ $category->id }}">{{ $category->title  }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">Post Content</label>
                        <textarea class="form-control" name="content" id="summernote">{{ old('content') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Feature Image </label>
                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <hr>
                        <h4 class="text-center">Extra Opions </h4>
                    <br>

                    <div class="row">
                        <label class="form-check-label col-md-3">
                            <input type="checkbox" name="check1" class="form-check-input" value="1"> Additional Check1
                            <i class="input-helper"></i>
                        </label>

                        <label class="form-check-label col-md-3">
                            <input type="checkbox" name="check2" class="form-check-input" value="1">Additional Check2
                            <i class="input-helper"></i>
                        </label>

                        <label class="form-check-label col-md-3">
                            <input type="checkbox" name="check3" class="form-check-input" value="1"> Additional Check3
                            <i class="input-helper"></i>
                        </label>

                    </div>
                    <br><br>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
