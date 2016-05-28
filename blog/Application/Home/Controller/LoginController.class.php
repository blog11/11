<?php
/**
 * Created by PhpStorm.
 * User: 凯
 * Date: 2016/3/6
 * Time: 11:36
 */

namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller {

    public function index(){
    	$info=D('area');
		$province=$info->where(array('parent_id'=>0))->select();
		$this->assign('province',$province);
        $this->display();
    }

    public function validate(){
		$verify=new \Think\Verify();
		$verify->fontSize=18;
		$verify->length=4;
		$verify->entry();
	}


	//登陆判断
	public function commit(){
		$flag1=false;//做一个标识判断是否值得进入系统的如果值得赋值为true
		$flag2=false;//做一个标识判断是否值得进入系统的如果值得赋值为true
		$info=$_POST;
		//判断是游客还是注册人员
		$user=D('User');
		//是游客的话直接跳转
		if($info['istourist']=='on'){
			$insert_info=array();
			$username='游客'.mt_rand(999,100000);//用户名
			//存到缓存
			$_SESSION['username']=$username;
			$pwd=$username;//密码
			$realname=$username;//真是姓名
			$heading='';//给一个默认的头像
			$createtime=date('Y-m-d H:i:s',time());
			$updatetime=date('Y-m-d H:i:s',time());
			$identity=1;
			D('User')->add(array('username'=>$username,'password'=>$pwd,'realname'=>$realname,'heading'=>$heading,'createtime'=>$createtime,'updatetime'=>$updatetime,'identity'=>$identity));
			S('userinfo',array('username'=>$username,'password'=>$pwd,'realname'=>$realname,'heading'=>$heading,'createtime'=>$createtime,'updatetime'=>$updatetime,'identity'=>$identity));
			$this->redirect('Index/index');
		}else{
			if($info['username']!='请输入用户名' && $info['password']!='请输入密码' && $info['captcha'] !='验证码'){
				$result=$user->where(array('username'=>$info['username']))->select();
				if($result){
					//验证密码是否正确
					if($result[0]['password']==md5($info['password'])){
						$flag1=true;
					}else{
						$this->redirect('index');
					}
					//验证验证码是否正确
					$verify=new \Think\Verify();
					if(($verify->check($info['captcha']))){
						$flag2=true;
					}else{
						$this->redirect('index');
					}
					if($flag1 && $flag2){
						$updatetime=date('Y-m-d H:i:s',time());
						$user->save(array('updatetime'=>$updatetime));
						$_SESSION['username']=$info['username'];
						$_SESSION['nickname']=$info['nickname'];
						S('userinfo',$result);
						$this->redirect('Index/index');
					}
				}else{
					$this->redirect('index');
				}
			}else{
				$this->redirect('index');
			}
		}


	}

	public function getCityByProid(){
		$proid=$_POST['proid'];
		$info=D('area');
		$city=$info->where(array('parent_id'=>$proid))->select();
		$this->ajaxReturn($city,'JSON');
	}

}