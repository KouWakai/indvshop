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
              <td>
                <div data-toggle="modal" data-target="#ShowUserModal-{{ $ord->id }}" value="{{ $ord }}">
                    {{ $ord->user->name ?? $ord->username}}
                    <span data-feather="eye" style="width: 18px; height: 18px"></span>
                </div></td>
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
                <div data-toggle="modal" data-target="#ShowPrdModal-{{ $ord->id }}" value="{{ $ord }}">
                    <span data-feather="eye" style="width: 18px; height: 18px"></span>
                </div>
              </td>
            </tr>

            @include('partial.mordal.order')

            @endforeach
          </tbody>
        </table>
      </div>




@endsection