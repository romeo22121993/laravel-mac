@extends('admin.admin_master')

@section('title')
    Users Page
@endsection

@section('admin_content')
    <div class="content-wrapper">

        @include('admin.body.banner')

        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Users Page ( {{ $users->total() }} )</h4>
                        <div class="template-demo">
                            <a href="{{ route('wpadmin.users.add') }}">
                                <button type="button" class="btn btn-primary btn-fw">Add New User</button>
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> # </th>
                                    <th>{{ __('User Name') }}</th>
                                    <th>{{ __('User Email') }}</th>
                                    <th>{{ __('User Role') }}</th>
                                    <th>{{ __('User Avater') }}</th>
                                    <th>{{ __('Time Updated') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php($i = 1)
                                    @foreach( $users as $user )
                                        <tr>
                                            <td> {{ $i++ }} </td>
                                            <td> {{ $user->name }}</td>
                                            <td> {{ $user->email }}</td>
                                            <td> {{ ucfirst( $user->role ) }}</td>
                                            <td>
                                                <img style="width: 50px; height: auto;"
                                                     src="@if( empty( $user->avatar_img ) || ( $user->avatar_img == 'none' ) ) {{ asset('/img/face.jpeg') }} @else {{ asset('/uploads/users/'.$user->avatar_img) }}  @endif">
                                            </td>
                                            <td>{{ $user->updated_at->diffForHumans() }}</td>
                                            <td>
                                                <a href="{{ route('wpadmin.users.edit',  $user->id) }}" class="btn btn-info">Edit</a>

                                                <form method="POST" action="{{ route('wpadmin.users.delete', $user->id) }}" class="btn btn-danger">
                                                    @csrf
                                                    @method('delete')

                                                    <button type='submit' class="text-inverse" data-toggle="tooltip" style=" background: none;  border: 0;  color: #fff;">
                                                        Delete
                                                    </button>
                                                </form>
{{--                                                <a href="{{ route('wpadmin.users.delete', $user->id) }}"  class="btn btn-danger">Delete</a>--}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $users->links('pagination-links') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
