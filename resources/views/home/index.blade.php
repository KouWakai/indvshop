@extends('layouts.app')

@section('content')
<div class="container">

    <hooper-slider class="px-5" topimg1={{ $first }} topimg2={{ $second }}></hooper-Slider>

    <div class="row p-5" style="height:350px">
        <img src="pexels-sourav-mishra-5541995.jpg" class="col-7 p-0 h-100" alt="">
        <span class="d-flex align-items-center justify-content-center col-5 p-0 border border-left-0 bg-white h-100">
            <h5 class="text-center font-weight-bold">写真からあなたのバイクのペーパークラフトを<br>作成いたします</h5>
        </span>
    </div>

</div>
@endsection