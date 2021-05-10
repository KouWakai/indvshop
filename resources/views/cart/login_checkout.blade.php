@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row m-0 pt-5">
        <div class="col-6 mt-5 border-right">
            <div class="d-flex justify-content-center">
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <h3>会員登録されているお客様</h3>
                <div class="p-2">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="p-2">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="p-2">
                    <button type="submit" class="btn-sm btn-primary">ログイン</button>
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> ログイン情報を記録する
                    </label>
                </div>

                <a href="{{ route('password.request') }}" class="p-2">
                    <span class="py-2">パスワードを忘れた場合</span>
                </a>

            </form>
            </div>
        </div>

        <div class="col-6 mt-5">
            <div class="d-flex justify-content-center">
                    <div>
                    <h3>初めてお買い物されるお客様</h3>
                    <div class="p-3">
                        <p>会員登録せずに注文できます</p>
                        <a href="/cart/checkout/guest" class="btn-sm btn-primary">ゲストとして注文する</a>
                    </div>
                    <div class="p-3">
                        <p>会員登録することで次回の注文をスムーズに行えます</p>
                        <a href="{{ route('register') }}" class="btn-sm btn-primary">会員登録する</a>
                    </div>

                    </div>

            </div>
        </div>
    </div>
</div>
@endsection