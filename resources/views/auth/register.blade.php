@extends('layout.login')
@section('content')
<div class="container">
    <div class="card">
        <div class="logo"><i class="bi bi-leaf-fill"></i> Naturally55</div>
        <h2>Create account</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">Full name*</label>
                <input
                    id="name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    autocomplete="name"
                    required
                    autofocus>

                @error('name')
                    <div class="auth-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email address*</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    autocomplete="email"
                    required>

                @error('email')
                    <div class="auth-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password*</label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    minlength="8"
                    autocomplete="new-password"
                    required>

                @error('password')
                    <div class="auth-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm password*</label>
                <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    minlength="8"
                    autocomplete="new-password"
                    required>
            </div>

            <button type="submit" class="submit-btn">
                Create account
            </button>

            <div class="footer">
                Already have an account?
                <a href="{{ route('login') }}">Login</a>
            </div>
        </form>
    </div>
</div>
@endsection