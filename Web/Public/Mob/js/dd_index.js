/**
 * Created by 1 on 2015/11/23.
 */
$(function(){
    var num=500;
    var range_width=parseInt($(".dd_rang").width());  //滑动条的长度
    var bili=Math.round(range_width/45);
    //var bili=accDiv(range_width-15,45);   //每100元滑动的长度
    var newWith=bili*45;
    $(".dd_rang").css({width:newWith});

    var n=parseInt($("#show_month").find("strong").html());  //获取月份，初始一个月
    var i=0;//滑动的次数
    var mleft=0; //按钱数滑动距离
    var nleft=0; //月份数
	var refund = 550;  //还款数额
	var month = 1;   //月份
	var rate;  
    var rate_power;
	var mem_rate;
	var cap_rate;
	var res_rate;
    console.log(range_width,bili,range_width-bili*45);
	//Math.pow(2,53) 
    $("#money_plus").bind("click",function(){
        num+=100;
        i+=1;
        mleft=i*bili;
        //console.log(mleft);
        if(num<=5000&&i<=45)
        {
            $("#money_minus").css("color","#ff4201");
            $(this).css("color","#ff4201");
            $("#money_move").css({left:mleft-15});
            $("#money_moved").css({width:mleft+15});
            $("#show_money").html("<strong>"+num+"</strong><i>元</i>");
            if(num==5000)
            {
                $(this).css("color","#dfdfdf");
            }
        }
        else{
            $(this).css("color","#dfdfdf");
            num=5000;
            i=45;
        }
		/*计算还款数开始*/
		//获取月份
		month = parseInt($("#show_month").find("strong").html());
		//转换整型
		num = parseInt(num,10);
		//月利率加法运算  24% / 12= 2%
		rate = accAdd(1,0.02);
		//进行利率乘方运算
		rate_power = Math.pow(rate,month);
		//分子利率乘法运算
		mem_rate = accMul(0.02,rate_power);
		//分子本金运算
		cap_rate = accMul(num,mem_rate);
		//进行分步运算 计算分母
		den_rate = accSubtr(rate_power,1);
		//整合除法运算 
		 res_rate = accDiv(cap_rate,den_rate);
		//最终结果
		refund = accAdd(res_rate,40);
		/*计算还款数结束*/
		//向上进一
		refund = Math.ceil(refund);
		$("#money_num").html(refund);
    })
    $("#money_minus").bind("click",function(){
        num-=100;
        i-=1;
        mleft=i*bili;
        if(num>=500&&i>=0)
        {
            $("#money_plus").css("color","#ff4201");
            $(this).css("color","#ff4201");
            $("#money_move").css({left:mleft-15});
            $("#money_moved").css({width:mleft+15});
            $("#show_money").html("<strong>"+num+"</strong><i>元</i>");
            if(num==500)
            {
                $(this).css("color","#dfdfdf");
            }
        }
        else{
            $(this).css("color","#dfdfdf");
            num=500;
            i=0;
        }
		/*计算还款数开始*/
		//获取月份
		month = parseInt($("#show_month").find("strong").html());
		//转换整型
		num = parseInt(num,10);
		//月利率加法运算  24% / 12= 2%
		rate = accAdd(1,0.02);
		//进行利率乘方运算
		rate_power = Math.pow(rate,month);
		//分子利率乘法运算
		mem_rate = accMul(0.02,rate_power);
		//分子本金运算
		cap_rate = accMul(num,mem_rate);
		//进行分步运算 计算分母
		den_rate = accSubtr(rate_power,1);
		//整合除法运算 
		 res_rate = accDiv(cap_rate,den_rate);
		//最终结果
		refund = accAdd(res_rate,40);
		/*计算还款数结束*/
		//向上进一
		refund = Math.ceil(refund);
		$("#money_num").html(refund);
    });

    //var nbili=Math.floor(range_width/5);
    var nbili=accDiv(range_width,5);
    //console.log(nbili);
    $("#month_plus").bind("click",function(){
        n+=1;
        nleft=(n-1)*nbili;
        if(n<=6)
        {
            $("#month_minus").css("color","#ff4201");
            $(this).css("color","#ff4201");
            $("#month_move").css({left:nleft-10});
            $("#month_moved").css({width:nleft+15});
            $("#show_month").html("<strong>"+n+"</strong>"+"<i>个月</i>");
            if(n==6)
            {
                $(this).css("color","#dfdfdf");
            }
        }else{
            $(this).css("color","#dfdfdf");
            n=6;
        }
		/*计算还款数开始*/
		//获取月份
		month = parseInt($("#show_month").find("strong").html());
		//转换整型
		num = parseInt($("#show_money").find("strong").html());
		num = parseInt(num,10);
		//月利率加法运算  24% / 12= 2%
		rate = accAdd(1,0.02);
		//进行利率乘方运算
		rate_power = Math.pow(rate,month);
		//分子利率乘法运算
		mem_rate = accMul(0.02,rate_power);
		//分子本金运算
		cap_rate = accMul(num,mem_rate);
		//进行分步运算 计算分母
		den_rate = accSubtr(rate_power,1);
		//整合除法运算 
		 res_rate = accDiv(cap_rate,den_rate);
		//最终结果
		refund = accAdd(res_rate,40);
		/*计算还款数结束*/
		//向上进一
		refund = Math.ceil(refund);
		$("#money_num").html(refund);
		$("#month_num").html(month);
		
    })
    $("#month_minus").bind("click",function(){
        n-=1;
        nleft=(n-1)*nbili;
        if(n>=1)
        {
            $("#month_plus").css("color","#ff4201");
            $(this).css("color","#ff4201");
            $("#month_move").css({left:nleft-15});
            $("#month_moved").css({width:nleft+15});
            $("#show_month").html("<strong>"+n+"</strong>"+"<i>个月</i>");
            if(n==1)
            {
                $(this).css("color","#dfdfdf");
            }
        }else{
            n=1;
            $(this).css("color","#dfdfdf");
        }
		/*计算还款数开始*/
		//获取月份
		month = parseInt($("#show_month").find("strong").html());
		//转换整型
		num = parseInt($("#show_money").find("strong").html());
		num = parseInt(num,10);
		//月利率加法运算  24% / 12= 2%
		rate = accAdd(1,0.02);
		//进行利率乘方运算
		rate_power = Math.pow(rate,month);
		//分子利率乘法运算
		mem_rate = accMul(0.02,rate_power);
		//分子本金运算
		cap_rate = accMul(num,mem_rate);
		//进行分步运算 计算分母
		den_rate = accSubtr(rate_power,1);
		//整合除法运算 
		 res_rate = accDiv(cap_rate,den_rate);
		//最终结果
		refund = accAdd(res_rate,40);
		/*计算还款数结束*/
		//向上进一
		refund = Math.ceil(refund);
		$("#money_num").html(refund);
		$("#month_num").html(month);
    })
    //////////////////////////////////////////////////////////////////////////////////
    var start_left,month_left,new_left0,new_left1,new_left,moneyNum,
        money_move=document.getElementById("money_move"),
        month_move=document.getElementById("month_move");
    function rangeControl(num,max){
        num = Math.max(num,0);
        return Math.min(num,max);
    }
    //var Mebili=parseInt(range_width/45),total;
    //var Mebili=accDiv(range_width-15,45),total;
    var Mebili=bili,total;
    util.toucher(money_move).on('swipeStart',function(e){
		//点击
        start_left=parseInt($("#money_move").css("left"));
        return false;
    }).on('swipe',function(e){
		//滑动
        new_left=start_left+ e.moveX;
        //console.log(e.moveX,new_left);
        if(new_left>=-15&& new_left<=$(".dd_rang").width()-15)
        {
            moneyNum=Math.floor(new_left/Mebili);
            console.log(new_left,moneyNum);

            if($(window).width()<409){
                if(new_left==-15)
                {
                    moneyNum=-3;
                }
                else if(new_left==range_width-15)
                {
                    moneyNum=42;
                }
                moneyNum=moneyNum+3;
            }
            else{
                if(new_left==-15)
                {
                    moneyNum=-2;
                }
                else if(new_left==range_width-15)
                {
                    moneyNum=43;
                }
                moneyNum=moneyNum+2;
            }
            total=moneyNum*100+500;
            $("#money_plus").css("color","#ff4201");
            $("#money_minus").css("color","#ff4201");
            if(total>=5000)
            {
                $("#money_plus").css("color","#dfdfdf");
                total=5000
            }else if(total<=500){
                $("#money_minus").css("color","#dfdfdf");
                total=500;
            }


                $("#show_money").html("<strong>"+total+"</strong><i>元</i>");
                $("#money_moved").css({width:new_left+15});
                $(this).css({left: new_left});
				/*计算还款数开始*/
				//获取月份
				month = parseInt($("#show_month").find("strong").html());
				//转换整型
				//num = parseInt($("#show_money").find("strong").html());
				num = parseInt(total,10);
				//月利率加法运算  24% / 12= 2%
				rate = accAdd(1,0.02);
				//进行利率乘方运算
				rate_power = Math.pow(rate,month);
				//分子利率乘法运算
				mem_rate = accMul(0.02,rate_power);
				//分子本金运算
				cap_rate = accMul(num,mem_rate);
				//进行分步运算 计算分母
				den_rate = accSubtr(rate_power,1);
				//整合除法运算 
				 res_rate = accDiv(cap_rate,den_rate);
				//最终结果
				refund = accAdd(res_rate,40);
				/*计算还款数结束*/
				//向上进一
				refund = Math.ceil(refund);
				$("#money_num").html(refund);

        }
		
        return false;
    }).on('swipeEnd',function(e){
		//结束
        num=total;
        i=moneyNum;
        return false;
    });
  /////////////////////////////////////////////////////////////////////////////
    //月份
    //var M_bili=range_width/ 6,month;
    var M_bili=accDiv(range_width,6),month;
    //console.log(M_bili);
    util.toucher(month_move).on('swipeStart',function(e){
        month_left=parseInt($("#month_move").css("left"));  //当前left值
        return false;
    }).on('swipe',function(e){
        new_left1=month_left+e.moveX;
        if(new_left1>-15 && new_left1<$(".dd_rang").width()-15)
        {
            month=parseInt(new_left1/M_bili)+1;
            //console.log(month);
            $("#month_plus").css("color","#ff4201");
            $("#month_minus").css("color","#ff4201");
            if(month==1)
            {
                $("#month_minus").css("color","#dfdfdf");
            }
            else if(month==6)
            {
                $("#month_plus").css("color","#dfdfdf");
            }
            $("#show_month").html("<strong>"+month+"</strong>"+"<i>个月</i>");
            $("#month_moved").css({width:new_left1+15});
            $(this).css({left: new_left1});
			/*计算还款数开始*/
			//获取月份
			month = parseInt($("#show_month").find("strong").html());
			//转换整型
			num = parseInt($("#show_money").find("strong").html());
			num = parseInt(num,10);
			//月利率加法运算  24% / 12= 2%
			rate = accAdd(1,0.02);
			//进行利率乘方运算
			rate_power = Math.pow(rate,month);
			//分子利率乘法运算
			mem_rate = accMul(0.02,rate_power);
			//分子本金运算
			cap_rate = accMul(num,mem_rate);
			//进行分步运算 计算分母
			den_rate = accSubtr(rate_power,1);
			//整合除法运算 
			 res_rate = accDiv(cap_rate,den_rate);
			//最终结果
			refund = accAdd(res_rate,40);
			/*计算还款数结束*/
			//向上进一
			refund = Math.ceil(refund);
			$("#money_num").html(refund);
			$("#month_num").html(month);
        }
        return false;
    }).on('swipeEnd',function(e){
        n=month;
        return false;
    });
})