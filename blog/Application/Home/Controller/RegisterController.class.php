<?php
    namespace Home\Controller;
    use Think\Controller;

    class RegisterController extends Controller{

        public function createUser(){
            $params=array();
            $heading=$_FILES['headingimg'];
            $upload=new \Think\Upload();
            $upload->maxSize=4104304;
            $upload->exts=array('jpg','gif','PNG','jpeg');
            $upload->rootPath='./Upload/';
            $upload->saveExt='jpg';
            $upload->saveName=$_POST['username'].'_'.time().mt_rand(1,99999);
            $imginfo=$upload->uploadOne($heading);
            if($imginfo){
                $params['heading']='./Upload/'.$imginfo['savepath'].$imginfo['savename'];
            }else{
                $params['heading']='';
            }
            $info=$_POST;
            $params['username']=$info['username'];
            $params['realname']=$info['nickname'];//昵称
            $params['address']=$info['address'];
            $params['password']=md5($info['pwd']);
            $params['createtime']=date('Y-m-d H:i:s',time());
            $params['updatetime']=date('Y-m-d H:i:s',time());
            $params['address']=$info['pro'].'-'.$info['cty'];
            $params['identity']=0;
            if(D('User')->add($params)>0){
                $_SESSION['username']=$info['username'];
                S('userinfo',$params);
                $this->redirect('Index/index');
            }
        }


        public function checkUsername(){
            $username=$_POST['username'];
            $flag=1;
            $result=D('User')->where(array('username'=>$username))->select();
            if(empty($result)){
                $flag=0;
            }
            $this->ajaxReturn(array('result'=>$flag),'JSON');
        }

    }