// uses sticky-kit (which uses jquery)
function sticky() {

  // config
  var viewportWidth = window.innerWidth;
  var viewportM = 864; // $m viewport size, in px

  // check for minimum viewport width
  if(viewportWidth >= viewportM) {
    $('.sidebar')
    // initialize
    .stick_in_parent({
      offset_top: 60
    })
    // fix the disappearing sidebar issue
    .on('sticky_kit:bottom', function(e) {
      $(this).parent().css('position', 'static');
    })
    .on('sticky_kit:unbottom', function(e) {
      $(this).parent().css('position', 'relative');
    });
  } else {
    // reset if necessary
    $('.sidebar.is_stuck').trigger("sticky_kit:detach");
  }
}

// call on document.ready
$(document).ready(sticky());

// call on window.resize (with a delay to prevent jank)
$(window).resize(function() {
  delay(function(){
    sticky();
  }, 100);
});
