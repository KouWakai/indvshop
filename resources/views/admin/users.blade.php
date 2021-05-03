@extends('layouts.dashboard')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">顧客管理</h1>
    </div>

            <h5>顧客リスト</h5>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>id</th>
              <th>名前</th>
              <th>Eメールアドレス</th>
              <th>最終ログイン</th>
              <th>編集</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->timestamp }}</td>
              <td></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection