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

function Index() {
    return (
        <div>
        <Router>
            <Header />
            <main>
                <Switch>
                    <Route path="/home">
                        <Home />
                    </Route>
                    <Route path="/product">
                        <Product />
                    </Route>
                    <Route path="/product/:id">
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
                </Switch>
            </main>
        </Router>
        </div>
    );
}

export default Index;

if (document.getElementById('index')) {
    ReactDOM.render(<Index />, document.getElementById('index'));
}
