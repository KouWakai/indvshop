@extends('layouts.dashboard')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">受注製作見積もり</h1>
    </div>

                <h5>見積もりリスト</h5>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>id</th>
              <th>名前</th>
              <th>Eメールアドレス</th>
              <th>画像</th>
              <th>備考</th>
              <th>編集</th>
            </tr>
          </thead>
          <tbody>
            @foreach($customorder as $ctmord)
            <tr>
              <td>{{ $ctmord->id }}</td>
              <td>{{ $ctmord->username }}</td>
              <td>{{ $ctmord->email }}</td>
              <td data-toggle="modal" data-target="#ShowModal-{{ $ctmord->id }}"><img src="{{ $ctmord->image }}" width="25vw" height="25vh"　alt=""></td>
              <td data-toggle="modal" data-target="#ShowModal-{{ $ctmord->id }}"><span class="d-inline-block text-truncate" style="max-width: 150px;">{{ $ctmord->description }}</span></td>
              <td>
                <a href="">
                    <span data-feather="edit-2" style="width: 18px; height: 18px"></span>
                </a>
              </td>
            </tr>
            @include('partial.mordal.customorder')
            @endforeach
          </tbody>
        </table>
      </div>


@endsection