<?php
class ProductAction extends Action{
    public function bosscwt(){
        $this->display();
    }
    public function cwsw(){
        $this->display();
    }
    public function qypbjh(){
        $this->display();
    }

    //老板财务通
    public function bosscwtlist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['phone'] != "") $map['phone'] = array('like','%'.$_POST['phone'].'%');

        $bosscwt = M("producteight");
        $list = $bosscwt->field("id,name,phone,time")->where($map)->page($page.','.$rows)->select();
        $total = $bosscwt->where($map)->count();
        foreach($list as &$val){
            $val['time'] = date('Y-m-d H:i:m',$val['time']);
        }
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function bosscwtdel(){
        $id = $this->_post("id");
        if(!empty($id)){
            $bosscwt = M("producteight");
            $rest =$bosscwt->where("id=".$id)->delete();
            if($rest !== false){
                $rest = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $rest = array(
                    'success'=>false,
                    'msg'=>$bosscwt->getError()
                );
            }
        }else{
            $rest = array(
                'success'=>false,
                'msg'=>'id为空'
            );
        }
        echo json_encode($rest);
    }


    //管理层财务思维
    public function cwswlist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['phone'] != "") $map['phone'] = array('like','%'.$_POST['phone'].'%');

        $cwsw = M("productfive");
        $list = $cwsw->field("id,name,phone,time")->where($map)->page($page.','.$rows)->select();
        $total = $cwsw->where($map)->count();
        foreach($list as &$val){
            $val['time'] = date('Y-m-d H:i:m',$val['time']);
        }
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }
    public function cwswdel(){
        $id = $this->_post("id");
        if(!empty($id)){
            $cwsw = M("productfive");
            $rest =$cwsw->where("id=".$id)->delete();
            if($rest !== false){
                $rest = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $rest = array(
                    'success'=>false,
                    'msg'=>$cwsw->getError()
                );
            }
        }else{
            $rest = array(
                'success'=>false,
                'msg'=>'id为空'
            );
        }
        echo json_encode($rest);
    }


    //企业陪伴计划
    public function qypbjhlist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['phone'] != "") $map['phone'] = array('like','%'.$_POST['phone'].'%');

        $qypbjh = M("productnine");
        $list = $qypbjh->field("id,name,phone,time")->where($map)->page($page.','.$rows)->select();
        $total = $qypbjh->where($map)->count();
        foreach($list as &$val){
            $val['time'] = date('Y-m-d H:i:m',$val['time']);
        }
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function qypbjhdel(){
        $id = $this->_post("id");
        if(!empty($id)){
            $qypbjh = M("productnine");
            $rest =$qypbjh->where("id=".$id)->delete();
            if($rest !== false){
                $rest = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $rest = array(
                    'success'=>false,
                    'msg'=>$qypbjh->getError()
                );
            }
        }else{
            $rest = array(
                'success'=>false,
                'msg'=>'id为空'
            );
        }
        echo json_encode($rest);
    }

    //财务系统班
    public function cwxtblist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['phone'] != "") $map['phone'] = array('like','%'.$_POST['phone'].'%');

        $cwxtb = M("productone");
        $list = $cwxtb->field("id,name,phone,time")->where($map)->page($page.','.$rows)->select();
        $total = $cwxtb->where($map)->count();
        foreach($list as &$val){
            $val['time'] = date('Y-m-d H:i:m',$val['time']);
        }
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function cwxtbdel(){
        $id = $this->_post("id");
        if(!empty($id)){
            $cwxtb = M("productone");
            $rest =$cwxtb->where("id=".$id)->delete();
            if($rest !== false){
                $rest = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $rest = array(
                    'success'=>false,
                    'msg'=>$cwxtb->getError()
                );
            }
        }else{
            $rest = array(
                'success'=>false,
                'msg'=>'id为空'
            );
        }
        echo json_encode($rest);
    }


    //老板财务智囊
    public function bosscwznlist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['phone'] != "") $map['phone'] = array('like','%'.$_POST['phone'].'%');

        $bosscwzn = M("productseven");
        $list = $bosscwzn->field("id,name,phone,time")->where($map)->page($page.','.$rows)->select();
        $total = $bosscwzn->where($map)->count();
        foreach($list as &$val){
            $val['time'] = date('Y-m-d H:i:m',$val['time']);
        }
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function bosscwzndel(){
        $id = $this->_post("id");
        if(!empty($id)){
            $bosscwzn = M("productseven");
            $rest =$bosscwzn->where("id=".$id)->delete();
            if($rest !== false){
                $rest = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $rest = array(
                    'success'=>false,
                    'msg'=>$bosscwzn->getError()
                );
            }
        }else{
            $rest = array(
                'success'=>false,
                'msg'=>'id为空'
            );
        }
        echo json_encode($rest);
    }

    //企业并购
    public function qybglist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['phone'] != "") $map['phone'] = array('like','%'.$_POST['phone'].'%');

        $qybg = M("productsix");
        $list = $qybg->field("id,name,phone,time")->where($map)->page($page.','.$rows)->select();
        $total = $qybg->where($map)->count();
        foreach($list as &$val){
            $val['time'] = date('Y-m-d H:i:m',$val['time']);
        }
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function qybgdel(){
        $id = $this->_post("id");
        if(!empty($id)){
            $qybg = M("productsix");
            $rest =$qybg->where("id=".$id)->delete();
            if($rest !== false){
                $rest = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $rest = array(
                    'success'=>false,
                    'msg'=>$qybg->getError()
                );
            }
        }else{
            $rest = array(
                'success'=>false,
                'msg'=>'id为空'
            );
        }
        echo json_encode($rest);
    }

    //新三板上市服务
    public function xsbssfwlist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['phone'] != "") $map['phone'] = array('like','%'.$_POST['phone'].'%');

        $xsbssfw = M("productthree");
        $list = $xsbssfw->field("id,name,phone,time")->where($map)->page($page.','.$rows)->select();
        $total = $xsbssfw->where($map)->count();
        foreach($list as &$val){
            $val['time'] = date('Y-m-d H:i:m',$val['time']);
        }
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function xsbssfwdel(){
        $id = $this->_post("id");
        if(!empty($id)){
            $xsbssfw = M("productthree");
            $rest =$xsbssfw->where("id=".$id)->delete();
            if($rest !== false){
                $rest = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $rest = array(
                    'success'=>false,
                    'msg'=>$xsbssfw->getError()
                );
            }
        }else{
            $rest = array(
                'success'=>false,
                'msg'=>'id为空'
            );
        }
        echo json_encode($rest);
    }

    //预算系统建设
    public function ysxtjslist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['phone'] != "") $map['phone'] = array('like','%'.$_POST['phone'].'%');

        $ysxtjs = M("producttwo");
        $list = $ysxtjs->field("id,name,phone,time")->where($map)->page($page.','.$rows)->select();
        $total = $ysxtjs->where($map)->count();
        foreach($list as &$val){
            $val['time'] = date('Y-m-d H:i:m',$val['time']);
        }
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function ysxtjsdel(){
        $id = $this->_post("id");
        if(!empty($id)){
            $ysxtjs = M("producttwo");
            $rest =$ysxtjs->where("id=".$id)->delete();
            if($rest !== false){
                $rest = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $rest = array(
                    'success'=>false,
                    'msg'=>$ysxtjs->getError()
                );
            }
        }else{
            $rest = array(
                'success'=>false,
                'msg'=>'id为空'
            );
        }
        echo json_encode($rest);
    }

    //账钱税系统建设
    public function zqsxtjslist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['phone'] != "") $map['phone'] = array('like','%'.$_POST['phone'].'%');

        $zqsxtjs = M("productstyli");
        $list = $zqsxtjs->field("id,name,phone,time")->where($map)->page($page.','.$rows)->select();
        $total = $zqsxtjs->where($map)->count();
        foreach($list as &$val){
            $val['time'] = date('Y-m-d H:i:m',$val['time']);
        }
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function zqsxtjsdel(){
        $id = $this->_post("id");
        if(!empty($id)){
            $zqsxtjs = M("productstyli");
            $rest =$zqsxtjs->where("id=".$id)->delete();
            if($rest !== false){
                $rest = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $rest = array(
                    'success'=>false,
                    'msg'=>$zqsxtjs->getError()
                );
            }
        }else{
            $rest = array(
                'success'=>false,
                'msg'=>'id为空'
            );
        }
        echo json_encode($rest);
    }

    //税务稽查重点与应对策略
    public function camplist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['phone'] != "") $map['phone'] = array('like','%'.$_POST['phone'].'%');

        $camp = M("productcamp");
        $list = $camp->field("id,name,phone,time")->where($map)->page($page.','.$rows)->select();
        $total = $camp->where($map)->count();
        foreach($list as &$val){
            $val['time'] = date('Y-m-d H:i:m',$val['time']);
        }
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function campdel(){
        $id = $this->_post("id");
        if(!empty($id)){
            $camp = M("productcamp");
            $rest =$camp->where("id=".$id)->delete();
            if($rest !== false){
                $rest = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $rest = array(
                    'success'=>false,
                    'msg'=>$camp->getError()
                );
            }
        }else{
            $rest = array(
                'success'=>false,
                'msg'=>'id为空'
            );
        }
        echo json_encode($rest);
    }

    //成本管控与持续优化
    public function costlist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['phone'] != "") $map['phone'] = array('like','%'.$_POST['phone'].'%');

        $cost = M("productcost");
        $list = $cost->field("id,name,phone,time")->where($map)->page($page.','.$rows)->select();
        $total = $cost->where($map)->count();
        foreach($list as &$val){
            $val['time'] = date('Y-m-d H:i:m',$val['time']);
        }
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function costdel(){
        $id = $this->_post("id");
        if(!empty($id)){
            $cost = M("productcost");
            $rest =$cost->where("id=".$id)->delete();
            if($rest !== false){
                $rest = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $rest = array(
                    'success'=>false,
                    'msg'=>$cost->getError()
                );
            }
        }else{
            $rest = array(
                'success'=>false,
                'msg'=>'id为空'
            );
        }
        echo json_encode($rest);
    }

    //“营改增”政策应对策略
    public function taxlist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['phone'] != "") $map['phone'] = array('like','%'.$_POST['phone'].'%');

        $tax = M("producttax");
        $list = $tax->field("id,name,phone,time")->where($map)->page($page.','.$rows)->select();
        $total = $tax->where($map)->count();
        foreach($list as &$val){
            $val['time'] = date('Y-m-d H:i:m',$val['time']);
        }
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function taxdel(){
        $id = $this->_post("id");
        if(!empty($id)){
            $tax = M("producttax");
            $rest =$tax->where("id=".$id)->delete();
            if($rest !== false){
                $rest = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $rest = array(
                    'success'=>false,
                    'msg'=>$tax->getError()
                );
            }
        }else{
            $rest = array(
                'success'=>false,
                'msg'=>'id为空'
            );
        }
        echo json_encode($rest);
    }
}