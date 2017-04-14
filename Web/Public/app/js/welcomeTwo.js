
$(function(){
	$(".cheText p").css("display","none");
	$(".cheText").find("label").click(function(){
		$(this).siblings("p").css("display","block");
	});
})