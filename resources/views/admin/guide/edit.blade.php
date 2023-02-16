@extends('admin.admin_master')

@section('title')
    Edit Guide
@endsection

@section('admin_content')

    <div class="content-wrapper">
        @include('admin.body.banner')

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Guide</h4>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="forms-sample" action="{{ route('wpadmin.guides.update', $guide->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Guide Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $guide->title }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Category</label>
                                <select class="form-control" id="exampleSelectGender" name="categories[]" multiple="">
                                    @foreach( $categories as $category )
                                        <option value="{{ $category->id }}" @if ( in_array( $category->id, $guideCategories )) selected @endif>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Featured Image Type</label>
                                <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">

                                <img src="{{ '/' . $guide->img }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-7">
                                <div class="form-group">
                                    <span style="margin-bottom: 10px; display: block;">Document Type</span>
                                    <p>
                                        <label for="exampleFormControlFile1">Png File</label>
                                        <input type="radio" name="doc_type" value="png" class="form-control-file" id="exampleFormControlFile1"
                                            @if( $guide->doc_type == 'png' ) checked @endif
                                        >
                                    </p>

                                    <p>
                                        <label for="exampleFormControlFile2">Word File</label>
                                        <input type="radio" name="doc_type" value="word" class="form-control-file" id="exampleFormControlFile2"
                                               @if( $guide->doc_type == 'word' ) checked @endif
                                        >
                                    </p>

                                    <p>
                                        <label for="exampleFormControlFile3">Ppt File</label>
                                        <input type="radio" name="doc_type" value="ppt" class="form-control-file" id="exampleFormControlFile3"
                                               @if( $guide->doc_type == 'ppt' ) checked @endif
                                        >
                                    </p>

                                    <p>
                                        <label for="exampleFormControlFile4">Pdf File</label>
                                        <input type="radio" name="doc_type" value="pdf" class="form-control-file" id="exampleFormControlFile4"
                                               @if( $guide->doc_type == 'pdf' ) checked @endif
                                        >
                                    </p>

                                </div>
                            </div>
                            <div class="form-group col-md-5">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Document File( png, word, ppt or pdf) </label>
                                    <input type="file" name="doc_file" class="form-control-file" id="exampleFormControlFile1">
                                    <span>{{ $guide->doc_file }}</span>
                                </div>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
