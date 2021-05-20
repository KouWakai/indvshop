import React from 'react';
import ReactDOM from 'react-dom';
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
  } from "react-router-dom";

function Footer() {
    return (
            <div className="text-white bg-dark">
                <div className="container">
                    <div className="row pt-2">
                        <div className="col-md-3 footer-about wow fadeInUp animated">
                            <h3>会社概要</h3>
                            <p>
                                革製品の製造販売、受注製作を行っております
                            </p>
                            <p>© Company Inc.</p>
                        </div>
                        <div className="col-md-4 offset-md-1 footer-contact wow fadeInDown animated">
                            <h3>お問い合わせ先</h3>
                            <p><i className="fas fa-map-marker-alt"></i>東京都渋谷区</p>
                            <p><i className="fas fa-phone"></i> 電話番号: (0957) 000 000</p>
                            <p><i className="fas fa-envelope"></i> Eメール: <a href="mailto:hello@domain.com">leather@craft.com</a></p>
                        </div>
                        <div className="col-md-4 footer-links wow fadeInUp animated">
                            <div className="row">
                                <div className="col">
                                    <h3>リンク</h3>
                                </div>
                            </div>
                            <div className="row">
                                <div className="col-md-6">
                                    <p><a className="scroll-link" href="/home">ホーム</a></p>
                                    <p><a href="/product">商品一覧</a></p>
                                </div>
                                <div className="col-md-6">
                                    <p><a href="/customorder">受注製作</a></p>
                                    <p><a href="/contact">お問い合わせ</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    );
}

export default Footer;

if (document.getElementById('footer')) {
    ReactDOM.render(<Footer />, document.getElementById('footer'));
}
