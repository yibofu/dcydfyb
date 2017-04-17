<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="jquery,ui,easy,easyui,web">
    <meta name="description" content="easyui help you build your web page easily!">
    <title>课程详情页</title>
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css?v=<?php echo date('Ymjs') ?>">
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css?v=<?php echo date('Ymjs') ?>">
    <!--<link rel="stylesheet" type="text/css" href="/Public/admin/css/uploadify.css">-->
    <script type="text/javascript" src="/Public/admin/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
    <!--<script type="text/javascript" src="/Public/admin/js/jquery.uploadify.min.js"></script>-->

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
				url: '<?php echo U('Up/details');?>',
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
        <th field="url" align="center" width="15%">视频</th>
        <th field="title" align="center" width="10%" >直播标题</th>
        <th field="name" align="center" width="10%" >讲师名字</th>
        <th field="money" align="center" width="15%" >视频价钱</th>
        <th field="introduce" align="center" width="15%" >课程介绍</th>
        <th field="explain" align="center" width="15%" >专家讲解</th>
        <th field="comment" align="center" width="15%" >学员评论</th>
        <th field="chapter" align="center" width="15%" >课程章节</th>
        <th field="img" align="center" width="15%" formatter="imgFormatter">直播图片</th>
        <th field="teacherimg" align="center" width="15%" formatter="imgFormatter1">老师图片</th>
        <th field="chapternum" align="center" width="10%" >章节数</th>
        <th field="ytime" align="center" width="15%" >直播时间</th>
        <th field="kind" align="center" width="15%">视频类别</th>
        <th field="f" align="center" width="30%" formatter="show_manger">操作</th>
    </tr>
    </thead>
</table>
<div id="toolbar" style="height:40px;">
    <div>
        <table>
            <tr>
                <td>标题:<input class="easyui-validatebox" id="title" type="text" name="title" size="14" ></td>
                <td>讲师名称:<input class="easyui-validatebox" id="name" type="text" name="name" size="15" ></td>
                <td>发布时间：<input style="width:90px;"   type="text"  class="Wdate"  onClick="WdatePicker()" id="ytime" name="ytime"></td>
                <td>
                    <a href="javascript:void(0)" iconCls="icon-search" class="easyui-linkbutton" onClick="doSearch()">查询</a>
                </td>
            </tr>
        </table>
    </div>
</div>

<!--修改-->
<div id="dlgup" class="easyui-dialog" title="修改" closed="true" buttons="#dlg-button" style="width:500px;height:500px;">
    <form id="fmup" method="post" enctype="multipart/form-data">
        <div class="fitem">
            <label>视频:</label>
            <input name="url"  class="easyui-validatebox" style="width:200px;" readonly="readonly">
        </div>

        <div class="fitem">
            <label>直播标题:</label>
            <input name="title"  class="easyui-validatebox" style="width:200px;">
        </div>
        <div class="fitem">
            <label>讲师名称:</label>
            <input name="name"  class="easyui-validatebox" style="width:200px;">
        </div>
        <div class="fitem">
            <label>视频价钱:</label>
            <input name="money"  class="easyui-validatebox" style="width:200px;">
        </div>
        <div class="fitem">
            <label>课程介绍:</label>
            <input name="introduce"  class="easyui-validatebox" style="width:200px;">
        </div>
        <div class="fitem">
            <label>专家讲解:</label>
            <input name="explain"  class="easyui-validatebox" style="width:200px;">
        </div>
        <div class="fitem">
            <label>学员评论:</label>
            <input name="comment"  class="easyui-validatebox" style="width:200px;">
        </div>
        <div class="fitem">
            <label>课程章节:</label>
            <input name="chapter"  class="easyui-validatebox" style="width:200px;">
        </div>
        <!--<div class="fitem">-->
            <!--<label>直播图片:</label>-->
            <!--<input type="file" name="img">-->
        <!--</div>-->
        <!--<div class="fitem">-->
            <!--<label>老师图片:</label>-->
            <!--<input type="file" name="teacherimg">-->
        <!--</div>-->
        <div class="fitem">
            <label>章节数:</label>
            <input name="kind"  class="easyui-validatebox" style="width:200px;">
        </div>
        <div class="fitem">
            <label>视频类别:</label>
            <input name="chapternum"  class="easyui-validatebox" style="width:200px;">
        </div>
        <div class="fitem">
            <label>直播预告时间:</label>
            <input style="width:90px;"   type="text"  class="Wdate"  onClick="WdatePicker()" id="ytime" name="ytime">
        </div>

        <div id="dlg-button">
            <a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onClick="saveup()">保存修改</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlgup').dialog('close')">取消</a>
        </div>
    </form>
