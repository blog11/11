<?php

	namespace Home\Controller;
	use Think\Controller;

	class BlogController extends Controller{

		public function Index(){
			$classify=$_GET['classify'];
			$count=D('article')->join('blog_user on blog_article.user_id=blog_user.id')->where(array('blog_article.state'=>1,'blog_article.classify'=>$classify))->order('blog_article.createtime desc')->field('blog_article.id,blog_article.title,blog_article.createtime,blog_article.classify,blog_user.username')->count();
			$page=new \Think\Page($count,10);
			$page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
			$page->setConfig('prev','上一页');
			$page->setConfig('next','下一页');
			$page->setConfig('last','末页');
			$page->setConfig('first','首页');
			$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
			$info=D('article')->join('blog_user on blog_article.user_id=blog_user.id')->where(array('blog_article.state'=>1,'blog_article.classify'=>$classify))->order('blog_article.createtime desc')->field('blog_article.id,blog_article.title,blog_article.createtime,blog_article.classify,blog_user.username')->limit($page->firstRow.','.$page->listRows)->select();
			foreach ($info as $key => $value) {
				$info[$key]['classify']=$this->getClassifyName($value['classify']);
			}
			$this->assign('info',$info);
			$this->assign('classifyname',$this->getClassifyName($classify));
			$this->assign('classify',$classify);
			$this->assign('page',$page->show());
			$this->display();
		}

		//进入这边博客
		public function detail(){
			$id=$_GET['id'];

			$count=D('article')->join('blog_user on blog_article.user_id=blog_user.id')->where(array('blog_article.id'=>$id))->field('blog_article.*,blog_user.username,blog_user.heading')->count();

			$page=new \Think\Page($count,10);
			$page->setConfig('header','<li class="rows">第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
			$page->setConfig('prev','上一页');
			$page->setConfig('next','下一页');
			$page->setConfig('last','末页');
			$page->setConfig('first','首页');
			$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');


			//博客内容
			$info=D('article')->join('blog_user on blog_article.user_id=blog_user.id')->where(array('blog_article.id'=>$id))->field('blog_article.*,blog_user.username,blog_user.heading')->limit($page->firstRow.','.$page->listRows)->select();
			//总共发了多少贴
			$count=D('article')->where(array('user_id'=>$info[0]['user_id']))->field('id')->select();
			//评论内容
			$comments=D('comment')->join('blog_user on blog_comment.comment_user_id=blog_user.id')->where(array('blog_comment.article_id'=>$id))->select();
			$info[0]['heading']='../../.'.$info[0]['heading'];
			foreach ($comments as $key => $value) {
				$comments[$key]['heading']='../../.'.$value['heading'];
			}
			$this->assign('id',$id);
			$this->assign('count',count($count));
			$this->assign('info',$info[0]);
			$this->assign('comments',$comments);
			$this->assign('page',$page->show());
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

		//添加评论
		public function addComment(){
			$info=$_POST;
			$username=$_SESSION['username'];
			$id=D('user')->where(array('username'=>$username))->select();
			if($id[0]['identity']!=1){
				$createtime=date('Y-m-d H:i:s',time());
				$insertdata=array('article_id'=>$info['articleid'],'comment_user_id'=>$id[0]['id'],'comment'=>$info['content'],'createtime'=>$createtime);
				D('comment')->add($insertdata);
				$this->redirect('detail',array('id'=>$info['articleid']));
			}else{
				$this->error('游客不能发评论');
			}
			
		}


		//添加博客
		public function addBlog(){
			$title=$_POST['title'];
			$content=$_POST['content'];
			$createtime=date('Y-m-d H:i:s',time());
			$updatetime=date('Y-m-d H:i:s',time());
			$username=$_SESSION['username'];
			$id=D('user')->where(array('username'=>$username))->select();
			if($id[0]['identity']!=1){
				$user_id=$id[0]['id'];
				$state=1;
				$close_comment=0;
				$classify=$_POST['classify'];
				$insertdata=array('title'=>$title,'content'=>$content,'createtime'=>$createtime,'updatetime'=>$updatetime,'user_id'=>$user_id,'state'=>$state,'close_comment'=>$close_comment,'classify'=>$classify);
				D('article')->add($insertdata);
				$this->redirect('index',array('classify'=>$classify));
			}else{
				$this->error('游客不能发博客');
			}
			
			
		} 

	}