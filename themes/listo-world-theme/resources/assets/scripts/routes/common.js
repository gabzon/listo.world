import React from 'react';
import ReactDOM from 'react-dom';

export default {
  init() {
    // JavaScript to be fired on all pages
    alert('hello how are you');
    class Home extends React.Component{
      render(){
        return (<h1>Hello from React</h1>)
      }
    }
    ReactDOM.render(<Home />, document.getElementById('react'));
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
