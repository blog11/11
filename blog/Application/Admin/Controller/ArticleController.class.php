<?php

namespace Admin\Controller;
use Think\Controller;

class ArticleController extends Controller{

	public function index(){
		$this->display();
	}

	public function data_init(){
		$articles=D('Article')->join('blog_user ON blog_article.user_id=blog_user.id')->field('blog_article.*,blog_user.username')->select();
		foreach ($articles as $key => &$value) {

			//如果文章的标题过长
			if(strlen($value['title'])>6){
				$articles[$key]['title']=mb_substr($value['title'], 0, 6).'...';
			}

			if(strlen($value['content'])>6){
				$articles[$key]['content']=mb_substr($value['content'], 0, 6).'...';
			}



			if($value['state']==0){
				$value['state']='审核中';
			}elseif($value['state']==1){
				$value['state']='发布中';
			}else{
				$value['state']='删除';
			}

			if($value['close_comment']==0){
				$value['close_comment']='不关闭';
			}else{
				$value['close_comment']='关闭';
			}

			if($value['classify']==0){
				$value['classify']='技术';
			}elseif($value['classify']==1){
				$value['classify']='立志';
			}elseif($value['classify']==2){
				$value['classify']='生活';
			}elseif($value['classify']==3){
				$value['classify']='箴言';
			}elseif($value['classify']==4){
				$value['classify']='情感';
			}else{
				$value['classify']='感悟';
			}
		}
		$this->ajaxReturn($articles,'JSON');
	}


	public function edit(){
		$id=$_POST['id'];
		D('article')->where(array('id'=>$id))->save(array('state'=>2));
		$result=array('result'=>0);
        $this->ajaxReturn($result);
	}

	public function close_comment(){
		$id=$_POST['id'];
		D('article')->where(array('id'=>$id))->save(array('close_comment'=>1));
		$result=array('result'=>0);
        $this->ajaxReturn($result);
	}

	public function detail(){
		$id=$_POST['id'];
		$info=D('article')->where(array('id'=>$id))->field('title,content')->select();
		$result=array('result'=>$info[0]);
        $this->ajaxReturn($result);
	}

}