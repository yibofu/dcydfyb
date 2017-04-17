<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="jquery,ui,easy,easyui,web">
    <meta name="description" content="easyui help you build your web page easily!">
    <title>落地页</title>
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css?v=<?php echo date('Ymjs') ?>">
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css?v=<?php echo date('Ymjs') ?>">
    <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>

    <style type="text/css">
        #fm{
            margin:0;
            padding:10px 30px;
        }
        .ftitle{
            font-size:14px;
            font-weight:bold;
            color:#666;
            padding:5px 0;
            margin-bottom:10px;
            border-bottom:1px solid #ccc;
        }
        .fitem{
            margin-bottom:5px;
        }
        .fitem label{
            display:inline-block;
            width:80px;
        }
    </style>
</head>
<body>
<table id="dg" class="easyui-datagrid" toolbar="#toolbar" style="width:90%px;height:80%px"
       data-options="
				url: '<?php echo U('Popularize/freelist');?>',
				rownumbers: true,
				fit:true,
				fitColumns:true,    //让列自适应表格的宽度。
				pagination: true,
				pageNumber:1,
				pageSize:20,
				pageList: [20,30],
				idField: 'id',
				singleSelect: false,
			"
>
    <thead>
    <tr>
        <th field="id" align="center" width="10%">id</th>
        <th field="namefree" align="center" width="10%">姓名</th>
        <th field="phonefree" align="center" width="30%" >电话</th>
        <th field="sexfree" align="center" width="10%" formatter="show_sex">性别</th>
        <th field="time" align="center" width="20%" >报名时间</th>
        <th field="status" align="center" width="10%" formatter="show_status">状态</th>
        <th field="f" align="center" width="10%" formatter="show_manger">操作</th>
    </tr>
    </thead>
</table>
<div id="toolbar" style="height:40px;">
    <div>
        <table>
            <tr>
                <td>姓名:<input class="easyui-validatebox" id="name" type="text" name="name" size="14" ></td>
                <td>手机:<input class="easyui-validatebox" id="phone" type="text" name="phone" size="15" ></td>
                <!--<td>提问时间:<input style="width:90px;"   type="text"  class="Wdate"  onClick="WdatePicker()" id="start" name="start"></td>-->
                <td>
                    <a href="javascript:void(0)" iconCls="icon-search" class="easyui-linkbutton" onClick="doSearch()">查询</a>
                </td>
            </tr>
        </table>
    </div>
</div>
</body>
<script type="text/javascript">
    var url;
    //搜索
    function doSearch(){
        $('#dg').datagrid('load',{
            name: $('#name').val(),
            phone: $('#phone').val(),
        });
    }

    //管理回调
    function show_manger(val,row){
        return "<a href='javascript:;' class='easyui-linkbutton' iconCls='icon' onclick='fabu("+row.id+")'>发布</a>&nbsp;/&nbsp;" +
                "<a href='javascript:;' class='easyui-linkbutton' iconCls='icon-cancel' onclick='del("+row.id+")' >删除消息</a>";

    }

    function show_sex(val,row){
        if(val == 1){
            val = "<span>男</span>";
        }else if(val == 2){
            val = "<span>女</span>";
        }
        return val;
    }

    function show_status(val,row){
        if(val == 1){
            val = "<span style='color:red'>未解决</span>";
        }else if(val == 2){
            val = "<span style='color: green'>已解决</span>";
        }
        return val;
    }

    function fabu(id){
        $.ajax({
            type:'post',
            url:'__APP__/Popularize/show',
            data:{id:id},
            success:function(data){
                var row = eval("("+data+")");
                if(row){
                    $("#dg").datagrid("reload",row);
                }else{
                    $.messager.show({
                        title:'出错了！',
                        msg:'请选择一条'
                    })
                }
            }
        })
    }

    //删除
    function del(id){
        $.ajax({
            type:'post',
            url:"__APP__/Popularize/popufreedel",
            data:{id:id},
            success:function(data){
                row = eval('('+data+')');
                if (row){
                    $('#dg').datagrid('reload');
                }else{
                    $.messager.show({
                        title: '出错啦！！',
                        msg: '请选择一条'
                    });
                }
            }
        });
    }
</script>

</html>