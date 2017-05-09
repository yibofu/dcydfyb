<?php
class AskAnswerAction extends Action{
    public function Asks(){
        $teacher = M("teacher");
        $ree = $teacher->distinct(true)->field('id,name')->select();
        $this->assign("ree",$ree);
        $this->display();
    }

    public function asklist(){
        $page = isset($_POST['page'])? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows'])? intval($_POST['rows'])==0 ? 20 : intval($_POST['rows']) : 20;
        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['nickname'] != "") $map['nickname'] = array('like','%'.$_POST['nickname'].'%');
        if ($_POST['Phone'] != "") $map['Phone'] = array('like','%'.$_POST['Phone'].'%');
        if ($_POST['question'] != "") $map['question'] = array('like','%'.$_POST['question'].'%');
        if(!empty($_POST['regstart'])){
            $start=$_POST['regstart'];
            $map['addtime']=array('egt',strtotime($start));
        }
        if(!empty($_POST['regend'])){
            $end=$_POST['regend'];
            $map['addtime']=array('elt',strtotime($end));
        }
        if ($_POST['regstart'] && $_POST['regend']) {
            $map['addtime'] = array('between',array(strtotime($start),strtotime($end)));
        }
        $question = M('question');
        $list = $question->table("dcyd_question as a")->join("dcyd_user as b on b.id = a.userid")
            ->join("dcyd_answer as c on c.qid = a.id")->join("dcyd_teacher as d on d.id = c.teacherid")
            ->join("dcyd_question_type as e on e.id = a.type")
            ->field('a.id,a.question,a.addtime,b.Phone,b.nickname,c.answer,d.name,e.name typename')
            ->where($map)->page($page.','.$rows)->select();
        $total = $question->table("dcyd_question as a")->join("dcyd_user as b on b.id = a.userid")
            ->join("dcyd_answer as c on c.qid = a.id")->join("dcyd_teacher as d on d.id = c.teacherid")
            ->join("dcyd_question_type as e on e.id = a.type")
            ->where($map)->count();
        foreach ($list as &$val){
            $val['addtime'] = date('Y-m-d H:i:s',$val['addtime']);
        }
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function askedit(){
        $id = $this->_post('id');
        if(!empty($id) && isset($id)){
            $question = M('question');
            $result = $question->table("dcyd_question as a")
                ->join("dcyd_answer as c on c.qid = a.id")
                ->field('a.id,a.question,c.answer')
                ->where("a.id = ".$id)->find();
            echo json_encode($result);
        }
    }

    public function asksave(){
        $answer = M('answer');
        $data = $answer->create();
        $data["qid"] = $this->_get("id");
        $data["teacherid"] = $this->_post("name");
        $data["addtime"] = time();
        $data["answer"] = $this->_post("answer");
        $result = $answer->add($data);

        if($result != false){
            $result = array(
                'success'=>true,
                'msg'=>'修改成功'
            );
            $question = M("question");
            $qdate["status"] = "1";
            $question->where("id = ".$data["qid"])->save($qdate);
        }else{
            $result = array(
                'success'=>false,
                'msg'=>'修改失败'
            );
        }
        echo json_encode($result);
    }

    public function del_mes(){
        $id = $this->_post("id");
        if(!empty($id)){
            $question = M('question');
            $result = $question->where("id = ".$id)->delete();
            if($result !== false){
                $result = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $result = array(
                    'success'=>false,
                    'msg'=>$question->getError()
                );
            }
        }else{
            $result = array(
                'success'=>false,
                'msg'=>'id为空'
            );
        }
        echo json_encode($result);
    }
}
?>