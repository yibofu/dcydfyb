<?php
class PublicAction extends Action{
    public function head(){
        $this->display();
    }
    public function bottom(){
        $this->display();
    }
	
	//个人中心头部
	public function myhead() {
		$this->display();
	}

	//个人中心左边
	public function myleft() {
		$this->display();
	}

	//个人中心底部
	public function mybottom() {
		$this->display();
	}
}
