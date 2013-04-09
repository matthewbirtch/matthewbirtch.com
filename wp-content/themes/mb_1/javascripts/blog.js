/*blog.js*/

$(document).ready(function(){
	$('.post_navigation .expandCollapse').click(function(){
		$(this).toggleClass('expanded');
		if($(this).hasClass('expanded')){
			$(this).animate({rotate:'0deg'},500);
		} else {
			$(this).animate({rotate:'180deg'},500);
		}
		$(this).parent().parent().find('.post_wrapper').slideToggle();
	});
});
