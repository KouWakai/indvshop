import React from 'react';
import ReactDOM from 'react-dom';
import {
    BrowserRouter as Router,
    Switch,
    Route,
  } from "react-router-dom";
  import Header from './Header'
  import Home from './Home'
  import Footer from './Footer'
  import Product from './Product'

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
