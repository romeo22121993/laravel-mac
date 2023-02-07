@extends('admin.admin_master')

@section('title')
    Add new User
@endsection

@section('admin_content')

    <div class="content-wrapper">
        @include('admin.body.banner')

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add User</h4>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="forms-sample" method="POST" action="{{ route('wpadmin.users.store') }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">User Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">User Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">User First Name</label>
                            <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">User Last Name</label>
                            <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">User Role</label>
                            <select name="role" class="form-control block mt-1 w-full form-control p_input">
                                <option value="admin"  selected >Administrator</option>
                                <option value="subscriber" >Subscriber</option>
                                <option value="another_role" >Another Role</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">User Phone</label>
                            <input type="text" class="form-control" name="phone"  value="{{ old('phone') }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">User Company</label>
                            <input type="text" class="form-control" name="company"  value="{{ old('company') }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">User Position</label>
                            <input type="text" class="form-control" name="position"  value="{{ old('position') }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">User Image </label>
                            <input type="file" name="avatar_img" class="form-control-file" id="exampleFormControlFile1">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">User Password</label>
                            <input type="text" class="form-control" name="password" >
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Create</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
