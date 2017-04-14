
$(function(){
	$(".bac-e a").eq(1).css("color","#55BDCF");
	$(".interests div label").click(function(){
		$(this).css("border","3px #55bdcf solid");
		$(this).find("img").css("display","block");
	});
	//真实名字的正则	
	$(".trueNameInput").keyup(function(){
		var a=$(".trueNameInput").val();
		if (""==a||null==a) {
			$(".hint").html("不能为空");
		} else if (!/^[\u4e00-\u9fa5]+$/.test(a)) {
			$(".hint").html("只能输入汉字");
			} else{
				$(".hint").html("");
			}
		});
		$(".trueNameInput").on("blur",function(){
			var a=$(".trueNameInput").val();
			if (""==a||null==a) {
				$(".hint").html("不能为空");
			}
		})
});
