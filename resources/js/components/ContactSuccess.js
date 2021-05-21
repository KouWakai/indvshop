import axios from 'axios';
import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom';
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
  } from "react-router-dom";

function ContactSuccess() {

    return (
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 my-4">
                    <div class="card mt-5">
                        <div class="card-header text-center">
                            <h5 class="p-2 m-0">お問い合わせの受付が完了しました</h5>
                        </div>
                        <div class="card-body">
                                <div class="text-center">
                                    <Link to="/home"><span>ホームに戻る</span></Link>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default ContactSuccess;

