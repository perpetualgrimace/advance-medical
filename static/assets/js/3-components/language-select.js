$(document).ready(function() {

  $('[data-toggle="language"]').click(function(e) {
    // prevent page jump when js is enabled
    e.preventDefault();
    $('.language-selected').toggleClass('is-active');
    $('.language-list').toggleClass('is-active');
  });

});
