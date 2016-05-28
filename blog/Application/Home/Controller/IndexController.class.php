<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
        if(empty($_SESSION["username"])){
            $this->redirect('Login/index');
        }
        //状态为1且classify为0的是博客主发的博客
        $articles=D('article')->where(array('state'=>1,'classify'=>0))->select();
        //$this->sign('articles',$articles);
        $this->display();
    }
}