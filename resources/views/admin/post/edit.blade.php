@extends('admin.admin_master')

@section('title')
    Edit Post
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

                <form class="forms-sample" action="{{ route('wpadmin.posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Post Title</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="title" value="{{ $post->title }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Post Slug</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="slug" value="{{ $post->slug }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Category</label>
                            <select class="form-control" id="exampleSelectGender" name="categories[]" multiple="">
                                @foreach( $categories as $category )
                                    <option value="{{ $category->id }}" @if ( in_array( $category->id, $postCategories ) ) selected @endif  >
                                        {{ $category->title  }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">Post Content</label>
                        <textarea class="form-control" name="content" id="summernote">{{ $post->content }}</textarea>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlFile1">Feature Image </label>
                            <input type="file" name="image" class="form-control-file" id="image">
                        </div>
                        <div class="form-group col-md-6">
                            <img id="showImage" src="@if( $post->img != 'none' ) {{ "/$post->img" }} @else {{ asset('/img/none.jpg') }} @endif"
                                 style="width: 200px;  height: auto;" >
                        </div>
                    </div>

                    <hr>
                        <h4 class="text-center">Extra Opions </h4>
                    <br>

                    <div class="row">
                        <label class="form-check-label col-md-3">
                            <input type="checkbox" name="check1" class="form-check-input"
                                   @if( !empty( $post->check1 ) ) checked @endif
                                   value="1"> Published Post
                            <i class="input-helper"></i>
                        </label>

                        <label class="form-check-label col-md-3">
                            <input type="checkbox" name="check2" class="form-check-input"
                                   @if( !empty( $post->check2 ) ) checked @endif
                                   value="1">Additional Check2
                            <i class="input-helper"></i>
                        </label>

                        <label class="form-check-label col-md-3">
                            <input type="checkbox" name="check3" class="form-check-input"
                                  @if( !empty( $post->check3 ) ) checked @endif  value="1"> Additional Check3
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
