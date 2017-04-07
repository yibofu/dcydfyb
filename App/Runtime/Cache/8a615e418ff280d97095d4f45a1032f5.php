<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>财事不决问扁鹊</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="/Public/app/css/src.css">
    <script type="text/javascript" src="/Public/app/js/jquery-3.1.0.min.js"></script>
</head>
<body>
    <div class="src">
        <img src="/Public/app/img/heah.png"/>
        <div class="src-one">
            <img src="/Public/app/img/wt.png" class="img2"/>
            <p class="fon-a">选出您最关心的财务问题,答案在下周三神秘揭晓!</p>
            <img src="/Public/app/img/heaha.png" class="img1"/>
            <p class="fon-b texta">以下财务问题为扁鹊财院调研得来，我们将对老板感兴趣的问题进行投票选择，票数高的前五个问题将会被选择在直播问答中一一解答。快快发动朋友们一起投票吧。</p>
            <div class="clearfix"></div>
        </div>
        <div class="src-two">
            <h4 class="fon-a">企业老板最想知道的财务问题、参与投票!（可多选）</h4>
            <div class="two-one">
                <img src="/Public/app/img/picture-a_03.png" class="img1 fl"/>
                <div class="img2 fl">
                    <h6 class="fon-b">1.请问农产品加工企业，如果做贴牌销售，怎么处理能合理避税。</h6>
                    <div id="min-e">
                        <img src="/Public/app/img/vote.png" class="img3 fl"/>
                        <p class="fon-c fl" name="num1">票数:<?php echo ($resul[0]["num"]); ?></p>
                        <input class="inputa fl" type="button" name="submit" onclick="vote1()"  value="快投我"/>
                        <input type="hidden" name="vote1" value="1">
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="two-one">
                <img src="/Public/app/img/three_03.png" class="img1 fl"/>
                <div class="img2 fl">
                    <h6 class="fon-b">2.老师，分公司所得税需要预缴一部分吗?</h6>
                    <div id="min-a">
                        <img src="/Public/app/img/vote.png" class="img3 fl"/>
                        <p class="fon-c fl" name="num2">票数:<?php echo ($resul[1]["num"]); ?></p>
                        <input class="inputa fl" type="submit" name="submit2" onclick="vote2()" value="快投我"/>
                        <input type="hidden" name="vote2" value="2">
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="two-one">
                <img src="/Public/app/img/three_06.png" class="img1 fl"/>
                <div class="img2 fl">
                    <h6 class="fon-b">3.我们公司被法院判决企业支付赔偿金，但是拿不到发票，这个支出能税前扣除吗？</h6>
                    <img src="/Public/app/img/vote.png" class="img3 fl"/>
                    <p class="fon-c fl" name="num3">票数:<?php echo ($resul[2]["num"]); ?></p>
                    <input class="inputa fl" type="submit" name="submit3" onclick="vote3()" value="快投我"/>
                    <input type="hidden" name="vote3" value="3">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="two-one">
                <img src="/Public/app/img/three_08.png" class="img1 fl"/>
                <div class="img2 fl">
                    <h6 class="fon-b">4.我想以公司名义投资基金。想咨询相关问题。</h6>
                    <div id="min-d">
                        <img src="/Public/app/img/vote.png" class="img3 fl"/>
                        <p class="fon-c fl"  name="num4">票数:<?php echo ($resul[3]["num"]); ?></p>
                        <input class="inputa fl" type="submit" name="submit4" onclick="vote4()" value="快投我"/>
                        <input type="hidden" name="vote4" value="4">
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="two-one">
                <img src="/Public/app/img/three_10.png" class="img1 fl"/>
                <div class="img2 fl">
                    <h6 class="fon-b">5.我们单位每年组织员工体检，这个体检的费用能不能在做所得税前给它扣除？</h6>
                    <img src="/Public/app/img/vote.png" class="img3 fl"/>
                    <p class="fon-c fl"  name="num5">票数:<?php echo ($resul[4]["num"]); ?></p>
                    <input class="inputa fl" type="submit" name="submit5" onclick="vote5()" value="快投我"/>
                    <input type="hidden" name="vote5" value="5">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="two-one">
                <img src="/Public/app/img/three_12.png" class="img1 fl"/>
                <div class="img2 fl">
                    <h6 class="fon-b">6.买车是自己名义好还是公司名义买好？</h6>
                    <div id="min-d">
                        <img src="/Public/app/img/vote.png" class="img3 fl"/>
                        <p class="fon-c fl"  name="num6">票数:<?php echo ($resul[5]["num"]); ?></p>
                        <input class="inputa fl" type="submit" name="submit6" onclick="vote6()" value="快投我"/>
                        <input type="hidden" name="vote6" value="6">
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="two-one">
                <img src="/Public/app/img/three_14.png" class="img1 fl"/>
                <div class="img2 fl">
                    <h6 class="fon-b">7.买房是个人买好，还是公司买更好？</h6>
                    <div id="min-d">
                        <img src="/Public/app/img/vote.png" class="img3 fl"/>
                        <p class="fon-c fl" name="num7">票数:<?php echo ($resul[6]["num"]); ?></p>
                        <input class="inputa fl" type="submit" name="submit7" onclick="vote7()" value="快投我"/>
                        <input type="hidden" name="vote7" value="7">
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="two-one">
                <img src="/Public/app/img/three_16.png" class="img1 fl"/>
                <div class="img2 fl">
                    <h6 class="fon-b">8.怎么才能把企业估值做高？</h6>
                    <div id="min-c">
                        <img src="/Public/app/img/vote.png" class="img3 fl"/>
                        <p class="fon-c fl"  name="num8">票数:<?php echo ($resul[7]["num"]); ?></p>
                        <input class="inputa fl" type="submit" name="submit8" onclick="vote8()" value="快投我"/>
                        <input type="hidden" name="vote8" value="8">
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="two-one">
                <img src="/Public/app/img/three_02.jpg" class="img1 fl"/>
                <div class="img2 fl">
                    <h6 class="fon-b">9.我们公司下属车辆交通肇事受损，对方给予赔偿，这比收入是否也要交税？</h6>
                    <img src="/Public/app/img/vote.png" class="img3 fl"/>
                    <p class="fon-c fl" name="num9">票数:<?php echo ($resul[8]["num"]); ?></p>
                    <input class="inputa fl" type="submit" name="submit9" onclick="vote9()" value="快投我"/>
                    <input type="hidden" name="vote9" value="9">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="two-one">
                <img src="/Public/app/img/three_01.jpg" class="img1 fl"/>
                <div class="img2 fl">
                    <h6 class="fon-b">10.我们公司从事软件行业，不知道小型微利企业的优惠和软件企业的两免三减半能否同时享受？</h6>
                    <img src="/Public/app/img/vote.png" class="img3 fl"/>
                    <p class="fon-c fl"  name="num10">票数:<?php echo ($resul[9]["num"]); ?></p>
                    <input class="inputa fl" type="submit" name="submit10" onclick="vote10()" value="快投我"/>
                    <input type="hidden" name="vote10" value="10">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="src-three">
            <h6 class="fon-a">快分享给您的朋友，助力投票，前五个票数高的问题将在直播中解答</h6>
            <img src="/Public/app/img/heahb.png" class="img1"/>
            <p class="fon-b texta">提交您的财务问题，我们将在下期进行问题投票。</p>
            <div class="moblie">
                <p class="fl">姓名:</p>
                <input class="fl" type="text" name="name"/>
            </div>
            <div class="moblie">
                <p class="fl">手机:</p>
                <input class="fl" type="text" name="phone"/>
            </div>
            <div class="mobliea">
                <p class="fl">问题:</p>
                <textarea class="text fl" name="question"></textarea>
            </div>
            <input class="inputb fr" id="tijiao" type="submit" name="submitti" value="提交"/>
            <div class="clearfix"></div>
            <p class="popularize-h">最终解释权归大财有道科技有限公司所有</p>
        </div>

    </div>
</body>
<script>

    $(function(){
        $("input[name='phone']").focus(function(){
            $("input[name='phone']").attr("placeholder","请输入您的手机号码");
        }).blur(function(){
            ab = $(this);
            var s = ab.val();
            if(s == ""){
                $("input[name='phone']").val("").attr("placeholder","请输入您的手机号码");
                return false;
            }else if(s.match(/^1[0-9]{10}$/) == null){
                $("input[name='phone']").val("").attr("placeholder","请输入11位电话号码");
                return false;
            }
        })
    })

    function vote1(){
        var hid = $("input[name = 'vote1']").val();
        var num = $("p[name = 'num1']").text().split(":")[1] ;
        num = ++num;
        $.ajax({
            type:"post",
            url:"<?php echo U('Vote/vote1');?>",
            data:{"name":hid,"num":num},
            success:function(data){
                var data = eval("("+data+")");
                if(data.success == true){
                    $("p[name='num1']").text("票数:"+ num );
                    $("input[name='submit']").val('已投票');
                    $("input[name='submit']").css('background','#dbdbdb');
                    $("input[name='submit']").attr("disabled",true);
                }
            }
        })
    }

function vote2(){
    var hid = $("input[name = 'vote2']").val();
    var num = $("p[name = 'num2']").text().split(":")[1] ;
    num = ++num;
    $.ajax({
        type:"post",
        url:"<?php echo U('Vote/vote1');?>",
        data:{"name":hid,"num":num},
        success:function(data){
            var data = eval("("+data+")");
            if(data.success == true){
                $("p[name='num2']").text("票数:"+ num );
                $("input[name='submit2']").val('已投票');
                $("input[name='submit2']").css('background','#dbdbdb');
                $("input[name='submit2']").attr("disabled",true);
            }
        }
    })
}

