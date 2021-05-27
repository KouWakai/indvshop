import React from 'react';
import ReactDOM from 'react-dom';
import {
    BrowserRouter as Router,
    Switch,
    Route,
  } from "react-router-dom";
  import Header from './Header'
  import Home from './Home'
  import Product from './Product'
  import Customorder from './Customorder'
  import Contact from './Contact'
  import Cart from './Cart'
  import ContactSuccess from './ContactSuccess'
  import ProductDetail from './ProductDetail'
  import {store} from '../CreateStore';
  import {Provider} from 'react-redux';
  import Login from "./LoginComponent";
  import Register from "./RegisterComponent";

function Index() {
    return (
        <div>
            <Provider store={store}>
                <Router>
                    <Header />
                    <main>
                        <Switch>
                            <Route path="/home">
                                <Home />
                            </Route>
                            <Route path="/product/:id" component={ProductDetail} />
                            <Route path="/product" exact>
                                <Product />
                            </Route>
                            <Route path="/customorder">
                                <Customorder />
                            </Route>
                            <Route path="/contact">
                                <Contact />
                            </Route>
                            <Route path="/cart">
                                <Cart />
                            </Route>
                            <Route path="/contactsuccess">
                                <ContactSuccess />
                            </Route>
                            <Route path="/user/login" component={Login}/>
                            <Route path="/user/register" component={Register}/>
                        </Switch>
                    </main>
                </Router>
            </Provider>
        </div>
    );
}

export default Index;

if (document.getElementById('index')) {
    ReactDOM.render(<Index />, document.getElementById('index'));
}
