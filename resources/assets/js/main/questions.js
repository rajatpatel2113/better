var questions = function () {

  var actions = {
    onClickRemovePreference: function () {
      var self = $(this);
      self.parent('.selection').hide();
    }
  };

  var form = {

  }

  var bindEvents = function () {
    $('.close-btn').click(actions.onClickRemovePreference);  
  }

  var init = function () {
    bindEvents();
  }

  return {
    init : init
  }
}();

module.exports = questions;