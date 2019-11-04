import React from 'react';
import ReactDom from 'react-dom';
import App from './App';
import './style.scss';
import 'antd/dist/antd.css';
//import * as serviceWorker from './serviceWorker';

document.addEventListener('DOMContentLoaded', () => {	
	const entry = document.querySelector('#enquiry-form');	
	ReactDom.render(<App />, entry);
});

// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: https://bit.ly/CRA-PWA
//serviceWorker.unregister();