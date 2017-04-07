<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>我的消息</title>
    <link rel="stylesheet" href="/Public/app/css/personal.css">
    <script type="text/javascript" src="/Public/app/js/jquery-3.1.0.min.js"></script>
    <style>

    </style>
</head>
<body>
    <div>
        <ul class="tab-nav">
            <li class="current sizec lin-b" name="basic"><a class="lin-b">已读消息</a></li>
            <li class="sizec lin-b" name="content"><a class="lin-b">未读消息（<span>1</span>）</a></li>
        </ul>
        <div class="tab-content basic">
            <div class="check">
                <div class="checkboxFour fl">
                    <input type="checkbox" value="1" name="" />
                </div>
                <div class="checkbox">
                    <p class="sizea topm">您报名的课程已经开课，请开始学习把。</p>
                    <p class="sizea coloa">2016-2-14 9：00</p>
                </div>
            </div>
            <div class="check">
                <div class="checkboxFour fl">
                    <input type="checkbox" value="1" name="" />
                </div>
                <div class="checkbox">
                    <p class="sizea topm">您报名的课程已经开课，请开始学习把。</p>
                    <p class="sizea coloa">2016-2-14 9：00</p>
                </div>
            </div>
            <div class="check">
                <div class="checkboxFour fl">
                    <input type="checkbox" value="1" name="" />
                </div>
                <div class="checkbox">
                    <p class="sizea topm">您报名的课程已经开课，请开始学习把。</p>
                    <p class="sizea coloa">2016-2-14 9：00</p>
                </div>
            </div>


            <div class="content-abc">
                <input type="button" name="button" id="button1" value="全选" class="content-i fl">
                <button id="content-j" class="content-j fr coloc">编辑</button>
                <button id="content-k" class="content-y fr coloc">取消</button>
                <button id="content-s" class="content-s fr coloc">删除</button>
            </div>
        </div>
        <div class="tab-content content" style="display:none">
            <div id="check" class="check">
                <div class="checkbox">
                    <p class="sizea topm">您报名的课程已经开课，请开始学习把。</p>
                    <p class="sizea coloa">2016-2-14 9：00</p>
                </div>
            </div>
            <!--弹窗-->
            <div id="traina" class="consult-a">
                <div class="trainaa">
                    <img src="/Public/app/img/x.png" class="fr" id="x"/>
                    <div class="clearfix"></div>
                    <p>您报名的课程已经开课，请开始学习把。</p>
                    <p class="colod">您报名的课程已经开课，请开始学习把。</p>
                    <p class="coloa traina-g">提问时间：2015-9-15  13：00</p>
                </div>
            </div>
        </div>

    </div>
</body>

<script type="text/javascript">
    //弹窗
    $('#check').click(function(){
        $('#traina').slideDown(300);
    })
    $('#x').click(function(){
        $('#traina').fadeOut(200);
        $('#traina').slideUp(300);
    })
    //编辑
    $("#content-j").click(function(){
        $("#content-j").css('display','none');
        $('#button1').slideDown(300);
        $('#content-k').slideDown(300);
        $('.checkboxFour').slideDown(300);
        $('#content-s').slideDown(300);
        $('.checkbox').css('width','80%');
    })
    $("#content-k").click(function(){
        $("#content-j").slideDown(300);
        $('#button1').fadeOut(200);
        $('#content-k').fadeOut(200);
        $('.checkboxFour').css('display','none');
        $('#content-s').fadeOut(200);
        $('.checkbox').css('width','90%');
    })
    //删除
    $(document).ready(function() {
        $("button").click(function(){
            $(":checked").parent().parent().fadeOut("show"); //隐藏所有被选中的input元素
            //parent() 获得当前匹配元素集合中每个元素的父元素,
        })
        $("#button1").click(function(){
            $(":checkbox").attr("checked",true); //设置所有复选框默认勾选
        })
    });
    //选项卡
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
</script>
</html>