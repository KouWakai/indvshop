import axios from 'axios';
import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom';
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
  } from "react-router-dom";
  import "/css/Home.css";

function Home() {

    const [home, setHome] = useState([]);
    const [products, setProducts] = useState([]);

    useEffect(() => {
        getHome()
        getProducts()
    },[])

    const getHome = async () => {
        const response = await axios.get('/api/home');
        setHome(response.data.home)
    }

    const getProducts = async () => {
        const response = await axios.get('/api/product');
        setProducts(response.data.product)
    }

    return (
            <div className="container">
                <div className="d-flex m-5 align-items-center banner">
                    <img src={home.imgOne} className="col-7 p-0 h-100 border rounded-left border-right-0" alt=""/>
                    <div className="d-flex align-items-center justify-content-center col-5 py-4 bg-white h-100 border rounded-right border-left-0">
                        <div>
                            <h5 className="text-center font-weight-bold">革製品のオーダーメイド<br></br>承っております</h5>
                            <Link to="/customorder"><h5 className="text-center font-weight-bold mt-3">お見積りはこちらから</h5></Link>
                        </div>
                    </div>
                </div>
                <div className="row p-4 justify-content-center">
                    <h3 className="text-center ">新着のアイテム</h3>
                </div>

                <div className="row p-4">
                    {products.map((product) => 
                        <div class="col-3 pb-4">
                            <Link to={`/product/${product.id}`}>
                                <img src={product.image} alt="" class="w-100 border rounded-top border-bottom-0"/>
                                </Link>
                            <Link to={`/product/${product.id}`}>
                                <div class="text-center border rounded-bottom bg-white text-dark border-top-0">
                                    <span>{product.caption}<br></br></span>
                                    <span>¥{product.price}</span>
                                </div>
                                </Link>
                        </div>
                        )
                    }
                </div>

                <div className="row d-flex justify-content-center py-2 mb-5">
                    <Link to="/product"><h4>もっと見る</h4></Link>
                </div>
            </div>
    );
}

export default Home;

if (document.getElementById('home')) {
    ReactDOM.render(<Home />, document.getElementById('home'));
}
