@extends('layouts.dashboard')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">デザイン変更</h1>
    </div>
    <form action="/admin/config/update" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')
        <div class="row d-flex justify-content-center">
            <div class="col-8 p-4">
                <h4>スライド</h4>
                <div class="py-3">スライド画像1</div>
                <img src="{{ $home->slideOne }}" class="w-100" alt="">
                <input type="file", class="form-control-file py-3" id="slideOne" name="slideOne">

                <div class="py-3">スライド画像2</div>
                <img src="{{ $home->slideTwo }}" class="w-100" alt="">
                <input type="file", class="form-control-file py-3" id="slideTwo" name="slideTwo">
            </div>
            <div class="col-8 p-4">
                <h4>バナー</h4>
                <div class="py-3">バナー画像</div>
                <img src="{{ $home->imgOne }}" class="w-100" alt="">
                <input type="file", class="form-control-file py-3" id="imgOne" name="imgOne">
            </div>
            <div class="col-8 p-4 mb-5 text-center">
                <button type="submit" class="btn btn-primary" name="update" value="1">更新</button>
            </div>
        </div>
    </form>
@endsection