<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
    <title>扁鹊财学院---用户中心</title>
    <meta name="title" content="扁鹊财学院---财税资讯">
    <meta name="Keywords" content="财务咨询、股权设计、税务筹划" />
    <meta name="description" content="扁鹊财学院以分享财务管理智慧为使命，致力于让企业财务更加安全、利用财务技术创造更多利润、让财务管理更规范。平台隶属于北京大财有道科技有限公司，为企业提供专业的财务培训、财税筹划咨询、高端财务人员猎头、企业资产管理等一站式服务，并为创业型资本运作企业提供财务整体解决方案。"/>
    <link rel="stylesheet" href="/Public/app/css/official.css">
    <link rel="stylesheet" href="/Public/app/css/caption.css">
    <script type="text/javascript" src="/Public/app/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="/Public/app/js/jquery.kkPages.js"></script>
    <script type="text/javascript" src="/Public/app/js/address.js"></script>
    <script language="javascript" src="http://pct.zoosnet.net/JS/LsJS.aspx?siteid=PCT10814050&float=1&lng=cn"></script>
    <style>
        .iny{
            background: url("/Public/app/img/user-c.png") no-repeat 345px 123px;
        }
        .box{
            background: #ffffff;
        }
        .user .user-one{
            width: 100%;
            height: 27px;
            background: #f2f2f2;
        }
        .user .user-one .one-a{
            width: 431px;
            height: 27px;
            line-height: 27px;
        }
        .user .user-two{
            height: 104px;
        }
        .user .user-two .two-a img{
            margin-top: 11px;
        }
        .user .user-two .two-b{
            width: 130px;
            height: 32px;
            margin-top: 36px;
        }
        .user .user-two .two-b img{
            margin-right: 7px;
        }
        .user .user-three .three-a{
            width: 162px;
        }
        .user .user-three .three-a li{
            height: 40px;
            line-height: 40px;
            margin-top: 5px;
            cursor:pointer;
        }
        .user .user-three .three-b .three-eight{
            width: 769px;
            height: 561px;
            margin-left: 49px;
        }
        .user .user-three .three-b .three-eight .head{
            width: 106px;
            height: 33px;
            line-height: 33px;
        }
        .user .user-three .three-b .three-eight .eight{
            width: 757px;
            height: 524px;
            border: 2px solid #e5e5e5;
            padding-left: 8px;
        }
        .user-three .three-b .three-eight .eight .eight-one{
            height: 56px;
        }
        .user-three .three-b .three-eight .eight .eight-one .btn-a{
            height: 21px;
            line-height: 21px;
            padding: 0 8px;
            margin-top: 8px;
        }
        .user-three .three-b .three-eight .eight .eight-two{
            height: 38px;
            line-height: 38px;
            margin-right: 9px;
        }
        .user-three .three-b .three-eight .eight .eight-two .check{
            margin-top: 13px;
            margin-left: 14px;
        }
        .user-three .three-b .three-eight .eight .eight-three{
            height: 283px;
        }
        .user-three .three-b .three-eight .eight .eight-three li{
            height: 46px;
            line-height: 46px;
            margin-left: 13px;
            cursor:pointer;
        }
        .user-three .three-b .three-eight .eight .eight-three li .checka{
            margin-top: 18px;
        }
        .user-three .three-b .three-eight .eight .eight-three li .one{
            width: 516px;
        }
        .user-three .three-b .three-eight .eight .eight-three li .two{
            width: 145px;
        }
        #Pagination{
            position: absolute;
            bottom: 330px;
            left: 39%;
            height: 55px;
            line-height: 20px;
            color: #565656;
            clear:both;
        }
        .user-three .three-b .three-six{
            width: 607px;
            margin-left: 55px;
        }
        .user-three .three-b .three-six .six-one{
            height: 75px;
            margin-top: 10px;
        }
        .user-three .three-b .three-six .six-one .imga{
            width: 56px;
        }
        .user-three .three-b .three-six .six-one .imga .img1{
            width: 56px;
            height: 56px;
            border-radius: 50%;
            overflow: hidden;
        }
        .user-three .three-b .three-six .six-one .imgb{
            line-height: 18px;
            margin-top: 11px;
            margin-left: 18px;
        }
        .user-three .three-b .three-six .six-two{
            margin-top: 40px;
        }
        .user-three .three-b .three-six .six-two .two{
            width: 400px;
            margin-top: 18px;
        }
        .user-three .three-b .three-six .six-two .two-one{
            width: 162px;
            height: 26px;
            line-height: 26px;
            border: 1px solid #c9c9c9;
        }
        .user-three .three-b .three-six .six-two p{
            line-height: 26px;
            margin-right: 10px;
        }
        .user-three .three-b .three-six .six-two .check{
            margin-top: 7px;
            margin-right: 5px;
        }
        .user-three .three-b .three-six .six-two .inputb{
            width: 249px;
            height: 32px;
            line-height: 32px;
            margin-top: 70px;
            margin-left: 105px;
        }
        .user-three .three-b .three-five{
            width: 768px;
            margin-left: 50px;
        }
        .user-three .three-b .three-five .five-one .imgb{
            width: 110px;
            margin-top: 10px;
            margin-left: 18px;
            line-height: 18px;
        }
        .user-three .three-b .three-five .five-one .imgc{
            border-bottom: 1px solid #dddddd;
            line-height: 30px;
            margin-top: 13px;
        }
        .user-three .three-b .three-five .five-one .imgc span{
            border-left: 3px solid #0098b3;
        }
        .user-three .three-b .three-five .five-one .imgd{
            width: 226px;
            height: 224px;
        }
        .user-three .three-b .three-five .five-one .imgd .two{
            width: 224px;
            height: 191px;
            border: 1px solid #dcdcdc;
        }
        .user-three .three-b .three-five .five-one .imgd .two img{
            width: 224px;
            height: 191px;
        }
        .user-three .three-b .three-five .five-one .imgd p{
            height: 30px;
            line-height: 30px;
        }
        .ooy img{width: 174px; height: 174px;}
        .oou img{width: 190px; height: 233px;}
        .ooi{width: 504px; height: 249px; margin:30px 0 0 130px;}
        .user-three .three-b .three-eight .imgc{
            border-bottom: 1px solid #dddddd;
            line-height: 34px;
            margin-top: 13px;
        }
        .user-three .three-b .three-eight .imgc span{
            border-left: 3px solid #0098b3;
            line-height: 34px;
        }
        .user-three .three-eight .eight-a{ width: 735px; height: 58px; border: 1px solid #dcdcdc; margin-top: 67px;}
        .user-three .three-eight .eight-a .img1{ margin-top:19px; margin-left: 22px; margin-right: 13px;}
        .user-three .three-eight .eight-a .img2{ margin-top:22px; margin-left: 24px;}
        .user-three .three-eight .eight-b{ width: 735px; height: 58px; border: 1px solid #dcdcdc; margin-top: 20px;}
        .user-three .three-eight .eight-b .img1{margin-top:19px; margin-left: 22px; margin-right: 13px;}
        .user-three .three-eight .eight-b .img2{ margin-right: 55px; margin-top: 20px; color: #ff5918; border-bottom: 1px solid #ff5918;cursor:pointer;}
        #login-io p{ margin-top: 10px; padding: 0 20px; line-height: 28px; font-size: 16px;text-align: left;}



        .user-three .three-b .three-six .six-a .six-one .imga .img0{
            width: 80px; height: 80px; border-radius: 50%; overflow: hidden;
        }
        .user-three .three-b .three-six .six-a .six-one .imga .img0 .img00{
            background: #ffffff;position: relative;z-index: 9;top:0;left: 0px;width: 80px;height: 27px;
        }
        .user-three .three-b .three-six .six-one .imga{
            width: 80px;
        }

        .user-three .three-b .three-six .six-one .imga .img1{
            width: 100%;
            height: 100%;
            border-radius: 50%;
            overflow: hidden;
        }

        .img00{

        }


    </style>
</head>
<body class="box">
    <div class="user">
        <!--头部 c02003-->
        <!--头部 c02003-->
<div class="official-head">

    <div class="head-two">
        <div class="one">
            <a href="<?php echo U('Index/index');?>"><img src="/Public/app/img/logo-a.png" class="img1 fl"/></a>
            <div class="seek-a fl">
                <div class="seek bor-a">
                    <table class="fl">
                        <tr>
                            <td>
                                <select name="drop2" class="ui-select fl">
                                    <option value="1">搜文章</option>
                                    <option value="2">搜视频</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <input class="fl title-a" type="text" value="请输入关键词" onfocus="if (value =='请输入关键词'){value =''}"onblur="if (value ==''){value='请输入关键词'}">
                    <button class="fl" type="button">搜索</button>
                </div>
                <div class="trade fl">
                    <p class="title-a fl wid color-a">热门搜索：</p>
                    <div class="box title-a fl color-b wid"></div>
                    <a class="change title-a fl color-a"><img src="/Public/app/img/hh.png" class="img3"/>换一换</a>
                </div>
            </div>
            <div class="hours fl">
                <img src="/Public/app/img/logo-b.png" class="img4 fl"/>
                <p class="title-a">24小时服务热线</p>
                <p class="title-a color-c">010-59458017</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
        <!--选择卡-->
        <div class="head-three">
    <ul class="three one">
        <li class="boe"><a class="aoe bor-c" style="padding: 0 82px;border-left: 1px solid #ffffff;" href="<?php echo U('Index/index');?>">首页</a></li>
        <li class="boa"><a href="<?php echo U('Index/kce');?>" class="aoa bor-c" target="_blank">课程中心</a></li>
        <li class="bob"><a href="<?php echo U('Index/message');?>" class="aob bor-c" target="_blank">政策速递</a></li>
        <li class="boc"><a href="<?php echo U('Index/member');?>" class="aoc bor-c" target="_blank">会员专享</a></li>
        <li class="bod"><a href="<?php echo U('Index/about');?>" class="aod bor-c" target="_blank">关于扁鹊</a></li>
        <div class="clearfix"></div>
    </ul>
</div>
        <!--<div class="user-two one">-->
            <!--<div class="two-a fl">-->
                <!--<img src="/Public/app/img/logo-c.png"/>-->
            <!--</div>-->
            <!--<div class="two-b fr">-->
                <!--<img src="/Public/app/img/logo-b.png" class="img4 fl"/>-->
                <!--<p class="title-a">24小时服务热线</p>-->
                <!--<p class="title-a color-c">010-59458017</p>-->
            <!--</div>-->
        <!--</div>-->
        <div class="user-three one">
            <ul class="three-a fl title-a text tab-nav">
                <li class="bac-a color-d">账户信息</li>
                <li class="i bac-e color-v" name="basif">个人信息</li>
                <li class="i bac-e color-v" name="basio">账户安全</li>
                <li class="i bac-e color-v" name="basip">我的消息</li>
            </ul>
            <div class="three-b">
                <!--个人信息-->
                <div class="three-six tab-content basif fl" >
                    <?php if(($result['nickname']) == ''): ?><form enctype="multipart/form-data">
                        <div class="six-a" id="tjbd">
                            <div class="six-one">
                                <div class="imga fl">
                                    <div class="img0" name="img">
                                        <img src="/Public/app/img/toux.png" class="img1 cursor"/>
                                        <input class="img00 cursor" type="file" name="submit" value="头像上传"/>
                                    </div>
                                </div>
                                <div class="imgb fl">
                                    <p><?php echo ($result['Phone']); ?></p>
                                    <a id="nine" href="#" class="color-c">升级金鹊会员</a>
                                </div>
                            </div>
                            <div class="six-two">
                                <div class="two">
                                    <p class="fl ming-b">昵称:</p>
                                    <input class="two-one fl" type="text" name="nickname"/>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="two">
                                    <p class="fl ming-a">性别:</p>
                                    <input name="sex" type="radio" value="1" class="fl check cursor" checked="checked"/><p class="fl">男</p>
                                    <input name="sex" type="radio" value="2" class="fl check cursor"/><p class="fl">女</p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="two">
                                    <p class="fl ming-a">公司:</p>
                                    <input class="two-one fl" type="text" name="firmname"/>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="two">
                                    <p class="fl ming-a">职位:</p>
                                    <input class="two-one fl" type="text" name="position"/>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="two">
                                    <p class="fl ming-a">行业:</p>
                                    <input class="two-one fl" type="text" name="industry"/>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="two">
                                    <p class="fl">所在地区:</p>
                                    <div id="sjld" name="address">
                                        <div class="m_zlxg" id="shenfen" style="position: relative;z-index: 9;">
                                            <p title="">选择省份</p>
                                            <div class="m_zlxg2 sf">
                                                <ul></ul>
                                            </div>
                                        </div>
                                        <div class="m_zlxg" id="chengshi" style="position: relative;z-index: 9;">
                                            <p title="">选择城市</p>
                                            <div class="m_zlxg2 cs">
                                                <ul></ul>
                                            </div>
                                        </div>
                                        <div class="m_zlxg" id="quyu" style="position: relative;z-index: 9;">
                                            <p title="">选择区域</p>
                                            <div class="m_zlxg2 qy">
                                                <ul></ul>
                                            </div>
                                        </div>
                                        <input id="sfdq_num" type="hidden" value="" />
                                        <input id="csdq_num" type="hidden" value="" />
                                        <input id="sfdq_tj" type="hidden" value="" />
                                        <input id="csdq_tj" type="hidden" value="" />
                                        <input id="qydq_tj" type="hidden" value="" />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <input class="inputb bac-c color-d title-d cursor" type="button" id="save" name="submit" value="保存"/>
                            </div>
                        </div>
                    </form >
                        <?php else: ?>
                    <div class="six-b" id="xsbd">
                        <div class="six-one">
                            <div class="imga fl">
                                <img src="/Public/app/img/toux.png" class="img1 cursor"/>
                                <p class="text">头像</p>
                            </div>
                            <div class="imgb fl">
                                <p><?php echo ($result['Phone']); ?></p>
                                <a id="nine" href="#" class="color-c">升级金鹊会员</a>
                            </div>
                        </div>
                        <div class="six-two">
                            <div class="two">
                                <p class="fl ming-b">昵称:</p>
                                <p class="fl"><?php echo ($result['nickname']); ?></p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="two">
                                <p class="fl ming-a">性别:</p>
                                <p class="fl"><?php echo ($result['sex']); ?></p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="two">
                                <p class="fl ming-a">公司:</p>
                                <p class="fl"><?php echo ($result['firmname']); ?></p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="two">
                                <p class="fl ming-a">职位:</p>
                                <p class="fl"><?php echo ($result['position']); ?></p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="two">
                                <p class="fl ming-a">行业:</p>
                                <p class="fl"><?php echo ($result['industry']); ?></p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="two">
                                <p class="fl">所在地区:</p>
                                <div class="fl"><?php echo ($result['address']); ?></div>
                                <div class="clearfix"></div>
                            </div>
                            <input class="inputb bac-c color-d title-d cursor" type="button" name="submit" value="修改"/>
                        </div>
                    </div><?php endif; ?>
                </div>

                <!--账户安全-->
                <div class="three-eight tab-content basio fl hei">
                    <div class="imgc">
                        <h6 class="title-e"><span></span>&nbsp;&nbsp;账户安全</h6>
                        <div class="clearfix"></div>
                    </div>
                    <div class="eight-a">
                        <img src="/Public/app/img/zhanhao.png" class="img1 fl"/>
                        <img src="/Public/app/img/imghu_03.png" class="fl"/>
                        <img src="/Public/app/img/user-r.png" class="img2 fl"/>
                    </div>
                    <div class="eight-b">
                        <img src="/Public/app/img/zhanzhg.png" class="img1 fl"/>
                        <img src="/Public/app/img/imghu_03.png" class="fl"/>
                        <p style="line-height: 58px; margin-left: 25px;" class="fl">建议您设置密码以保护账户安全，设置密码后可使用账户加密码登陆。</p>
                        <a id="mima" class="img2 fr">修改</a>
                    </div>


                </div>
                <!--我的消息-->
                <div class="three-eight tab-content basip fl hei">
                    <h3 class="head text color-d bac-c title-d">业务消息</h3>
                    <div class="eight">
                        <div class="eight-one">
                            <input class="btn-a bac-b color-c bor-o" type="submit" name="submit" value="删除消息提醒"/>
                            <input class="btn-a bac-b color-b bor-l" type="submit" name="submit" value="标为已读"/>
                        </div>
                        <div class="eight-two bac-e">
                            <input type="checkbox" name="check" class="fl check">
                            <p class="fl title-a min-s">全选 内容</p>
                        </div>
                        <ul class="eight-three title-a newslist">
                            <li>
                                <input type="checkbox" name="check" class="fl checka">
                                <p class="one fl min-c">业务消息标题业务消息标题业务消息辩题业务消息标题业务标题业务1</p>
                                <p class="two fl">【2016-12-12】</p>
                                <p class="three fl">已读</p>
                            </li>
                            <li>
                                <input type="checkbox" name="check" class="fl checka">
                                <p class="one fl min-c">业务消息标题业务消息标题业务消息辩题业务消息标题业务标题业务1</p>
                                <p class="two fl">【2016-12-12】</p>
                                <p class="three fl">未读</p>
                            </li>
                            <li>
                                <input type="checkbox" name="check" class="fl checka">
                                <p class="one fl min-c">业务消息标题业务消息标题业务消息辩题业务消息标题业务标题业务1</p>
                                <p class="two fl">【2016-12-12】</p>
                                <p class="three fl">已读</p>
                            </li>
                            <li>
                                <input type="checkbox" name="check" class="fl checka">
                                <p class="one fl min-c">业务消息标题业务消息标题业务消息辩题业务消息标题业务标题业务1</p>
                                <p class="two fl">【2016-12-12】</p>
                                <p class="three fl">未读</p>
                            </li>
                            <li>
                                <input type="checkbox" name="check" class="fl checka">
                                <p class="one fl min-c">业务消息标题业务消息标题业务消息辩题业务消息标题业务标题业务1</p>
                                <p class="two fl">【2016-12-12】</p>
                                <p class="three fl">已读</p>
                            </li>
                            <li>
                                <input type="checkbox" name="check" class="fl checka">
                                <p class="one fl min-c">业务消息标题业务消息标题业务消息辩题业务消息标题业务标题业务1</p>
                                <p class="two fl">【2016-12-12】</p>
                                <p class="three fl">未读</p>
                            </li>
                            <li>
                                <input type="checkbox" name="check" class="fl checka">
                                <p class="one fl min-c">业务消息标题业务消息标题业务消息辩题业务消息标题业务标题业务1</p>
                                <p class="two fl">【2016-12-12】</p>
                                <p class="three fl">已读</p>
                            </li>
                            <li>
                                <input type="checkbox" name="check" class="fl checka">
                                <p class="one fl min-c">业务消息标题业务消息标题业务消息辩题业务消息标题业务标题业务1</p>
                                <p class="two fl">【2016-12-12】</p>
                                <p class="three fl">已读</p>
                            </li>
                        </ul>
                        <!--登录 c02003-->
                        <div class="theme-popover" id="login-o">
                            <div class="theme-poptit">
                                <a href="javascript:;" title="关闭" class="close"><img src="/Public/app/img/x.png"/></a>
                                <h3>我的消息</h3>
                            </div>
                            <div class="theme-popbod dform" id="login-io">
                                <p class="texta">消息业务消息业务消息业务消息业务消息业务消息业务消
                                    息业务消息业务</p>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="tabcontent"></div>
                    </div>

                </div>
                <!--扁鹊会员-->
                <div id="bianque" class="fl" style="margin-left: 8px;">
                    <div id="zero" style="display: none">
                        <img src="/Public/app/img/user-a.png"/>
                        <div style="margin: 14px 0 14px 11px; border-left: 2px solid #00a0e9; font-size: 14px;">&nbsp;&nbsp;开通VIP</div>
                        <div id="one" style="display: none;">
                            <div class="fl uij" style="width: 458px;">
                                <div class="iny" style="width: 369px; height: 144px; border: 2px solid #0098b3; margin-left: 62px; position: absolute;">
                                    <img src="/Public/app/img/user-d.png" style="position: relative; top: 20px; right:-72px;"/>
                                    <div class="fl height-w title-k color-b" style="margin-left: 108px;">金鹊<p class="fr wia height-w title-e color-q">&nbsp;&nbsp;&nbsp;VIP会员 > ></p><div class="clearfix"></div></div>
                                    <div><img src="/Public/app/img/user-b.png" class="fl" style="margin-top: 5px; margin-left: 99px;"/><p class="height-a title-j color-b fl">&nbsp;&nbsp;365元</p><div class="clearfix"></div></div>
                                </div>
                                <div class="title-d" style="width: 100%; margin-top: 148px; line-height: 36px; margin-left: 66px;">
                                    <div class="fl">VIP限量8888名</div>
                                    <div style="margin-left: 10px" class="fl color-c">只剩301名</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div style=" margin: 16px 0 0 77px;">
                                    <div style="line-height: 36px; font-size: 16px;" class="fl">支付方式：</div>
                                    <div style="width: 118px;height: 30px; padding:3px 0 0 16px;" class="fl bor-l"><img src="/Public/app/img/wxzf.png"/></div>
                                </div>
                                <input id="one-a" style="margin: 54px 0 0 96px;" class="btn btn-primary title-c" type="submit" name="submit" value="立 即 开 通" />
                            </div>
                            <div class="fr" style="width: 240px;font-size: 16px; margin:35px 70px 0 0; line-height: 30px;">
                                <p>1.VIP会员可免费观看扁鹊财院资深讲师分享的直播课程，每周一期，全年免费。</p>
                                <p>2.VIP会员有机会参加扁鹊财院组织的线下沙龙分享。</p>
                                <p>3.VIP会员有机会与资深财务专家同台直播。</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div id="two" style="margin:65px 0 0 210px; display: none">
                        <h3 style="line-height: 30px;font-size: 24px;">您即将购买的是扁鹊财院年费会员</h3>
                        <p style="font-size: 18px; line-height: 54px;">价格：365元</p>
                        <div style=" margin-top: 28px;">
                            <div style="line-height: 38px; margin-right: 10px; font-size: 18px;" class="fl">支付方式：</div>
                            <img src="/Public/app/img/wxzf.png" class="fl"/>
                            <div class="clearfix"></div>
                        </div>
                        <input style="margin: 62px 0 0 30px;" id="two-a" class="btn btn-primary title-c" type="submit" name="submit" value="立 即 支 付" />
                    </div>
                    <div id="three" style="display: none">
                        <div style="width: 220px; line-height: 34px; font-size: 16px; margin:50px 0 0 104px;" class="fl">
                            <p>订单编号:43546456</p>
                            <p>购买订单：2017-2-12</p>
                            <p>价格：365元</p>
                            <div class="ooy" style="margin:30px 0 0 25px;"><img src="/Public/app/img/erty.png"/></div>
                        </div>
                        <div style="width: 300px;line-height: 34px; font-size: 16px; margin:50px 0 0 104px; " class="fl">
                            <p>商品名称：扁鹊财院年费会员</p>
                            <p>商家名称：北京大财有道科技有限公司</p>
                            <div class="oou" style="margin: 35px 0 0 20px;"><img src="/Public/app/img/user-o.png"/></div>
                        </div>
                    </div>
                    <div id="six" style="display: none">
                        <div style="width: 220px; line-height: 34px; font-size: 16px; margin:50px 0 0 104px;" class="fl">
                            <p>订单编号:43546456</p>
                            <p>交易时间：2017-2-12</p>
                        </div>
                        <div style="width: 300px;line-height: 34px; font-size: 16px; margin:50px 0 0 104px; " class="fl">
                            <p>商品名称：扁鹊财院年费会员</p>
                            <p>商家名称：北京大财有道科技有限公司</p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="ooi">
                            <img src="/Public/app/img/cg.png"/>
                        </div>
                    </div>
                </div>
                <!--找回密码 c02003-->
                <div class="theme-popover">
                    <div class="theme-poptit">
                        <a href="javascript:;" title="关闭" class="close"><img src="/Public/app/img/x.png"/></a>
                        <h3>找回密码</h3>
                    </div>
                    <div class="theme-popbod dform">
                        <form class="theme-signin" name="loginform" action="" method="post">
                            <ol>
                                <li class="signa title-d color-s poin min-t">输入手机号码：<input class="height-a min-s" type="text" name="log" value="手机号"/></li>
                                <li class="signa title-d color-s poir min-w"><input class="height-a min-s" type="text" name="log" value="手机号"/><input class="iou" type="submit" name="submit" value="验证码" /></li>
                                <li class="signa title-d color-s poin min-w">新密码：<input class="height-a min-s" type="text" name="log" value="手机号"/></li>
                                <li class="signa title-d color-s poin min-w">确认密码：<input class="height-a min-s" type="text" name="log" value="手机号"/></li>
                                <li><input class="btn btn-primary title-c" id="min-d" type="submit" name="submit" value="立 即 确 认" /></li>
                            </ol>
                        </form>
                    </div>
                </div>
                <div class="theme-popover-mask"></div>
            </div>
            <div class="clearfix"></div>


        </div>
    </div>
    <!--友情链接 c02003-->
<div class="official-eight one">
    <h3 class="title-b color-b wid min-h">友情链接</h3>
    <ul>
        <li><a href="http://www.changcaizixun.com/">天津长财咨询</a></li>
        <li><a href="http://www.changcaizixun.com/">长财咨询</a></li>
        <li><a href="http://www.changcaizixun.com/">北京长财咨询</a></li>
        <li><a href="http://www.changcaizixun.com/">太原长财咨询</a></li>
        <li><a href="http://www.changcaizixun.com/">广州长财咨询</a></li>
        <li><a href="http://www.changcaizixun.com/">成都长财咨询</a></li>
        <li><a href="http://www.changcaizixun.com/">长沙长财咨询</a></li>
        <li><a href="http://www.changcaizixun.com/">金华长财咨询</a></li>
        <li><a>四度信息</a></li>
        <div class="clearfix"></div>
    </ul>
</div>
<!--底部 c02003-->
<div class="official-bottom">
    <div class="one min-l">
        <div class="bottom-one fl bor-y"><img src="/Public/app/img/logoxia.png"/></div>
        <div class="bottom-two fl bor-y bor-v">
            <ul>
                <li class="height-s color-s title-d wid">帮助中心</li>
                <li class="height-a color-v title-a">购物帮助</li>
                <li class="height-a color-v title-a">支付方式</li>
                <li class="height-a color-v title-a">选定课程</li>
            </ul>
        </div>
        <div class="bottom-two fl bor-y bor-v">
            <ul>
                <li class="height-s color-s title-d wid">关于我们</li>
                <li class="height-a color-v title-a">了解我们</li>
                <li class="height-a color-v title-a">关注我们</li>
                <li class="height-a color-v title-a">加入我们</li>
            </ul>
        </div>
        <div class="bottom-four fl bor-y bor-v">
            <ul>
                <li class="height-s color-s title-d wid">联系我们</li>
                <li class="height-a color-v title-a">公司地址：北京市朝阳区旺座大厦东塔1920室 </li>
                <li class="height-a color-v title-a">客服服务：18310618231</li>
                <li class="height-a color-v title-a">版权所有：WWW.bianquecxy.con</li>
            </ul>
        </div>
        <div class="bottom-five fl">
            <ul class="fl">
                <li class="color-s height-s title-d">服务热线</li>
                <li class="height-a title-e color-d">010-59458017</li>
                <li class="height-a title-d color-d">© 2016 大财有道科技<br/> 京ICP备16057406号</li>
            </ul>
            <img src="/Public/app/img/er.png" class="fl"/>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</body>
<script>
    //导航栏 c02003
    $(function(){
        $(".boe").hover(function(){
            $(".aoe").css('border','0');
        })
        $(".aoe").hover(function(){
            $(".aoe").css('border','0');
        })
        $(".boe").mouseout(function(){
            $(".aoe").css('border-right','2px solid #ffffff');
            $(".aoe").css('border-left','1px solid #ffffff');
        })
        $(".boa").hover(function(){
            $(".aoa").css('border','0');
            $(".aoe").css('border-right','0px');
        })
        $(".aoa").hover(function(){
            $(".aoa").css('border','0');
            $(".aoe").css('border-right','0');
        })
        $(".boa").mouseout(function(){
            $(".aoa").css('border-right','2px solid #ffffff');
            $(".aoe").css('border-right','2px solid #ffffff');
            $(".aoe").css('border-left','1px solid #ffffff');
        })


        $(".bob").hover(function(){
            $(".aoa").css('border','0');
            $(".aob").css('border','0');
        })
        $(".aob").hover(function(){
            $(".aoa").css('border','0');
            $(".aob").css('border','0');
        })
        $(".bob").mouseout(function(){
            $(".aoa").css('border-right','2px solid #ffffff');
            $(".aob").css('border-right','2px solid #ffffff');
            $(".aoe").css('border-left','1px solid #ffffff');
        })

        $(".boc").hover(function(){
            $(".aob").css('border','0');
            $(".aoc").css('border','0');
        })
        $(".aoc").hover(function(){
            $(".aob").css('border','0');
            $(".aoc").css('border','0');
        })
        $(".boc").mouseout(function(){
            $(".aob").css('border-right','2px solid #ffffff');
            $(".aoc").css('border-right','2px solid #ffffff');
            $(".aoe").css('border-left','1px solid #ffffff');
        })

        $(".bod").hover(function(){
            $(".aod").css('border','0');
            $(".aoc").css('border','0');
        })
        $(".aod").hover(function(){
            $(".aod").css('border','0');
            $(".aoc").css('border','0');
        })
        $(".bod").mouseout(function(){
            $(".aod").css('border-right','2px solid #ffffff');
            $(".aoc").css('border-right','2px solid #ffffff');
            $(".aoe").css('border-left','1px solid #ffffff');
        })
    })
    $(".img0").hover(function(){
        $(".img00").css('top',' -30px');
    })
    $(".img00").hover(function(){
        $(".img00").css('top',' -30px');
    })
    $(".img0").mouseout(function(){
        $(".img00").css('top',' 0');
    })
    $('.newslist').kkPages({
        PagesClass:'li', //需要分页的元素
        PagesMth:6, //每页显示个数
        PagesNavMth:5 //显示导航个数
    });
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

    $(function(){
        $("#sjld").sjld("#shenfen","#chengshi","#quyu");
    });
    $('#one-a').click(function () {
        $('#one').slideUp(200);
        $('#two').slideDown(200);
    })
    $('#two-a').click(function () {
        $('#two').slideUp(200);
        $('#three').slideDown(200);
    })
    $('#nine').click(function () {
        $('.three-six').slideUp(200);
        $('#zero').slideDown(200);
        $('#one').slideDown(200);
    })
    $('.i').click(function () {
        $('#zero').slideUp(200);
        $('#two').slideUp(200);
        $('#three').slideUp(200);
        $('#six').slideUp(200);
    })

    jQuery(document).ready(function($) {
        $('#mima').click(function () {
            $('.theme-popover').slideDown(200);
            $('.theme-popover-mask').slideDown(200);
        })
        $('.close').click(function () {
            $('.theme-popover').slideUp(200);
            $('.theme-popover-mask').slideUp(200);
        })
        $('.eight-three li').click(function () {
            $('#login-o').slideDown(200);
        })
    })

    $(function(){
        $("input[name='nickname']").focus(function(){
            $(this).next("span").html("");
            $("<span>*请输入您的昵称</span>").css("color","red").insertAfter(this);
        }).blur(function(){
            $(this).next("span").html("");
        })
        $("input[name='firmname']").focus(function(){
            $(this).next("span").html("");
            $("<span>*请输入您公司的名字</span>").css("color","red").insertAfter(this);
        }).blur(function(){
            $(this).next("span").html("");
        })
        $("input[name='position']").focus(function(){
            $(this).next("span").html("");
            $("<span>*请输入您的职位</span>").css("color","red").insertAfter(this);
        }).blur(function(){
            $(this).next("span").html("");
        })
        $("input[name='industry']").focus(function(){
            $(this).next("span").html("");
            $("<span>*请输入您的行业</span>").css("color","red").insertAfter(this);
        }).blur(function(){
            $(this).next("span").html("");
        })
    })

    $("#save").bind("click",function(){
        var nickname = $("input[name='nickname']").val();
        var sex = $("input:radio[name='sex']:checked").val();
        var firmname = $("input[name='firmname']").val();
        var position = $("input[name='position']").val();
        var industry = $("input[name='industry']").val();
        var shenfen = $("#shenfen>p").text();
        var chengshi = $("#chengshi>p").text();
        var quyu = $("#quyu>p").text();
        var address = shenfen + chengshi + quyu;
        if(nickname == ""){
            $("input[name='nickname']").next("span").html("");
            $("<span>*请输入您的昵称</span>").css("color","red").insertAfter("input[name='nickname']");
            return false;
        }
        if(sex == ""){
            $("input[name='sex']").next("span").html("");
            $("<span>*请选择您的性别</span>").css("color","red").insertAfter("input[name='sex']");
            return false;
        }
        if(firmname == ""){
            $("input[name='firmname']").next("span").html("");
            $("<span>*请输入您公司的名字</span>").css("color","red").insertAfter("input[name='firmname']");
            return false;
        }
        if(position == ""){
            $("input[name='position']").next("span").html("");
            $("<span>*请输入您的职位</span>").css("color","red").insertAfter("input[name='position']");
            return false;
        }
        if(industry == ""){
            $("input[name='industry']").next("span").html("");
            $("<span>*请输入您的行业</span>").css("color","red").insertAfter("input[name='industry']");
            return false;
        }

        $.ajax({
            type:"post",
            url:"<?php echo U('Index/useradd');?>",
            data:{"nickname":nickname,"sex":sex,"firmname":firmname,"position":position,"industry":industry,"address":address},
            success:function(data){
                var row = eval("("+data+")");
                if(row){
                    alert("资料保存成功");
                    $("#tjbd").css("display","none");
                    $("#xsbd").css("display","block");
                }
            }
        })
    })

</script>
</html>