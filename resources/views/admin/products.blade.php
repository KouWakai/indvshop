@extends('layouts.dashboard')

@section('header')
    @parent
    <link href="{{ asset('css/button.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">商品管理</h1>
    </div>

     <h5 class="pl-3">商品リスト</h5>
    <div class="row p-3">
        @foreach($product as $prd)
        <div class="col-2 pb-4">
            <a href="/product/{{ $prd->id }}">
                <img src="/storage/{{ $prd->image ?? ''}}" alt="" class="w-100">
            </a>
            <a href="/product/{{ $prd->id }}">
                <div class="text-center border rounded bg-white text-dark">
                <span>{{ $prd->caption ?? ''}}<br></span>
                <span>¥{{ $prd->price ?? ''}}</span>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <div id="AddPrdBtn">
        <button type="button" class="btn btn-primary btn-floating button" data-toggle="modal" data-target="#AddPrdModal">
        <h3 class="m-0">商品を追加する</h3>
    </button>
    </div>

    <div class="modal fade" id="AddPrdModal" tabindex="-1" role="dialog" aria-labelledby="AddPrdModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AddPrdModalLabel">商品を追加する</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="/admin/products" enctype="multipart/form-data" method="post">
            @csrf

            <div class="form-group row">
                <label for="caption" class="col-md-4 col-form-label">商品名</label>

                    <input  id="caption"
                            type="text"
                            class="form-control @error('caption') is-invalid @enderror"
                            name="caption"
                            value="{{ old('name') }}"
                            autocomplete="name" autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group row">
                <label for="price" class="col-md-4 col-form-label">価格</label>

                    <input  id="price"
                            type="number"
                            class="form-control @error('price') is-invalid @enderror"
                            name="price"
                            value="{{ old('name') }}"
                            autocomplete="name" autofocus>

                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="row">
            <label for="image" class="col-md-4 col-form-label">商品画像</label>

            <input type="file", class="form-control-file" id="image" name="image">

            @error('image')
                    <strong>{{ $message }}</strong>
            @enderror

            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
            <button type="submit" class="btn btn-primary">追加</button>
        </div>
        </form>
    </div>
  </div>
</div>

@endsection