function vote3(){
    var hid = $("input[name = 'vote3']").val();
    var num = $("p[name = 'num3']").text().split(":")[1] ;
    num = ++num;
    $.ajax({
        type:"post",
        url:"<?php echo U('Vote/vote1');?>",
        data:{"name":hid,"num":num},
        success:function(data){
            var data = eval("("+data+")");
            if(data.success == true){
                $("p[name='num3']").text("票数:"+ num );
                $("input[name='submit3']").val('已投票');
                $("input[name='submit3']").css('background','#dbdbdb');
                $("input[name='submit3']").attr("disabled",true);
            }
        }
    })
}

function vote4(){
    var hid = $("input[name = 'vote4']").val();
    var num = $("p[name = 'num4']").text().split(":")[1] ;
    num = ++num;
    $.ajax({
        type:"post",
        url:"<?php echo U('Vote/vote1');?>",
        data:{"name":hid,"num":num},
        success:function(data){
            var data = eval("("+data+")");
            if(data.success == true){
                $("p[name='num4']").text("票数:"+ num );
                $("input[name='submit4']").val('已投票');
                $("input[name='submit4']").css('background','#dbdbdb');
                $("input[name='submit4']").attr("disabled",true);
            }
        }
    })
}

function vote5(){
    var hid = $("input[name = 'vote5']").val();
    var num = $("p[name = 'num5']").text().split(":")[1] ;
    num = ++num;
    $.ajax({
        type:"post",
        url:"<?php echo U('Vote/vote1');?>",
        data:{"name":hid,"num":num},
        success:function(data){
            var data = eval("("+data+")");
            if(data.success == true){
                $("p[name='num5']").text("票数:"+ num );
                $("input[name='submit5']").val('已投票');
                $("input[name='submit5']").css('background','#dbdbdb');
                $("input[name='submit5']").attr("disabled",true);
            }
        }
    })
}

