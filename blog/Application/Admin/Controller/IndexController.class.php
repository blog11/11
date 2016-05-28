<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller{
	public function index(){
		if(!$_SESSION['username']){
			$this->redirect('Admin/Login/index');
		}
		$username=$_SESSION['username'];
		//使用缓存
		if(memcacheGet('userinfo')){
			$userinfo=memcacheGet('userinfo');
		}else{
			$userinfo = M('User')->where(array('username'=>$username,'identity'=>2))->select();
			memcacheSet('userinfo',$userinfo);
		}
		$userinfo[0]['heading']='../../.'.$userinfo[0]['heading'];
		$this->assign('userinfo',$userinfo[0]);
		$this->display();
	}

	public function photo(){
		$this->redirect('Photo/Index');
	}

	public function checkOldPwd(){
		$info=$_POST;
		$oldpwd=$info['oldpwd'];
		$username=$_SESSION['username'];
		$userinfo=M('User')->where(array('username'=>$username,'identity'=>2))->select();
		//验证旧密码是否输入正确
		if(md5($oldpwd)==$userinfo[0]['password']){
			//判断新密码两次是否正确
			if($info['pwd']==$info['pwdConfirm']){
				$result=M('User')->where(array('username'=>$username,'identity'=>2))->save(array('password'=>md5($info['pwd'])));
				if($result==1){
					$this->redirect('Admin/Index/index',5,'修改成功');
				}
			}else{
				$this->error("新密码不一致");
			}
		}else{
			$this->error('旧密码不正确');
		}
	}

	public function logout(){
		$_SESSION['username'] = null;
		$this->redirect('Admin/Login/index');
	}
}