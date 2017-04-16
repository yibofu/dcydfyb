<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="/Public/app/js/qrcode.js"></script>
	<script type="text/javascript" src="/Public/app/js/Base.js"></script>
	<script type="text/javascript" src="/Public/app/js/prototype.js"></script>
	<script type="text/javascript" src="/Public/app/js/mootools.js"></script>
	<script type="text/javascript" src="/Public/app/js/Ajax/ThinkAjax.js"></script>
	<script language="JavaScript">
	    function Check()
	    {
	    	var out_trade_no = "<?php echo $out_trade_no; ?>"; 
	    	ThinkAjax.send('__URL__/orderQuery','ajax=1&out_trade_no='+out_trade_no,goto);
	    }
	    function goto(data,status){
	    	if (status==1)
	    	{
	    		alert("支付成功！");//弹出信息
	    		window.location.href='Index';//跳转地址
	    	}
	    	}
	    window.setInterval("Check()",3000); 
	</script>
</head>
<body>
	<center>
	</center>
    <div align="center" id="qrcode">
    </div>
    <div align="center">
        <p>订单号：<?php echo $out_trade_no; ?></p>
    </div>
    <br>
    </div>
    <br>
</body>
    <script>
        if(<?php echo $unifiedOrderResult["code_url"] != NULL;?>)
        {
            var url = "<?php echo $code_url;?>";
//            参数1表示图像大小，取值范围1-10；参数2表示质量，取值范围'L','M','Q','H'
            var qr = qrcode(10, 'H');
            qr.addData(url);
            qr.make();
            var wording=document.createElement('p');
            wording.innerHTML = "大财有道微信扫码支付测试";
            var code=document.createElement('DIV');
            code.innerHTML = qr.createImgTag();
            var element=document.getElementById("qrcode");
            element.appendChild(wording);
            element.appendChild(code);
        }
    </script>
</html>