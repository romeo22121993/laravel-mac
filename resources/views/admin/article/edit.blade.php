@extends('admin.admin_master')

@section('title')
    Edit Article
@endsection

@section('admin_content')

    <div class="content-wrapper">
        @include('admin.body.banner')

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Article</h4>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="forms-sample" action="{{ route('wpadmin.articles.update', $article->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Article Title</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="title" value="{{ $article->title }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputName1">Parent Id</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="parent_id" value="{{ $article->parent_id }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputName1">Author Id</label>
                                <input type="text" class="form-control" id="exampleInputName1"  value="{{ \App\Models\User::find($article->author_id)->name }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="exampleInputName1">Category</label>
                                <select class="form-control" id="exampleSelectGender" name="categories[]" multiple="">
                                    @foreach( $categories as $category )
                                        <option value="{{ $category->id }}"
                                            @if( in_array($category->id, $articleCategories)) selected @endif
                                        >{{ $category->title  }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleInputName1">Article Type</label>
                                <select class="form-control" id="exampleSelectGender" name="article_type" required >
                                    @foreach( $articleTypes as $k => $v )
                                        <option value="{{ $v }}"
                                                @if ($v == $article->article_type) selected @endif
                                        >{{ ucfirst($v) }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleInputName1">Review Status</label>
                                <select class="form-control" id="exampleSelectGender" name="review_status" required>
                                    @foreach( $reviewStatuses as $k => $v )
                                        <option value="{{ $k }}"
                                            @if ($k == $article->review_status) selected @endif
                                        >{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="exampleTextarea1">Article Content</label>
                            <textarea class="form-control" name="content" id="summernote">{{ $article->content }}</textarea>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlFile1">Feature Image </label>
                                <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
                                <img src="/{{ $article->img }}" style="  width: 150px;  height: auto;" >
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleFormControlFile1">Document File </label>
                                <input type="file" name="doc_file"  class="form-control-file" id="exampleFormControlFile1">
                                <span>{{ $article->doc_file }}</span>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
