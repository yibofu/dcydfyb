<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="jquery,ui,easy,easyui,web">
    <meta name="description" content="easyui help you build your web page easily!">
    <title>发布文章</title>
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
				url: '<?php echo U('Kecheng/cwtlist');?>',
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
        <th field="tid" align="center" width="5%">tid</th>
        <th field="address" align="center" width="10%">授课地址</th>
        <th field="startime" align="center" width="10%">授课开始时间</th>
        <th field="endtime" align="center" width="10%">授课结束时间</th>
        <th field="price" align="center" width="10%">课程价钱</th>
        <th field="teacher" align="center" width="15%" >授课讲师</th>
        <th field="f" align="center" width="15%" formatter="show_manger">操作</th>
    </tr>
    </thead>
</table>
<div id="toolbar" style="height:40px;">
    <div>
        <table>
            <tr>
                <td>
                    <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="add()">发布课程信息</a>
                </td>
                <!--<td>老师:<input class="easyui-validatebox" id="title" type="text" name="title" size="14" ></td>-->
                <!--<td>价钱:<input class="easyui-validatebox" id="content" type="text" name="content" size="15" ></td>-->
                <!--<td>地址:<input class="easyui-validatebox" id="describe" type="text" name="title" size="14" ></td>-->
                <!--<td>-->
                    <!--<a href="javascript:void(0)" iconCls="icon-search" class="easyui-linkbutton" onClick="doSearch()">查询</a>-->
                <!--</td>-->
            </tr>
        </table>
    </div>
</div>
<!--新增-->
<div id="dlg" class="easyui-dialog" title="设置" closed="true" buttons="#dlg-button" style="width:600px;height:500px;">
    <form id="fm" method="post" enctype="multipart/form-data">
        <div class="fitem">
            <label>授课地址:</label>
            <input name="address"  class="easyui-validatebox" style="width:300px;">
        </div>
        <div class="fitem">
            <label>授课时间:</label>
            <input type="text" name="startime" onClick="WdatePicker()" class="Wdate" style="width:105px;">至
            <input type="text" name="endtime" class="Wdate" onclick="WdatePicker()" style="width:105px;">
        </div>
        <div class="fitem">
            <label>课程价钱:</label>
            <input name="price" class="easyui-validatebox" style="width:300px;height:67px;">
        </div>
        <div class="fitem">
            <label>授课讲师:</label>
            <select name="teacher" id="teacher" data-options="panelHeight:'auto',editable:false" class="easyui-combobox">
                <option value="">--请选择--</option>
                <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
        <div id="dlg-button">
            <a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onClick="save()">保存</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">取消</a>
        </div>
    </form>
</div>
</body>
<script type="text/javascript">

    var url;
    //图片
    function imgFormatter(value,row,index){
        if('' != value && null != value)
            value = '<img style="width:50px; height:50px" src="' + value + '">';
        return  value;
    }
    //搜索
    function doSearch(){
        $('#dg').datagrid('load',{
            title: $('#title').val(),
            content: $('#content').val(),
            describe: $('#describe').val(),
            keywords: $('#keywords').val(),
            status: $('#status').val(),
            lanmu: $('#lanmu').val(),
        });
    }
    //管理回调
    function show_manger(val,row){
        return "<a href='javascript:;' class='easyui-linkbutton' iconCls='icon-edit' onclick='edit("+row.id+")' >修改消息</a>&nbsp;/&nbsp;" +
                "<a href='javascript:;' class='easyui-linkbutton' iconCls='icon-cancel' onclick='del("+row.id+")' >删除消息</a>";

    }
    //展示修改信息
    function add(){
        $('#fm').form('clear');
        $('#dlg').dialog('open').dialog('setTitle','发布消息');
        url = "<?php echo U('Kecheng/cwtadd');?>";
    }

    //增加提交
    function save(){
        $('#fm').form('submit',{
            url: url,
            onSubmit: function(){
                return $(this).form('validate');
            },
            success: function(result){
                var result = eval('('+result+')');
                if (result.success){
                    $('#dlg').dialog('close');		// close the dialog
                    $('#dg').datagrid('reload');	// reload the user data
                    $.messager.show({
                        title: '消息',
                        msg: result.msg
                    });
                }else{
                    $.messager.show({
                        title: '出错啦！！',
                        msg: result.msg
                    });
                }
            }
        });
    }

    //修改提交
    function saveup(){
        $('#fm').form('submit',{
            url: url,

            onSubmit: function(){
                return $(this).form('validate');
            },
            success: function(result){

                var result1 = eval('('+result+')');
                if (result1.success){
                    $('#dlg').dialog('close');		// close the dialog
                    $('#dg').datagrid('reload');	// reload the user data
                    $.messager.show({
                        title: '消息',
                        msg: result1.msg
                    });
                }else{
                    $.messager.show({
                        title: '出错啦！！',
                        msg: result1.msg
                    });
                }
            }
        });
    }

    function edit(id){
        $.ajax({
            type:'post',
            url:"__APP__/Kecheng/cwtedit",
            data:{id:id},
            success:function(data){
                row = eval('('+data+')');
                if (row){
                    $('#fm').form('clear');
                    $('#dlg').dialog('open');
                    url = "<?php echo U('Kecheng/cwtsave');?>&id="+id;
                    $('#fm').form('load',row);
                }else{
                    $.messager.show({
                        title: '出错啦！！',
                        msg: '请选择一条'
                    });
                }
            }
        });
    }

    //删除
    function del(id){
        $.ajax({
            type:'post',
            url:"__APP__/Kecheng/cwtdel",
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