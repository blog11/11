<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>关于我-个人博客</title>
    <meta name="keywords" content="个人博客" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="/blog/Public/css/about.css"/>
    <link rel="stylesheet" href="/blog/Public/css/aboutme.css"/>
    <script type="text/javascript" src="/blog/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/blog/Public/js/jquery.SuperSlide.2.1.1.js"></script>
    <!--[if lt IE 9]>
    <script src="/blog/Public/js/html5.js"></script>
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
        <li><a id="nava" href="/blog/index.php/Home/About/index">关于我</a></li>
        <li><a href="/blog/index.php/Home/Moodlist/index">碎言碎语</a></li>
        <li><a href="/blog/index.php/Home/Learn/index">技术讨论</a></li>
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
    <div class="left" id="about_me">
        <div class="weizi">
            <div class="wz_text">当前位置：<a href="/blog/index.php/Home/Index/index">首页</a>><h1>关于我</h1></div>
        </div>
        <div class="about_content">
            博主是一个草根站长，喜欢研究asp与php的各项技术
        </div>
    </div>
    <!--end left -->
    <!--right-->
    <div class="right" id="c_right">
        <div class="s_about">
            <h2>关于博主</h2>
            <img src="/blog/Public/images/about/my.jpg" width="230" height="230" alt="博主"/>
            <p>博主：young</p>
            <p>职业：asp php后端编写</p>
            <p>简介：young是一个优秀的后端程序员，获得过多想国际级大奖，其中还包括诺贝尔程序员奖</p>
            <p>
                <a href="#" title="联系博主"><span class="left b_1"></span></a><a href="#" title="加入QQ群，一起学习！"><span class="left b_2"></span></a>
            <div class="clear"></div>
            </p>
        </div>
        <!--栏目分类-->
        <div class="lanmubox">
            <div class="hd">
                <ul><li>精心推荐</li><li>最新文章</li><li class="hd_3">随机文章</li></ul>
            </div>
            <div class="bd">
                <ul>
                    <li><a href="#" title="网站项目实战开发（-）">网站项目实战开发（-）</a></li>
                    <li><a href="#" title="关于响应式布局">关于响应式布局</a></li>
                    <li><a href="#" title="如何创建个人博客网站">如何创建个人博客网站</a></li>
                    <li><a href="#" title="网站项目实战开发（二）">网站项目实战开发（二）</a></li>
                    <li><a href="#" title="为什么新站前期排名老是浮动？(转)">为什么新站前期排名老是浮动？(转)</a></li>
                </ul>
                <ul>
                    <li><a href="#" title="网站项目实战开发（-）">网站项目实战开发（-）</a></li>
                    <li><a href="#" title="关于响应式布局">关于响应式布局</a></li>
                    <li><a href="#" title="如何创建个人博客网站">如何创建个人博客网站</a></li>
                    <li><a href="#" title="网站项目实战开发（二）">网站项目实战开发（二）</a></li>
                    <li><a href="#" title="为什么新站前期排名老是浮动？(转)">为什么新站前期排名老是浮动？(转)</a></li>
                </ul>
                <ul>
                    <li><a href="#" title="网站项目实战开发（-）">网站项目实战开发（-）</a></li>
                    <li><a href="#" title="关于响应式布局">关于响应式布局</a></li>
                    <li><a href="#" title="如何创建个人博客网站">如何创建个人博客网站</a></li>
                    <li><a href="#" title="网站项目实战开发（二）">网站项目实战开发（二）</a></li>
                    <li><a href="#" title="为什么新站前期排名老是浮动？(转)">为什么新站前期排名老是浮动？(转)</a></li>
                </ul>


            </div>
        </div>
        <!--end-->
    </div>
    <!--end  right-->
    <div class="clear"></div>

</div>
<!--content end-->
<!--footer-->
<div id="footer">
    <p>Copy@Right&nbsp&nbsp&nbsp&nbsp<a href="http://www.duanliang920.com" target="_blank">&nbsp&nbsp&nbsp&nbspyoung</a>&nbsp&nbsp&nbsp&nbsp2014/8/9-2015/9/1</p>
</div>
<!--footer end-->
<script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
<script  type="text/javascript" src="/blog/Public/js/nav.js"></script>
</body>
</html>