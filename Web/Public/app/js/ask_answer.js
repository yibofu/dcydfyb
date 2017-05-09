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
    $(".joinBtn").click(function(){
        var Oindex=$(this).parents(".TAB_text_text").index();
        var indexEp=Oindex-1;
        //alert(indexEp);
        //alert("-1150+Oindex*50+'px'");
        $(".QR_code").css({"display":"block","position":"relative","top":-1150+indexEp*168+'px',"left":"1070px"});

    });
    $(".crossIcon").click(function(){
        $(this).parent().css("display","none");
    });

    //提示
    var x=10;
    var y=20;
    $(".collectImg").mouseover(function(e){
        var tooltip="<div id='tooltip'>"+this.title+"</div>";
        $("body").append(tooltip);

        $("#tooltip").css({"position":"relative","top":(e.pageY+y)+"px","left":(e.pageX+x)+"px","height":"20px","width":"50px","line-height":"20px"}).show("fast");
    }).mouseout(function(){
        $("#tooltip").remove();
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
