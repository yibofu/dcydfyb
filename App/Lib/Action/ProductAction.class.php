<?php
class ProductAction extends Action{
    public function camp(){
        $this->display();
    }
    public function cost(){
        $this->display();
    }
    public function index(){
        $this->display();
    }
    public function eight(){
        $this->display();
    }
    public function five(){
        $this->display();
    }
    public function nine(){
        $this->display();
    }
    public function one(){
        $this->display();
    }
    public function seven(){
        $this->display();
    }
    public function six(){
        $this->display();
    }
    public function styli(){
        $this->display();
    }
    public function tax(){
        $this->display();
    }
    public function three(){
        $this->display();
    }

    public function two(){
        $this->display();
    }

    public function tiao(){
        $this->display();
    }

    public function eightadd(){
        $eight = M("producteight");
        $data = $eight->create();
        $data["name"] = $this->_post("name");
        $data["phone"] = $this->_post("phone");
        $data["time"] = time();
        $str = $eight->add($data);
        echo json_encode($str);
    }
    public function twoadd(){
        $two = M("producttwo");
        $data = $two->create();
        $data["name"] = $this->_post("name");
        $data["phone"] = $this->_post("phone");
        $data["time"] = time();
        $str = $two->add($data);
        echo json_encode($str);
    }

    public function campadd(){
        $camp = M("productcamp");
        $data = $camp->create();
        $data["name"] = $this->_post("name");
        $data["phone"] = $this->_post("phone");
        $data["time"] = time();
        $str = $camp->add($data);
        echo json_encode($str);
    }

    public function costadd(){
        $cost = M("productcost");
        $data = $cost->create();
        $data["name"] = $this->_post("name");
        $data["phone"] = $this->_post("phone");
        $data["time"] = time();
        $str = $cost->add($data);
        echo json_encode($str);
    }
    public function fiveadd(){
        $five = M("productfive");
        $data = $five->create();
        $data["name"] = $this->_post("name");
        $data["phone"] = $this->_post("phone");
        $data["time"] = time();
        $str = $five->add($data);
        echo json_encode($str);
    }
    public function nineadd(){
        $nine = M("productnine");
        $data = $nine->create();
        $data["name"] = $this->_post("name");
        $data["phone"] = $this->_post("phone");
        $data["time"] = time();
        $str = $nine->add($data);
        echo json_encode($str);
    }
    public function oneadd(){
        $one = M("productone");
        $data = $one->create();
        $data["name"] = $this->_post("name");
        $data["phone"] = $this->_post("phone");
        $data["time"] = time();
        $str = $one->add($data);
        echo json_encode($str);
    }
    public function sevenadd(){
        $seven = M("productseven");
        $data = $seven->create();
        $data["name"] = $this->_post("name");
        $data["phone"] = $this->_post("phone");
        $data["time"] = time();
        $str = $seven->add($data);
        echo json_encode($str);
    }
    public function sixadd(){
        $six = M("productsix");
        $data = $six->create();
        $data["name"] = $this->_post("name");
        $data["phone"] = $this->_post("phone");
        $data["time"] = time();
        $str = $six->add($data);
        echo json_encode($str);
    }
    public function taxadd(){
        $tax = M("producttax");
        $data = $tax->create();
        $data["name"] = $this->_post("name");
        $data["phone"] = $this->_post("phone");
        $data["time"] = time();
        $str = $tax->add($data);
        echo json_encode($str);
    }
    public function threeadd(){
        $three = M("productthree");
        $data = $three->create();
        $data["name"] = $this->_post("name");
        $data["phone"] = $this->_post("phone");
        $data["time"] = time();
        $str = $three->add($data);
        echo json_encode($str);
    }

    public function styliadd(){
        $styli = M("productstyli");
        $data = $styli->create();
        $data["name"] = $this->_post("name");
        $data["phone"] = $this->_post("phone");
        $data["time"] = time();
        $str = $styli->add($data);
        echo json_encode($str);
    }
}
?>