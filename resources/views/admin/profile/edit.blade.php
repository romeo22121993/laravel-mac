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
                    <h4 class="card-title">Edit user</h4>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{ route('wpadmin.update.profile', $user->id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">User Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">User Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">User First Name</label>
                            <input type="text" class="form-control" name="firstname" value="{{ $user->firstname }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">User Last Name</label>
                            <input type="text" class="form-control" name="lastname" value="{{ $user->lastname }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">User Role</label>
                            <select name="role" class="form-control block mt-1 w-full form-control p_input">
                                <option value="admin" @if( $user->role == 'admin' ) selected @endif>Administrator</option>
                                <option value="subscriber" @if( $user->role == 'subscriber' ) selected @endif>Subscriber</option>
                                <option value="another_role" @if( $user->role == 'another_role' ) selected @endif>Another Role</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">User Phone</label>
                            <input type="text" class="form-control" name="phone"  value="{{ $user->phone }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">User Company</label>
                            <input type="text" class="form-control" name="company"  value="{{ $user->company }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">User Position</label>
                            <input type="text" class="form-control" name="position"  value="{{ $user->position }}">
                        </div>

                        <div class="row form-group">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Profile Image <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="file" name="avatar_img" class="form-control"  id="image">
                                    </div>
                                </div>
                            </div><!-- end cold md 6 -->

                            <div class="col-md-6">
                                <img id="showImage" src="{{ $avatarImg }}" style="width: 100px; height: 100px;">
                            </div><!-- end cold md 6 -->

                        </div><!-- end row 	 -->

                        <button type="submit" class="btn btn-primary mr-2">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
