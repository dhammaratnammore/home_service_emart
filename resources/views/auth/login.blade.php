@extends('layouts.app')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap');

    body {
        font-family: 'Inter', sans-serif;
        background: #f5f5f5; /* subtle light background instead of gradient */
        min-height: 100vh;
    }

    .login-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .login-card {
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 20px 20px 60px #d9d9d9, -20px -20px 60px #ffffff;
        padding: 50px 40px;
        max-width: 440px;
        width: 100%;
        text-align: center;
    }

    .login-card img {
        width: 80px;
        margin-bottom: 15px;
    }

    .login-card h3 {
        font-weight: 600;
        margin-bottom: 8px;
        color: #333;
        font-size: 1.8rem;
    }

    .login-card p {
        font-size: 14px;
        color: #666;
        margin-bottom: 30px;
    }

    .form-group {
        text-align: left;
        margin-bottom: 20px;
    }

    label {
        font-size: 13px;
        color: #555;
        margin-bottom: 6px;
        display: block;
    }

    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 12px 16px;
        border: none;
        border-radius: 12px;
        background: #f0f0f0;
        box-shadow: inset 6px 6px 12px #d1d1d1, inset -6px -6px 12px #ffffff;
        font-size: 14px;
        color: #333;
        transition: box-shadow 0.3s;
    }

    input:focus {
        outline: none;
        box-shadow: 0 0 0 2px #80bdff;
    }

    .btn-submit {
        width: 100%;
        padding: 14px;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 600;
        border: none;
        border-radius: 12px;
        background: #6a11cb;
        color: white;
        box-shadow: 0 8px 20px rgba(106, 17, 203, 0.3);
        transition: background 0.3s ease;
    }

    .btn-submit:hover {
        background: #4e0fa0;
    }

    .remember-me {
        font-size: 13px;
        color: #555;
    }

    .forgot-pass,
    .register-link {
        font-size: 13px;
        color: #666;
        margin-top: 15px;
    }

    .forgot-pass a,
    .register-link a {
        color: #6a11cb;
        text-decoration: none;
    }

    .invalid-feedback {
        font-size: 13px;
        color: #d9534f;
        margin-top: 6px;
        display: block;
    }
</style>

<div class="login-wrapper">
    <div class="login-card">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <h3>Login to Your Account</h3>
        <p>Welcome back! Please enter your credentials</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email address</label>
                <input id="email" type="email"
                       class="@error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password"
                       class="@error('password') is-invalid @enderror"
                       name="password" required>
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check remember-me">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                           {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>
                @if (Route::has('password.request'))
                    <div class="forgot-pass">
                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                    </div>
                @endif
            </div>

            <button type="submit" class="btn-submit">Sign In</button>

            @if (Route::has('register'))
                <div class="register-link">
                    Don’t have an account?
                    <a href="{{ route('register') }}">Register</a>
                </div>
            @endif
        </form>
    </div>
</div>
@endsection
