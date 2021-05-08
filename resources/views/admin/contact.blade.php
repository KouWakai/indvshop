@extends('layouts.dashboard')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">お問い合わせ</h1>
    </div>

                <h5>お問い合わせリスト</h5>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>id</th>
              <th>お名前</th>
              <th>Eメールアドレス</th>
              <th>備考</th>
              <th>編集</th>
            </tr>
          </thead>
          <tbody>
            @foreach($contact as $cnt)
            <tr>
              <td>{{ $cnt->id }}</td>
              <td>{{ $cnt->username }}</td>
              <td>{{ $cnt->email }}</td>
              <td data-toggle="modal" data-target="#ShowModal-{{ $cnt->id }}"><span class="d-inline-block text-truncate" style="max-width: 150px;">{{ $cnt->description }}</span></td>
              <td>
                <a href="">
                    <span data-feather="edit-2" style="width: 18px; height: 18px"></span>
                </a>
              </td>
            </tr>
            @include('partial.mordal.contact')
            @endforeach
          </tbody>
        </table>
      </div>
@endsection