</div>

<!--图片-->
<div id="dlgimg" class="easyui-dialog" title="修改" closed="true" buttons="#dlg-button" style="width:400px;height:320px;">
    <form id="fmimg" method="post" enctype="multipart/form-data">
        <div class="fitem">
            <label>图片:</label>
            <input type="file" name="img">
        </div>
        <div id="dlg-button">
            <a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onClick="saveimg()">保存修改</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlgimg').dialog('close')">取消</a>
        </div>
    </form>
</div>

<!--视频-->
<div id="dlgimgt" class="easyui-dialog" title="修改" closed="true" buttons="#dlg-button" style="width:400px;height:320px;">
    <form id="fmimgt" method="post" enctype="multipart/form-data">
        <div class="fitem">
            <label>视频:</label>
            <input type="file" name="teacherimg" id="teacherimg">
        </div>
        <div id="dlg-button">
            <a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onClick="saveimgt()">保存修改</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlgimgt').dialog('close')">取消</a>
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

    function imgFormatter1(value,row,index){
        if('' != value && null != value)
            value = '<img style="width:50px; height:50px" src="' + value + '">';
        return  value;

    }
    //搜索
    function doSearch(){
        $('#dg').datagrid('load',{
            title: $('#title').val(),
            content: $('#content').val(),
        });
    }

    //管理回调
    function show_manger(val,row){

        return "<a href='javascript:;' class='easyui-linkbutton' iconCls='icon-edit' onclick='upimg("+row.id+")' >直播图片</a>/" +
                "<a href='javascript:;' class='easyui-linkbutton' iconCls='icon-edit' onclick='upimgt("+row.id+")' >老师图片</a>/" +
                "<a href='javascript:;' class='easyui-linkbutton' iconCls='icon-edit' onclick='edit("+row.id+")' >完善消息</a>"
    }

    //直播图片
    function upimg(id){
        $.ajax({
            type:'post',
            url:"__APP__/Up/upimg",
            data:{id:id},
            success:function(data){
                row = eval('('+data+')');
                if (row){
                    $('#fmimg').form('clear');
                    $('#dlgimg').dialog('open');
                    url = "<?php echo U('Up/imgsave');?>&id="+id;
                    $('#fmimg').form('load',row);
                }else{
                    $.messager.show({
                        title: '出错啦！！',
                        msg: '请选择一条'
                    });
                }
            }
        });
    }
    //    保存图片
    function saveimg(){
        $('#fmimg').form('submit',{
            url: url,
            onSubmit: function(){
                return $(this).form('validate');
            },
            success: function(result){
                var result = eval('('+result+')');
                if (result.success){
                    $('#dlgimg').dialog('close');		// close the dialog
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




    //    视频
    function upimgt(id){
        $.ajax({
            type:'post',
            url:"__APP__/Up/upimgt",
            data:{id:id},
            success:function(data){
                row = eval('('+data+')');
                if (row){
                    $('#fmimgt').form('clear');
                    $('#dlgimgt').dialog('open');
                    url = "<?php echo U('Up/saveimgt');?>&id="+id;
                    $('#fmimgt').form('load',row);
                }else{
                    $.messager.show({
                        title: '出错啦！！',
                        msg: '请选择一条'
                    });
                }
            }
        });
    }
    //    视频
    function saveimgt(){
        $('#fmimgt').form('submit',{
            url: url,
            onSubmit: function(){
                return $(this).form('validate');
            },
            success: function(result){
                var result = eval('('+result+')');
                if (result.success){
                    $('#dlgimgt').dialog('close');		// close the dialog
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

    //展示修改信息
    function add(){
        $('#fm').form('clear');
        $('#dlg').dialog('open').dialog('setTitle','发布消息');
        url = "<?php echo U('Content/bossadd');?>";

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
        $('#fmup').form('submit',{
            url: url,

            onSubmit: function(){
                return $(this).form('validate');
            },
            success: function(result){

                var result1 = eval('('+result+')');
                if (result1.success){
                    $('#dlgup').dialog('close');		// close the dialog
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
            url:"__APP__/Up/detailedit",
            data:{id:id},
            success:function(data){
                row = eval('('+data+')');
                if (row){
                    $('#fmup').form('clear');
                    $('#dlgup').dialog('open');
                    url = "<?php echo U('Up/detailsave');?>&id="+id;
                    $('#fmup').form('load',row);
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
            url:"__APP__/Content/bossdel",
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