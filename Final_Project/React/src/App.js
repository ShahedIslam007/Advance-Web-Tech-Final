import React from 'react';
import {
  BrowserRouter as Router,
  Switch,
  Route
} from "react-router-dom";
import Register from './Components/Register';
import StudentList from './Components/StudentList';
import Login from './Components/Login';
import Home from './Components/Home';

const App = () => {
  return (
    <div>
      <Router>
        <Switch>

          <Route path="/register">
            <Register />
          </Route>

          <Route path="/signIn">
          <Login/>
          </Route>

          <Route path="/customerList">
            <StudentList />
          </Route>

          <Route path="/">
            <Home />
          </Route>

        </Switch>
      </Router>
    </div>
  );
};

export default App;