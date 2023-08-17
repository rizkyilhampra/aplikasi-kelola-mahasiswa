@extends('layouts.auth.auth')

@section('title', 'Sign Up')
@section('auth-title', 'Sign Up')
@section('auth-subtitle', 'Input your data to register to our website.')

@section('auth-footer')
    <p class="text-gray-600">
        Already have an account?
        <a href="{{ route('login') }}" class="font-bold">Log in</a>.
    </p>
@endsection

@section('content')
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" name="email" class="form-control form-control-xl @error('email') is-invalid @enderror"
                placeholder="Email" />
            <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
            </div>
            @include('components.invalid-feedback', ['message' => $errors->first('email')])
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" name="name" class="form-control form-control-xl @error('name') is-invalid @enderror"
                placeholder="Username" />
            <div class="form-control-icon">
                <i class="bi bi-person"></i>
            </div>
            @include('components.invalid-feedback', ['message' => $errors->first('name')])
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" name="password"
                class="form-control form-control-xl  @error('password') is-invalid @enderror" placeholder="Password" />
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
            @include('components.invalid-feedback', ['message' => $errors->first('password')])
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" name="password_confirmation"
                class="form-control form-control-xl @error('password_confirmation') is-invalid @enderror"
                placeholder="Confirm Password" />
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
            @include('components.invalid-feedback', ['message' => $errors->first('password_cnfirmation')])
        </div>
        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
            Sign Up
        </button>
    </form>
@endsection
