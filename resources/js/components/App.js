import React from 'react'
import {BrowserRouter as Router, Route} from "react-router-dom";
import Home from "./Home";
import EditBook from "./EditBook";
const App = () => {
    return (
        <Router>
            <Route path="/"  exact component={Home}/>
            <Route path="/book/:id"  exact component={EditBook}/>
            {/* <Route path="" component={}/> */}
        </Router>
    )
}

export default App