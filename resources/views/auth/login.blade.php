@extends('layouts.auth.auth')

@section('title', 'Log In')
@section('auth-title', 'Log In')
@section('auth-subtitle', 'Log in with your data that you entered during registration.')

@section('auth-footer')
    <p class="text-gray-600">
        Don't have an account?
        <a href="{{ route('register') }}" class="font-bold">Sign up</a>.
    </p>
@endsection

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" name="email" class="form-control form-control-xl @error('email') is-invalid @enderror"
                value="{{ old('email') }}" required placeholder="emaill@gmail.com" />
            <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
            </div>
            @include('components.invalid-feedback', ['message' => $errors->first('email')])
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" name="password"
                class="form-control form-control-xl @error('password') is-invalid @enderror" value="{{ old('password') }}"
                placeholder="Password" required />
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
            @include('components.invalid-feedback', ['message' => $errors->first('password')])
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
            Log in
        </button>
    </form>
@endsection
