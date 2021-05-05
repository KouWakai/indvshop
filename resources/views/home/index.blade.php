@extends('layouts.app')

@section('header')
    @parent
    <div class="py-3 d-flex justify-content-center bg-white">
        <hooper-slider class="m-4 border rounded" topimg1={{ $imagePath[0] ?? ''}} topimg2={{ $imagePath[1] ?? ''}} style="width:1200px"></hooper-Slider>

    </div>
@endsection

@section('content')
<div class="container">


    <div class="d-flex m-5" style="height:350px">
        <img src="{{ $bannerImg ?? ''}}" class="col-7 p-0 h-100 border rounded-left border-right-0" alt="">
        <span class="d-flex align-items-center justify-content-center col-5 p-0 bg-white h-100 border rounded-right border-letf-0">
            <h5 class="text-center font-weight-bold">写真からあなたのバイクのペーパークラフトを<br>作成いたします</h5>
        </span>
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

</div>
@endsection