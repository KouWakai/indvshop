import React from 'react';
import ReactDOM from 'react-dom';
import {
    BrowserRouter as Router,
    Switch,
    Route,
  } from "react-router-dom";

function Example() {
    return (
        <div className="app">
        <Router>
          {
          //  {!user ? (
          }
          {!user  ? (
            <Login />
          ) : (
         <>
         <Header />
         <div className="app__body">
          <Sidebar />
          <Switch>
            <Route path="/room/:roomId">
              <Chat />
            </Route>\\
            <Route path="/">
              <h1 class="first">初期画面</h1>
            </Route>
          </Switch>
         </div>
            </>
         )}
        </Router>
      </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
