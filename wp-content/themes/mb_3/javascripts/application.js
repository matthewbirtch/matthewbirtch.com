function on_resize() {
  // $('.posts').masonry('reload');
}

$(document).ready(function() {
  //easing
  $.easing.def = "easeInOutCirc";
  //intro x button
  $('.intro-hide-button').click(function() {
    $('.intro').slideUp();
    return false;
  });
	//portfolio hovers
	$('.portfolio-item').mouseenter(function(){
		$(this).addClass('flipped');
    $(this).click(function(){
      window.location = $(this).find('a').attr('href');
    });
	}).mouseleave(function(){
		$(this).removeClass('flipped');
	});
  //set the guides up for the grid
  var viewportheight = $(document).height();
  $('.grid-guide div').height(viewportheight);
});

$(window).bind('resize', function() {
  on_resize();
});
$(window).load(function(){
  // $('.posts').masonry();
	on_resize();
});