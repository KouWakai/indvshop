@extends('layouts.app_admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>ログインしました。</div>
                    <div>管理画面を自動で読み込みます。3秒経っても読み込まない場合は下のリンクをクリックしてください</div>
                    <a href="dashboard">管理画面へ</href>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
