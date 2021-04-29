@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-7 border-right">
            <img src="{{ $product->image }}" class="w-100">
        </div>
        <div class="col-5">
            <div>
                <div class="d-flex justify-content-center">
                    <div class="font-weight-bold">
                        <span>価格: {{ $product->price }}円</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection