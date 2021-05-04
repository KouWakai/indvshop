@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-center">
        <div class="col-7 border-right">
            <img src="/storage/{{ $product->image }}" class="w-100">
        </div>
        <div class="col-5 pb-3">
            <div>
                <div class="d-flex justify-content-center font-weight-bold">
                        <span>価格： </span>
                        <h5>{{ $product->price }}円</h5>
                </div>
                <div class="d-flex justify-content-center pt-3">
                    <form action="/cart" method="post">
                    @csrf
                        <button name="id" value={{ $product->id }} class="btn btn-primary">カートに入れる</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection