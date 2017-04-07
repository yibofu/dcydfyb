<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>我的收藏</title>
    <link rel="stylesheet" href="/Public/app/css/personal.css">
    <script type="text/javascript" src="/Public/app/js/jquery-3.1.0.min.js"></script>
    <style>

    </style>
</head>
<body>
    <div class="collect">
        <div class="check">
            <div class="checkboxFour fl">
                <input type="checkbox" value="1" name="" />
            </div>
            <div class="checkbox">
                <img src="/Public/app/img/select-aa.png" class="img1 fl"/>
                <div class="checkboxp fr">
                    <p class="sizee coloa">【直播】</p>
                    <p class="sizee coloa">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <p class="sizee coloa fl topm">讲师：吕定杰</p>
                    <p class="sizee coloa fr topm">已看完</p>
                </div>

            </div>
        </div>
        <div class="check">
            <div class="checkboxFour fl">
                <input type="checkbox" value="1" name="" />
            </div>
            <div class="checkbox">
                <img src="/Public/app/img/select-aa.png" class="img1 fl"/>
                <div class="checkboxp fr">
                    <p class="sizee coloa">【直播】</p>
                    <p class="sizee coloa">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <p class="sizee coloa fl topm">讲师：吕定杰</p>
                    <p class="sizee coloa fr topm">已看完</p>
                </div>

            </div>
        </div>
        <div class="check">
            <div class="checkboxFour fl">
                <input type="checkbox" value="1" name="" />
            </div>
            <div class="checkbox">
                <img src="/Public/app/img/select-aa.png" class="img1 fl"/>
                <div class="checkboxp fr">
                    <p class="sizee coloa">【直播】</p>
                    <p class="sizee coloa">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <p class="sizee coloa fl topm">讲师：吕定杰</p>
                    <p class="sizee coloa fr topm">已看完</p>
                </div>

            </div>
        </div>
        <div class="check">
            <div class="checkboxFour fl">
                <input type="checkbox" value="1" name="" />
            </div>
            <div class="checkbox">
                <img src="/Public/app/img/select-aa.png" class="img1 fl"/>
                <div class="checkboxp fr">
                    <p class="sizee coloa">【直播】</p>
                    <p class="sizee coloa">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <p class="sizee coloa fl topm">讲师：吕定杰</p>
                    <p class="sizee coloa fr topm">已看完</p>
                </div>

            </div>
        </div>
        <div class="check">
            <div class="checkboxFour fl">
                <input type="checkbox" value="1" name="" />
            </div>
            <div class="checkbox">
                <img src="/Public/app/img/select-aa.png" class="img1 fl"/>
                <div class="checkboxp fr">
                    <p class="sizee coloa">【直播】</p>
                    <p class="sizee coloa">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <p class="sizee coloa fl topm">讲师：吕定杰</p>
                    <p class="sizee coloa fr topm">已看完</p>
                </div>

            </div>
        </div>
        <div class="check">
            <div class="checkboxFour fl">
                <input type="checkbox" value="1" name="" />
            </div>
            <div class="checkbox">
                <img src="/Public/app/img/select-aa.png" class="img1 fl"/>
                <div class="checkboxp fr">
                    <p class="sizee coloa">【直播】</p>
                    <p class="sizee coloa">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <p class="sizee coloa fl topm">讲师：吕定杰</p>
                    <p class="sizee coloa fr topm">已看完</p>
                </div>

            </div>
        </div>
        <div class="check">
            <div class="checkboxFour fl">
                <input type="checkbox" value="1" name="" />
            </div>
            <div class="checkbox">
                <img src="/Public/app/img/select-aa.png" class="img1 fl"/>
                <div class="checkboxp fr">
                    <p class="sizee coloa">【直播】</p>
                    <p class="sizee coloa">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <p class="sizee coloa fl topm">讲师：吕定杰</p>
                    <p class="sizee coloa fr topm">已看完</p>
                </div>

            </div>
        </div>
        <div class="check">
            <div class="checkboxFour fl">
                <input type="checkbox" value="1" name="" />
            </div>
            <div class="checkbox">
                <img src="/Public/app/img/select-aa.png" class="img1 fl"/>
                <div class="checkboxp fr">
                    <p class="sizee coloa">【直播】</p>
                    <p class="sizee coloa">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <p class="sizee coloa fl topm">讲师：吕定杰</p>
                    <p class="sizee coloa fr topm">已看完</p>
                </div>

            </div>
        </div>

        <div class="content-abc">
            <input type="button" name="button" id="button1" value="全选" class="content-i fl">
            <button id="content-j" class="content-j fr coloc">编辑</button>
            <button id="content-k" class="content-y fr coloc">取消</button>
            <button id="content-s" class="content-s fr coloc">删除</button>
        </div>
    </div>
</body>
<script type="text/javascript">
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

</script>
</html>