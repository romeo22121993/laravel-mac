@extends('admin.admin_master')

@section('title')
    Edit Campaign Topic
@endsection

@section('admin_content')

    <div class="content-wrapper">
        @include('admin.body.banner')

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Campaign Topic</h4>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="forms-sample" method="POST" action="{{ route('wpadmin.campaigns.topics.update', $topic->id) }}">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail1">Topic Title</label>
                            <input type="text" class="form-control" name="title"  value="{{ $topic->title }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Topic Slug</label>
                            <input type="text" class="form-control" name="slug"  value="{{ $topic->slug }}">
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
