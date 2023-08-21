<x-auth-layout title="Log In" authTitle="Log In"
    authSubtitle="Log in with your data that you entered during registration.">
    <x-slot name="authFooter">
        <p class="text-gray-600">
            Don't have an account?
            <a href="{{ route('register') }}" class="font-bold">Sign up</a>.
        </p>
    </x-slot>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" name="email" class="form-control form-control-xl @error('email') is-invalid @enderror"
                value="{{ old('email') }}" required placeholder="emaill@gmail.com" />
            <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
            </div>
            <x-invalid-feedback :message="$errors->first('email')"></x-invalid-feedback>
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" name="password"
                class="form-control form-control-xl @error('password') is-invalid @enderror"
                value="{{ old('password') }}" placeholder="Password" required />
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
            <x-invalid-feedback :message="$errors->first('password')"></x-invalid-feedback>
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
            Log in
        </button>
    </form>
</x-auth-layout>
