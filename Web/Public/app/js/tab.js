// JavaScript Document

function hxsd_tab(id,autoplay){//tab盒子的id，  autoplay：true false
	
	var oTab=document.getElementById(id);
	var aLi=oTab.getElementsByTagName('li');
	var aDiv=oTab.getElementsByTagName('div');
	
	var autoPlay_num=0;//自动播放 传入的编号
	var timer;//计时器用变量
	
	//选项卡
	for(var i=0;i<aLi.length;i++){
		aLi[i].index=i;
		aLi[i].onclick=function(){
			for(var i=0;i<aLi.length;i++){
				aLi[i].className='';	
				
				aDiv[i].style.display="none";
			};		
			this.className='ac';
			aDiv[this.index].style.display="block";
			autoPlay_num=this.index;
		};	
	};
	
	function autoPlay(){
		function auto_run(){
		timer=setInterval(function(){
			function tab_change(index){
				for(var i=0;i<aLi.length;i++){
					for(var i=0;i<aLi.length;i++){
						aLi[i].className='';	
						aDiv[i].style.display="none";
					};		
					aLi[autoPlay_num].className='ac';
					aDiv[autoPlay_num].style.display="block";
				};
			};
			
			tab_change(autoPlay_num);
				autoPlay_num++;
				if(autoPlay_num==3) autoPlay_num=0;
			},1000);
		};
		auto_run();
		
		oTab.onmouseover=function(){
			clearInterval(timer);
		};
		oTab.onmouseout=function(){
			auto_run();
		};
	};
	
	if(autoplay) autoPlay(); 

}


