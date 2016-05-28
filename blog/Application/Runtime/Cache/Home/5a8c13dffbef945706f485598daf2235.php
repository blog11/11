<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>学无止境-个人博客</title>
<style type="text/css">
  /*注册表单*/
.center {
  width: 100%;
  background-color: #ededed;
  padding-top: 10px;
}
.register {
  width: 600px;
  margin: 0 auto;
  margin-top: 8px;
}
.regTop {
  height: 45px;
  line-height: 45px;
  padding: 0 30px;
  background: #fff;
  position: relative;
  box-shadow: 0 0 10px rgba(9, 2, 4, .12);
}
.regTop span {
  margin: 0;
  font-size: 16px;
  color: #333;
  font-weight: normal;
}
.regTop a {
  font-size: 16px;
  color: #e04040;
  text-decoration: underline;
  position: absolute;
  top: 0;
  right: 26px;
}
.regMain {
  padding: 35px 45px 45px 45px;
  background-color: #fff;
}
.regUser {
  padding-bottom: 10px;
  font-size: 14px;
}
.regList {
  margin-top: 10px;
}
.listTop span {
  display: inline-block;
  width: 86px;
  margin-right: 10px;
  text-align: right;
}
.listTop input {
  width: 320px;
  min-height: 20px;
  line-height: 20px;
  padding: 15px 15px;
  font-size: 14px;
  color: #aaa;
  background-color: #fff;
  border: 1px solid #dadada;
}
.listError span {
  color: #e14041;
  display: block;
  margin-left: 100px;
}
.listRule span {
  display: inline-block;
  width: 86px;
  margin-right: 10px;
  text-align: right;
}
.listRule input {
  width: 100px;
  min-height: 20px;
  line-height: 20px;
  padding: 15px 15px;
  font-size: 14px;
  color: #aaa;
  background-color: #fff;
  border: 1px solid #dadada;
}
.listRule img {
  display: inline-block;
  height: 30px;
  width: 70px;
  border: 1px #ccc solid;
  margin-left: 20px;
  position: relative;
  top: 10px;
}
.listRule span a {
  color: #333;
}
.regRule {
  width: 460px;
  margin-top: 20px;
  margin-left: 180px;
}
.regRule a {
  color: #e14041;
  text-decoration: underline;
}
.regFinish {
  margin-top: 20px;
}
.regBtn {
  border-left: 0 none;
  border-right: 0 none;
  cursor: pointer;
  margin-left: 50px;
  color: #fff;
  font-size: 24px;
  background-color: #e04040;
  display: inline-block;
  width: 405px;
  height: 51px;
  border-top: 1px #f0a0a0 solid;
  border-bottom: 1px #c11f1f solid;
  text-align: center;
  padding: 0;
  border-radius: 5px;
}

.bzm-btn{
  display: none;
}

