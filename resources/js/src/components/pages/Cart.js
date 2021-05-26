import React from 'react';
import ReactDOM from 'react-dom';

function Cart() {
    return (
<div class="container">
    <div class="row pt-3">
        <div class="col-12 d-flex justify-content-between bg-white text-center border rounded-top border-bottom-0 align-items-center py-2">
            <span class="col-2">商品画像</span>
            <span class="col-2">商品名</span>
            <span class="col-2">数量</span>
            <span class="col-2">価格</span>
            <form class="col-2" action="/cart/all" method="post">
                <button class="btn btn-danger btn-sm" name="empty" value="1">カートを空にする</button>
            </form>
        </div>
        <div class="col-3">
        </div>
    </div>
        <div class="row">
                <div class="col-12 d-flex justify-content-center border rounded-bottom bg-white">
                    <h4 class="col-9 mb-0 p-4 text-center">カートは空です</h4>
                </div>

            <div class="col-12 align-items-center d-flex justify-content-between text-center border rounded-bottom bg-white">
                <img src="" class="col-2 p-3"></img>
                <span class="col-2"></span>
                <span class="col-2"></span>
                <span class="col-2"></span>
                <form>
                    <button class="btn btn-outline-danger">削除</button>
                </form>
            </div>


            <div class="col-4 pt-3 ml-auto">
                <div class="m-0 py-3 d-flex align-items-center border-top border-bottom">
                    <h4 class="m-0 text-left pl-4">合計:</h4>
                    <h5 class="m-0 px-4"></h5>
                </div>
                <form action="/cart/checkout" method="post">
                    <button class="btn btn-success btn-lg btn-block my-3">会計に進む</button>
                </form>
            </div>



        </div>
</div>
    );
}

export default Cart;

