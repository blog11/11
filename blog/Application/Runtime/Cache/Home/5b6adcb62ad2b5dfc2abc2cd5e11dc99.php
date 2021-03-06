<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>博客</title>
<link href="/blog/Public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
" />
<link rel="stylesheet" type="text/css" href="/blog/Public/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="/blog/Public/css/normalize.css"/>
<link rel="stylesheet" type="text/css" href="__ROOT/Public/css/jquery.idealforms.min.css"/>
<link rel="stylesheet" type="text/css" href="__ROOT/Public/css/jquery.ui.css"/>
<link rel="stylesheet" type="text/css" href="/blog/Public/css/baze.modal.css"/>
<link rel="stylesheet" type="text/css" href="/blog/Public/css/bootstrap-theme.min.css"/>
<script type="text/javascript" src="/blog/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/blog/Public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/blog/Public/js/theme/login.js"></script>
<script type="text/javascript" src="/blog/Public/js/baze.modal.js"></script>
<script type="text/javascript" src="/blog/Public/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/blog/Public/js/jquery.idealforms.js"></script>
</head>
<body>
<div class="login">
	<div class="login-top">
		<h1>Login</h1>
		<form method="post" action="/blog/index.php/Home/Login/commit">
			<input type="text" name="username" value="请输入用户名" id="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入用户名';}">
			<input type="text" id="password" name="password" value="请输入密码" onfocus="init();" onblur="change();" />
			<input type="text" style="width: 50%" id="vali" name="captcha" value="验证码" onfocus="this.value='';" onblur="if (this.value=='') {this.value='验证码';}"/><img src="http://localhost/blog/index.php/Home/Login/validate" id="captcha" onclick="this.src='http://localhost/blog/index.php/Home/Login/validate?rmd='+Math.random();" style="cursor: pointer" title="点击刷新"/>
			<div class="forgot">
				<span>游客登陆</span>
				<input type="checkbox" name="istourist" aria-label="..." class="check" onclick="check();" />

				<input type="submit" value="登陆" onclick="validate()">
			</div>
	    </form>

	</div>
	<div class="login-bottom">
		<h3>新用户&nbsp;<span id="ngehe" data-target="#modal2" onclick="dialog();">注册</span></h3>
	</div>
	<div class="center bzm-content" id="modal2" data-title="用户注册">
		<div class="register">
			<div class="regMain">
				<div class="regUser">
					<form action="/blog/index.php/Home/Register/createUser" id="regForm" autocomplete="off" method="post" enctype="multipart/form-data">
						<div class="regList">
							<div class="listTop">
								<span>用户名：</span>
								<input type="text" name="username" placeholder="请输入用户名，支持4-20字符" onblur="checkUsername(this.value);">
							</div>
							<div class="usernamelistError">
								
							</div>
						</div>
						<div class="regList">
							<div class="listTop">
								<span>昵称：</span>
								<input type="text" name="nickname" placeholder="请输入昵称，支持4-20字符">
							</div>
							<div class="listError">
								<span></span>
							</div>
						</div>
						<div class="regList">
							<div class="listTop">
								<span>地址：</span>
								<select name="pro" id="pro" onchange="getPro(this.value);" style="width: 170px; height: 30px;">
									<option value="0">请选择省份</option>
									<?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
								</select>
								<select name="cty" id="city" class='selcity' style="width: 170px; height: 30px;">
									<option>请选择市区</option>
								</select>
							</div>
							<div class="listError">
								<span></span>
							</div>
						</div>
						<div class="regList">
							<div class="listTop">
								<span>密码：</span>
								<input type="password" name="pwd" placeholder="请设置您的密码支持6-20字符，区分大小写">
							</div>
							<div class="listError">
								<span></span>
							</div>
						</div>
						<div class="regList">
							<div class="listTop">
								<span>确认密码：</span>
								<input type="password" name="pwdConfirm" placeholder="请确认密码">
							</div>
							<div class="listError">
								<span></span>
							</div>
						</div>
						<div class="regList">
								<span style="margin-left: 15px">上传头像：</span>
								<input type="file" name="headingimg" placeholder="请输入用户名，支持4-20字符" style="float: right">
							<div class="listError">
								<span></span>
							</div>
						</div>
						<div class="regFinish">
							<button class="regBtn" type="submit">完成注册</button>
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

</div>

</body>
</html>