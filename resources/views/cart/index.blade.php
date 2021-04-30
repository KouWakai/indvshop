@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pt-3">
        <div class="col-9 d-flex justify-content-between border-bottom bg-white text-center">
            <div class="col-2">商品画像</div>
            <div class="col-2">商品名</div>
            <div class="col-2">数量</div>
            <div class="col-2">価格</div>
            <div class="col-1"> </div>
        </div>
        <div class="col-3">
        </div>
    </div>
        <div class="row">
            @if(Cart::content()->isEmpty())
                <div class="col-9 d-flex justify-content-center border bg-white">
                    <h4 class="col-9 p-4 text-center">カートは空です</h4>
                </div>

            @else
            

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
            @endif
        </div>
</div>
@endsection