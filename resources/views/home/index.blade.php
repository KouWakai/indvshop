@extends('layouts.app')

@section('content')
<div class="container">

    <hooper-slider class="px-5" topimg1={{ $imagePath[0] ?? ''}} topimg2={{ $imagePath[1] ?? ''}}></hooper-Slider>

    <div class="d-flex p-5" style="height:350px">
        <img src="{{ $bannerImg ?? ''}}" class="col-7 p-0 h-100" alt="">
        <span class="d-flex align-items-center justify-content-center col-5 p-0 border border-left-0 bg-white h-100">
            <h5 class="text-center font-weight-bold">写真からあなたのバイクのペーパークラフトを<br>作成いたします</h5>
        </span>
    </div>

    <div class="row p-4 justify-content-center">
        <h3 class="text-center ">新着のアイテム</h3>
    </div>

    <div class="row p-4">
        @foreach($product as $prd)
        <div class="col-3 pb-4">
            <img src={{ $prd->image ?? ''}} alt="" class="w-100">
            <div class="text-center border rounded bg-white">
                <span>{{ $prd->caption ?? ''}}<br></span>
                <span>¥{{ $prd->price ?? ''}}</span>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection