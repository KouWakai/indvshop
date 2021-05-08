@extends('layouts.dashboard')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">ダッシュボード</h1>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="card col-5 m-4">
        <div class="card-body">
            <h4 class="card-title">注文数</h4>
            <h4>: {{ $order }}件</h4>
        </div>
        </div>

        <div class="card col-5 m-4">
        <div class="card-body">
            <h4 class="card-title">顧客数</h4>
            <h4>: {{ $users }}人</h4>
        </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="card col-5 m-4">
        <div class="card-body">
            <h4 class="card-title">受注製作見積もり数</h4>
            <h4>: {{ $customorder }}件</h4>
        </div>
        </div>

        <div class="card col-5 m-4">
        <div class="card-body">
            <h4 class="card-title">お問い合わせ数</h4>
            <h4>: {{ $contact }}件</h4>
        </div>
        </div>
    </div>
@endsection