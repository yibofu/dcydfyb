$(function(){
	$(".navBarTitle ul a").hover(function(){
		$(this).css({"background":"#0098b3"});
		$(this).siblings().css({"background":""});
	});
	$(".navBarTitle ul a").mouseleave(function(){
		$(this).css({"background":""});
	});
})
