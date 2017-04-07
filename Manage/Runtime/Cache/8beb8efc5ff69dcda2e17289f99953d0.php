<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>文件上传</title>
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/styleoss.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css?v=<?php echo date('Ymjs') ?>">
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css?v=<?php echo date('Ymjs') ?>">
    <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <style type="text/css">
        ul li{
            margin-top:12px;
        }
        ul li span{
            color:red;
        }
    </style>

</head>

<body>
<div align="center">

    <form id="form1" runat="server">
        <div>
        </div>
    </form>
    <br>
    <h4 id="h4">文件上传</h4>
    <div id="ossfile"></div>
    <br/>
    <div id="container">
        <a id="selectfiles" href="javascript:void(0);" class='btn'>选择文件</a>
        <a id="postfiles" href="javascript:void(0);" class='btn'>开始上传</a>
        <!--<a id="getlink" href="javascript:void(0);" class="btn">保存数据</a>-->
        <a href="default.php" class='btn'>取消上传</a>
    </div>
    <br/>
    <ul style="list-style-type:none">
        <li>直播名称：<input class="easyui-validatebox" type="text" name="title"></li>
    </ul>
    <a id="getlink" href="javascript:void(0);" class="btn">保存数据</a>
    <pre id="console"></pre>
    <p>&nbsp;</p>
</div>
<div>
    <div class="div_1" style="width: 200px;height: 100px; "></div>
    <div class="div_video">
    </div>
</div>
</body>

<script type="text/javascript" src="/Public/admin/js/ups5.js"></script>
<script type="text/javascript" src="/Public/admin/js/ups2.js"></script>
<script type="text/javascript" src="/Public/admin/js/ups3.js"></script>
<script type="text/javascript" src="/Public/admin/js/ups1.js"></script>
<script type="text/javascript" src="/Public/admin/js/ups4.js"></script>
<script type="text/javascript" src="/Public/admin/js/upload.js"></script>
<script src="/Public/admin/js/jquery1.42.min.js" type="text/javascript"></script>
<script language="JavaScript">

    $("#getlink").bind('click',function(){
        var src = $('.div_1').text();
        var title = $("input[name='title']").val();
        $.ajax({
            type:"post",
            url:"<?php echo U('Up/uploads');?>",
            data:{'src':src,"title":title},
            success:function(data){
                var row = eval("("+data+")");
                if(row){
                    alert("获取成功");
                }
            }
        })
    })
</script>
</html>