(function ($, Drupal) {
  'use strict';
  Drupal.behaviors.site = {
    attach: function (context, settings) {
      // Custom site scripts.
      $(document).ready(function(){
        /*function test(){
          console.log("function test");
          document.getElementsByClassName("form-file").reset();
        }*/
        if(window.location.href.indexOf("/contact-us") > -1) {
          $('#edit-submitted-attachments-upload', context).mousedown(function () {
            var file = $('.form-file')[0].files[0];
            if (!$('#file-clear').length) {
              $('<button id=file-clear type=button size="22" style="border-radius: 6px; background-color: white; border: 1px solid darkgray; margin: 10px;  " onclick=jQuery(".form-file").replaceWith(jQuery(".form-file").val(\'\').clone(true));jQuery(this.remove());>Clear File</button>').insertBefore('#edit-submitted-attachments-upload-button');
            }
          });
          $('#edit-submitted-attachments-upload-button', context).mousedown(function () {
            var file = $('.form-file')[0].files[0];
            if (file) {
              $(".webform-submit").prop('disabled', true);
            }
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
