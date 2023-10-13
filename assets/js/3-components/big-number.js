$(document).ready(function() {

  // hide via aria-hidden by default
  $('.big-number-container').addClass('is-hidden');

  // toggle aria-hidden and add animation class
  $('.big-number-container').one('inview', function(event, isInView) {
    $(this).removeClass('is-hidden').addClass('a-pop-in');
  });

});
