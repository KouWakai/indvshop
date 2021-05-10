@extends('layouts.app')

@section('header')
    @parent
    <div class="py-3 d-flex justify-content-center bg-white">
        <hooper-slider class="m-4 border rounded" topimg1=/storage/{{ $home->slideOne ?? ''}} topimg2=/storage/{{ $home->slideTwo ?? ''}} style="width:1200px"></hooper-Slider>

    </div>
@endsection

@section('content')
<div class="container">


    <div class="d-flex m-5 align-items-center" style="height:350px">
        <img src="/storage/{{ $home->imgOne ?? ''}}" class="col-7 p-0 h-100 border rounded-left border-right-0" alt="">
        <div class="d-flex align-items-center justify-content-center col-5 py-4 bg-white h-100 border rounded-right border-letf-0">
            <div>
                <h5 class="text-center font-weight-bold">写真からあなたのバイクのペーパークラフトを<br>作成いたします</h5>
                <a href="/customorder"><h5 class="text-center font-weight-bold mt-3">お見積りはこちらから</h5></a>
            </div>
        </div>

    </div>

    <div class="row p-4 justify-content-center">
        <h3 class="text-center ">新着のアイテム</h3>
    </div>

    <div class="row p-4">
        @foreach($product as $prd)
        <div class="col-3 pb-4">
            <a href="/product/{{ $prd->id }}">
                <img src="/storage/{{ $prd->image ?? ''}}" alt="" class="w-100 border rounded-top border-bottom-0">
            </a>
            <a href="/product/{{ $prd->id }}">
                <div class="text-center border rounded-bottom bg-white text-dark border-top-0">
                <span>{{ $prd->caption ?? ''}}<br></span>
                <span>¥{{ $prd->price ?? ''}}</span>
                </div>
            </a>
        </div>
        @endforeach
    </div>

    <div class="row d-flex justify-content-center py-2 mb-5">
        <a href="/product"><h4>もっと見る</h4></a>
    </div>

</div>
@endsection