$(function(){
	    	var i=0;
	    	$(".page li a").eq(0).css({"background":"#5fc8da","color":"white"});
	    	$(".page li a").click(function(){
	    		$(".page li a").css({"background":"","color":""});
	    		$(this).css({"background":"#5fc8da","color":"white"});
	    	});
	    	
	   });