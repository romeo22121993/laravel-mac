@extends('admin.admin_master')

@section('title')
    Create Course
@endsection

@section('admin_content')

<div class="content-wrapper">


    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Course Insert</h4>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="forms-sample" action="{{ route('wpadmin.courses.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Course Title</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="title" value="{{ old('title') }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Category</label>
                            <select class="form-control" id="exampleSelectGender" name="categories[]" multiple="">
                                @foreach( $categories as $category )
                                    <option value="{{ $category->id }}">{{ $category->title  }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label for="exampleTextarea1">Course FAQ Block</label>
                                <textarea class="form-control" name="faq_block" id="summernote">{{ old('faq_block') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label for="exampleTextarea1">Course Transcription</label>
                                <textarea class="form-control" name="transcription" id="summernote">{{ old('transcription') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Feature Image </label>
                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <hr>
                    <h4 class="text-center">Lessons Section </h4>
                    <br>

                    @for ($i = 1; $i <= 10; $i++)
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Lesson Name</label>
                                <input type="text" class="form-control"  name="lesson_name_{{ $i }}" >
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Lesson Link</label>
                                <input type="text" class="form-control"  name="lesson_link_{{ $i }}" >
                            </div>

                        </div>
                        <hr>
                    @endfor

                    <hr>
                        <h4 class="text-center">Extra Opions </h4>
                    <br>

                    <div class="row">
                        <label class="form-check-label col-md-3">
                            <input type="checkbox" name="published" class="form-check-input" checked value="1"  > Published Course
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
