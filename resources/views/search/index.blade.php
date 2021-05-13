@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <nav class="col-3 pt-5 d-none d-md-block sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column pl-5">
          <h5>カテゴリー</h5>
          <li class="nav-item">
              <form class="" action="/category">
              <div class="p-2">
                  <button type="submit" name="keyword" class="btn btn-outline-secondary btn-sm" value="革財布">
                    革財布
                  </button>
              </div>
              <div class="p-2">
                  <button type="submit" name="keyword" class="btn btn-outline-secondary btn-sm" value="バッグ">
                    バッグ
                  </button>
              </div>
              <div class="p-2">
                  <button type="submit" name="keyword" class="btn btn-outline-secondary btn-sm" value="ベルト">
                    ベルト
                  </button>
              </div>
              <div class="p-2">
                  <button type="submit" name="keyword" class="btn btn-outline-secondary btn-sm" value="手帳・小物">
                    手帳・小物
                  </button>
              </div>
              </form>
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
            @foreach($result as $rlt)
                <div class="col-4 mt-2 py-3">
                    <a href="/product/{{ $rlt->id }}">
                        <img src="{{ $rlt->image ?? ''}}" alt="" class="w-100 border rounded-top border-bottom-0">
                    </a>
                    <a href="/product/{{ $rlt->id }}">
                        <div class="text-center border rounded-bottom bg-white text-dark border-top-0">
                        <span>{{ $rlt->caption ?? ''}}<br></span>
                        <span>¥{{ $rlt->price ?? ''}}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

          <div class="row">
            <div class="col-12 d-flex justify-content-center">
              {{ $result->links() }}
            </div>
          </div>
    </div>
</div>
@endsection