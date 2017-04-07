<?php
class PublicAction extends Action{
    public function head(){
        $this->display();
    }
    public function bottom(){
        $this->display();
    }
}
?>