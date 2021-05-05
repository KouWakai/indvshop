@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pt-3">
        <div class="col-12 d-flex justify-content-between bg-white text-center border rounded-top border-bottom-0 align-items-center py-2">
            <span class="col-2">商品画像</span>
            <span class="col-2">商品名</span>
            <span class="col-2">数量</span>
            <span class="col-2">価格</span>
            <form class="col-2" action="/cart/all" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" name="empty" value="1">カートを空にする</button>
            </form>
        </div>
        <div class="col-3">
        </div>　
    </div>
        <div class="row">
            @if(Cart::content()->isEmpty())
                <div class="col-12 d-flex justify-content-center border rounded-bottom bg-white">
                    <h4 class="col-9 mb-0 p-4 text-center">カートは空です</h4>
                </div>

            @else

            @foreach(Cart::content() as $row)
            <div class="col-12 align-items-center d-flex justify-content-between text-center border rounded-bottom bg-white">
                <img src="/storage/{{ $row->options->image }}" class="col-2 p-3">
                <span class="col-2">{{ $row->name }}</span>
                <span class="col-2">1</span>
                <span class="col-2">{{ $row->price }}</span>
                <form class="col-2" action="/cart/{{ $row->rowId }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger">削除</button>
                </form>
            </div>

            @endforeach

            <div class="col-4 pt-3 ml-auto">
                <div class="m-0 py-3 d-flex align-items-center border-top border-bottom">
                    <h4 class="m-0 text-left pl-4">合計:</h4>
                    <h5 class="m-0 px-4">{{ Cart::total() }}円</h5>
                </div>
                <form action="/cart/checkout" method="post">
                    @csrf
                    <button class="btn btn-success btn-lg btn-block my-3">会計に進む</button>
                </form>
            </div>

            @endif


        </div>
</div>
@endsection