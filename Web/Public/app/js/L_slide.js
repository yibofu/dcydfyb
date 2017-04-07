/**
 * @L_slide picutre scroll
 * @version 1.0
 * @author DQ Lee
 **/
//c02003
(function($){
	$.fn.slide=function(options){
       var defaults= {
		   affect:1,     //1：上下滚动; 2:幕布式; 3:左右滚动；4：淡入淡出
		   time: 4000,   //间隔时间
		   speed:500,    //动画快慢
		   dot_text:true,//按钮上有无序列号
	   };
	   var opts=$.extend(defaults,options);
	   
		   var $this=$(this);
		   var ool=$("<div class='dot'><p></p></div>");
		   var $box=$this.find("ul");
		   var $li=$box.find("li");
		   var timer=null;
		   var num=0;
	   
	   $this.append(ool);
	   $box.find("li").each(function(i){
			ool.find("p").append($("<b></b>"));
			if(opts.dot_text){
				ool.find("b").eq(i).html(i+1)
			}
       })
	   ool.find("b").eq(0).addClass("cur");
	   switch(opts.affect){
		   case 1:
		      $box.find("li").css("display","none");
		      break;
	   }
	   $box.find("li").eq(0).show(0);
	   ool.find("b").mouseover(function(){	
			num=$(this).index();
			run ();
		})
		timer=setInterval(auto,opts.time);
			function auto(){
				num<$box.find("li").length-1?num++:num=0;
				run();
			}
		function run(){
			ool.find("b").eq(num).addClass("cur").siblings().removeClass("cur");
				switch(opts.affect){
					case 1:
						$box.find("li").css({"position":"absolute"});
						$box.find("li").stop(false,true).fadeOut(opts.speed).eq(num).fadeIn(opts.speed);
						break;
				}
		}
		$this.mouseover(function(){
			  clearInterval(timer);	
		})
		 $this.mouseout(function(){
			  timer=setInterval(auto,opts.time);	
		})
}
})(jQuery);
(function($){

	$.fn.tabso=function( options ){

		var opts=$.extend({},$.fn.tabso.defaults,options );

		return this.each(function(i){
			var _this=$(this);
			var $menus=_this.children( opts.menuChildSel );
			var $container=$( opts.cntSelect ).eq(i);

			if( !$container) return;

			if( opts.tabStyle=="move"||opts.tabStyle=="move-fade"||opts.tabStyle=="move-animate" ){
				var step=0;
				if( opts.direction=="left"){
					step=$container.children().children( opts.cntChildSel ).outerWidth(true);
				}else{
					step=$container.children().children( opts.cntChildSel ).outerHeight(true);
				}
			}

			if( opts.tabStyle=="move-animate" ){ var animateArgu=new Object();	}

			$menus[ opts.tabEvent]( function(){
				var index=$menus.index( $(this) );
				$( this).addClass( opts.onStyle ).css("background-color","#c9eaf0")
					.siblings().removeClass( opts.onStyle ).css("color","#037f95").css("background-color","#ffffff");


				switch( opts.tabStyle ){
					case "fade":
						if( !($container.children( opts.cntChildSel ).eq( index ).is(":animated")) ){
							$container.children( opts.cntChildSel ).eq( index ).siblings().css( "display", "none")
								.end().stop( true, true ).fadeIn( opts.aniSpeed );
						}
						break;
				}

			});

			$menus.eq(0)[ opts.tabEvent ]();

		});
	};

	$.fn.tabso.defaults={
		cntSelect : ".content_wrap",
		tabEvent : "mouseover",
		tabStyle : "normal",
		direction : "top",
		aniMethod : "swing",
		aniSpeed : "fast",
		onStyle : "current",
		menuChildSel : "*",
		cntChildSel : "*"
	};

})(jQuery);
//换一换 c02003
$(function(){
	change();
})
var change = function change(){
	var texta =["利润管控","投融资管控","税务风险管控","营改增","存货管理"];
	var textb =["股权架构","现金流管控","销售涉税","采购涉税","成本优化"];
	var textc =["税务风险","资金管理","新三板上市","现金流管控","成本策划"];
	var html = "";
	for(var i =0 ;i<texta.length;i++){
		html+="<div class='tab'><p class='fl'>"+texta[i]+"</p><p class='fl'>"+textb[i]+"</p><p class='fl'>"+textc[i]+"</p></div>"
	}
	$(".box").append(html);
	$(".tab").hide();
	$(".tab").eq(0).show();
	var $obj = $(".tab");
	$(".change").bind("click",function(){
		$(".tab").show();
		var index =	Math.floor(Math.random()*$obj.length);
		$(".box").html($obj[index]);
	})
}


