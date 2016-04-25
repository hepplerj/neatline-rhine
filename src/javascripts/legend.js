Neatline.module('Rhine', function() {

  var radio_selector = 'input[value="confessions"]';
  var image_selector = 'img#legend';
  var button_group = '.btn-group';

  $(function() {

    // Show confession layer only in confession tab
    $(button_group).on('change', function(){
      if ($(radio_selector).is(':checked')) {
        $(image_selector).show();
      } else {
        $(image_selector).hide();
      }
    });

  });

});
