<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>Hello, World</title>  
<style type="text/css">  
html{height:100%}  
body{height:100%;margin:0px;padding:0px}  
#container{height:100%}  
</style>  
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Dx3KpcooNrXbBCMhlkjn7gGh">
//v2.0版本的引用方式：src="http://api.map.baidu.com/api?v=2.0&ak=您的密钥"
//v1.4版本及以前版本的引用方式：src="http://api.map.baidu.com/api?v=1.4&key=您的密钥&callback=initialize"
</script>
</head>  
<body>  
<div id="container"></div> 
<script type="text/javascript"> 
var map = new BMap.Map("container",{minZoom:12,maxZoom:18});          // 创建地图实例  
var point = new BMap.Point(<?php echo ($info["coordinate"]); ?>);  // 创建点坐标  
map.centerAndZoom(point, 15);                 // 初始化地图，设置中心点坐标和地图级别 
map.addControl(new BMap.NavigationControl());    
map.addControl(new BMap.MapTypeControl());    


//var myIcon = new BMap.Icon("http://developer.baidu.com/map/jsdemo/img/fox.gif", new BMap.Size(300,157));
//var marker = new BMap.Marker(point,{icon:myIcon});  // 创建标注
var marker = new BMap.Marker(point);  // 创建标注
map.addOverlay(marker);  
marker.setAnimation(BMAP_ANIMATION_BOUNCE); 

var opts = {
	  title: '<?php echo ($info["title"]); ?>',
	  width : 200,     // 信息窗口宽度
	  height: 30,     // 信息窗口高度
	  enableMessage:false,//设置允许信息窗发送短息
	}
	
var infoWindow = new BMap.InfoWindow("地址:<?php echo ($info["address_detail"]); ?>", opts);  // 创建信息窗口对象 
	map.openInfoWindow(infoWindow,point);
	marker.addEventListener("click", function(){          
		map.openInfoWindow(infoWindow,point); //开启信息窗口
	});
	

</script>  
</body>  
</html>