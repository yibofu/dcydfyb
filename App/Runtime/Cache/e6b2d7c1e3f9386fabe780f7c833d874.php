<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>立即预约</title>
    <link rel="stylesheet" href="/Public/app/css/public.css">
    <link rel="stylesheet" href="/Public/app/css/mobiscroll.2.13.2.css">
    <script type="text/javascript" src="/Public/app/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="/Public/app/js/mobiscroll.2.13.2.js"></script>
    <style>
        .make .make-a{ background: #4fd1fa; height: 3.8rem;}
        .make .make-a .makel{ line-height: 1.8rem; height: 1.8rem; text-align: center; position: relative;}
        .make .make-a .makel .img1{ position: absolute; top: .8rem; left: 19%;}
        .make .make-a .makel .img2{ position: absolute; top: .8rem; left: 70%;}
        .make .make-a .makeo{height: 1.8rem; width: 79%; margin: 0 auto;}
        .make .make-a .poa{ color: #143452; background: #ffffff;}
        .make .make-a .makeo{ position: relative;}
        .make .make-a .makeo .ba{ width:22%; height: 1.1rem;border-radius: .3rem; text-align: center; margin-right: 4%; line-height: 1.1rem;}
        .make .make-a .makeo .bb{ width:19%; height: 1.1rem;border-radius: .3rem; text-align: center;margin-right: 4%;line-height: 1.1rem;}
        .make .make-a .makeo .bc{ width:19%; height: 1.1rem;border-radius: .3rem; text-align: center;margin-right: 4%;line-height: 1.1rem;}
        .make .make-a .makeo .bd{ width:27%; height: 1.1rem;border-radius: .3rem; text-align: center;line-height: 1.1rem;}
        .make .make-a .makeo .triangle{
            width:0;
            height:0;
            border-width:.4rem;
            border-style:solid dashed dashed dashed;
            border-color:#ffffff transparent transparent transparent;
            display: none;
            position: relative;
        }
        .make .make-a .makeo .hut{
            width:0;
            height:0;
            border-width:.4rem;
            border-style:solid dashed dashed dashed;
            border-color:#ffffff transparent transparent transparent;
            position: relative;
            top:1.3rem;
            left: 9%;
        }
        .make  h4{ line-height: 2.4rem; padding-left:7%;border-bottom: .04rem solid #CCCCCC;}
        .make .content{ margin: 1rem 0 0 8%;}
        .make .content .inp{ border: .04rem solid #CCCCCC; border-radius: .3rem; height: 1.4rem; width: 60%; color: #4fd1fa; padding-left: 3%;}
        .make .content .pc{ margin-top: .3rem; color: #cc0000;}
        .make .content .pd{ margin: .3rem 0 .3rem 0; color: #000000;}
        .make .makei{ width: 100%; margin-top: 1.5rem}
        .make .makei .pi{ padding: 1.4rem 0 0 8%;}
        .make .makei .img01{ margin: 1.1rem 0 0 8%;}
        .make .makei .img01 input{height: 1.4rem; width: 60%;border: .04rem solid #CCCCCC; border-radius: .3rem; padding-left: 2%;}
        .make .makec{ position: fixed; left: 0; bottom:0; width: 100%;}
        .make .makec .po{ line-height: 3rem; text-align: center; margin-top: 2.2rem; border-top: .04rem solid #CCCCCC; padding-bottom: 2rem;}
        .make .makec .nina{ width: 89%; height: 2.2rem; margin: .2rem auto; text-align: center; display: block; background: #00a0e9; color: #ffffff; line-height: 2.2rem; border-radius: .3rem;}
        .make{ position: relative;}
        .make .makeg{ width: 100%; height: 100%; background: rgba(196,196,196,.7); position: fixed; top: 0; left: 0;z-index: 5; display: none;}
        .make .makeg .makeg-a{ width: 52%; height: 14.5rem; position: absolute; background: #ffffff;z-index: 6; top: 12rem; left: 25%; border-radius: .8rem;}
        .make .makeg .imgt{ width: 48%; height: 6.75rem; margin: 1.2rem 0 0 25%; }
        .make .makeg .imgs{ position: absolute; right: 4%; top: .4rem; width: 10%; height: 1.1rem;}
        .make .makeg .ki{ text-align: center; margin-top: 1rem;}

        .makega{ width: 100%; height: 100%; background: rgba(196,196,196,.7); display: none; position: fixed; top: 0; left: 0;z-index: 5;}
        .makega .makeg-aa{ width: 50%; height: 11.4rem; position: absolute; background: #ffffff;z-index: 6; top: 12rem; left: 25%; border-radius: .8rem;}
        .makega .imgta{ width: 45%; height: 6rem; margin: 1.2rem 0 0 25%; }
        .makega .imgsa{ position: absolute; right: 4%; top: .6rem; width: 10%; height: 1.2rem;}
        .makega .kia{ text-align: center; margin-top: 1rem; line-height: 1.4rem;font-size: .7rem}
        /*文字*/
        .foa{ font-size:.64rem;}/*18px*/
        .fob{ font-size:.86rem;}/*24px*/
        .foc{ font-size:.71rem;}/*20px*/

        .cbo{ color: #b1b1b1;}
        .cda{ color: #143452;}
        .cio{ color: #ffffff;}
        .jian{ font-weight: 100;}

        .dis{display: block;}
        .bor{border-top: .04rem solid #CCCCCC;border-bottom: .04rem solid #CCCCCC;}
        .bac{ background: #eeeeee}
    </style>
</head>
<body>
    <div class="make">
        <div class="make-a">
            <div class="makel">
                <img src="/Public/app/img/main_03.png" class="img1"/>
                <h3 class="cio foa jian">请选择本次诊断的主题</h3>
                <img src="/Public/app/img/main_03.png" class="img2"/>
            </div>
            <div class="makeo">
                <div class="ba fl foa cio poa" id="cwzd" name="cwzd" data-value="cwzd" onclick="zd()">财务诊断</div>
                <input type="hidden" name="hid" id="hid" value="">
                <div class="bb fl foa cio" id="sht"  data-value="sht" onclick="sht()">审合同</div>
                <div class="bc fl foa cio" id="sbb" data-value="sbb" onclick="sbb()">审报表</div>
                <div class="bd fl foa cio" id="mianshi" data-value="mianshi" onclick="mianshi()">面试财务经理</div>
                <div class="triangle"></div>
                <div class="hut"></div>
            </div>
        </div>
        <h4 class="fob bac">请选择方便远程视频问诊的时间段</h4>
        <div class="content">
            <p class="foc pd">预约时间：</p>
            <div class="settings" style="display:none;">
                <select name="demo" id="demo">
                    <option value="date">日期</option>
                </select>
            </div>
            <input name="test" id="tests" class="demo-test-date demo-test-datetime demo-test-time demo-test-credit inp"/>
            <p class="foa pc">请点击上面的预约时间，选择时间</p>
        </div>
        <div class="makei bac">
            <p class="foa pi">会员首次问诊将享受免费体验服务</p>
            <div class="img01 foa">姓名：<input type="text" name="user" value="" placeholder="姓名" autocomplete="off"></div>
            <div class="img01 foa">手机：<input type="text" name="phone" value="" placeholder="手机号" autocomplete="off"></div>
        </div>
        <div class="makec">
            <p class="cbo foa po">客服人员将于24小时内致电您确定专家问诊时间</p>
            <a id="ton" class="nina" onclick="order()">提交预约</a>
        </div>
        <div class="makeg">
            <div class="makeg-a">
                <a href="<?php echo U('Question/index');?>"><img id="uin" src="/Public/app/img/xx.png" class="imgs"/>
                <img src="/Public/app/img/shape.png" class="imgt"/>
                <p class="foa ki">
                    您的问题已经提交,请耐心等待!<br/>
                    财税专家会在24小时内对<br/>
                    您的问题进行解答！
                </p>
            </div>
        </div>
        <div class="makega">
            <div class="makeg-aa">
                <img id="uina" src="/Public/app/img/xx.png" class="imgsa"/>
                <img src="/Public/app/img/shapes.png" class="imgta"/>
                <p class="foa kia">
                    您的号码已经提交过了，请重新填写号码
                </p>
            </div>
        </div>
    </div>
</body>
<script>
    $(".ba").on("touchstart",function(){
        $(this).css("color","#143452");
        $(this).css("background","#ffffff");
        $(".bb").css("color","#ffffff");
        $(".bb").css("background","#4fd1fa");
        $(".bc").css("color","#ffffff");
        $(".bc").css("background","#4fd1fa");
        $(".bd").css("color","#ffffff");
        $(".bd").css("background","#4fd1fa");
        $(".triangle").css("display","block");
        $(".triangle").css("top","1.3rem");
        $(".triangle").css("left","9%");
    });
    $(".bb").on("touchstart",function(){
        $(this).css("color","#143452");
        $(this).css("background","#ffffff");
        $(".ba").css("color","#ffffff");
        $(".ba").css("background","#4fd1fa");
        $(".bc").css("color","#ffffff");
        $(".bc").css("background","#4fd1fa");
        $(".bd").css("color","#ffffff");
        $(".bd").css("background","#4fd1fa");
        $(".triangle").css("display","block");
        $(".triangle").css("top","1.3rem");
        $(".triangle").css("left","34%");
        $(".hut").css("display","none");
    });
    $(".bc").on("touchstart",function(){
        $(this).css("color","#143452");
        $(this).css("background","#ffffff");
        $(".ba").css("color","#ffffff");
        $(".ba").css("background","#4fd1fa");
        $(".bb").css("color","#ffffff");
        $(".bb").css("background","#4fd1fa");
        $(".bd").css("color","#ffffff");
        $(".bd").css("background","#4fd1fa");
        $(".triangle").css("display","block");
        $(".triangle").css("top","1.3rem");
        $(".triangle").css("left","57%");
        $(".hut").css("display","none");
    });
    $(".bd").on("touchstart",function(){
        $(this).css("color","#143452");
        $(this).css("background","#ffffff");
        $(".ba").css("color","#ffffff");
        $(".ba").css("background","#4fd1fa");
        $(".bb").css("color","#ffffff");
        $(".bb").css("background","#4fd1fa");
        $(".bc").css("color","#ffffff");
        $(".bc").css("background","#4fd1fa");
        $(".triangle").css("display","block");
        $(".triangle").css("top","1.3rem");
        $(".triangle").css("left","84%");
        $(".hut").css("display","none");
    });
//    $("#ton").on("touchstart",function(){
//        $('.makeg').css("display","block");
//    });
    $('#uina').click(function(){
        $('.makega').fadeOut(200);
    });
    $("#uin").on("touchstart",function(){
        $('.makeg').css("display","none");
    });
    $(function () {
        var curr = new Date().getFullYear();
        var opt={};
        opt.date = {preset : 'date'};
        opt.datetime = {preset : 'datetime'};
        opt.time = {preset : 'time'};

        opt.default = {
            theme: 'android-holo light', //皮肤样式
            display: 'modal', //显示方式
            mode: 'scroller', //日期选择模式
            dateFormat: 'yyyy-mm-dd',
            lang: 'zh',
            showNow: true,
            nowText: "今天",
            stepMinute: 5,
            startYear: curr - 2016, //开始年份
            endYear: curr + 2020 //结束年份
        };
        $('.settings').bind('change', function() {
            var demo = 'datetime';
            if (!demo.match(/select/i)) {
                $('.demo-test-' + demo).val('');
            }
            $('.demo-test-' + demo).scroller('destroy').scroller($.extend(opt['datetime'], opt['default']));
            $('.demo').hide();
            $('.demo-' + demo).show();
        });
        $('#demo').trigger('change');
    });

    $(function(){

        $("input[name='user']").focus(function(){
            $(this).next("span").remove();
            $("input[name='user']").attr("placeholder","请输入用户名");
        }).blur(function(){
            ob = $(this);
            ob.next("span").remove();
            var s = ob.val();
            if(s == ""){
                $("input[name='user']").attr("placeholder","请输入用户名");
                return false;
            }else if(s.match(/^([\u4e00-\u9fa5]{1,20}|[a-zA-Z\.\s]{1,20})$/) == null){
                $("input[name='user']").val("").attr("placeholder","您输入的名字不合法");
                return false;
            }
        })
        $("input[name='phone']").focus(function(){
            $("input[name='phone']").attr("placeholder","请输入您的手机号");
        }).blur(function(){
            pb = $(this);
            pb.next("span").remove();
            var a = pb.val();
            if(a == ""){
                $("input[name='phone']").attr("placeholder","请输入您的手机号");
                return false;
            }else if(a.match(/^1[0-9]{10}$/) == null){
                $("input[name='phone']").val("").attr("placeholder","您输入的手机号格式不对");
                return false;
            }
        })
    })

    function zd(){
        $("#hid").val($("#cwzd").attr('data-value'));
    }
    function sht(){
        $("#hid").val($("#sht").attr('data-value'));
    }

    function sbb(){
        $("#hid").val($("#sbb").attr('data-value'));
    }

    function mianshi(){
        $("#hid").val($("#mianshi").attr('data-value'));
    }

    function order(){
        var time = $("input[name = 'test']").val();
        var name = $("input[name = 'user']").val();
        var phone = $("input[name = 'phone']").val();
        var hid = $("input[name = 'hid']").val();

        if(time == ""){
            $("input[name='test']").attr("placeholder","请选择预约时间");
            return false;
        }
        if(name == ""){
            $("input[name='user']").attr("placeholder","姓名不能为空");
            return false;
        }
        if(phone == ""){
            $("input[name='phone']").attr("placeholder","手机号不能为空");
            return false;
        }

        $.ajax({
            type:"POST",
            url:"<?php echo U('Question/cwzd');?>",
            async: true,
            data:{"test":time,"user":name,"phone":phone,"hid":hid},
            dataType:"json",
            success:function(str) {
                var data = eval(str);
                if(data == 1){
                    $('.makega').css("display","block");
                    $("input[name='phone']").val("");
                }else{
                    $('.makeg').css("display","block");
                }
            }
        })
    }

</script>
</html>