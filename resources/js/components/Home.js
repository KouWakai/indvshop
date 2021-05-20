import React from 'react';
import ReactDOM from 'react-dom';
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
  } from "react-router-dom";

function Example() {
    return (
            <div class="container">

                <div class="d-flex m-5 align-items-center" style="height:350px">
                    <img src="{{ $home->imgOne ?? ''}}" class="col-7 p-0 h-100 border rounded-left border-right-0" alt=""/>
                    <div class="d-flex align-items-center justify-content-center col-5 py-4 bg-white h-100 border rounded-right border-left-0">
                        <div>
                            <h5 class="text-center font-weight-bold">革製品のオーダーメイド<br></br>承っております</h5>
                            <a href="/customorder"><h5 class="text-center font-weight-bold mt-3">お見積りはこちらから</h5></a>
                        </div>
                    </div>
                </div>

                <div class="row p-4 justify-content-center">
                    <h3 class="text-center ">新着のアイテム</h3>
                </div>

                <div class="row p-4">
                    
                    <div class="col-3 pb-4">

                    </div>

                </div>

                <div class="row d-flex justify-content-center py-2 mb-5">
                    <a href="/product"><h4>もっと見る</h4></a>
                </div>

            </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
