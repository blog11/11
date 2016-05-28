<?php

namespace Admin\Controller;
use Think\Controller;

class MoodlistController extends Controller{

	public function index(){
		$this->display();
	}

	public function add(){
		$file=$_FILES['file'];
		$mood=$_POST['mood'];
		//处理上传的图片
		$upload=new \Think\Upload();
                $upload->maxSize=4104304;
                $upload->exts=array('jpg','gif','PNG','jpeg');
                $upload->rootPath='./Upload/moodlist/';
                $upload->saveExt='jpg';
                $upload->subName='';
                $upload->saveName=time().mt_rand(1,99999);
                $imginfo=$upload->uploadOne($file);
                $imgpath=$imginfo['savename'];
                //处理写下的心情
                $result=D('Moodlist')->add(array('imgpath'=>$imgpath,'mood'=>$mood,'createtime'=>date('Y-m-d H:i:s')));
                if($result>=1){
                	$this->success('上传心情成功');
                }else{
                	$this->error('上传心情失败');
                }
	}

        public function edit(){
                $infos=D('Moodlist')->select();
                // foreach ($infos as &$value) {
                //         $value['imgpath']=ltrim($value['imgpath'],'.');
                //         if($value['state']==0){
                //                 $value['state']='启用';
                //         }else{
                //                 $value['state']='禁用';
                //         }
                // }
                //var_dump(json_encode($infos));exit;
                $this->display();
        }

        public function data_init(){
                $infos=D('Moodlist')->select();
                foreach ($infos as &$value) {
                        if($value['state']==0){
                                $value['state']='启用';
                        }else{
                                $value['state']='禁用';
                        }
                }
                $this->ajaxReturn($infos,'JSON');
        }

        public function change(){
                $id=$_POST['id'];
                $infos=D('Moodlist')->where(array('id'=>$id))->select();
                //禁用操作
                if($infos[0]['state']==0){
                        D('Moodlist')->where(array('id'=>$id))->save(array('state'=>1));
                }elseif($infos[0]['state']==1){
                        D('Moodlist')->where(array('id'=>$id))->save(array('state'=>0));
                }
                $result=array('result'=>0);
                $this->ajaxReturn($result);
        }


}