@extends('layout.login')
@section('content')
<div class="container">
    <div class="card">
        <div class="logo"><i class="bi bi-leaf-fill"></i> Naturally55</div>
        <h2>Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            @if ($errors->any())
                <div class="auth-alert">
                    Email atau password tidak sesuai.
                </div>
            @endif

            <div class="form-group">
                <label for="email">Email address*</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="sigma@gmail.com"
                    autocomplete="email"
                    required
                    autofocus>
            </div>

            <div class="form-group">
                <label for="password">Password*</label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    placeholder="Enter your password"
                    autocomplete="current-password"
                    required>
            </div>

            <label class="remember">
                <input type="checkbox" name="remember" id="remember">
                Remember me
            </label>

            <button type="submit" class="submit-btn">Login</button>

            <div class="footer">
                Don't have an account?
                <a href="{{ route('register') }}">Register</a>
            </div>
        </form>
    </div>
</div>
@endsection