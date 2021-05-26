import React from 'react';
import ReactDOM from 'react-dom';
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
  } from "react-router-dom";

function Product() {
    return (
        <div class="container">
        <div class="row">
          <nav class="col-3 pt-5 d-none d-md-block sidebar">
            <div class="sidebar-sticky">
              <ul class="nav flex-column pl-5">
                <h5>カテゴリー</h5>
                <li class="nav-item">
                    <form class="" action="/category">
                    <div class="p-2">
                        <button type="submit" name="keyword" class="btn btn-outline-secondary btn-sm" value="革財布">
                          革財布
                        </button>
                    </div>
                    <div class="p-2">
                        <button type="submit" name="keyword" class="btn btn-outline-secondary btn-sm" value="バッグ">
                          バッグ
                        </button>
                    </div>
                    <div class="p-2">
                        <button type="submit" name="keyword" class="btn btn-outline-secondary btn-sm" value="ベルト">
                          ベルト
                        </button>
                    </div>
                    <div class="p-2">
                        <button type="submit" name="keyword" class="btn btn-outline-secondary btn-sm" value="手帳・小物">
                          手帳・小物
                        </button>
                    </div>
                    </form>
                </li>
              </ul>
            </div>
          </nav>
          <div class="col-9">
      
            <div>
              <form class="d-flex align-items-center" action="/search">
                  <input type="text" name="keyword" class="form-control mx-3" placeholder="検索したいフレーズを入力してください"></input>
                  <input type="submit" value="検索" class="btn btn-primary p-1"></input>
              </form>
            </div>
      
      
              <div class="row d-flex justify-content-left">
                      <div class="col-4 mt-2 py-3">
                          <a href="/product/{{ $prd->id }}">
                              <img src="{{ $prd->image ?? ''}}" alt="" class="w-100 border rounded-top border-bottom-0"></img>
                          </a>
                          <a href="/product/{{ $prd->id }}">
                              <div class="text-center border rounded-bottom bg-white text-dark border-top-0">
                              </div>
                          </a>
                      </div>
              </div>
      
                <div class="row">
                  <div class="col-12 d-flex justify-content-center">
                  </div>
                </div>
          </div>
      </div>
      </div>
    );
}

export default Product;

if (document.getElementById('product')) {
    ReactDOM.render(<Product />, document.getElementById('product'));
}
