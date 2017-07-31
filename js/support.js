(function ($, Drupal) {
  'use strict';
  Drupal.behaviors.site = {
    attach: function (context, settings) {
      // Custom site scripts.
      $(document).ready(function(){
        if(window.location.href.indexOf("/contact-us") > -1) {
          $('#edit-submitted-attachments-upload-button', context).mousedown(function () {
            $(".webform-submit").prop('disabled', true);
          });
        $(document).ajaxComplete(function(){
          if ($('span').hasClass('file'))   {
            $(".webform-submit").prop('disabled', false);
          }
        });
       }
      });
    }
  };
})(jQuery, Drupal);
