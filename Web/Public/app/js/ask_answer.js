$(function(){
	 	//选项卡
	 	$(".left_part1").css("display","none");
	 	$(".left_part1").eq(0).css("display","block");
	 	$(".TAB_title p").eq(0).css({"background":"#47b8cc","color":"white"})
	 	$(".TAB_title p").mouseover(function(){
	 		var Oindex=$(this).index();
//	 		alert(Oindex);
				$(".TAB_title p").css({"background":"","color":""})
				$(".TAB_title p").eq(Oindex).css({"background":"#47b8cc","color":"white"})
				$(".left_part1").css("display","none");
				$(".left_part1").eq(Oindex).css("display","block");
	 	});
	 	
	 	//鼠标移上去二维码出来
	 	$(".QR_code").css("display","none");
	    	$(".QR_btn").eq(0).mouseover(function(){
	    		$(".QR_code").css("display","block");
	    		$(".QR_code").css({"position":"relative","top":"-550px","left":"1380px"});
	    	});
	    	$(".QR_btn").eq(0).mouseleave(function(){
	    		$(".QR_code").css("display","none");
	    	});
	    	$(".QR_btn").eq(1).mouseover(function(){
	    		$(".QR_code").css("display","block");
	    		$(".QR_code").css({"position":"relative","top":"-350px","left":"1380px"});
	    	});
	    	$(".QR_btn").eq(1).mouseleave(function(){
	    		$(".QR_code").css("display","none");
	    	});
	    	$(".QR_btn").eq(2).mouseover(function(){
	    		$(".QR_code").css("display","block");
	    		$(".QR_code").css({"position":"relative","top":"-200px","left":"1380px"});
	    	});
	    	$(".QR_btn").eq(2).mouseleave(function(){
	    		$(".QR_code").css("display","none");
	    	});
	    	
	    //点赞
				var x=10;
				var y=20;
				$(".TAB_text_textRight div").find("img").mouseover(function(e){
					var tooltip="<div id='tooltip'>"+this.title+"</div>";
					$("body").append(tooltip);
					
					$("#tooltip").css({"position":"relative","top":(e.pageY+y)+"px","left":(e.pageX+x)+"px","height":"20px","width":"50px","line-height":"20px"}).show("fast");
				}).mouseout(function(){
					$("#tooltip").remove();
				});
				
		//点赞变成红色
			var Onum=$(".TAB_text_textRight span").html();
			var Num=parseInt(Onum)
//			alert(typeof(Num));
			$(".TAB_text_textRight div").find("img").click(function(){
				$(this).attr("src","/Public/app/img/support_check.png");
				$(this).parent().parent().find("span").html(Num+1);
			});
			
			//写的文字作为题目
			$(".ask_text textarea").on("keydown",function(){
				var Number=$(".ask_text textarea").val().length;
				$(".number_limit button").click(function(){
					if (Number!=""&&Number!=null) {
						
						var a=$(".ask_title p span").html($(".ask_text textarea").val());
//						$(".ask_text textarea").delay().fadeOut();
					}
					
					if(a!=""&&a!=null){
							
//							return false;
						}
				});
			});
				
			
			
			//计算数字的个数
				$(".ask_text textarea").on("keyup",function(){
					var NumLength=$(".ask_text textarea").val().length;
					$(".number_limit span").html(NumLength);
				})
				//规定字数
				//文本域的一些限制
				$(".ask_text textarea").on('keydown', function(e) {
					if(e.keyCode == 8) {
						$('.ask_text textarea').removeAttr("readonly");
					}
					var maxNum = 45;
					var text_area_length = $(".ask_text textarea").val().length;
					if(text_area_length >= maxNum) {
						$(".alert").css("display", "block");
						if(e.keyCode == 8) {
							return true;
						} else {
							$('.ask_text textarea').attr('readonly', 'readonly');
							return false;
						}
					} else {
						$(".alert").css("display", "none");
						return true;
					}
				});
			
	 });
		