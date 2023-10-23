// thanks, http://codepen.io/cbp/pen/xGNbVQ
$(document).ready(function() {

	var transformFactor = 0.02;

	// Functions
	var scale = function scale(n, min, max) {
	  return n * (max - min) + min;
	};
	var calculateAngle = function calculateAngle(x, y, width, height) {
	  return Math.atan2(x - width / 2, -(y - height / 2)) * (180 / Math.PI);
	};

	var target = $('.header-graphic-svg');

	var targetW = target.width();
	var targetH = target.height();

	$('.header').on('mousemove', function (e) {
	  var x = e.pageX - $(this).offset().left;
	  var y = e.pageY - $(this).offset().top;

		// modified so movement is more vertical
	  var scaledX = scale(x / targetW, -1, 3);
	  var scaledY = scale(y / targetH, -1, 9);

	  var maxX = Math.atan2(15, targetH * 0.5 * 180 / Math.PI);
	  var maxY = Math.atan2(15, targetW * 0.5 * 180 / Math.PI);
	  var opacity = Math.max(Math.abs(scaledX / maxX), Math.abs(scaledY / maxY));

	  var angle = calculateAngle(x, y, targetW, targetH);

	  $(target).css({
	    transform: 'matrix3d(\n      1, 0, ' + -scaledX * transformFactor + ', 0,\n      0, 1, ' + -scaledY * transformFactor + ', 0,\n      0, 0, 1, 0,\n      0, 0, 0, 1\n    )',
	  });
	});

});
