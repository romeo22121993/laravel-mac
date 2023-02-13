@extends('admin.admin_master')

@section('title')
    Courses Page
@endsection

@section('admin_content')

    <div class="content-wrapper">

        @include('admin.body.banner')

        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Courses Page  ( {{ $courses->total() }} )</h4>
                        <div class="template-demo">
                            <a href="{{ route('wpadmin.courses.add') }}">
                                <button type="button" class="btn btn-primary btn-fw">Add New Course</button>
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>{{ __('Course Title') }}</th>
                                        <th>{{ __('Course Slug') }}</th>
                                        <th>{{ __('Categories') }}</th>
                                        <th>{{ __('Featured Image') }}</th>
                                        <th>{{ __('Published?') }}</th>
                                        <th>{{ __('Time') }}</th>
                                        <th>{{ __('View Course') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i = 1)
                                    @foreach( $courses as $course )
                                        <tr>
                                            <td> {{ $i++ }} </td>
                                            <td> {{ $course->title }}</td>
                                            <td> {{ $course->slug }}</td>
                                            <td> {{ implode(', ', ( $course->categories->pluck('title')->toArray() ) ) }} </td>
                                            <td>
                                                <img style="width: 50px; height: auto;"
                                                    src="@if( $course->img != 'none' ) {{ asset('/uploads/courses/'.$course->img) }} @else {{ asset('/img/none.jpg') }} @endif">
                                            </td>
                                            <td>
                                                @if( !empty( $course->published ) ) Yes @else No @endif
                                            </td>
                                            <td>{{ $course->updated_at->diffForHumans() }}</td>
                                            <td><a href="{{ route( 'single.post', $course->slug ) }}">View Post</a></td>
                                            <td>
                                                <a href="{{ route('wpadmin.courses.edit',  $course->id) }}" class="btn btn-info">Edit</a>
                                                <a href="{{ route('wpadmin.courses.delete', $course->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $courses->links('pagination-links') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
