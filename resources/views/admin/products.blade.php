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
        <div class="col-2 pb-4" data-toggle="modal" data-target="#EdiPrdModal-{{ $prd->id }}">
            <img src="/storage/{{ $prd->image ?? ''}}" alt="" class="w-100">
            <div class="text-center border rounded bg-white text-dark">
            <span>{{ $prd->caption ?? ''}}<br></span>
            <span>¥{{ $prd->price ?? ''}}</span>
            </div>
            <input type="hidden" name="id" value={{ $prd->id }}>
        </div>

        <div class="modal fade" id="EdiPrdModal-{{ $prd->id }}" tabindex="-1" role="dialog" aria-labelledby="EdiPrdModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="EdiPrdModalLabel">商品を編集する</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <div class="px-5">
                <form action="/admin/products/{{ $prd->id }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')

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

                    <div class="form-group row">
                        <label for="category" class="col-md-4 col-form-label">カテゴリー</label>

                            <input  id="category"
                                    type="text"
                                    class="form-control @error('category') is-invalid @enderror"
                                    name="category"
                                    value="{{ old('name') }}"
                                    autocomplete="name" autofocus>

                            @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="row pb-3">
                    <label for="image" class="col-md-4 col-form-label">商品画像</label>

                    <input type="file", class="form-control-file" id="image" name="image">

                    @error('image')
                            <strong>{{ $message }}</strong>
                    @enderror

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-outline-danger mr-auto" name="delete" value="1">商品を削除する</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                        <button class="btn btn-primary" name="update" value="1">更新</button>
                    </div>
                </form>
            </div>
       </div>
    </div>
</div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $product->links() }}
        </div>
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

            <div class="form-group row">
                        <label for="category" class="col-md-4 col-form-label">カテゴリー</label>

                            <input  id="category"
                                    type="text"
                                    class="form-control @error('category') is-invalid @enderror"
                                    name="category"
                                    value="{{ old('name') }}"
                                    autocomplete="name" autofocus>

                            @error('category')
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