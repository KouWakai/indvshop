@extends('layouts.app')

@section('content')


@guest
<div class="container">
      <div class="row py-5">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">カート内の商品</span>
        <span class="badge badge-secondary badge-pill">{{ Cart::count() }}</span>
      </h4>
      <ul class="list-group mb-3">

      @foreach(Cart::content() as $row)
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">{{ $row->name }}</h6>
            <small class="text-muted"></small>
          </div>
          <span class="text-muted">{{ $row->price }}円</span>
        </li>
      @endforeach

        <li class="list-group-item d-flex justify-content-between">
          <span>合計 (税込み)</span>
          <strong>{{ Cart::total() }}円</strong>
        </li>
      </ul>

      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">お客様情報</h4>
      <form action="/order" method="post" class="needs-validation">
      @csrf
        <div class="col-md-6 mb-3 pl-0">
          <label class="font-weight-bold" for="username">お名前</label>
          <div class="input-group">
              <input id="username" type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="お名前" required="">
              @error('username')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          </div>
        </div>

        <div class="col-md-6 mb-3 pl-0">
          <label class="font-weight-bold" for="email">Eメールアドレス</label>
          <div>
              <input type="text" name="email" class="form-control" placeholder="Eメールアドレス" required="">
          </div>
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="col-md-6 mb-3 pl-0">
          <label class="font-weight-bold" for="prefecture">都道府県</label>
            <div>
              <input type="text" name="prefecture" class="form-control" placeholder="都道府県" required="">
            </div>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

                <div class="col-md-6 mb-3 pl-0">
          <label class="font-weight-bold" for="address1">市区町村</label>
            <div>
              <input type="text" name="address1" class="form-control" placeholder="市区町村" required="">
            </div>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>
                <div class="col-md-6 mb-3 pl-0">
          <label class="font-weight-bold" for="address2">町名</label>
            <div>
              <input type="text" name="address2" class="form-control" placeholder="町名" required="">
            </div>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>
                <div class="col-md-6 mb-3 pl-0">
          <label class="font-weight-bold" for="address3">番地・部屋番号</label>
            <div>
              <input type="text" name="address3" class="form-control" placeholder="番地・部屋番号" required="">
            </div>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="col-md-6 mb-3 pl-0">
          <label class="font-weight-bold" for="phone">電話番号</label>
          <div>
              <input type="text" name="phone" class="form-control" placeholder="電話番号" required="">
          </div>
        </div>


        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">請求先住所はお届け先住所と同じ</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">お支払い方法</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentmethod" value="クレジット" type="radio" class="custom-control-input" onclick="checkpayment('block');" checked="" required="">
            <label class="custom-control-label" for="credit">クレジットカード</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="bank" name="paymentmethod" value="銀行" type="radio" class="custom-control-input" onclick="checkpayment('none');" required="">
            <label class="custom-control-label" for="bank">銀行振込</label>
          </div>
        </div>

        <div id="PaymentMethodCredit">
            <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-name">クレジットカード名義</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required="">
              <small class="text-muted">性・名をアルファベットで</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-number">クレジットカード番号</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required="">
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">有効期限</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="cc-cvv">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>
        </div>

          <hr class="mb-4">
              <div class="form-group row mb-0 text-center">
                  <div class="col-md-6 offset-md-3">
                      <button type="submit" class="btn btn-primary">
                          注文を確定する
                      </button>
                  </div>
              </div>
      </form>
    </div>
  </div>
</div>


@else
<div class="container">
      <div class="row py-5">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">カート内の商品</span>
        <span class="badge badge-secondary badge-pill">{{ Cart::count() }}</span>
      </h4>
      <ul class="list-group mb-3">

      @foreach(Cart::content() as $row)
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">{{ $row->name }}</h6>
            <small class="text-muted"></small>
          </div>
          <span class="text-muted">{{ $row->price }}円</span>
        </li>
      @endforeach

        <li class="list-group-item d-flex justify-content-between">
          <span>合計 (税込み)</span>
          <strong>{{ Cart::total() }}円</strong>
        </li>
      </ul>

      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">お客様情報</h4>
      <form action="/order" method="post" class="needs-validation">
      @csrf

        <div class="mb-3">
          <label class="font-weight-bold" for="username">お名前</label>
          <div class="input-group">
            <span class="offset-1">{{ $user->name }}</span>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label class="font-weight-bold" for="email">Eメールアドレス</label>
          <div>
            <span class="offset-1">{{ $user->email }}</span>
          </div>
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label class="font-weight-bold" for="address">住所</label>
            <div>
              <span class="offset-1">{{ $user->address1 }} {{ $user->address2 }} {{ $user->address3 }}</span>
            </div>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label class="font-weight-bold" for="phone">電話番号</label>
          <div>
            <span class="offset-1">{{ $user->phone }}</span>
          </div>
        </div>


        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">請求先住所はお届け先住所と同じ</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">お支払い方法</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentmethod" value="クレジット" type="radio" class="custom-control-input" onclick="checkpayment('block');" checked="" required="">
            <label class="custom-control-label" for="credit">クレジットカード</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="bank" name="paymentmethod" value="銀行" type="radio" class="custom-control-input" onclick="checkpayment('none');" required="">
            <label class="custom-control-label" for="bank">銀行振込</label>
          </div>
        </div>

          <div id="PaymentMethodCredit">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">クレジットカード名義</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                <small class="text-muted">性・名をアルファベットで</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">クレジットカード番号</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">有効期限</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-cvv">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
          </div>

          <hr class="mb-4">
              <div class="form-group row mb-0 text-center">
                  <div class="col-md-6 offset-md-3">
                      <button type="submit" class="btn btn-primary">
                          注文を確定する
                      </button>
                  </div>
              </div>
      </form>
    </div>
  </div>
</div>
@endguest

<script>
  function checkpayment(disp)
  {
      document.getElementById('PaymentMethodCredit').style.display = disp;
  }
</script>


@endsection
