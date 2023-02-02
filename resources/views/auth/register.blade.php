@extends('layouts.app-auth')

@section('title')
    Register Page
@endsection

@section('content')

    <div class="card col-lg-8 mx-auto register_page">
        <div class="card-body px-5 py-5">
            <h3 class="card-title text-left mb-3">Register</h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}" class="register_form">
                @csrf

                <div class='left' >
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control p_input">
                    </div>

                    <div class="form-group">
                        <label for="name" value="{{ __('UserName') }}" > Name </label>
                        <input id="name" class="block mt-1 w-full form-control p_input" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                    </div>
                    <div class="form-group">
                        <label for="name" > First Name </label>
                        <input id="name" class="block mt-1 w-full form-control p_input" type="text" name="firstname" value="{{ old('firstname') }}" required autofocus autocomplete="name" />
                    </div>

                    <div class="form-group">
                        <label for="name" > Last Name </label>
                        <input id="name" class="block mt-1 w-full form-control p_input" type="text" name="lastname" value="{{ old('lastname') }}" required autofocus autocomplete="name" />
                    </div>

                    <div class="form-group">
                        <label for="name" > User Role </label>
                        <select name="role" class="block mt-1 w-full form-control p_input">
                            <option value="admin" selected>Administrator</option>
                            <option value="subscriber">Subscriber</option>
                            <option value="another_role">Another Role</option>
                        </select>
                    </div>

                </div>

                <div class='right' >

                    <div class="form-group">
                        <label for="name" > Phone Number </label>
                        <input id="name" class="block mt-1 w-full form-control p_input" type="text" name="phone" value="{{ old('phone') }}" required autofocus autocomplete="name" />
                    </div>

                    <div class="form-group">
                        <label for="name" > Company Name </label>
                        <input id="name" class="block mt-1 w-full form-control p_input" type="text" name="company" value="{{ old('company') }}" required autofocus autocomplete="name" />
                    </div>

                    <div class="form-group">
                        <label for="name" > Position </label>
                        <input id="name" class="block mt-1 w-full form-control p_input" type="text" name="position" value="{{ old('position') }}" required autofocus autocomplete="name" />
                    </div>

                    <div class="form-group">
                        <label for="password"> Password </label>
                        <input id="password" class="block mt-1 w-full form-control p_input" type="password" name="password" required  />
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation" > Confirm Password </label>
                        <input id="password_confirmation" class=" form-control p_input block mt-1 w-full" type="password" name="password_confirmation" required  />
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4 form-group">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 form-control p_input" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <button class="btn btn-primary btn-block enter-btn">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>

        </div>
    </div>

@endsection
