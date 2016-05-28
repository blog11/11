<?php
namespace Home\Controller;
use Think\Controller;
class LearnController extends Controller{
	public function index(){
		$info=D('article')->join('blog_user on blog_article.user_id=blog_user.id')->where(array('blog_article.state'=>1))->order('blog_article.updatetime desc')->limit(5)->field('blog_article.*,blog_user.username')->select();
		foreach ($info as $key => $value) {
			$info[$key]['classifyname']=$this->getClassifyName($value['classify']);
		}
		$this->assign('info',$info);
		$this->display();
	}


	private function getClassifyName($classify){
		$result='';
		switch ($classify) {
			case 0:
				$result='技术';
				break;
			case 1:
				$result='立志';
				break;
			case 2:
				$result='生活';
				break;
			case 3:
				$result='箴言';
				break;
			case 4:
				$result='情感';
				break;
			default:
				$result='感悟';
				break;
		}
		return $result;
	}
}