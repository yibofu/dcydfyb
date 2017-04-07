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

/*md5(密码.lypt) 从第八位截取，截取20位。*/
function set_password($p,$tail,$start=8,$len=20)
{
	return substr(md5($p.$tail),$start,$len);	
}


/**
 * 删除文件
 * @para:  带路径的文件名
 * @return  1 成功 0 失败 
 */
function wxy_del_file($file)
{
	if(file_exists($file))
	{
		if(unlink($file))
		{
			return 1;
		}
		else 
		{
			return 0;
		}
	}
	return 0;
}

/**
 * 获取指定长度随机数、数字型
 * 
 */ 
	function getrand($len)
	{
		$a="";
		for($i=0;$i<$len;$i++)
		{
			$a.=mt_rand(0,9);	
		}
		return $a;
	}


	/**
	 *@para str 原字符串
	 *@return 半角
	 * 用户输入全集数字，可以转化成半角
	 */

	function banjiao($str)
	{
		$len=strlen($str);
		for($i=0;$i<$len;$i++)
		{
			$m=ord($str[$i]);
			if($m>128 && $m!=161 && $m!=163)
			{
				$i++;
				continue;
			}
	        if(ord($str[$i])==161)
			{
				switch(ord($str[$i+1]))
				{ 
					case 163:	$str[$i]=chr(46); $str=substr($str,0,$i+1).substr($str,$i+2);$len--;  break;
					case 231:	$str[$i]=chr(36); $str=substr($str,0,$i+1).substr($str,$i+2);$len--;  break;
					case 171:	$str[$i]=chr(126);$str=substr($str,0,$i+1).substr($str,$i+2);$len--;  break;
					case 161:   $str[$i]=chr(32); $str=substr($str,0,$i+1).substr($str,$i+2);$len--;  break;
				}
			}
	
			else if(ord($str[$i])==163)
			{
			    $str[$i]=chr(ord($str[$i+1])-128);
				$str=substr($str,0,$i+1).substr($str,$i+2);$len--;
			}
		}
		return trim($str);
	}
	
	/**
	 *@para str 原字符串
	 *@return appkey
	 * 用户输入字符串，返回appkey
	 */
	
	function createAppkey($str){
		$str  = md5($str);
		return $str;
	}
	
	/**
	 *@para str 原字符串
	 *@return appkey
	 * 用户输入字符串，返回appkey
	 */
function createAppSecret($str){
	$str .='lypt';
	$str  = md5($str);
	return $str;
}
	
	
	
	/**
	 * 开启memcache
	 * @param ip port
	 *
	 * @return boolen
	 */
	 
	function create_memcache($ip,$port) 
	{
		if (extension_loaded('memcache'))
		{
			$memcache = new Memcache();
			if($memcache->connect($ip,$port))
			{
				return $memcache;
			}
			else 
			{
				return false;
			} 
		} 
		else
		{
			return false;
		}
	}
	
	
	
	
	
?>