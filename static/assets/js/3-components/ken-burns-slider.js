// Ken burns slider
// Thanks, http://codepen.io/planetgrafix/pen/iGDrk/

/**
 * The idea is to cycle through the images to apply the "fx" class to them every n seconds.
 * We can't simply set and remove that class though, because that would make the previous image move back into its original position while the new one fades in.
 * We need to keep the class on two images at a time (the two that are involved with the transition).
 */

function kenBurnsSlider() {

  // we set the 'is-ken-burnsing' class on the first image when the page loads
  $('.home-slideshow-container .home-slideshow-img:first-of-type').addClass('is-ken-burnsing');

  // this calls the kenBurns function every 4 seconds
  // you can increase or decrease this value to get different effects
  window.setInterval(kenBurns, 6000);

  // the third variable is to keep track of where we are in the loop
  // if it is set to 1 (instead of 0) it is because the first image is styled when the page loads
  var images          = $('.home-slideshow-container .home-slideshow-img');
  var numberOfImages  = images.length;
  var i               = 1;

  function kenBurns() {
    if(i == numberOfImages) {
      i = 0;
    }
    images[i].className = "home-slideshow-img is-ken-burnsing";

    // we can't remove the class from the previous element or we'd get a bouncing effect so we clean up the one before last
    // (there must be a smarter way to do this though)
    if(i === 0) {
      images[numberOfImages-2].className = "home-slideshow-img";
    } if(i === 1) {
      images[numberOfImages-1].className = "home-slideshow-img";
    } if(i > 1) {
      images[i - 2].className = "home-slideshow-img";
    } i++;

  }
}

if($('body').hasClass('home')) {
  kenBurnsSlider();
}