function vote6(){
    var hid = $("input[name = 'vote6']").val();
    var num = $("p[name = 'num6']").text().split(":")[1] ;
    num = ++num;
    $.ajax({
        type:"post",
        url:"<?php echo U('Vote/vote1');?>",
        data:{"name":hid,"num":num},
        success:function(data){
            var data = eval("("+data+")");
            if(data.success == true){
                $("p[name='num6']").text("票数:"+ num );
                $("input[name='submit6']").val('已投票');
                $("input[name='submit6']").css('background','#dbdbdb');
                $("input[name='submit6']").attr("disabled",true);
            }
        }
    })
}

function vote7(){
    var hid = $("input[name = 'vote7']").val();
    var num = $("p[name = 'num7']").text().split(":")[1] ;
    num = ++num;
    $.ajax({
        type:"post",
        url:"<?php echo U('Vote/vote1');?>",
        data:{"name":hid,"num":num},
        success:function(data){
            var data = eval("("+data+")");
            if(data.success == true){
                $("p[name='num7']").text("票数:"+ num );
                $("input[name='submit7']").val('已投票');
                $("input[name='submit7']").css('background','#dbdbdb');
                $("input[name='submit7']").attr("disabled",true);
            }
        }
    })
}

function vote8(){
    var hid = $("input[name = 'vote8']").val();
    var num = $("p[name = 'num8']").text().split(":")[1] ;
    num = ++num;
    $.ajax({
        type:"post",
        url:"<?php echo U('Vote/vote1');?>",
        data:{"name":hid,"num":num},
        success:function(data){
            var data = eval("("+data+")");
            if(data.success == true){
                $("p[name='num8']").text("票数:"+ num );
                $("input[name='submit8']").val('已投票');
                $("input[name='submit8']").css('background','#dbdbdb');
                $("input[name='submit8']").attr("disabled",true);
            }
        }
    })
}

function vote9(){
    var hid = $("input[name = 'vote9']").val();
    var num = $("p[name = 'num9']").text().split(":")[1] ;
    num = ++num;
    $.ajax({
        type:"post",
        url:"<?php echo U('Vote/vote1');?>",
        data:{"name":hid,"num":num},
        success:function(data){
            var data = eval("("+data+")");
            if(data.success == true){
                $("p[name='num9']").text("票数:"+ num );
                $("input[name='submit9']").val('已投票');
                $("input[name='submit9']").css('background','#dbdbdb');
                $("input[name='submit9']").attr("disabled",true);
            }
        }
    })
}

function vote10(){
    var hid = $("input[name = 'vote10']").val();
    var num = $("p[name = 'num10']").text().split(":")[1] ;
    num = ++num;
    $.ajax({
        type:"post",
        url:"<?php echo U('Vote/vote1');?>",
        data:{"name":hid,"num":num},
        success:function(data){
            var data = eval("("+data+")");
            if(data.success == true){
                $("p[name='num10']").text("票数:"+ num );
                $("input[name='submit10']").val('已投票');
                $("input[name='submit10']").css('background','#dbdbdb');
                $("input[name='submit10']").attr("disabled",true);
            }
        }
    })
}


$("#tijiao").bind('click',function(){
    var name = $("input[name='name']").val();
    var phone = $("input[name='phone']").val();
    var question = $("textarea[name='question']").val();

    if(question == ""){
        $("textarea[name = 'phonefree']").val("").attr("placeholder","请输入您的问题");
        return false;
    }

    if(phone == ""){
        $("input[name = 'phonefree']").val("").attr("placeholder","请输入您的手机号");
        return false;
    }
    if(name == ""){
        $("input[name = 'namefree']").val("").attr("placeholder","请输入您的姓名");
        return false;
    }

    $.ajax({
        type:"post",
        url:"<?php echo U('Vote/subques');?>",
        data:{"name":name,"phone":phone,"question":question},
        success:function(data){
            var data = eval("("+data+")");
            if(data.success == true){
                $("input[name='submitti']").val('已提交');
                $("input[name='submitti']").css('background','#dbdbdb');
                $("input[name='submitti']").attr("disabled",true);
            }
        }
    })
})

</script>
</html>