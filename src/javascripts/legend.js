Neatline.module('Rhine', function() {

  $(function() {

    // Show confession layer only in confession tab
    $('input[value="confessions"]').on('change', (function() {
      $('img#legend').toggle(this.checked);
    })).change();

  });

});
