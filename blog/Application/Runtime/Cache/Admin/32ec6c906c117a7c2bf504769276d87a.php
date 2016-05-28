<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>蓝色透明登录界面模板</title>

<link rel="stylesheet" href="/blog/Public/css/font-awesome.min.css"/>
<link rel="stylesheet" href="/blog/Public/css/loginMy.css"/>

<style>
html,body{width:100%;}
</style>

</head>
<body>

<div class="main">

	<div class="center">
		<form action="/blog/index.php/Admin/Login/check" id="formOne" method="post" onsubmit="return submitB()" >
			<i class="fa fa-user Cone">  | </i>
			<input type="text" name="user" id="user" placeholder="用户名"onblur="checkUser()"/>
			<span id="user_pass"></span>
			<br/>
			<i class="fa fa-key Cone">  | </i>
			<input type="password" name="pwd" id="pwd" placeholder="密码"onblur="checkUser1()"/>
			<span id="pwd_pass"></span>
			<br/>
			<span id="surePwd_pass" ></span><br/>
			<input type="submit" value="登录" id="submit" name="submit">
			<br/>
		</form>
	</div>
	
</div>


<script type="text/javascript" src="/blog/Public/js/loginMy.js"></script>
<div style="text-align:center;">
</div>
</body>
</html>