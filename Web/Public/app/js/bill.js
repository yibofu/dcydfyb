$(function(){
	$(".bac-e a").eq(2).css("color","#55BDCF");
	$(".invoiceType p").eq(0).css("border","3px #55bdcf solid");
	$(".invoiceType p").eq(0).find("img").css("display","block");
//抬头
	$(".rise p").eq(0).css("border","3px #55bdcf solid");
	$(".rise p").eq(0).find("img").css("display","block");
	$(".rise p").click(function(){
		$(this).find("img").css("display","block");
		$(this).siblings().find("img").css("display","none");
		$(this).css("border","3px #55bdcf solid").siblings("p").css("border","3px #CCCCCC solid");
	});
	$(".contants p").eq(0).css("border","3px #55bdcf solid");
	$(".contants p").eq(0).find("img").css("display","block");
	$(".contants p").click(function(){
		$(this).find("img").css("display","block");
		$(this).siblings().find("img").css("display","none");
		$(this).css("border","3px #55bdcf solid").siblings("p").css("border","3px #CCCCCC solid");
	});
	//切换按钮
	$(".billCommonBtn").find("img").css("display","block");
	$(".billStyle").find("img").css("display","block");
	$(".billCommon").css("display","block");
	$(".billAdd").css("display","none");
	
	$(".invoiceType p").eq(0).css("border","3px #55bdcf solid");
	$(".invoiceType p").eq(0).find("img").css("display","block");
	
	$(".invoiceType p").click(function(){
		$(this).find("img").css("display","block");
		$(this).siblings().find("img").css("display","none");
		$(this).find("img").css("display","block");
		$(this).siblings().find("img").css("display","none");
		$(this).css("border","3px #55bdcf solid").siblings("p").css("border","3px #CCCCCC solid");
		
	})
	
	$(".billCommonBtn").click(function(){
		$(this).find("img").css("display","block");
		$(this).siblings().find("img").css("display","none");
		$(this).css("border","3px #55bdcf solid").siblings("p").css("border","3px #CCCCCC solid");
		$(".billCommon").css("display","block");
		$(".billAdd").css("display","none");
	});
	$(".billAddBtn").click(function(){
		$(this).css("border","3px #55bdcf solid").siblings("p").css("border","3px #CCCCCC solid");
		$(".billAdd").css("display","block");
		$(".billCommon").css("display","none");
	});
});

