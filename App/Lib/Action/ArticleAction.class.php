<?php
class ArticleAction extends Action{
    public function message(){
        $article = M("article");
        $result = $article->where("lanmu=1 and status = 2")
            ->field('id,title,status')
            ->limit(5)
            ->select();

        $resul = $article->where("lanmu=2 and status = 2")
            ->field('id,title,status')
            ->limit(5)
            ->select();

        $resu = $article->where("lanmu=3 and status = 2")
            ->field('id,title,status')
            ->limit(5)
            ->select();

        $res = $article->where("lanmu=4 and status = 2")
            ->field('id,title,status')
            ->limit(5)
            ->select();

        foreach($result as &$val){
            $val['time'] = date('Y-m-d H:i:s',$val['time']);
        }
        $this->assign("result",$result);
        $this->assign("resul",$resul);
        $this->assign("resu",$resu);
        $this->assign("res",$res);
        // 赋值分页输出
        $this->display();
    }

    public function articlelist(){
        $lanmu = isset($_GET["lanmu"]) && !empty($_GET["lanmu"]) ? $_GET["lanmu"] : 1;
        $article = M("article");
        import('ORG.Util.Page');
        $count = $article->where("lanmu=$lanmu and status = 2")->count();
        $page = new Page($count,20);
        $nowPage = $page->firstRow/$page->listRows+1;
        $this->assign('nowPage', $nowPage);
        $page->setConfig('theme','%upPage%%linkPage%%downPage%' );
        $result = $article->field('id,title,keywords,lanmu,laiyuan,content,auth,describe,time,status')
            ->where("lanmu=$lanmu and status = 2")
            ->limit($page->firstRow.','.$page->listRows)
            ->select();
        foreach($result as &$val){
            $val['time'] = date('Y-m-d H:i:s',$val['time']);
        }
        foreach($result as &$list){
            if($list["lanmu"] == "1"){
                $list["lanmu"] = "财税案例";
            }else if($list["lanmu"] == "2"){
                $list["lanmu"] = "财政法规";
            }else if($list["lanmu"] == "3"){
                $list["lanmu"] = "扁鹊干货";
            }else if($list["lanmu"] == "4"){
                $list["lanmu"] = "新闻动态";
            }
        }
        $this->assign("result",$result);
        $this->assign("page",$page->show());
        // 赋值分页输出
        $this->display();
    }

    public function article(){
        $id = $_GET["id"];
        $article = M("article");
        $arr = $article
            ->field('id,title,keywords,lanmu,laiyuan,content,auth,describe,time,status')
            ->where("id = ".$id)
            ->find();
        $arr['time'] = date('Y-m-d H:i:s',$arr['time']);
        $arr['content'] = htmlspecialchars_decode($arr['content']);
        $this->assign("arr",$arr);
        $this->display();
    }
}
?>