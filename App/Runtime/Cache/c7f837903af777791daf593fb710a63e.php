<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"  xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
    <title>马上提问</title>
    <link rel="stylesheet" href="/Public/app/css/reply.css">
    <link rel="stylesheet" href="/Public/app/css/stylereply.css" />
    <script type="text/javascript" src="/Public/app/js/jquery-3.1.0.min.js"></script>

    <style>
        .whole .pa{ line-height: 2.7rem; padding-left: 7%;}
        .whole .nav{ margin: .6rem 0 0 7%;}
        .whole .nav .img01{ margin-top: .8rem;}
        .whole .nav .img01 input{height: 1.4rem; width: 60%;border: .04rem solid #CCCCCC; border-radius: .3rem; padding-left: 2%;}
        .whole .nav .po{ margin-top: .8rem;}
        .whole .nav .text{ border: .04rem solid #CCCCCC; border-radius: .3rem; width: 71%; margin-top: .6rem;height: 1.4rem; padding-left: 3%; line-height:1.4rem; }
        .whole .nav .texta{ border: .04rem solid #CCCCCC; border-radius: .3rem; width: 90%; margin-top: .6rem;height: 20rem;}
        .whole .nav .pk{ color: #b1b1b1; margin-left: 40%;}
        .whole .makeg{ width: 100%; height: 100%; background: rgba(196,196,196,.7); position: fixed; top: 0; left: 0;z-index: 5; display: none;}
        .whole .makeg .makeg-a{ width: 52%; height: 14.5rem; position: absolute; background: #ffffff;z-index: 6; top: 12rem; left: 25%; border-radius: .8rem;}
        .whole .makeg .imgt{ width: 48%; height: 6.75rem; margin: 1.2rem 0 0 25%; }
        .whole .makeg .imgs{ position: absolute; right: 4%; top: .4rem; width: 10%; height: 1.1rem;}
        .whole .makeg .ki{ text-align: center; margin-top: 1rem;}
        .whole .bottom{ width: 100%; height: 2.6rem; position: fixed; left: 0;bottom: 0;}
        .whole .bottom .nina{ width: 89%; height: 2.2rem; margin: .2rem auto; text-align: center; display: block; background: #00a0e9; color: #ffffff; line-height: 2.2rem; border-radius: .3rem;}

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

        .dis{display: block;}
        .bor{border-top: .04rem solid #CCCCCC;border-bottom: .04rem solid #CCCCCC;}
        .bac{ background: #eeeeee}
    </style>
</head>
<body>
    <div class="whole">
        <h4 class="fob pa bac">会员首次提问将享受免费服务</h4>
        <div class="nav">
            <div class="img01 foa">姓名：<input type="text" name="name" value="" placeholder="让我知道您的名字" autocomplete="off" ></div>
            <div class="img01 foa">手机：<input type="text" name="phone" value="" placeholder="请输入您的手机号" autocomplete="off"></div>
            <p class="foa po">您所在地城市：</p>
            <div class="content-block">
                <div class="browser">
                    <!--选择地区-->
                    <section class="express-area">
                        <a id="expressArea" name="city" href="javascript:void(0)">
                            <dl>
                                <dt>选择地区：</dt>
                                <dd>省 > 市 > 区/县</dd>
                            </dl>
                        </a>
                    </section>
                    <!--选择地区弹层-->
                    <section id="areaLayer" class="express-area-box">
                        <header>
                            <h3>选择地区</h3>
                            <a id="backUp" class="back" href="javascript:void(0)" title="返回"></a>
                            <a id="closeArea" class="close" href="javascript:void(0)" title="关闭"></a>
                        </header>
                        <article id="areaBox">
                            <ul id="areaList" class="area-list"></ul>
                        </article>
                    </section>
                    <!--遮罩层-->
                    <div id="areaMask" class="mask"></div>
                    <script src="/Public/app/js/jquery.area.js"></script>
                </div>
            </div>
            <p class="foa po">您的目的：</p>
            <textarea class="texta" name="desc" wrap=""></textarea>
            <p class="foa pk">最少输入20字，最多输入300字</p>
        </div>
        <div class="bottom">
            <a id="ton" class="nina" onclick="order()">马上提问</a>
        </div>
        <div class="makeg">
            <div class="makeg-a">
                <img id="uin" src="/Public/app/img/xx.png" class="imgs"/>
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

    $('#uina').click(function(){
        $('.makega').fadeOut(200);
    })

    $("#uin").on("touchstart",function(){
        $('.makeg').css("display","none");
    });
    $(function(){
        $("input[name='name']").focus(function(){
            $("input[name='name']").attr("placeholder","怎么称呼您");
        }).blur(function(){
            aa = $(this);
            var s = aa.val();
            if(s == ""){
                $("input[name = 'name']").attr("placeholder","怎么称呼您");
                return false;
            }else if(s.match(/^([\u4e00-\u9fa5]{1,20}|[a-zA-Z\.\s]{1,20})$/) == null){
                $("input[name = 'name']").val("").attr("placeholder","您输入的名字不合法");
                return false;
            }
        })

        $("input[name = 'phone']").focus(function(){
            $("input[name='phone']").attr("placeholder","怎么联系您");
        }).blur(function(){
            bb = $(this);
            var b = bb.val();
            if(b == ""){
                $("input[name = 'phone']").attr("placeholder","怎么联系您");
                return false;
            }else if(b.match(/^1[0-9]{10}$/) == null){
                $("input[name = 'phone']").val("").attr("placeholder","您填写的手机号格式不对");
                return false;
            }
        })
    })

    function order(){
        var name = $("input[name='name']").val();
        var phone = $("input[name='phone']").val();
        var city = $("#expressArea dd").text();
        var desc = $("textarea[name='desc']").val();
        if(name == ""){
            $("input[name = 'name']").attr("placeholder","姓名不能为空");
            return false;
        }

        if(phone == ""){
            $("input[name = 'phone']").attr("placeholder","手机号不能为空");
            return false;
        }

        if(city == "省 > 市 > 区/县"){
            alert("请选择城市");
            return false;
        }

        if(desc == ""){
            $("textarea[name = 'desc']").attr("placeholder","请填写您的目的");
            return false;
        }
        $.ajax({
            type:"POST",
            url:"<?php echo U('Yuejt/add');?>",
            data:{"name":name,"phone":phone,"city":city,"desc":desc},
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