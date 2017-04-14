$(function(){

	$(".bac-e a").eq(0).css("color","#55BDCF");

	
	//视频显示效果
		$(".video_show_part").mouseover(function(){
			$(this).find(".img_num1").attr("src","img/person_page/未标题-1.png");
			$(this).find(".img_num1").addClass("active");
			
		});
		$(".video_show_part").mouseleave(function(){
			$(this).find(".img_num1").attr("src","img/person_page/video_img.png");
//			$(this).find(".img_num1").addClass("active");
			
		});
		//收藏星星
		var Nnum=$(".star_number").html();
		var Num=parseInt(Nnum)
		$(".star_collect").click(function(){
//			alert($(this).parent().parent().index());
			$(".star_collect").attr("src","img/person_page/collect.png");
			$(".star_collect").eq($(this).parent().parent().index()).attr("src","img/person_page/collect_check.png");
			$(".star_number").html(Num+1);
		});
			//左侧菜单
		/*
		    $('.newslist').kkPages({
		        PagesClass:'li', //需要分页的元素
		        PagesMth:6, //每页显示个数
		        PagesNavMth:5 //显示导航个数
		    });
			*/
		/*
		    $("document").ready(function(){
		        $(".tab-nav li").each(function(){
		            $(this).click(function(){
		                if(!$(this).hasClass('current')){
		                    $(this).addClass('current').siblings('.current').removeClass('current');
		                }else{
		                    $(this).siblings('.current').removeClass('current');
		                }
		                var target = $(this).attr('name');
		                $("."+target).show();
		                $("."+target).siblings('.tab-content').hide();
		            });
		        });
		   });
		   */
    
})
