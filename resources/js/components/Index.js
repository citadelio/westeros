import React from 'react';
import ReactDOM from 'react-dom';
import App from "./App"
import 'pace-progressbar';
import 'pace-progressbar/themes/blue/pace-theme-flash.css';

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
