<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>视频中心</title>
    <link rel="stylesheet" href="css/video.css">
    <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
    <style>
        .video{
            width: 100%;
            background: #ffffff;
            margin-bottom: .6rem;
        }
        .video .video-heah{
            width: 100%;
            height: 15.5rem;
        }
        .video .video-heah .img1{
            width: 100%;
            height: 15.5rem;
        }
        .video .video-heah .heah-well{
            margin: 0 6%;
        }
        .video .video-heah .heah-well .well-a{
             width: 100%;
            line-height: 1.6rem;
        }
        .video .video-heah .heah-well .well-a .well-a-1{
            width: 78%;
            display: block;
        }
        .video .video-heah .heah-well .well-a .clicka{
            width: 22%;
            height: 1.4rem;
            text-align: center;
            line-height: 1.4rem;
            background: #00b7ee;
            border-radius: .4rem;
            display: inline-block;
        }
        .video .video-heah .heah-well .line-b{
            width: 100%;
        }
        .line-a{ line-height: 1.2rem;}
        .line-b{ line-height: 1.8rem;}
        .uim{ padding-top: .4rem;}
        .ting{
            margin-left: 6%;
        }
        .main-title{
            margin-top: 1rem;
            width:100%;

        }
        .tab-nav{
            margin:0;
            height:2rem;
            padding:0;
            background: #ffffff;
        }
        .tab-nav li{
            margin:0;
            padding:0;
            width:20%;
            height:2rem;
            line-height: 2rem;
            float:left;
            text-align:center;
        }
        .current{
            border-bottom: .1rem solid #00a0e9;
        }
        .tab-content{
            width:100%;
            margin: .4rem 0 0 0;
            padding-bottom: 4rem;
        }
        .tab-content .content-nav{
            margin: .8rem 7% 0 7%;
        }
        .tab-content .content-h{
            margin: 0 7%;
            line-height: 3.4rem;
        }
    </style>
