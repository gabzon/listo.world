import React from 'react';
import ReactDom from 'react-dom';
import App from './App';
import './style.scss';

document.addEventListener('DOMContentLoaded', () => {
	console.log('Hello from React');
	const entry = document.querySelector('#wpackio-reactapp');	
	ReactDom.render(<App />, entry);
});
