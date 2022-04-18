import React from 'react';
import {
  BrowserRouter as Router,
  Switch,
  Route
} from "react-router-dom";
import Register from './Components/Register';
import StudentList from './Components/StudentList';
import StudentDetails from './Components/StudentDetails';
import Home from './Components/Home';

const App = () => {
  return (
    <div>
      <Router>
        <Switch>
          <Route path="/register">
            <Register></Register>
          </Route>
          <Route path="/customerList">
            <StudentList></StudentList>
          </Route>
          <Route path="/studentDetails/:id">
            <StudentDetails></StudentDetails>
          </Route>
          <Route path="/">
            <Home></Home>
          </Route>
        </Switch>
      </Router>
    </div>
  );
};

export default App;