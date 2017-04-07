<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.all.min.js"> </script>
</head>
<body>
<form action="">
    <div>
        <label for="">标题：</label>
        <input type="text" name="title">
    </div>
    <div>
        <label for="">关键字：</label>
        <input type="text" name="keywords">
    </div>
    <div>
        <label for="">栏目：</label>
        <input type="text" name="title">
    </div>
    <script id="container" name="content" type="text/plain">

    </script>
</form>

</body>
<script type="text/javascript">
    var ue = UE.getEditor('container');
</script>
</html>