$(function(){
	$(".bac-e a").eq(4).css("color","#55BDCF");
	$(".addAddress p").click(function(){	
		$("html").css({"background":"rgba(0,0,0,0.2)"});
		$(".addAddressPopup").css("display","block");
	});
	$(".popupBtn button").click(function(){
		$(".addAddressPopup").css("display","none");
		$("html").css({"background":""});
	});
	
	// $(".addressSpecificModel").eq(0).find(".name :last-child").addClass("default-Address");
	// $(".addressSpecificModel").eq(0).find(".name :last-child").html("默认地址");
	$(".addressSpecificModel").eq(0).find(".name :last-child").css("box-shadow"," 1px 1px 1px #686868");
	$(".addressSpecificModel").click(function(){
		$(this).find(".name :last-child").addClass("default-Address");
		$(this).find(".name :last-child").html("默认地址");
		$(this).siblings().find(".name :last-child").removeClass("default-Address");
		$(this).siblings().find(".name :last-child").html("");
	})
	
	$(".addressSpecificModel").hover(function(){
		$(this).css("box-shadow"," 1px 1px 1px #686868").siblings().css("box-shadow","");
		$(this).find(".name :last-child").addClass("default-Address");
		$(this).find(".name :last-child").html("默认地址");
		$(this).siblings().find(".name :last-child").removeClass("default-Address");
		$(this).siblings().find(".name :last-child").html("");
	});
	//删除抬头
	$(".invoiceTitle p :nth-child(1)").click(function(){
		$(this).parent().remove();
	});
	//点击成为默认抬头
	$(".invoiceTitle p").eq(0).find(" :last-child").addClass("setDefault");
	$(".invoiceTitle p").eq(0).find(" :last-child").html("[设为默认]");
	$(".invoiceTitle p").click(function(){
		$(this).find(" :last-child").addClass("setDefault");
		$(this).find(" :last-child").html("[设为默认]");
		$(this).siblings().find(" :last-child").html("");
		$(this).siblings().find(" :last-child").removeClass("setDefault");
	});
	
	$(".addAddress p").click(function(){	
		$("html").css({"background":"rgba(0,0,0,0.2)"});
		$(".addAddressPopup").css("display","block");
	});
	$(".addInvoiceBtn button").click(function(){
		$(".addInvoice").css("display","none");
		$("html").css({"background":""});
	});
});




