import React from 'react';
import ReactDOM from 'react-dom';
import {
    BrowserRouter as Router,
    Switch,
    Route,
    useHistory
  } from "react-router-dom";
  import "/css/Header.css";

function Header() {

    const history = useHistory();
    const selectProduct = () => {
        history.push(`/product`);
        };

    const selectHome = () => {
        history.push(`/home`);
        };

    return (
        <div>
        <div>
        <nav className="navbar navbar-expand-md navbar-light bg-white border-bottom">
            <div className="container">
                <a className="navbar-brand" href="">
                    LeatherCraft
                </a>
                <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="">
                    <span className="navbar-toggler-icon"></span>
                </button>

                <div className="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul className="navbar-nav mr-auto">

                    </ul>

               
                    <ul className="navbar-nav ml-auto">
                     
                                <li className="nav-item">
                                </li>
                          
                                <li className="nav-item">
                                </li>
                            

                            <li className="nav-item">
                                <a className="nav-link" href="/cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" className="bi bi-cart pb-1" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                      </svg>
                                </a>
                            </li>
                        
                            <li className="nav-item dropdown">
                                <a id="navbarDropdown" className="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                </a>

                                <div className="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a className="dropdown-item" href="{{ route('logout') }}"
                                       onClick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        ログアウト
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" className="d-none">
                                        
                                    </form>
                                </div>
                            </li>
                            <li className="nav-item">
                                <a className="nav-link" href="/cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" className="bi bi-cart pb-1" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                      </svg>
                                </a>
                            </li>
                        
                    </ul>
                </div>

                
            </div>
        </nav>
    </div>
        <div className="bg-dark">
        <div className="container">
            <div className="row">
                <nav>
                    <ul className="nav d-flex">
                        <li className="nav-item">
                            <div className="headerlink" onClick={(() => { return selectHome })()}>
                                <h5 className="m-0 p-2 px-4 text-white">ホーム</h5></div>
                        </li>
                        <li className="nav-item">
                        <div className="headerlink" onClick={(() => { return selectProduct })()}>
                            <h5 className="m-0 p-2 px-4 text-white">商品一覧</h5>
                            </div>
                        </li>
                        <li className="nav-item">
                            <a href="/customorder"><h5 className="m-0 p-2 px-4 text-white">受注制作</h5></a>
                        </li>
                        <li className="nav-item">
                            <a href="/contact"><h5 className="m-0 p-2 px-4 text-white">お問い合わせ</h5></a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
        </div>
        </div>
    );
}

export default Header;

if (document.getElementById('header')) {
    ReactDOM.render(<Header />, document.getElementById('header'));
}
