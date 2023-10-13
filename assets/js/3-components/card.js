$(document).ready(function() {

  // get hash
  var hashVal = window.location.hash.substr(1);


  ////////////////////////////////////
  // sort by category on page load
  ////////////////////////////////////

  // function for newly loaded pages
  function sortOnLoad() {

    if (hashVal) {

      // filter by category
      if (hashVal != 'all' && hashVal != 'intro' && hashVal != 'main' && hashVal != 'blog-article' && hashVal != 'blog-video' && hashVal != 'blog-release') {
        // purely aesthetic, make cards line up after sorting
        $('.card-list').addClass('is-sorted');
        // hide the ones we didn't choose
        $('[data-category]:not([data-category="' + hashVal + '"])').addClass('is-hidden');
        // inject the category
        var category = $('[data-category-trigger][href*=' + hashVal + ']').first().text();
        $('[data-categorized-title]').text(category);
        // show category disclaimer
        $('[data-categorized]').removeClass('is-hidden');

      // filter by type
      } else if (hashVal == 'blog-article' || hashVal == 'blog-video' || hashVal == 'blog-release') {
        $('.card-list').addClass('is-sorted');
        $('[data-type]:not([data-type="' + hashVal + '"])').addClass('is-hidden');
      }
    }
  }

  // on page load, check for a hash filter
  sortOnLoad();

  // fix the back button
  $(window).on("popstate", sortOnLoad(event));


  ////////////////////////////////////
  // sort by category on button click
  ////////////////////////////////////

  // when a category link has been clicked
  $('body[class*="-list"] [data-category-trigger]').click(function() {

    var category = $(this).text();
    $('[data-categorized]').removeClass('is-hidden');
    // reset the buttons
    $('[data-type-trigger][href="#all"]').addClass('is-selected');
    $('[data-type-trigger]:not([href="#all"])').removeClass('is-selected');

    window.onhashchange = function() {

      var hashVal = window.location.hash.substr(1);

      sortOnLoad();

      // reset all
      $('[data-category]').removeClass('is-hidden');

      // filter
      if(hashVal != 'all') {
        $('.card-list').addClass('is-sorted');
        $('[data-category]:not([data-category="' + hashVal + '"])').addClass('is-hidden');
        // inject the category
        $('[data-categorized-title]').text(category);
        // show category disclaimer
        $('[data-categorized]').removeClass('is-hidden');
      }

    };

  });


  ////////////////////////////////////
  // hover effect
  ////////////////////////////////////

  titleFocus(title = '.blog-carticle-card-title', container = '.card-inner');

});
