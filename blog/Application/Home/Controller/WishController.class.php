<?php
/**
 * Created by PhpStorm.
 * User: 凯
 * Date: 2016/3/20
 * Time: 13:00
 */
namespace Home\Controller;
use Think\Controller;

class WishController extends Controller{

    public function index(){
        $wish=D('Wish');
        $result=$wish->init();
        //$result=$wish->where(array('isshow'=>0))->select();
        for ($i=0; $i < count($result); $i++) {
            $result[$i]['id']=$wish->chuli($result[$i]['id']);
            $result[$i]['content']=$wish->img1(htmlentities($result[$i]['content']));
        }
        $this->assign('result',$result);
        $this->display();
    }

    public function create(){
        $init=D('Wish');
        $author=$_SESSION['username'];
        $content=$_POST['content'];
        $result=$init->add($author,$content);
        if($result==1){
            $this->redirect('index');
        }else{

            throw new Exception("Error Processing Request", 1);
            
        }
        
    }



}