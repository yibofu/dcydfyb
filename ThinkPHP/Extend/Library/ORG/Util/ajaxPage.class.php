<?php
class ajaxPage {
	private $total;   //数据表中总记录数
	private $listRows;//每页显示行数
	private $limit;
	private $uri;
	private $pageNum; //页数
	private $config=array('header'=>"个记录", "prev"=>"<", "next"=>">", "first"=>"首 页", "last"=>"尾 页");
	private $listNum=8;
	/*
	 * $total 
	 * $listRows
	 */
	public function __construct($total, $listRows=10, $pa=""){
		$this->total=$total;
		$this->listRows=$listRows;
		$this->uri=$this->getUri($pa);
		$this->page=!empty($_GET["page"]) ? $_GET["page"] : 1;
		$this->pageNum=ceil($this->total/$this->listRows);
		$this->limit=$this->setLimit();
	}

	private function setLimit(){
		return ($this->page-1)*$this->listRows.", {$this->listRows}";
	}

	private function getUri($pa){
		$url=$_SERVER["REQUEST_URI"].(strpos($_SERVER["REQUEST_URI"], '?')?'':"?").$pa;
		$parse=parse_url($url);
		if(isset($parse["query"])){
			parse_str($parse['query'],$params);
			unset($params["page"]);
			$url=$parse['path'].'?'.http_build_query($params);	
		}
		return $url;
	}

	private function __get($args){
		if($args=="limit")
			return $this->limit;
		else
			return null;
	}

	private function start(){
		if($this->total==0)
			return 0;
		else
			return ($this->page-1)*$this->listRows+1;
	}

	private function end(){
		return min($this->page*$this->listRows,$this->total);
	}

	private function first(){
		if($this->page==1)
			$html.='';
		else
			$html.="&nbsp;&nbsp;<a href='javascript:setPage(1)'>{$this->config["first"]}</a>&nbsp;&nbsp;";
		return $html;
	}

	private function prev(){
		if($this->page==1)
			$html.='';
		else
			$html.="&nbsp;&nbsp;<a href='javascript:setPage(". ($this->page-1) .")'>{$this->config["prev"]}</a>&nbsp;&nbsp;";
		return $html;
	}

	private function pageList(){
		$linkPage="";
		$inum=floor($this->listNum/2);
	
		for($i=$inum; $i>=1; $i--){
			$page=$this->page-$i;
			if($page<1)
				continue;
			$linkPage.="&nbsp;<a  href='javascript:setPage({$page})'>{$page}</a>&nbsp;";

		}
		$linkPage.="<span style='color:#007EC5'>&nbsp;{$this->page}&nbsp;</span>";
		for($i=1; $i<=$inum; $i++){
			$page=$this->page+$i;
			if($page<=$this->pageNum)
				$linkPage.="&nbsp;<a href='javascript:setPage({$page})'>{$page}</a>&nbsp;";
			else
				break;
		}
		return $linkPage;
	}

	private function next(){
		if($this->page==$this->pageNum)
			$html.='';
		else
			$html.="&nbsp;&nbsp;<a href='javascript:setPage(". ($this->page+1) .")'>{$this->config["next"]}</a>&nbsp;&nbsp;";
		return $html;
	}

	private function last(){
		if($this->page==$this->pageNum)
			$html.='';
		else
			$html.="&nbsp;&nbsp;<a  style='color:#007EC5' href='javascript:setPage(". ($this->pageNum) .")'>{$this->config["last"]}</a>&nbsp;&nbsp;";
		return $html;
	}

	private function goPage(){
		return '&nbsp;&nbsp;<input type="text" onkeydown="javascript:if(event.keyCode==13){var page=(this.value>'.$this->pageNum.')?'.$this->pageNum.':this.value;setPage(page)}" value="'.$this->page.'" style="width:25px"><input type="button" value="GO" onclick="javascript:var page=(this.previousSibling.value>'.$this->pageNum.')?'.$this->pageNum.':this.previousSibling.value;setPage(page)">&nbsp;&nbsp;';
	}
	function fpage($display=array(0,1,2)){
		$html[0]=$this->prev();
		$html[1]=$this->pageList();
		$html[2]=$this->next();
		$fpage='';
		foreach($display as $index){
			$fpage.=$html[$index];
		}
		return $fpage;
	}
}
?>
