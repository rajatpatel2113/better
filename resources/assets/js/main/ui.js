var ui = function () {

  var actions = {

    updateSliderValue: function () {
      var slider = document.getElementById("myRange");
      var output = document.getElementById("output");
      output.innerHTML = slider.value;

      slider.oninput = function() {
        output.innerHTML = this.value;
      }
    },

    onClickCloseIcon: function () {
      var self = $(this);
      self.parent().hide();
    },

    onClickToggleIcon: function () {
      $(this).siblings('.preference-menu-expanded').slideToggle();
    },

    onClickExamName: function () {
      var self = $(this);
      self.siblings().removeClass('active');
      self.addClass('active');
    },

    onClickFaqHeader: function () {
      var self = $(this);
      self.siblings('.faq-body').slideToggle();
    }
  };

  var form = {

  }

  var bindEvents = function () {
    $(document).ready(actions.updateSliderValue);
    $('.close-icon').click(actions.onClickCloseIcon);
    $('.toggle-preference').click(actions.onClickToggleIcon);
    $('.exam-name a').click(actions.onClickExamName);
    $('.faq-header').click(actions.onClickFaqHeader);
  }

  var init = function () {
    bindEvents();
  }

  return {
    init : init
  }
}();

module.exports = ui;