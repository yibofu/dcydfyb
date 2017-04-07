// JavaScript Document

//选项卡------------------------------------------------------------
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
		}
		auto_run();
		
		oTab.onmouseover=function(){
			clearInterval(timer);
		};
		oTab.onmouseout=function(){
			auto_run();
		};
	}
	
	if(autoplay) autoPlay(); 

}
//placeholder------------------------------------------------------------

function placeholder(element,text){//标签    文本
		element.value=text;
		element.style.color="#ccc";
	
		element.onfocus=function(){
			if(this.value==text){
				this.value="";
				this.style.color="#000";
			}
		};
		element.onblur=function(){
			if(this.value==""){
				this.value=text;
				this.style.color="#ccc";
			}
		};
	};
//居中显示弹框-------------------------------------------------------------------
function popShow(elm){
	elm.style.display="block";
	var l=(document.documentElement.clientWidth-elm.offsetWidth)/2;
	var t=(document.documentElement.clientHeight-elm.offsetHeight)/2;
	elm.style.left=l+'px';
	elm.style.top=t+'px';
};


//拖拽组建--------------------------------------------------------------------
function drag(box,title){
	//当我传入一个参数，box，拖拽box
	//当我传入2个参数，拖拽就在title
	var handle;
	title?handle=title:handle=box;

//点击事件 title
	handle.onmousedown=function(ev){//按下时机  记录下鼠标的错位位置
		var oEv=ev || window.event;
		var disX=oEv.clientX-box.offsetLeft;//left方向
		var disY=oEv.clientY-box.offsetTop;// top 方向
	
		//鼠标移动的对象应该是document
		document.onmousemove=function(ev){//移动拖拽
			var oEv=ev || window.event;
			var l=oEv.clientX-disX;
			var t=oEv.clientY-disY;
			
			//判断屏幕范围
			if(l<0)l=0;
			if(t<0)t=0;
			if(l>document.documentElement.clientWidth-box.offsetWidth)l=document.documentElement.clientWidth-box.offsetWidth;
			if(t>document.documentElement.clientHeight-box.offsetHeight)t=document.documentElement.clientHeight-box.offsetHeight;
			
			//最后赋值
			box.style.left=l+'px';
			box.style.top=t+'px';
		};
		return false;
	};

	//释放鼠标move事件
	document.onmouseup=function(){document.onmousemove=null}
	
}