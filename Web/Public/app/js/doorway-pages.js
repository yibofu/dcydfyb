$(function(){
	$(".welcomeThreeImg div").mouseover(function(){
		$(this).css("box-shadow","4px 4px 4px #538088");
		$(this).siblings().css("box-shadow","1px 1px 1px #538088");
	});
	$(".welcomeThreeImg div").find("p").css("display","none");
	$(".welcomeThreeImg div").click(function(){
		$(this).find("p").css("display","block");
		$(this).siblings().find("p").css("display","none");
	});
})
