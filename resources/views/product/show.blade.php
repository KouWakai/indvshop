@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-center">
        <div class="d-flex justify-content-center col-7 my-5 border-right">
            <img src="/storage/{{ $product->image }}" class="col-8 my-3 w-100">
        </div>
        <div class="col-5 pb-3">
            <div class="font-weight-bold text-center">
                <div>
                    <h4 class="p-3">{{ $product->caption }}</h4>
                </div>
                <div class="d-flex justify-content-center">
                    <span>価格： </span>
                    <h5>{{ $product->price }}円</h5>
                </div>
                <div class="pt-3">
                    <form action="/cart" method="post">
                    @csrf
                        <input type="number" name="amount" value="1" size="10" style="width:45px;" required="">
                        <button name="id" value={{ $product->id }} class="btn btn-primary">カートに入れる</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection