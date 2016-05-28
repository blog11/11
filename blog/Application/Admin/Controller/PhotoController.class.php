<?php

namespace Admin\Controller;
use Think\Controller;

class PhotoController extends Controller{
	public function index(){
		$this->display();
	}

	public function receive(){
		$file=$_FILES['file'];
		$upload=new \Think\Upload();
        $upload->maxSize=4104304;
        $upload->exts=array('jpg','gif','PNG','jpeg');
        $upload->rootPath='./Public/images/about/photo/';
        $upload->subName='';
        $upload->saveExt='jpg';
        $upload->saveName='test_'.time().mt_rand(1,99999);
        $imginfo=$upload->uploadOne($file);
        D('photo')->add(array('imgpath'=>'./Public/images/about/photo/'.$imginfo['savename'],'createtime'=>date('Y-m-d H:i:s',time()),'updatetime'=>date('Y-m-d H:i:s',time())));
        $this->success('上传成功');
	}

	public function delete(){
		$result=D('photo')->where(array('state'=>0))->select();
		foreach ($result as &$value) {
			$value['imgpath']='/blog'.ltrim($value['imgpath'],'.');
		}
		$this->assign('result',$result);
		$this->display();
	}


	public function delphoto(){
		$src=$_POST['src'];
		$arr=explode('blog',$src);
		$imgpath='.'.$arr[1];
		$result=D('photo')->where(array('imgpath'=>$imgpath))->save(array('state'=>1,'updatetime'=>date('Y-m-d H:i:s',time())));
		$this->ajaxReturn(array('result'=>1),'JSON');
	}
}