@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <nav class="col-3 pt-5 d-none d-md-block sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column pl-5">
          <h5>カテゴリー</h5>
          <li class="nav-item">
            <a class="{{ url()->current() == route('admin.dashboard') ? 'nav-link active' : 'nav-link'}} pl-0" href="/admin/dashboard">
              ネイキッド
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="col-9">

      <div style="padding:20px 0; padding-left:0px;">
        <form class="d-flex align-items-center" action="/search">
            <input type="text" name="keyword" value="" class="form-control mx-3" placeholder="検索したいフレーズを入力してください">
            <input type="submit" value="検索" class="btn btn-primary p-1">
        </form>
      </div>


        <div class="row d-flex justify-content-left">
            @foreach($product as $prd)
                <div class="col-4 mt-2 py-3">
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
</div>
@endsection