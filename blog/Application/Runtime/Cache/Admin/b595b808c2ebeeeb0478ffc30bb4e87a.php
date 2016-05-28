<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>后台管理</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="/blog/Public/css/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/blog/Public/css/assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="/blog/Public/css/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/blog/Public/css/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/blog/Public/css/assets/css/ace-skins.min.css" />
		<link rel="stylesheet" type="text/css" href="/blog/Public/css/normalize.css"/>
		<link rel="stylesheet" type="text/css" href="/blog/Public/css/baze.modal.css"/>
		<link rel="stylesheet" type="text/css" href="/blog/Public/css/register.css"/>
		<script type="text/javascript" src="/blog/Public/js/jquery.min.js"></script>
		<script src="/blog/Public/css/assets/js/ace-extra.min.js"></script>
		<script type="text/javascript" src="/blog/Public/js/theme/login_admin.js"></script>
		<script type="text/javascript" src="/blog/Public/js/theme/photo.js"></script>
		<script type="text/javascript" src="/blog/Public/js/theme/moodlist.js"></script>
		<script type="text/javascript" src="/blog/Public/js/theme/liuyan.js"></script>
		<script type="text/javascript" src="/blog/Public/js/theme/article.js"></script>
		<script type="text/javascript" src="/blog/Public/js/theme/permission.js"></script>
		<script type="text/javascript" src="/blog/Public/js/theme/distribution.js"></script>
		<script type="text/javascript" src="/blog/Public/js/layer.js"></script>
		<script type="text/javascript">
			$(function(){   
				iFrameHeight();
			});
			function iFrameHeight() {   
				var ifm= document.getElementById("iframepage");   
				var subWeb = document.frames ? document.frames["iframepage"].document : ifm.contentDocument;   
				if(ifm != null && subWeb != null) {
				   ifm.height = subWeb.body.scrollHeight;
				   ifm.width = subWeb.body.scrollWidth;
				}   
			}   
		</script>
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							杨凯的博客后台
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
	

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<!-- <img class="nav-user-photo" src="/blog/Public/css/assets/avatars/profile-pic.jpg" alt="Jason's Photo" /> -->
								<img class="nav-user-photo" src="<?php echo ($userinfo['heading']); ?>" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎回来,</small>
									<span id="nowname"><?php echo ($userinfo['username']); ?></span>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="javascript:void()" id="ngehe" data-target="#modal2" onclick="resetpwd();">
										<i class="icon-cog"></i>
										重置密码
									</a>
								</li>

								<li>
									<a href="javascript:void()" id="myself" data-target="#modal3" onclick="resetmyself();">
										<i class="icon-user"></i>
										个人资料
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="/blog/index.php/Admin/Index/logout">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="center bzm-content" id="modal2" data-title="密码重置">
			<div class="register">
				<div class="regMain">
					<div class="regUser">
					<form action="/blog/Admin/Index/checkOldPwd" method="post">
						<div class="regList">
							<div class="listTop">
								<span>旧密码：</span>
								<input type="password" name="oldpwd" placeholder="请设置您的密码支持6-20字符，区分大小写">
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
								<input type="password" name="pwdConfirm" placeholder="请设置您的密码支持6-20字符，区分大小写">
							</div>
							<div class="listError">
								<span></span>
							</div>
						</div>
						<div class="regFinish">
							<button class="regBtn" type="submit">完成修改</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="center bzm-content" id="modal3" data-title="个人资料">
			<div class="register">
				<div class="regMain">
					<div class="regUser">
						<div class="regList">
							<div class="listTop">
								<span>用户名:</span>
								<input type="text" name="username" readonly="true" value="<?php echo ($userinfo['username']); ?>" />
							</div>
						</div>
						<div class="regList">
							<div class="listTop">
								<span>真实姓名:</span>
								<input type="text" name="realname" readonly="true" value="<?php echo ($userinfo['realname']); ?>" />
							</div>
						</div>
						<div class="regList">
							<div class="listTop">
								<span>创建时间:</span>
								<input type="text" name="createtime" readonly="true" value="<?php echo ($userinfo['createtime']); ?>" />
							</div>
						</div>
						<div class="regList">
							<div class="listTop">
								<span>状态:</span>

								<input type="text" name="state" readonly="true" value="<?php if($userinfo['state']==0){echo '正常';}else{echo '禁用';}?>" />
							</div>
						</div>
						<div class="regList">
							<div class="listTop">
								<span>身份:</span>
								<input type="text" name="identity" readonly="true" value="<?php if($userinfo['identity']==0){echo '注册用户';}elseif($userinfo['identity']==1){echo '游客';}else{echo '后台管理者';}?>" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li class="active">
							<a href="index.html">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 控制台 </span>
							</a>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text"> 相册管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="javascript:;" onclick="photo();">
										<i class="icon-double-angle-right"></i>
										照片上传
									</a>
								</li>

								<li>
									<a href="javascript:;" onclick="deletephoto();">
										<i class="icon-double-angle-right"></i>
										删除照片
									</a>
								</li>

								

							</ul>
						</li>

						<li>
							<a href="javascript:;" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 我的心情 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="javascript:;" onclick="moodlist();">
										<i class="icon-double-angle-right"></i>
										碎言碎语
									</a>
								</li>

								<li>
									<a href="javascript:;" onclick="managemood();">
										<i class="icon-double-angle-right"></i>
										管理心情
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> 我的留言板 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="javascript:void()" onclick="liuyan();">
										<i class="icon-double-angle-right"></i>
										留言板管理
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> 文章管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="javascript:void()" onclick="article();">
										<i class="icon-double-angle-right"></i>
										文章添加
									</a>
								</li>
							</ul>
						</li>


						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> 权限管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="javascript:void()" onclick="permission();">
										<i class="icon-double-angle-right"></i>
										权限修改
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> 内部使用 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="javascript:void()" onclick="distribution();">
										<i class="icon-double-angle-right"></i>
										用户分布图
									</a>
								</li>
							</ul>
						</li>

					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">首页</a>
							</li>
							<li class="active">控制台</li>
						</ul><!-- .breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								控制台
								<!-- <small>
									<i class="icon-double-angle-right"></i>
									 查看
								</small> -->
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="icon-remove"></i>
									</button>

									<i class="icon-ok green"></i>

									欢迎使用
									<strong class="green">
										博客后台管理系统
									<small>(v1.2)</small>
									</strong>
									,这里为你提供更更全面的服务.	
							  </div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
							<iframe src="/blog/index.php/Admin/Welcome/index" id="iframepage" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" onLoad="iFrameHeight();" style="width: 100%"></iframe>
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; 选择皮肤</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl">切换到左边</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								切换窄屏
								<b></b>
							</label>
						</div>
					</div>
				</div>
			</div>
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div>
		<script src="/blog/Public/css/assets/js/jquery.min.js"></script>
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/blog/Public/css/assets/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/blog/Public/css/assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="/blog/Public/css/assets/js/bootstrap.min.js"></script>
		<script src="/blog/Public/css/assets/js/typeahead-bs2.min.js"></script>
		<script src="/blog/Public/css/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/blog/Public/css/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/blog/Public/css/assets/js/jquery.slimscroll.min.js"></script>
		<script src="/blog/Public/css/assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="/blog/Public/css/assets/js/jquery.sparkline.min.js"></script>
		<script src="/blog/Public/css/assets/js/flot/jquery.flot.min.js"></script>
		<script src="/blog/Public/css/assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="/blog/Public/css/assets/js/flot/jquery.flot.resize.min.js"></script>
		<script src="/blog/Public/css/assets/js/ace-elements.min.js"></script>
		<script src="/blog/Public/css/assets/js/ace.min.js"></script>
		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
						size: size
					});
				})			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
				});
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}		
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').slimScroll({
					height: '300px'
			    });
				var agent = navigator.userAgent.toLowerCase();
				if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				});
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
				
			
			})
		</script>

		<script type="text/javascript" src="/blog/Public/js/baze.modal.js"></script>
		<script type="text/javascript">
			function resetpwd(){
				$('#ngehe').bazeModal();
			}		
		</script>
</body>
</html>