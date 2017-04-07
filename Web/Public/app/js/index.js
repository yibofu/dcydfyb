$(function(){
	// console.log($('.pages').length);
	// console.log($('.btn-li').length);
	var oLi = $('.btn-li');
	var oDiv = $('.pages');
	var pre = $('#pre');
	var pre = $('#next');
	var num = 0;
	for(var i=0;i<oLi.length;i++){
	    oLi[i].index=i;
	    oLi[i].onclick=function(){
	        for(var j=0;j<oLi.length;j++){
	            oLi[j].className="";
	            oDiv[j].style.display="none";
				oLi[j].style.color='#000';
			};
	        this.className="active";
	        oDiv[this.index].style.display="block";
	        num=this.index;
			oLi[this.index].style.color='#c00';

		};
	    console.log(num)

	}
})