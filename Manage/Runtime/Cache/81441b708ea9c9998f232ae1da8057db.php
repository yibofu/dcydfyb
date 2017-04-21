<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="jquery,ui,easy,easyui,web">
    <meta name="description" content="easyui help you build your web page easily!">
    <title>约见谈</title>
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css?v=<?php echo date('Ymjs') ?>">
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css?v=<?php echo date('Ymjs') ?>">
    <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
    <script  type="text/javascript" src="/Public/admin/js/DatePicker/WdatePicker.js"></script>
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
				url: '<?php echo U('Yuejt/onelist');?>',
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
        <th field="id" align="center" width="5%">id</th>
        <th field="name" align="center" width="5%">姓名</th>
        <th field="phone" align="center" width="5%" >电话</th>
        <th field="city" align="center" width="20%">城市</th>
        <th field="desc" align="center" width="20%">约见目标</th>
        <th field="time" align="center" width="10%">提问时间</th>
        <th field="status" align="center" width="10%" formatter="show_status">解决情况</th>
        <th field="f" align="center" width="25%" formatter="show_manger">操作</th>
    </tr>
    </thead>
</table>
<div id="toolbar" style="height:40px;">
    <div>
        <table>
            <tr>
                <td>姓名:<input class="easyui-validatebox" id="name" type="text" name="name" size="14" ></td>
                <td>电话:<input class="easyui-validatebox" id="phone" type="text" name="phone" size="15" ></td>
                <td>问题标题:<input class="easyui-validatebox" id="city" type="text" name="city" size="20"></td>
                <td>问题描述:<input class="easyui-validatebox" id="desc" type="text" name="desc" size="20"></td>
                <td>解决情况:
                    <select name="status" id="status">
                        <option value="">--请选择--</option>
                        <option value="1">未解决</option>
                        <option value="2">已解决</option>
                    </select>
                </td>
                <td>
                    <a href="javascript:void(0)" iconCls="icon-search" class="easyui-linkbutton" onClick="doSearch()">查询</a>
                </td>
            </tr>
        </table>
    </div>
</div>


<!--查看问题描述-->
<div id="look" class="easyui-dialog" title="问题描述" closed="true" buttons="#dlg-button" style="width: 400px;height: 320px;">
    <div class="fitem">
        <label>问题的详细描述</label>
        <textarea name="desc" class="easyui-validatebox" cols="30" rows="10"></textarea>
    </div>
    <div id="dlg-button">
        <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#look').dialog('close')">取消</a>
    </div>
</div>

</body>
<script type="text/javascript">
    var url;

    function show_status(val,row){
        if(val == 1){
            val =  '<span style="color:red;">未解决</span>';
        }else if(val == 2){
            val =  '<span style="color: green;" >已解决</span>';
        }
        return val;
    }

    //管理回调
    function show_manger(val,row){
        var str ="";
        str = "<a href = 'javascript:;' onclick='manage("+row.id+")'>点击确认已解决</a> / " +
                "<a href='javascript:;' onclick='manage1("+row.id+")'>取消确认</a> / " +
                "<a href='javascript:;' onclick='manage2("+row.id+")'>点击查看约见目标</a>";
        return str;
    }

    function manage(id){
        $.ajax({
            type:"post",
            url:"__APP__/Yuejt/queren",
            data:{id:id},
            success:function(data){
                row = eval('('+data+')');
                if(row){
                    $('#dg').datagrid('reload',row);
                }else{
                    $.messager.show({
                        title:'出错了！',
                        msg:'请选择一条'
                    });
                }
            }
        })
    }
    function manage1(id){
        $.ajax({
            type:"post",
            url:"__APP__/Yuejt/quxiao",
            data:{id:id},
            success:function(data){
                row = eval('('+data+')');
                if(row){
                    $('#dg').datagrid('reload',row);
                }else{
                    $.messager.show({
                        title:'出错了！',
                        msg:'请选择一条'
                    });
                }
            }
        })
    }

    function manage2(id){
        $.ajax({
            type:"POST",
            url:"<?php echo U('Yuejt/look');?>",
            data:{id:id},
            success:function(data){
                row = eval('('+data+')');
                if(row){
                    $("#look").dialog('open');
                    $("#look").find('textarea[name=desc]').text(row.desc)
                }else{
                    $.messager.show({
                        title:'出错了!!',
                        msg:'请选择一条信息'
                    })
                }
            }
        })
    }
    //搜索
    function doSearch(){
        $('#dg').datagrid('load',{
            name: $('#name').val(),
            phone: $('#phone').val(),
            city: $('#city').val(),
            desc: $('#desc').val(),
            status: $('#status').val(),
        });
    }


</script>

</html>