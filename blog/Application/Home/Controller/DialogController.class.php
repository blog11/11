<?php

namespace Home\Controller;
use Think\Controller;
class DialogController extends Controller{
	public function index(){
		//使用S函数
		if(empty(S('dialog_count'))){
			$count=D('dialog')->where(array('state'=>0))->count();
			S('dialog_count',$count);
		}else{
			$count=S('dialog_count');
		}
		$page=new \Think\Page($count,10);
		$page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$page->setConfig('last','末页');
		$page->setConfig('first','首页');
		$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
		$info=D('dialog')->where(array('state'=>0))->order('createtime desc')->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('info',$info);
		$this->assign('page',$page->show());
		$this->display();
	}
}