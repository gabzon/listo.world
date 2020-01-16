export default {
  init() {
    // JavaScript to be fired on all pages
    $('#account-button').click(function () {      
      $('#account-submenu').toggleClass('hidden block'); //Adds 'a', removes 'b' and vice versa
    });


  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
