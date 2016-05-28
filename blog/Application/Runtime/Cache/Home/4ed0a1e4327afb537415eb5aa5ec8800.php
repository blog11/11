<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>许愿墙</title>
	<link rel="stylesheet" href="/blog/Public/Css/wish.css" />
	<script type="text/javascript" src='/blog/Public/Js/jquery.min.js'></script>
	<script type="text/javascript" src='/blog/Public/Js/wish.js'></script>
</head>
<body>
	<div id='top'>
		<span id='send'></span>
	</div>
	<div id='main'>
		<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl class='paper a1'>
				<dt>
					<span class='username'><?php echo ($vo["author"]); ?></span>
					<span class="num">No.<?php echo ($vo["id"]); ?></span>
				</dt>
				<dd class="content"><?php echo ($vo["content"]); ?></dd>
				<dd class='bottom'>
					<span class='time'><?php echo ($vo["createtime"]); ?></span>
					<a href="" class='close'></a>
				</dd>
			</dl><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>

	<div id='send-form'>
		<p class='title'><span>许下你的愿望</span><a href="" id='close'></a></p>
		<form action="/blog/index.php/Home/Wish/create" name='wish' method="post">
			<p>
				<label for="content">愿望：(您还可以输入&nbsp;<span id='font-num'>50</span>&nbsp;个字)</label>
				<textarea name="content" id='content'></textarea>
				<div id='phiz'>
					<img src="/blog/Public/Images/wish/phiz/zhuakuang.gif" alt="抓狂" />
					<img src="/blog/Public/Images/wish/phiz/baobao.gif" alt="抱抱" />
					<img src="/blog/Public/Images/wish/phiz/haixiu.gif" alt="害羞" />
					<img src="/blog/Public/Images/wish/phiz/ku.gif" alt="酷" />
					<img src="/blog/Public/Images/wish/phiz/xixi.gif" alt="嘻嘻" />
					<img src="/blog/Public/Images/wish/phiz/taikaixin.gif" alt="太开心" />
					<img src="/blog/Public/Images/wish/phiz/touxiao.gif" alt="偷笑" />
					<img src="/blog/Public/Images/wish/phiz/qian.gif" alt="钱" />
					<img src="/blog/Public/Images/wish/phiz/huaxin.gif" alt="花心" />
					<img src="/blog/Public/Images/wish/phiz/jiyan.gif" alt="挤眼" />
				</div>
			</p>
			<input type="submit" id="send-btn" value="" style="width:120px;height:50px"/>
		</form>
	</div>
<!--[if IE 6]>
    <script type="text/javascript" src="/blog/Public/Js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('#send,#close,.close','background');
    </script>
<![endif]-->
</body>
</html>