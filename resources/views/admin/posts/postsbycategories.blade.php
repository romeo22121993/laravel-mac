@extends('admin.admin_master')

@section('title')
    Posts Page By Category
@endsection

@section('admin_content')

    <div class="content-wrapper">

        @include('admin.body.banner')

        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Posts Page for category *{{ $postCategory->title  }}* ( {{ $posts->count() }} )</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>{{ __('Post Title') }}</th>
                                        <th>{{ __('Post Slug') }}</th>
                                        <th>{{ __('Categories') }}</th>
                                        <th>{{ __('Featured Image') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i = 1)
                                    @foreach( $posts as $post )
                                        <tr>
                                            <td> {{ $i++ }} </td>
                                            <td> {{ $post['title'] }}</td>
                                            <td> {{ $post->slug }}</td>
                                            <td> {{ implode(', ', ( $post->categories->pluck('title')->toArray() ) ) }} </td>
                                            <td>
                                                <img style="width: 50px; height: auto;"
                                                    src="@if( $post->img != 'none' ) {{ asset('/uploads/posts/'.$post->img) }} @else {{ asset('/img/none.jpg') }} @endif">
                                            </td>
                                            <td>
                                                <a href="{{ route('wpadmin.posts.edit',  $post->id) }}" class="btn btn-info">Edit</a>
                                                <a href="{{ route('wpadmin.posts.delete', $post->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $posts->links('pagination-links') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
