$(document).ready(function() {

  // get hash
  var hashVal = window.location.hash.substr(1);

  if(hashVal == 'blog-article' || hashVal == 'blog-video' || hashVal == 'blog-release') {
    $('[data-type-trigger][href="#all"]').removeClass('is-selected');
    $('[data-type-trigger][href="#' + hashVal + '"]').addClass('is-selected');
  }


  ////////////////////////////////////
  // sort by type on click
  ////////////////////////////////////

  $('[data-type-trigger]').click(function() {

      window.onhashchange = function() {

        var hashVal = window.location.hash.substr(1);
        $('[data-type-trigger]:not([href="#' + hashVal + '"])').removeClass('is-selected');
        $('[data-type-trigger][href="#' + hashVal + '"]').addClass('is-selected');
        $('[data-categorized]').addClass('is-hidden');

        // reset all
        $('.card-container').removeClass('is-hidden');

        // filter
        if(hashVal != 'all') {
          $('.card-list').addClass('is-sorted');
          $('[data-type]:not([data-type="' + hashVal + '"])').addClass('is-hidden');
        }

      };
  });


  $('[data-categorized-close]').click(function() {

    // reset all
    $('.card-container').removeClass('is-hidden');
    // hide categorized alert
    $('[data-categorized]').addClass('is-hidden');
    // focus the all button
    $('[data-type-trigger][href="#all"]').addClass('is-selected');

  });

});
