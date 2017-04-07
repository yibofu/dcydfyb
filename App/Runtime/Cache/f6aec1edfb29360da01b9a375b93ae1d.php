<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>最新资讯</title>
    <link href="/Public/app/css/base.css" rel="stylesheet"  type="text/css">
    <link href="/Public/app/css/index.css" rel="stylesheet"  type="text/css">
    <script src="/Public/app/js/jquery-3.1.0.min.js"></script>
    <style>
        .pk{ margin-top: 30px;}
        .head .ai{display: block; color: #c00;}
        .main_a{display:none;}
        .head .ont{ margin:0 auto; width:70px; height: 16px; line-height: 16px;}
        .head .ont li{ float: left; border: 1px solid #000000; padding: 8px; margin-left: 5px;}
    </style>
    <script>
        window.onload=function() {
            var oUl=document.getElementById('ar');
            var aBtn=oUl.getElementsByClassName("af");
            var aBox=document.getElementsByClassName('main_a');
            //找到对应的div
            for(var i=0;i<aBtn.length;i++){
                //为每个标签标记编号
                aBtn[i].index=i;
                //为每个标签绑定事件
                aBtn[i].onclick=function(){
                    for(var j=0;j<aBtn.length;j++){
                        aBtn[j].style.color='#000';

                        aBtn[j].className='af';	//将全部标签去掉class
                    }
                    for(var j=0;j<aBox.length;j++){
                        aBox[j].style.display="none";//把所有div隐藏
                    }
                    this.style.color='#c00';
                    aBox[this.index].style.display="block"; //让当前标签对应的div显示
                };
            }
        };
    </script>
</head>
<body>
<div class="head">
    <div class="logo"><img src="/Public/app/img/logo.png"/></div>
    <ul class="nev">
        <li class="in"><a href="<?php echo U('Index/index');?>">首页</a></li>
        <li><a href="<?php echo U('Html/infor');?>">最新资讯</a></li>
        <li><a href="<?php echo U('Html/cas');?>">近期课程</a></li>
        <li><a href="<?php echo U('Html/index');?>">师资团队</a></li>
        <li><a href="#">成功案例</a></li>
    </ul>
    <div>
        <img class="piou" src="/Public/app/img/zxin_02.jpg"/>
    </div>
    <div class="ai main_a course pl">
        <h2>【新法速递】关于开展赋予海关特殊监管区域</h2>
        <p class="fon-a texta">企业增值税一般纳税人资格试点的公告</p>
        <p class="fon-a texta">关于【新法速递】关于开展赋予海关特殊监管区域</p>
        <p class="fon-a texta">企业增值税一般纳税人资格试点的公告</p>
        <p class="fon-a texta">关于开展赋予海关特殊监管区域企业增值税一般纳税人资格试点的公告</p>
        <p class="fon-a textb">国家税务总局、财政部、海关总署公告 2016 年第 65 号</p>
        <p class="fon-a texta">根据《国务院关于促进外贸回稳向好的若干意见》（国发〔2016〕27 号），国家税务总局、财政部和海关总署选择部分海关特殊监管区域开展赋予企业增值税一般纳税人资格试点，现将有关</p>
        <p class="fon-a texta">事项公告如下：</p>
        <p class="fon-a texta">一、在昆山综合保税区、苏州工业园综合保税区、上海松江出口加工区、河南郑州出口加工区、郑州新郑综合保税区、重庆西永综合保税区和深圳盐田综合保税区开展赋予企业增值税一般纳税人资格试点。</p>
        <p class="fon-a texta">上述试点区域内符合增值税一般纳税人登记管理有关规定的企业，可自愿向试点区域所在地主管税务机关、海关申请成为试点企业，向主管税务机关依法办理增值税一般纳税人资格登记。</p>
        <p class="fon-a texta">二、试点企业自增值税一般纳税人资格生效之日起，适用下列税收政策。</p>
        <p class="fon-a texta">（一）试点企业进口自用设备（包括机器设备、基建物资和办公用品）时，暂免征收进口关税、进口环节增值税、消费税（以下简称进口税收）。上述暂免进口税收按照该进口自用设备海关监管年限平均分摊到各个年度，每年年终对本年暂免的进口税收按照当年内外销比例进行划分，对外销比例部分执行试点企业所在海关特殊监管区域的税收政策，对内销比例部分比照执行海关特殊监管区域外（以下简称区外）税收政策补征税款。</p>
        <p class="fon-a texta">您想规避企业风险、实现财富增值吗？</p>
        <p class="fon-a texta">（二）除进口自用设备外，购买的下列货物适用保税政策：</p>
        <p class="fon-a texta">1.从境外购买并进入试点区域的货物。</p>
        <p class="fon-a texta">2.从海关特殊监管区域（试点区域除外）或海关保税监管场所购买并进入试点区域的保税货物。</p>
        <p class="fon-a texta">3 3财务与税务法规</p>
        <p class="fon-a texta">3.从试点区域内非试点企业购买的保税货物。</p>
        <p class="fon-a texta">4.从试点区域内其他试点企业购买的未经加工的保税货物。</p>
        <p class="fon-a texta">（三）销售的下列货物，向税务机关申报缴纳增值税、消费税：</p>
        <p class="fon-a texta">1.向境内区外销售的货物。</p>
        <p class="fon-a texta">2.向保税区、不具备退税功能的保税监管场所销售的货物（未经加工的保税货物除外）。</p>
        <p class="fon-a texta">3.向试点区域内其他试点企业销售的货物（未经加工的保税货物除外）。试点企业销售上述货物中含有保税货物的，按照保税货物进入海关特殊监管区域时的状态向海关申报缴纳进口税收，并按照规定补缴缓税利息。</p>
        <p class="fon-a texta">（四）向海关特殊监管区域或者海关保税监管场所销售的未经加工的保税货物，继续适用保税政策。</p>
        <p class="fon-a texta">（五）销售的下列货物（未经加工的保税货物除外），适用出口退（免）税政策，税务机关凭海关提供的与之对应的出口货物报关单电子数据审核办理试点企业申报的出口退（免）税。</p>
        <p class="fon-a texta">1.离境出口的货物。</p>
        <p class="fon-a texta">2.向海关特殊监管区域（试点区域、保税区除外）或海关保税监管场所（不具备退税功能的保税监管场所除外）销售的货物。</p>
        <p class="fon-a texta">3.向试点区域内非试点企业销售的货物。</p>
        <p class="fon-a texta">（六）除财政部、海关总署、国家税务总局另有规定外，试点企业适用区外关税、增值税、消费税的法律、法规。</p>
        <p class="fon-a texta">三、区外销售给试点企业的加工贸易货物，继续按现行税收政策执行；销售给试点企业的其他货物（包括水、蒸汽、电力、燃气）不再适用出口退税政策，按照规定缴纳增值税、消费税。</p>
        <p class="fon-a texta">四、税务、海关两部门加强税收征管和货物监管的信息交换。对适用出口退税政策的货物，海关向税务部门传输出口报关单结关信息电子数据。</p>
        <p class="fon-a texta">4 4财务与税务法规</p>
        <p class="fon-a texta">五、本公告自 2016 年 11 月 1 日起施行。国家税务总局 财政部 海关总署2016 年 10 月 14 日</p>
        <p class="fon-a texta pc">关于《国家税务总局 财政部 海关总署关于开展赋予海关特殊监管区域企业增值税一般纳税人资格试点的公告》的解读根据《国务院关于促进外贸回稳向好的若干意见》（国发〔2016〕27 号，以下简称《若干意见》）关于“在符合条件的海关特殊监管区域积极探索货物状态分类监管试点，在税负公平、风险可控的前提下，赋予具备条件的企业增值税一般纳税人资格”的决定，税务总局、财政部、海关总署共同制定了《关于开展赋予海关特殊监管区域企业增值税一般纳税人资格试点的公告》（以下简称《公告》），为便于政策理解和执行，现对《公告》解读如下</p>

    </div>
    <div class="main_a course">
        <p class="fon-a texta lin-b man">一、《公告》出台的背景</p>
        <p class="fon-a texta">近年来，随着国际市场的持续低迷，海关特殊监管区域企业开始积极参与国内市场，经营模式逐步向利用国内国外“两种资源，两个市场”方向转变。为便利内销和采购国产料件，区内企业希望能够取得一般纳税人资格，享受营改增改革带来的红利。为此，税务总局会同财政部、海关总署对赋予海关特殊监管区域企业增值税一般纳税人资格试点有关事项进行了研究，决定在在昆山综合保税区、苏州工业园综合保税区、上海松江出口加工区、河南郑州出口加工区、郑州新郑综合保税区、重庆西永综合保税区和深圳盐田综合保税区开展赋予企业增值税一般纳税人资格试点。</p>
        <p class="fon-a texta">二、《公告》的主要内容</p>
        <p class="fon-a texta">公告对开展试点的区域、试点企业的自愿原则、试点的税收政策、税务和海关部门的信息交换</p>
        <p class="fon-a texta">5 5</p>
        <p class="fon-a texta">财务与税务法规</p>
        <p class="fon-a texta">等内容进行了明确。试点的税收政策主要涉及以下几个方面：</p>
        <p class="fon-a texta">（一）赋予区内试点企业增值税一般纳税人资格。试点企业内销货物（包括销售给监管区其他试点企业的货物）可以按规定开具增值税专用发票，并按规定申报缴纳增值税、消费税。</p>
        <p class="fon-a texta">（二）试点企业从区外购进货物，可索取增值税专用发票。所购货物内销的，作为增值税进项税额的抵扣凭证；所购货物外销的，作为出口退税凭证；试点企业以加工贸易方式从区外购进的货物，继续按现行税收政策执行。</p>
        <p class="fon-a texta">（三）试点企业进口货物继续适用保税政策；内销货物中含有保税货物的，或向区外直接销售未经加工的保税货物，按照保税货物入区时的状态，向海关申报缴纳保税货物的进口关税、增值税和消费税，并按照规定补缴缓税利息；试点企业向监管区非试点企业购买货物，比照进口货物适用税收政策。区内企业之间销售未经加工的保税货物不征税，由购货方继续适用保税政策。/p>
        <p class="fon-a texta">（四）试点企业出口货物，在货物实际离境后申请退税；试点企业向监管区非试点企业销售货物，除未经加工的保税货物外，视同出口办理退税。</p>
        <p class="fon-a texta">（五）试点企业进口自用设备（包括机器设备、基建物资和办公用品）时，暂免征收进口关税、进口环节增值税、消费税（以下简称进口税收）。上述暂免进口税收按照该进口自用设备海关监管年限平均分摊到各个年度，每年年终对本年暂免的进口税收按照当年内外销比例进行划分，对外销比例部分执行区内税收政策，对内销比例部分比照执行区外税收政策补征税款</p>
        <p class="fon-a texta">三、执行时间</p>
        <p class="fon-a texta">《公告》自 2016 年 11 月 1 日起施行—长财咨询</p>
        <p class="fon-a texta">6 6财务与税务法规</p>
        <p class="fon-a texta">【长财咨询】近期课程表</p>
        <p class="fon-a texta">热门课程安排 时间及地点 参训人员 课程时长</p>
        <p class="fon-a texta">【财务通】</p>
        <p class="fon-a texta">北京站:10 月 19-21 日 刘国东</p>
        <p class="fon-a texta">广州站:12 月 18-20 日 刘国东</p>
        <p class="fon-a texta">老板、总经理、主管 3 天 2 晚</p>
        <p class="fon-a texta">【财务系统】</p>
        <p class="fon-a texta">广州站:11 月 17-22 日 刘国东 老板、股东、总经理+财务主管</p>
        <p class="fon-a texta">6 天 5 晚</p>
        <p class="fon-a texta">【管理层财务思维】</p>
        <p class="fon-a texta">广州站:10 月 24-26 日 刘国东</p>
        <p class="fon-a texta">太原站:10 月 29-31 日 刘国东</p>
        <p class="fon-a texta">北京站:11 月 11-13 日 刘国东</p>
        <p class="fon-a texta">广州站:2017年1月 13-15日 刘国东</p>
        <p class="fon-a texta">老板、总经理、主管 3 天</p>
        <p class="fon-a">【2016年税务稽查重点与应对策略】 北京站:11 月 25-26 日 叶吉楚，杨勇 老板、总经理、财务总监 2 天</p>
        <p class="fon-a">【成本管控与持续优化】 北京站：12 月 16-17 日 孙红 老板、总经理、财务总监 2 天</p>
        <p class="fon-a">长财第十八期【管理层财务思维】课程【广州站】10月24-26日即将开启！</p>
        <p class="fon-a">【课程价值】</p>
        <p class="fon-a texta">企业老板经营企业能够有些财务思维，企业会稳健得多，至少可以少死一半；</p>
        <p class="fon-a texta">现在的市场拼的不是谁大、谁强，而是看谁死在最后；</p>
        <p class="fon-a texta">可持续发展的公司，是看谁的财务更稳健，谁的财务意识强，谁的决策更多关注财务数据而非其他；</p>
        <p class="fon-a texta">让管理层有财务思维是财务系统有效执行的重要保证！</p>
    </div>
    <ul id="ar" class="ont">
        <li class="af ai">1</li>
        <li class="af">2</li>
    </ul>
</div>
<div class="lin-o">
    <div class="lin-p">
        <div class="lin-o1 fl">
            <div class="lin-o-1 fl"><img src="/Public/app/img/logo.png"/></div>
            <div class="lin-o-2 fl">
                <h3>预约您专属的财务医生！</h3>
                <p>扁鹊财学院以中国传统名医代表“扁鹊”命名，以打造“您的专属财务医生”为使命，能为企业解答 从股权设计、税务筹划、并购重组、上市咨询到企业财务系统建设、财务历史遗留问题处理、高端财务 人员猎头在内的企业财务相关业务。</p>
            </div>
        </div>
        <div class="lin-o2 fl">
            <h3>联系我们</h3>
            <p>公司地址：北京市朝阳区旺座大厦东塔1920室</p>
            <p>商务合作：18310618231</p>
            <p>客户服务：18310618231</p>
            <p>版权所有：www.bianquecxy.con</p>
            <p>2016-2017</p>
            <p>© 2016 大财有道科技 京ICP备15010904号</p>
        </div>
        <div class="lin-o3 fl">
            <div class="lin-o3a"><img src="/Public/app/img/ein_04.jpg"/></div>
        </div>
    </div>
</div>

</body>
</html>