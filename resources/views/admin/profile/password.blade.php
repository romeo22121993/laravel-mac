@extends('admin.admin_master')

@section('title')
    Edit User
@endsection

@section('admin_content')

    <div class="content-wrapper">
        @include('admin.body.banner')

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Set new password</h4>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="forms-sample" method="POST" action="{{ route('wpadmin.update.password', $user->id) }}">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail1">User Password</label>
                            <input type="password" class="form-control" name="password" >
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Set new password</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
