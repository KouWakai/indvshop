@extends('layouts.dashboard')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">注文</h1>
    </div>

                <h5>注文リスト</h5>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>注文番号(id)</th>
              <th>注文者名</th>
              <th>支払い方法</th>
              <th>支払い状況</th>
              <th>注文合計金額</th>
              <th>注文商品</th>
            </tr>
          </thead>
          <tbody>
            @foreach($order as $ord)
            <tr>
              <td>{{ $ord->id }}</td>
              <td>{{ $ord->user->name }}</td>
              <td>{{ $ord->payment }}</td>
              <td>
              @if($ord->paid == 0)
              未
              @else
              済
              @endif
              </td>
              <td>{{ $ord->total }}</td>
              <td>
                <div data-toggle="modal" data-target="#ShowModal-{{ $ord->id }}" value="{{ $ord }}">
                    <span data-feather="eye" style="width: 18px; height: 18px"></span>
                </div>
              </td>
            </tr>

            <div class="modal fade" id="ShowModal-{{ $ord->id }}" tabindex="-1" role="dialog" aria-labelledby="ShowModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ShowModalLabel">注文詳細</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <?php
                        $order = App\Models\Order::with('product')->find($ord->id);
                        ?>
                        @foreach ($order->product as $ord)
                            <div class="row">
                                <label class="col-md-4 font-weight-bold">商品{{ $loop->iteration }}</label>
                            </div>
                            <div class="row">
                                <span class="offset-1">{{ $ord->caption }}</span>
                            </div>
                            <div class="row">
                                <label class="col-md-4 font-weight-bold">数量</label>
                            </div>
                            <div class="row">
                                <span class="offset-1">{{ $ord->pivot->quantity }}</span>
                            </div>
                            <div class="row">
                                <label class="col-md-4 font-weight-bold">単価</label>
                            </div>
                            <div class="row">
                                <span class="offset-1">{{ $ord->price }}円</span>
                            </div>
                        @endforeach


                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    </div>
                </div>
            </div>
            </div>

            @endforeach
          </tbody>
        </table>
      </div>




@endsection