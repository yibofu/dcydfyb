<?php
/**
* 定义一些公用函数
* 2014-02-27
*/
 

/**
 * $p		原密码
 * $tail	加到密码后面的字符	 	
 * $start	截取位置
 * $len		取得字符串长度
 * @return  返回指定长度的字符串
  
*/
function filtrate($value,$key,$word){
	$position = strstr($value,$word);
	if($position){
		return true;
	}else{
		return false;
	}
}

?>