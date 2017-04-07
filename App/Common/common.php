<?php
	/*
	**  分配uid
	**
	*/
	function get_codes(){
		$code = mt_rand(10000,99999);
		$user = M("user");
		$is_has = $user->where('userid='.$code)->getField("id");
		if(empty($is_has)){
			return $code;
		}else{
			get_codes();
		}
	}





?>