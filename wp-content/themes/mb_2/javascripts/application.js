$(document).ready(function(){
	$.easing.def = "easeInOutCirc"
	on_resize();
	
	$(window).bind('resize', function () { 
	    on_resize();
	});
	
	$('.nav-divider-collapse-button').click(function(){
		if($('.main-header').hasClass('collapsed')){
			expand_menu(500);
		} else {
			collapse_menu(500);
		}
	});


  $('.main-container').imagesLoaded(function(){
    $('.main-container').masonry({
      itemSelector: '.post-preview',
      isAnimated: true,
      animationOptions: {
       duration: 400
      }
    });
  });  
	
	try{Typekit.load();}catch(e){}

	$('.main-container').infinitescroll({
	  navSelector  : '.prev-next',    // selector for the paged navigation 
	  nextSelector : '.next-posts a',  // selector for the NEXT link (to page 2)
	  itemSelector : '.post-preview',     // selector for all items you'll retrieve
	  loading: {
	    finishedMsg: 'No more pages to load.',
	    img: 'http://i.imgur.com/6RMhx.gif'
	  }
	},
	function( newElements ) {
	  var newElems = $( newElements ).css({ opacity: 0 });
	  newElems.imagesLoaded(function(){
	    console.log('loaded');
	    newElems.animate({ opacity: 1 });
	    $('.main-container').masonry( 'appended', newElems, true ); 
	  });
	});
});

function collapse_menu(collapseDuration){
	//collapse the main menu
	$('.main-header').addClass('collapsed');
	$('body').animate({'margin-left':50}, collapseDuration);
	$('.main-header').animate({width: 50, left:320},collapseDuration, function(){
		$('.main-container').masonry( 'reload' );
	});
	var contentAreaWidth = $(window).width() - 50 - 35;
	$('.utilities').animate({width:contentAreaWidth},collapseDuration);
}

function expand_menu(expandDuration){
	$('.main-header').removeClass('collapsed');
	$('body').animate({'margin-left':320}, expandDuration);
	$('.main-header').animate({width: 320},expandDuration, function(){
		$('.main-container').masonry( 'reload' );
	});
	var contentAreaWidth = $(window).innerWidth() - 320 - 35;
	$('.utilities').animate({width:contentAreaWidth},expandDuration);
}

function on_resize(){
		// var contentAreaWidth = $(window).width() - $('.main-header').width() - 35;
		// $('.utilities').width(contentAreaWidth);
		// var contentAreaHeight = $(window).height() - $('aside').height() - 85;
		// 		$('.post').height(contentAreaHeight);
		// 		var postsWidth = 0;
		// 		$('.post-preview').each(function(){
		// 			postsWidth += $(this).width();
		// 			postsWidth += 40;
		// 		});
		// 		postsWidth += 20;
		// 		if($('body.single').length >= 1){
		// 			// do nothing
		// 			var contentWidth = ($('.post .column').length * ($('.post .column').width()+20)) + $('.post .post-title').width()+20 + $('.post .post-footer').width() + 120;
		// 			$('body').width(contentWidth);
		// 			console.log(contentWidth);
		// 		} else {
		// 			$('body').width(postsWidth);
		// 			$('.post:last-child').addClass('last');
		// 		}
}

