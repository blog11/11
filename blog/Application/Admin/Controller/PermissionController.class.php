<?php

namespace Admin\Controller;
use Think\Controller;
class PermissionController extends Controller{
	public function index(){
		$this->display();
	}


	public function data_init(){
		$users=D('User')->select();
		foreach ($users as $key => &$value) {
			if($value['state']==0){
				$value['state']='正常';
			}else{
				$value['state']='禁言';
			}
			if($value['identity']==0){
				$value['identity']='注册用户';
			}elseif($value['identity']==1){
				$value['identity']='游客';
			}else{
				$value['identity']='管理人员';
			}
		}
		$this->ajaxReturn($users,'JSON');
	}

	public function delete(){
		$id=$_POST['id'];
		$result=D('User')->where(array('id'=>$id))->save(array('state'=>1));
		$this->ajaxReturn(array('result'=>0));
	}

	public function improve(){
		$id=$_POST['id'];
		$result='';
		$user=D('User')->where(array('id'=>$id))->select();
		if($user[0]['identity']==0){
			D('User')->where(array('id'=>$id))->save(array('identity'=>2));
			$result=2;
		}elseif($user[0]['identity']==1){
			$result=1;
		}else{
			$result=0;
		}
		$this->ajaxReturn(array('result'=>$result));
	}

	public function down(){
		$id=$_POST['id'];
		D('User')->where(array('id'=>$id))->save(array('identity'=>0));
		$this->ajaxReturn(array('result'=>0));
	}
}