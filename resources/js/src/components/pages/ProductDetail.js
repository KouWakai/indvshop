import axios from 'axios';
import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom';
import {
    BrowserRouter as Router,
    useHistory
  } from "react-router-dom";

function ProductDetail(props) {
    const [product, setProduct] = useState([]);
    const history = useHistory();

    useEffect(() => {
        getProduct()
    },[])

    const getProduct = async () => {
        const response = await axios.get(`/api/product/${props.match.params.id}`);
        setProduct(response.data.product)
    }
    console.log({product});

    return (
        <div class="container">
            <div class="row align-items-center">
                <div class="d-flex justify-content-center col-7 my-5 border-right">
                    <img src={product.image} class="col-8 my-3 w-100"></img>
                </div>
                <div class="col-5 pb-3">
                    <div class="font-weight-bold text-center">
                        <div>
                            <h4 class="p-3"></h4>
                        </div>
                        <div class="d-flex justify-content-center">
                            <span>価格： {product.price}円</span>
                            <h5></h5>
                        </div>
                        <div class="pt-3">
                            <form action="/cart" method="post">
                                <input type="number" name="amount" value="1" size="10" required=""></input>
                                <button name="id" value="" class="btn btn-primary">カートに入れる</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default ProductDetail;
