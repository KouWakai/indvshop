@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row m-0 pt-5">
        <div class="col-6 mt-5 border-right">
            <div class="d-flex justify-content-center">
            <form action="{{ route('login') }}" method="POST">
                @csrf
            <h2>Returning Customer</h2>
                <div class="py-2">
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                </div>
                <div class="py-2">
                <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Password" required>
                </div>


                <div class="login-container">
                    <button type="submit" class="btn-sm btn-primary">ログイン</button>
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>

                <a href="{{ route('password.request') }}">
                    <span class="py-2">Forgot Your Password?</span>
                </a>

            </form>
            </div>
        </div>

        <div class="col-6 mt-5">
            <div class="d-flex justify-content-center">
                    <div>
                                        <h2>New Customer</h2>
                    <p>Save time now.</p>
                    <p>You don't need an account to checkout.</p>
                    <a href="#" class="auth-button-hollow">Continue as Guest</a>
                    <p>Save time later.</p>
                    <p>Create an account for fast checkout.</p>
                    <a href="{{ route('register') }}" class="auth-button-hollow">Create Account</a>
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection