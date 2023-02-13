@extends('admin.admin_master')

@section('title')
    Update Course
@endsection

@section('admin_content')

    <div class="content-wrapper">


        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Course</h4>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="forms-sample" action="{{ route('wpadmin.courses.update', $course->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Course Title</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="title" value="{{ $course->title }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Category</label>
                                <select class="form-control" id="exampleSelectGender" name="categories[]" multiple="">
                                    @foreach( $categories as $category )
                                        <option value="{{ $category->id }}" @if ( in_array( $category->id, $courseCategories ) ) selected @endif >{{ $category->title  }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label for="exampleTextarea1">Course FAQ Block</label>
                                    <textarea class="form-control" name="faq_block" id="summernote">{{ $course->faq_block }}</textarea>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label for="exampleTextarea1">Course Transcription</label>
                                    <textarea class="form-control" name="transcription" id="summernote">{{ $course->transcription }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Feature Image </label>
                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group col-md-6">
                            <img id="showImage" src="@if ( $course->img != 'none' )  {{ asset('/uploads/courses/'.$course->img) }} @else {{ asset('/img/none.jpg') }} @endif"
                                 style="width: 200px;  height: auto;" >
                        </div>

                        <hr>
                        <h4 class="text-center">Lessons Section </h4>
                        <br>

                        <input type="hidden" name="detail_id" value="{{ $course->lessons->id }}" >
                        @for ($i = 1; $i <= 10; $i++)
                            @php
                            $nameKey = "lesson_name_". $i;
                            $linkKey = "lesson_link_". $i;
                            @endphp
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputName1">Lesson Name {{ $i }}</label>
                                    <input type="text" class="form-control"  name="{{ $nameKey }}" value="{{ $course->lessons->$nameKey }}" >
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputName1">Lesson Link {{ $i }}</label>
                                    <input type="text" class="form-control"  name="{{ $linkKey }}" value="{{ $course->lessons->$linkKey }}" >
                                </div>

                            </div>
                            <hr>
                        @endfor

                        <hr>
                        <h4 class="text-center">Extra Opions </h4>
                        <br>

                        <div class="row">
                            <label class="form-check-label col-md-3">
                                <input type="checkbox" name="published" class="form-check-input"
                                       @if( !empty( $course->published ) ) checked @endif  value="1"
                                > Published Course
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
