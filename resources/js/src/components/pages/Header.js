import React, { useEffect } from "react";
import ReactDOM from 'react-dom';
import {
    useHistory,
    Link
  } from "react-router-dom";
  import "/css/Header.css";
  import { LogoutAction } from "../redux/actions/AuthActions";
  import { useDispatch, useSelector } from "react-redux";

function Header() {

        const history = useHistory();
        const selectProduct = () => {
            history.push(`/product`);
            };

        const selectHome = () => {
            history.push(`/home`);
            };

        const selectCustomorder = () => {
            history.push(`/customorder`);
            };

        const selectContact = () => {
            history.push(`/contact`);
            };

        const selectCart = () => {
            history.push(`/cart`);
        }

        const dispatch = useDispatch();
        const authResponse = useSelector((state) => state.userAuth.authResponse);
        const logOut = () => {
          dispatch(LogoutAction(history));
        };
        const login = () => {
          history.push("/user/login");
        };
        const Register = () => {
            history.push("/user/Register");
          };
        const token = localStorage.getItem("user-token");
        useEffect(() => {
          if (authResponse !== "" && authResponse.success === true) {
            alert(authResponse.message);
            localStorage.removeItem("user-token");
          }
          return () => {};
        }, [authResponse]);

        return (
            <div>
            <div>
            <nav className="navbar navbar-expand-md navbar-light bg-white border-bottom">
                <div className="container">
                    <Link to="/home" className="navbar-brand">
                        LeatherCraft
                    </Link>

                    <div className="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul className="navbar-nav mr-auto">

                        </ul>

                        <ul className="navbar-nav ml-auto">
                                {token !== null && token !== "" ? (
                                    <li class="nav-item">
                                        <span class="nav-link headerlink" onClick={logOut}>ログアウト</span>
                                    </li>
                                ):(
                                    <div class="d-flex">
                                        <li class="nav-item">
                                            <span class="nav-link headerlink" onClick={login}>ログイン</span>
                                        </li>

                                        <li class="nav-item">
                                            <span class="nav-link headerlink" onClick={Register}>会員登録</span>
                                        </li>
                                    </div>
                                )}
                            <li className="nav-item">
                                <div className="headerlink nav-link" onClick={(() => { return selectCart })()}>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" className="bi bi-cart pb-1" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
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
                                    <h5 className="m-0 p-2 px-4 text-white">ホーム</h5>
                                </div>
                            </li>
                            <li className="nav-item">
                            <div className="headerlink" onClick={(() => { return selectProduct })()}>
                                <h5 className="m-0 p-2 px-4 text-white">商品一覧</h5>
                                </div>
                            </li>
                            <li className="nav-item">
                            <div className="headerlink" onClick={(() => { return selectCustomorder })()}>
                                <h5 className="m-0 p-2 px-4 text-white">受注製作</h5>
                                </div>
                            </li>
                            <li className="nav-item">
                            <div className="headerlink" onClick={(() => { return selectContact })()}>
                                <h5 className="m-0 p-2 px-4 text-white">お問い合わせ</h5>
                                </div>
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