</head>
<body>
<div class="main-title">
    <!--<ul class="tab-nav">
        <li class="current sizec lin-b" name="basic"><a class="lin-b">全部</a></li>
        <li class="sizec lin-b" name="content"><a class="lin-b">餐饮</a></li>
        <li class="sizec lin-b" name="user"><a class="lin-b">房地产</a></li>
        <li class="sizec lin-b" name="on"><a class="lin-b">医疗</a></li>
        <li class="sizec lin-b" name="sn"><a class="lin-b">制造业</a></li>
    </ul>-->
    <div class="tab-content basic">
        <div class="video">
            <div class="video-heah">
                <a href="html/visual.html"><img src="images/video-heah-img.png" class="img1"/></a>
                <div class="heah-well">
                    <div class="well-a">
                        <h3 class="well-a-1 fl">【直播预告】</h3>
                        <a href="html/visual.html" class="clicka coloc">立即报名</a>
                    </div>
                    <p class="line-a">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <div class="line-b">
                        <p class="fl">讲师：吕定杰</p>
                        <p class="colob fr">2016.11.23  19：00</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="video">
            <div class="video-heah">
                <a href="html/visual.html"><img src="images/video-heah-img.png" class="img1"/></a>
                <div class="heah-well">
                    <div class="well-a">
                        <h3 class="well-a-1 fl">【直播预告】</h3>
                        <a href="html/visual.html" class="clicka coloc">立即报名</a>
                    </div>
                    <p class="line-a">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <div class="line-b">
                        <p class="line-b-1 fl">讲师：吕定杰</p>
                        <p class="line-b-2 colob fl">2016.11.23  19：00</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="video">
            <div class="video-heah">
                <a href="html/visual.html"><img src="images/video-heah-img.png" class="img1"/></a>
                <div class="heah-well">
                    <div class="well-a">
                        <h3 class="well-a-1 fl">【直播预告】</h3>
                        <a href="html/visual.html" class="clicka coloc">立即报名</a>
                    </div>
                    <p class="line-a">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <div class="line-b">
                        <p class="line-b-1 fl">讲师：吕定杰</p>
                        <p class="line-b-2 colob fl">2016.11.23  19：00</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--<div class="tab-content content" style="display:none">
        2222222222
        <div class="video">
            <div class="video-heah">
                <a href="html/visual.html"><img src="images/video-heah-img.png" class="img1"/></a>
                <div class="heah-well">
                    <div class="well-a">
                        <h3 class="well-a-1 fl">【直播预告】</h3>
                        <a href="html/visual.html" class="clicka coloc">立即报名</a>
                    </div>
                    <p class="line-a">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <div class="line-b">
                        <p class="fl">讲师：吕定杰</p>
                        <p class="colob fr">2016.11.23  19：00</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="video">
            <div class="video-heah">
                <a href="html/visual.html"><img src="images/video-heah-img.png" class="img1"/></a>
                <div class="heah-well">
                    <div class="well-a">
                        <h3 class="well-a-1 fl">【直播预告】</h3>
                        <a href="html/visual.html" class="clicka coloc">立即报名</a>
                    </div>
                    <p class="line-a">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <div class="line-b">
                        <p class="line-b-1 fl">讲师：吕定杰</p>
                        <p class="line-b-2 colob fl">2016.11.23  19：00</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="video">
            <div class="video-heah">
                <a href="html/visual.html"><img src="images/video-heah-img.png" class="img1"/></a>
                <div class="heah-well">
                    <div class="well-a">
                        <h3 class="well-a-1 fl">【直播预告】</h3>
                        <a href="html/visual.html" class="clicka coloc">立即报名</a>
                    </div>
                    <p class="line-a">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <div class="line-b">
                        <p class="line-b-1 fl">讲师：吕定杰</p>
                        <p class="line-b-2 colob fl">2016.11.23  19：00</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="tab-content user" style="display:none">
        333333333333
        <div class="video">
            <div class="video-heah">
                <a href="html/visual.html"><img src="images/video-heah-img.png" class="img1"/></a>
                <div class="heah-well">
                    <div class="well-a">
                        <h3 class="well-a-1 fl">【直播预告】</h3>
                        <a href="html/visual.html" class="clicka coloc">立即报名</a>
                    </div>
                    <p class="line-a">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <div class="line-b">
                        <p class="fl">讲师：吕定杰</p>
                        <p class="colob fr">2016.11.23  19：00</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="video">
            <div class="video-heah">
                <a href="html/visual.html"><img src="images/video-heah-img.png" class="img1"/></a>
                <div class="heah-well">
                    <div class="well-a">
                        <h3 class="well-a-1 fl">【直播预告】</h3>
                        <a href="html/visual.html" class="clicka coloc">立即报名</a>
                    </div>
                    <p class="line-a">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <div class="line-b">
                        <p class="line-b-1 fl">讲师：吕定杰</p>
                        <p class="line-b-2 colob fl">2016.11.23  19：00</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="video">
            <div class="video-heah">
                <a href="html/visual.html"><img src="images/video-heah-img.png" class="img1"/></a>
                <div class="heah-well">
                    <div class="well-a">
                        <h3 class="well-a-1 fl">【直播预告】</h3>
                        <a href="html/visual.html" class="clicka coloc">立即报名</a>
                    </div>
                    <p class="line-a">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <div class="line-b">
                        <p class="line-b-1 fl">讲师：吕定杰</p>
                        <p class="line-b-2 colob fl">2016.11.23  19：00</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="tab-content on" style="display:none">
        444444444444444444
        <div class="video">
            <div class="video-heah">
                <a href="html/visual.html"><img src="images/video-heah-img.png" class="img1"/></a>
                <div class="heah-well">
                    <div class="well-a">
                        <h3 class="well-a-1 fl">【直播预告】</h3>
                        <a href="html/visual.html" class="clicka coloc">立即报名</a>
                    </div>
                    <p class="line-a">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <div class="line-b">
                        <p class="fl">讲师：吕定杰</p>
                        <p class="colob fr">2016.11.23  19：00</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="video">
            <div class="video-heah">
                <a href="html/visual.html"><img src="images/video-heah-img.png" class="img1"/></a>
                <div class="heah-well">
                    <div class="well-a">
                        <h3 class="well-a-1 fl">【直播预告】</h3>
                        <a href="html/visual.html" class="clicka coloc">立即报名</a>
                    </div>
                    <p class="line-a">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <div class="line-b">
                        <p class="line-b-1 fl">讲师：吕定杰</p>
                        <p class="line-b-2 colob fl">2016.11.23  19：00</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="video">
            <div class="video-heah">
                <a href="html/visual.html"><img src="images/video-heah-img.png" class="img1"/></a>
                <div class="heah-well">
                    <div class="well-a">
                        <h3 class="well-a-1 fl">【直播预告】</h3>
                        <a href="html/visual.html" class="clicka coloc">立即报名</a>
                    </div>
                    <p class="line-a">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <div class="line-b">
                        <p class="line-b-1 fl">讲师：吕定杰</p>
                        <p class="line-b-2 colob fl">2016.11.23  19：00</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="tab-content sn" style="display:none">
        5555555555555555
        <div class="video">
            <div class="video-heah">
                <a href="html/visual.html"><img src="images/video-heah-img.png" class="img1"/></a>
                <div class="heah-well">
                    <div class="well-a">
                        <h3 class="well-a-1 fl">【直播预告】</h3>
                        <a href="html/visual.html" class="clicka coloc">立即报名</a>
                    </div>
                    <p class="line-a">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <div class="line-b">
                        <p class="fl">讲师：吕定杰</p>
                        <p class="colob fr">2016.11.23  19：00</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="video">
            <div class="video-heah">
                <a href="html/visual.html"><img src="images/video-heah-img.png" class="img1"/></a>
                <div class="heah-well">
                    <div class="well-a">
                        <h3 class="well-a-1 fl">【直播预告】</h3>
                        <a href="html/visual.html" class="clicka coloc">立即报名</a>
                    </div>
                    <p class="line-a">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <div class="line-b">
                        <p class="line-b-1 fl">讲师：吕定杰</p>
                        <p class="line-b-2 colob fl">2016.11.23  19：00</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="video">
            <div class="video-heah">
                <a href="html/visual.html"><img src="images/video-heah-img.png" class="img1"/></a>
                <div class="heah-well">
                    <div class="well-a">
                        <h3 class="well-a-1 fl">【直播预告】</h3>
                        <a href="html/visual.html" class="clicka coloc">立即报名</a>
                    </div>
                    <p class="line-a">餐饮企业营改增 应对餐饮企业营改增应对餐饮企业营改增</p>
                    <div class="line-b">
                        <p class="line-b-1 fl">讲师：吕定杰</p>
                        <p class="line-b-2 colob fl">2016.11.23  19：00</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<script>
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
</body>
</html>