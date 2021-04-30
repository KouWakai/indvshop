@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row p-3">
        <div class="col-9 d-flex justify-content-between border-bottom bg-white text-center">
            <div class="col-2">商品画像</div>
            <div class="col-2">商品名</div>
            <div class="col-2">数量</div>
            <div class="col-2">価格</div>
            <div class="col-1"> </div>
        </div>
        <div>
            @foreach(Cart::content() as $row)
            <div class="col-9 align-items-center d-flex justify-content-between text-center border-bottom bg-white">
                <img src={{ $row->options->image }} class="col-2 p-3">
                <div class="col-2">{{ $row->name }}</div>
                <div class="col-2">1</div>
                <div class="col-2">{{ $row->price }}</div>
                <form action="/cart/{{ $row->rowId }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger">削除</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection