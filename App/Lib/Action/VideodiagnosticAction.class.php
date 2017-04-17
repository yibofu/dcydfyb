<?php
class VideodiagnosticAction extends Action{
    public function Video_diagnostic(){
		//获取推荐列表
		$model = M('view');

		$list = $model->field('id,title,name,url,img,kname,kctitle')
					->where('isrecommend="1"')
					->order('id desc')
					->limit('0,4')
					->select();

		$this->assign('recommendList', $list);
        $this->display();
    }
}
?>
