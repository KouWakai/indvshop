@extends('layouts.dashboard')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">お問い合わせ</h1>
    </div>

                <h5>顧客リスト</h5>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>id</th>
              <th>画像</th>
              <th>備考</th>
              <th>編集</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <a href="">
                    <span data-feather="edit-2" style="width: 18px; height: 18px"></span>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
@endsection