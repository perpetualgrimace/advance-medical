$(document).ready(function() {

  // unhide select boxes once js is ready
  $('.list-select').removeClass('is-hidden');

  // select by category only
  $('[data-category-select]').change(function() {

    // grab the value
    var categoryVal = $('[data-category-select]').val();

    // hide all by default
    $('[data-category]').hide();

    // category is set
    if (categoryVal != 'all') {
      $('[data-category="' + categoryVal + '"]').show();
    }
    // reset
    else {
      $('[data-category]').show();
    }

  });

  // select by location and position
  /*
  $('[data-location-select], [data-position-select]').change(function() {

    // grab the value
    var locationVal = $('[data-location-select]').val();
    var positionVal = $('[data-position-select]').val();

    // hide all by default
    $('[data-location], [data-position]').hide('fast');

    // location only
    if(locationVal !== 'all' && positionVal == 'all') {
      $('[data-location="' + locationVal + '"]').show('fast');
    }
    // position only
    else if(locationVal == 'all' && positionVal !== 'all') {
      $('[data-position="' + positionVal + '"]').show('fast');
    }
    // both location and position
    else if (positionVal != 'all' && locationVal != 'all') {
      $('[data-location="' + locationVal + '"][data-position="' + positionVal + '"]').show('fast');
    }
    // reset
    else if(positionVal == 'all' && locationVal == 'all') {
      $('[data-location], [data-position]').show('fast');
    }

  });
  */

});