.pages a,.pages span{display: inline-block;padding: 2px 5px; margin: 0 1px; border: 1px solid #f0f0f0;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius: 3px;}

.pages a,.pages li{display: inline-block;list-style: none;text-decoration: none;color: #58A0D3;}

.pages a.first,.pages a.prev,.pages a.next,.pages a.end{margin: 0;}

.pages a:hover{border-color:#50A8E6;}

.pages span.current{background: #50A8E6;color:#FFF;font-weight: 700;border-color: #50A8E6;}
</style>
<meta name="keywords" content="个人博客" />
<meta name="description" content="" />
<link rel="stylesheet" href="/blog/Public/css/index_moodlist.css"/>
<link rel="stylesheet" href="/blog/Public/css/moodlist.css"/>
<link rel="stylesheet" type="text/css" href="/blog/Public/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="/blog/Public/css/baze.modal.css"/>
<script type="text/javascript" src="/blog/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/blog/Public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/blog/Public/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript">
  $(function(){
    dialog();
  });
</script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
</head>

<body>
      <!--header start-->
    <div id="header">
      <h1>个人博客</h1>
      <p>青春是打开了,就合不上的书。人生是踏上了，就回不了头的路，爱情是扔出了，就收不回的赌注。</p>    
    </div>
     <!--header end-->
    <!--nav-->
     <div id="nav">
         <ul>
         <li><a href="/blog/index.php/Home/Index/index">首页</a></li>
         <li><a href="/blog/index.php/Home/About/index">关于我</a></li>
         <li><a href="/blog/index.php/Home/Moodlist/index">碎言碎语</a></li>
         <li><a id="nava" href="/blog/index.php/Home/Learn/index">技术讨论</a></li>
         <li><a href="/blog/index.php/Home/Photo/index">相册展示</a></li>
         <li><a href="/blog/index.php/Home/Dialog/index">漫生活</a></li>
         <li><a href="/blog/index.php/Home/Wish/index">留言板</a></li>
         <div class="clear"></div>
        </ul>
      </div>
       <!--nav end-->
    <!--content start-->
    <div id="content">
       <!--left-->
         <div class="left" id="learn" style="width: 100%;">
           <div class="weizi">
           <div class="wz_text">当前位置：<h1>技术讨论</h1></div>
           </div>
           <div class="l_content" style="width: 100%;">
           <div class="wz">
            <h3 style="float: left; width: 80px;"><a href="/blog/index.php/Home/Blog/index?classify=0" title="技术">技术</a></h3>
            <h3 style="float: left; width: 80px;"><a href="/blog/index.php/Home/Blog/index?classify=1" title="立志">立志</a></h3>
            <h3 style="float: left; width: 80px;"><a href="/blog/index.php/Home/Blog/index?classify=2" title="生活">生活</a></h3>
            <h3 style="float: left; width: 80px;"><a href="/blog/index.php/Home/Blog/index?classify=3" title="箴言">箴言</a></h3>
            <h3 style="float: left; width: 80px;"><a href="/blog/index.php/Home/Blog/index?classify=4" title="情感">情感</a></h3>
            <h3 style="float: left; width: 130px;"><a href="/blog/index.php/Home/Blog/index?classify=5" title="感悟">感悟</a></h3>
           </div>

            <br>
            <span id="ngehe" data-target="#modal2" style="cursor: pointer; margin-top: 6px; background-color: #39AECF;" onclick="dialog();">回复</span>
            <div class="center bzm-content" id="modal2" data-title="用户注册">
              <div class="register">
                <div class="regMain">
                  <div class="regUser">
                    <form action="/blog/index.php/Home/Blog/addComment" id="regForm" autocomplete="off" method="post" enctype="multipart/form-data">
                      <div class="regList">
                        <div class="listTop">
                          <span>回复内容：</span>
                          <textarea cols="43" rows="10" name="content"></textarea>
                          <input type="hidden" name="articleid" value="<?php echo ($id); ?>"></input>
                        </div>
                        <div class="listError">
                          <span></span>
                        </div>
                      </div>
                      <div class="regFinish">
                        <button class="regBtn" type="submit">提交</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <script src="/blog/Public/js/baze.modal.js"></script>
            <script>
              function dialog(){
                $('#ngehe').bazeModal();
              }

            </script>
            <br>
           <!-- <div class="wz"> -->
              <table class="table table-hover">
                <tbody>
                    <tr>
                      <td style="width: 30%; height: 300px;">
                        <span style="margin-left: 40px;"><?php echo ($info['username']); ?></span>
                        <br>
                        <br>
                        <img src="<?php echo ($info['heading']); ?>" style="width: 120px; height: 160px;" />
                        <br>
                        <span>发帖总数：<?php echo ($count); ?></span>
                      </td>
                      <td style="width: 70%; height: 300px;">
                        <sapn style="position: absolute; padding-top: 50px;"><?php echo ($info['content']); ?></sapn>
                        <br>
                        <span style="position: absolute; padding-top: 240px;">发帖时间：<?php echo ($info['createtime']); ?></span>
                      </td>
                    <tr>
                    <?php if(is_array($comments)): $i = 0; $__LIST__ = $comments;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td style="width: 30%; height: 300px;">
                          <span style="margin-left: 40px;"><?php echo ($vo["username"]); ?></span>
                          <br>
                          <br>
                          <img src="<?php echo ($vo["heading"]); ?>" style="width: 120px; height: 160px;" />
                          <br>
                          <span>创建时间:<?php echo ($vo["createtime"]); ?></span>
                        </td>
                        <td style="width: 70%; height: 300px;">
                          <sapn style="position: absolute; padding-top: 50px;"><?php echo ($vo["comment"]); ?></sapn>
                          <br>
                          <span style="position: absolute; padding-top: 240px;">回复时间：<?php echo ($vo["createtime"]); ?></span>
                        </td>
                      <tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
              </table>
           <!-- </div> -->
     
           </div>
         </div>
         <div class="pages"><?php echo ($page); ?></div>
         
    </div>
    <!--content end-->
    <!--footer-->
    <div id="footer">
     <p>Copy@Right&nbsp&nbsp&nbsp&nbsp<a href="http://www.duanliang920.com" target="_blank">&nbsp&nbsp&nbsp&nbspyoung</a>&nbsp&nbsp&nbsp&nbsp2014/8/9-2015/9/1</p>
    </div>
    <!--footer end-->
    <script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
</body>
</html>