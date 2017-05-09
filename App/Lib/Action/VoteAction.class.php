<?php
class VoteAction extends Action{
    public function src(){
        $vote = M("votes");
        $resul = $vote->field("num")->select();
	//print_r($resul);die;
	//var_dump($resul[2]["num"]);die;
        $this->assign("resul",$resul);
        $this->display();
    }

    public function vote1(){
        $vote = M("votes");
        $data = $vote->create();
        $data['name'] = $this->_post("name");
        $idd = $vote->where("name = ".$data['name'])->find();
        $id = $idd["id"];
        if(empty($id)){
            $num = !empty($vote) && isset($vote->num) ? $vote->num : 0;
            $data['num'] = $num + 1;
            $result = $vote->where("name = ".$data['name'])->add($data);
        }else{
            $num = !empty($vote) && isset($vote->num) ? $vote->num : 0;
            $data['num'] = $num + 1;
            $result = $vote->where("id= ".$id)->save($data);
        }
        if($result){
            $result = array(
                'success'=>true,
                'msg'=>'投票成功'
            );
        }
        echo json_encode($result);
    }

    public function subques(){
        $voteques = M("voteques");
        $data = $voteques->create();

        $data['name'] = $this->_post('name');
        $data['phone'] = $this->_post('phone');
        $data['question'] = $this->_post("question");
        $data["time"] = time();
        $result = $voteques->add($data);
        if($result){
            $result = array(
                'success' => true,
                'msg' => "提交成功"
            );
        }
        echo json_encode($result);
    }
}
?>