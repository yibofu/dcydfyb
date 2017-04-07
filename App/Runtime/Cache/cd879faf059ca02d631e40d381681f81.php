<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>马上提问</title>
    <link rel="stylesheet" href="/Public/app/css/reply.css">
    <script type="text/javascript" src="/Public/app/js/jquery-3.1.0.min.js"></script>
    <style>
        .whole .pa{ line-height: 2.7rem; padding-left: 7%;}
        .whole .nav{ margin: .6rem 0 0 7%;}
        .whole .nav .img01{ margin-top: .8rem;}
        .whole .nav .img01 input{height: 1.4rem; width: 60%;border: .04rem solid #CCCCCC; border-radius: .3rem; padding-left: 2%;}
        .whole .nav .po{ margin-top: .8rem;}
        .whole .nav .text{ border: .04rem solid #CCCCCC; border-radius: .3rem; width: 71%; margin-top: .6rem;height: 1.4rem; padding-left: 3%; line-height:1.4rem; }
        .whole .nav .texta{ border: .04rem solid #CCCCCC; border-radius: .3rem; width: 90%; margin-top: .6rem;height: 12rem;}
        .whole .nav .pk{ color: #b1b1b1; margin-left: 40%; margin-top: 1rem;}
        .whole .makeg{ width: 100%; height: 100%; background: rgba(196,196,196,.7); position: fixed; top: 0; left: 0;z-index: 5; display: none;}
        .whole .makeg .makeg-a{ width: 52%; height: 14.5rem; position: absolute; background: #ffffff;z-index: 6; top: 12rem; left: 25%; border-radius: .8rem;}
        .whole .makeg .imgt{ width: 48%; height: 6.75rem; margin: 1.2rem 0 0 25%; }
        .whole .makeg .imgs{ position: absolute; right: 4%; top: .4rem; width: 10%; height: 1.1rem;}
        .whole .makeg .ki{ text-align: center; margin-top: 1rem;}
        .whole .bottom{ width: 100%; height: 2.6rem; margin-top: 2rem;}
        .whole .bottom .nina{ width: 89%; height: 2.2rem; margin: .2rem auto; text-align: center; display: block; background: #00a0e9; color: #ffffff; line-height: 2.2rem; border-radius: .3rem;}

        .makega{ width: 100%; height: 100%; background: rgba(196,196,196,.7); display: none; position: fixed; top: 0; left: 0;z-index: 5;}
        .makega .makeg-aa{ width: 50%; height: 11.4rem; position: absolute; background: #ffffff;z-index: 6; top: 12rem; left: 25%; border-radius: .8rem;}
        .makega .imgta{ width: 45%; height: 6rem; margin: 1.2rem 0 0 25%; }
        .makega .imgsa{ position: absolute; right: 4%; top: .6rem; width: 10%; height: 1.2rem;}
        .makega .kia{ text-align: center; margin-top: 1rem; line-height: 1.4rem;font-size: .7rem}
        /*文字*/
        .foa{ font-size:.80rem;}/*18px*/
        .fob{ font-size:.86rem;}/*24px*/
        .foc{ font-size:.71rem;}/*20px*/

        .cbo{ color: #b1b1b1;}
        .cda{ color: #143452;}

        .dis{display: block;}
        .bor{border-top: .04rem solid #CCCCCC;border-bottom: .04rem solid #CCCCCC;}
        .bac{ background: #eeeeee}
    </style>
</head>
<body>
    <div class="whole">
        <h4 class="fob pa bac">会员首次提问将享受免费服务</h4>
        <div class="nav">
            <div class="img01 foa">姓名：<input type="text" name="name" placeholder="怎么称呼您" value="" autocomplete="off"></div>
            <div class="img01 foa">手机：<input type="text" name="phone" placeholder="怎么联系您" value="" autocomplete="off"></div>
            <p class="foa po">请输入问题标题：</p>
            <textarea class="text" placeholder="请输入您要提问的问题" name="ques" wrap=""></textarea>
            <p class="foa po">描述您的问题：</p>
            <textarea id="desc" placeholder="请输入您对问题的描述" class="texta" name="desc" wrap=""></textarea>
            <p class="foa pk">最少输入20字，最多输入300字</p>
        </div>
        <div class="bottom">
            <a id="ton" class="nina" onclick="order()">马上提问</a>
        </div>
        <div class="makeg">
            <div class="makeg-a">
                <a href="<?php echo U('Reply/index');?>"><img id="uin" src="/Public/app/img/xx.png" class="imgs"/></a>
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
//    $("#ton").on("touchstart",function(){
//        $('.makeg').css("display","block");
//    });
    $('#uina').click(function(){
        $('.makega').fadeOut(200);
    })
    $("#uin").on("touchstart",function(){
        $('.makeg').css("display","none");
    });

    $(function(){

        $("input[name='user']").focus(function(){
            $("input[name='user']").attr("placeholder","怎么称呼您");
        }).blur(function(){
            ob = $(this);
            ob.next("span").remove();
            var s = ob.val();
            if(s == ""){
                $("input[name='user']").attr("placeholder","怎么称呼您");
                return false;
            }else if(s.match(/^([\u4e00-\u9fa5]{1,20}|[a-zA-Z\.\s]{1,20})$/) == null){
                $("input[name='user']").val("").attr("placeholder","您输入的名字不合法");
                return false;
            }
        })

        $("input[name='phone']").focus(function(){
            $("input[name='phone']").attr("placeholder","怎么联系您");
        }).blur(function(){
            pb = $(this);
            pb.next("span").remove();
            var a = pb.val();
            if(a == ""){
                $("input[name='phone']").attr("placeholder","怎么联系您");
                return false;
            }else if(a.match(/^1[0-9]{10}$/) == null){
                $("input[name='phone']").val("").attr("placeholder","您输入的手机号格式不对");
                return false;
            }
        })

        $("textarea[name='ques']").focus(function(){
            $("textarea[name='ques']").attr("placeholder","请先简要输入您的问题");
        }).blur(function(){
            dee = $(this);
            dee.next("span").remove();
            var bb = dee.val();
            if(bb == ""){
                $("textarea[name='ques']").attr("placeholder","不能为空，请填写您的问题");
                return false;
            }else if(bb.match(/^[\u4e00-\u9fa50-9A-Za-z]{1,20}$/) == null ){
                $("textarea[name='ques']").val("").attr("placeholder","请简要输入您的问题");
                return false;
            }
        })

        $("textarea[name='desc']").focus(function(){
            $("textarea[name='desc']").attr("placeholder","请在300字以内来描述您的问题......");
        }).blur(function(){
            de = $(this);
            de.next("span").remove();
            var b = de.val();
            if(b == ""){
                $("textarea[name='desc']").attr("placeholder","不能为空，请描述您的问题");
                return false;
            }else if(b.match(/^[\u4e00-\u9fa50-9A-Za-z]{20,300}$/) == null ){
                $("textarea[name='desc']").val("").attr("placeholder","请输入20到300个汉字，字母和数字的组合来描述您的问题");
                return false;
            }
        })
    })


    function order() {
        var name = $("input[name = 'name']").val();
        var phone = $("input[name = 'phone']").val();
        var ques = $("textarea[name = 'ques']").val();
        var desc = $("textarea[name = 'desc']").val();
        if(name == ""){
            $("input[name = 'name']").attr("placeholder","请输入您的姓名");
            return false;
        }
        if(phone == ""){
            $("input[name='phone']").attr("placeholder","请输入您的电话号码");
            return false;
        }
        if(ques == ""){
            $("input[name='ques']").attr("placeholder","请输入您的问题");
            return false;
        }
        if(desc == ""){
            $("input[name='desc']").attr("placeholder","请描述您的问题");
            return false;
        }
        $.ajax({
            type:"POST",
            url:"<?php echo U('Reply/ones');?>",
            data:{"name":name,"phone":phone,"ques":ques,"desc":desc},
            dataType:"json",
            success:function(str){
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