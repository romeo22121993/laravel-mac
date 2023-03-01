@extends('admin.admin_master')

@section('title')
    Create  Campaign
@endsection

@section('admin_content')

<div class="content-wrapper">
    @include('admin.body.banner')

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Campaign Insert</h4>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="forms-sample" action="{{ route('wpadmin.campaigns.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Campaign Title</label>
                            <input type="text" class="form-control" required id="exampleInputName1" name="title" value="{{ old('title') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Campaign Slug</label>
                            <input type="text" class="form-control"  id="exampleInputName1" name="slug" value="{{ old('slug') }}">
                        </div>

                        <div class="form-group col-md-8">
                            <label for="exampleTextarea1">Content</label>
                            <textarea class="form-control"  name="content1" id="summernote"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Categories</label>
                            <select class="form-control" id="exampleSelectGender" required name="categories[]" multiple="">
                                @foreach( $categories as $category )
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Topics</label>
                            <select class="form-control" id="exampleSelectGender" required name="topics[]" multiple="">
                                @foreach( $topics as $topic )
                                    <option value="{{ $topic->id }}">{{ $topic->title }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="exampleFormControlFile1">Feature Image </label>
                            <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleFormControlFile1">Word File </label>
                            <input type="file" name="doc_file"  class="form-control-file" id="exampleFormControlFile1">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleFormControlFile1">Pdf File </label>
                            <input type="file" name="pdf_file"  class="form-control-file" id="exampleFormControlFile1">
                        </div>

                    </div>

                    <br/>
                    <h4>Extra Information: Campaign Emails</h4>
                    <hr/>
                    @for($i=1; $i<=3;$i++)
                        <h4>Email Block {{$i}}: </h4>
                        <hr/>
                        <div class="row">

                            <div class="form-group col-md-4">
                                <label for="exampleTextarea1">Email Subject</label>
                                <textarea class="form-control" @if($i==1) required @endif name="email_subject{{$i}}"></textarea>
                            </div>

                            <div class="form-group col-md-8">
                                <label for="exampleTextarea1">Email Body</label>
                                <textarea class="form-control" @if($i==1) required @endif  name="email_body{{$i}}" id="summernote"></textarea>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleCheckbox{{$i}}">Use Custom Link</label>
                                <input class="form-group"  id="exampleCheckbox{{$i}}" name="use_custom_link{{$i}}" type="checkbox" />
                            </div>

                            <div class="form-group col-md-8">
                                <label for="exampleArticle{{$i}}">Article</label>
                                <select class="form-control" id="exampleArticle{{$i}}" name="article{{$i}}">
                                    @foreach( $articles as $article )
                                        <option value="{{ $article->id }}">{{ $article->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <hr/>
                    @endfor

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
