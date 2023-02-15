@php
    $status = '';
    if ( !empty( $progressingCourses ) && is_array( $progressingCourses ) && in_array( $course->id, $progressingCourses ) ) {
        $status = 'In Progress';
    }
    elseif ( !empty( $completedCourses ) && is_array( $completedCourses ) && in_array( $course->id, $completedCourses ) ) {
        $status = 'Completed';
    }
    else {
        $status = 'New';
    }
@endphp
<tr>
    <td>
        <a href="{{ route('single.course', $course->slug ) }}">
            <img
                 src="@if( $course->img != 'none' ) {{ asset('/uploads/courses/'.$course->img) }} @else {{ asset('/img/none.jpg') }} @endif">
        </a>
    </td>
    <td>
        <a href="{{ route('single.course', $course->slug ) }}">{{ $course->title }}</a>
    </td>
    <td>{{ App::make(\App\Modules\VideosAPI::class)->getAllLessonsByCourse( $course->lessons ) }}</td>
    <td>{{ $status }}</td>
    <td>{{ $course->created_at->format('Y-m-d') }}</td>
    <td> {{ implode(', ', ( $course->categories->pluck('title')->toArray() ) ) }} </td>
    <td>
        <a class="btn btn-view read-course" data-course-id="{{ $course->id }}"
           href="{{ route('single.course', $course->slug ) }}">
            View
        </a>
    </td>
</tr>
