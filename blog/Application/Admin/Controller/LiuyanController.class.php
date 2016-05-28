<?php

namespace Admin\Controller;
use Think\Controller;

class LiuyanController extends Controller{
	public function index(){
		$this->display();
	}


	public function data_init(){
		$result=D('Wish')->select();
		foreach ($result as &$value) {
                if($value['isshow']==0){
                        $value['isshow']='显示';
                }else{
                        $value['isshow']='不显示';
                }
        }
		$this->ajaxReturn($result,'JSON');
	}

	public function edit(){
		$id=$_POST['id'];
                $infos=D('Wish')->where(array('id'=>$id))->select();
                //禁用操作
                if($infos[0]['isshow']==0){
                        D('Wish')->where(array('id'=>$id))->save(array('isshow'=>1));
                }elseif($infos[0]['isshow']==1){
                        D('Wish')->where(array('id'=>$id))->save(array('isshow'=>0));
                }
                $result=array('result'=>0);
                $this->ajaxReturn($result);
        }
}