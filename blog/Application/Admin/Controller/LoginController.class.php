<?php

namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
	public function index(){
		$this->display();
	}

	public function check(){
		$username=$_POST['user'];
		$pwd=md5($_POST['pwd']);
		//只有identity为2的才能登进去
		$userinfo=M('User')->where(array('username'=>$username,'password'=>$pwd,'identity'=>2))->select();
		if(!empty($userinfo)){
			$_SESSION['username']=$username;
			$this->redirect('Admin/Index/index');
		}else{
			$this->error('用户名或者密码不正确');
			$this->redirect('Admin/Login/index');
		}
		
	}

	
}