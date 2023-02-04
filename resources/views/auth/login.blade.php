@extends('layouts.app-auth')

@section('title')
    Login Page
@endsection

@section('content')

    <div class="card col-lg-4 mx-auto login_page">
        <div class="card-body px-5 py-5">
            <h3 class="card-title text-left mb-3">Login</h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label>{{ __('Email') }} *</label>
                    <input type="email"  id="email"  type="email" name="email" class="form-control p_input">
                </div>
                <div class="form-group">
                    <label>{{ __('Password') }} *</label>
                    <input id="password" type="password" name="password" class="form-control p_input">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                        <label class="form-check-label">{{ __('Remember me') }}
                            <input type="checkbox" class="form-check-input remember" name="remember">
                        </label>
                    </div>

                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.forgot1') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">{{ __('Log in') }}</button>
                </div>

                <div class="d-flex">
                    <button class="btn btn-facebook mr-2 col">
                        <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                        <i class="mdi mdi-google-plus"></i> Google plus </button>
                </div>

                <p class="sign-up">Don't have an Account?<a href="{{ route('register') }}"> Sign Up</a></p>
            </form>
        </div>
    </div>

@endsection
