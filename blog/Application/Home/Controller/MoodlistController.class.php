<?php

namespace Home\Controller;
use Think\Controller;
class MoodlistController extends Controller{
	public function index(){
		$info=D('Moodlist')->where(array('state'=>0))->select();
		foreach ($info as $key => $value) {
			$info[$key]['imgpath']='../../../Upload/moodlist/'.$value['imgpath'];
		}
		$this->assign('info',$info);
		$this->display();
	}
}