var tests = function () {

  var actions = {
    onPageLoad: function () {
      console.log('page loaded');
    }
  };

  var form = {

  }

  var bindEvents = function () {
    $(document).ready(actions.onPageLoad);  
  }

  var init = function () {
    bindEvents();
  }

  return {
    init : init
  }
}();

module.exports = tests;