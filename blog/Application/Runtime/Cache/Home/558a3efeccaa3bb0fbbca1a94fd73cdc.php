<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>相册展示-个人博客</title>
<meta name="keywords" content="个人博客" />
<meta name="description" content="" />
<link rel="stylesheet" href="/blog/Public/css/index_moodlist.css"/>
<link rel="stylesheet" href="/blog/Public/css/moodlist.css"/>
<script type="text/javascript" src="/blog/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/blog/Public/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="/blog/Public/js/common.js"></script>
<script type="text/javascript" src="/blog/Public/js/waterfall.js" ></script> 
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
</head>

<body>
    <!--header start-->
    <div id="header">
      <h1>个人博客</h1>
      <p>青春是打开了,就合不上的书。人生是踏上了，就回不了头的路，爱情是扔出了，就收不回的赌注。</p>
      <div id="nav">
        <ul>
         <li><a href="/blog/index.php/Home/Index/index">首页</a></li>
         <li><a href="/blog/index.php/Home/About/index">关于我</a></li>
         <li><a href="/blog/index.php/Home/Moodlist/index">碎言碎语</a></li>
         <li><a href="/blog/index.php/Home/Learn/index">技术讨论</a></li>
         <li><a id="nava" href="/blog/index.php/Home/Photo/index">相册展示</a></li>
         <li><a href="/blog/index.php/Home/Dialog/index">漫生活</a></li>
         <li><a href="/blog/index.php/Home/Wish/index">留言板</a></li>
         <div class="clear"></div>
        </ul>
      </div>
    </div>
    <!--header end-->
    <!--content start-->
    <div id="content_xc">
         <div class="weizi">
           <div class="wz_text">当前位置：<a href="#">首页</a>><h1>相册展示</h1></div>
         </div>
         <div class="xc_content">
          <div class="con-bg">
              <div class="w960 mt_10">
               <div class="w650">
                <ul class="tips" id="wf-main" style="display:none" >
                        <li class="wf-cld"><img src="/blog/Public/images/about/photo/8.jpg"  width="200" height="178" alt="" /></li>         
                        <li class="wf-cld"><img src="/blog/Public/images/about/photo/1.jpg" height="147" width="200" alt="" /></li>
                        <li class="wf-cld"><img src="/blog/Public/images/about/photo/2.jpg"  width="200" height="267" alt="" /></li>
                        <li class="wf-cld"><img src="/blog/Public/images/about/photo/3.jpg"  width="200" height="125" alt="" /></li>
                        <li class="wf-cld"><img src="/blog/Public/images/about/photo/4.jpg" width="200" height="299" alt="" /></li>
                        <li class="wf-cld"><img src="/blog/Public/images/about/photo/5.jpg" width="200" height="125" alt="" /></li>
                        <li class="wf-cld"><img src="/blog/Public/images/about/photo/6.jpg" width="200" height="267" alt="" /></li>
                        <li class="wf-cld"><img src="/blog/Public/images/about/photo/7.jpg" width="200" height="135" alt="" /></li>
                        <li class="wf-cld"><img src="/blog/Public/images/about/photo/9.jpg"  width="200" height="300" alt="" /></li>
                        <li class="wf-cld"><img src="/blog/Public/images/about/photo/10.jpg"  width="200" height="107" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/8.jpg"  width="200" height="178" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/1.jpg" height="147" width="200" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/2.jpg"  width="200" height="267" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/3.jpg"  width="200" height="125" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/4.jpg" width="200" height="299" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/5.jpg" width="200" height="125" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/6.jpg" width="200" height="267"alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/7.jpg" width="200" height="135" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/9.jpg"  width="200" height="300" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/10.jpg"  width="200" height="107" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/2.jpg"  width="200" height="267" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/3.jpg"  width="200" height="125" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/8.jpg"  width="200" height="178" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/1.jpg" height="147" width="200" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/2.jpg"  width="200" height="267" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/3.jpg"  width="200" height="125" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/4.jpg" width="200" height="299" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/5.jpg" width="200" height="125" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/6.jpg" width="200" height="267"alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/7.jpg" width="200" height="135" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/9.jpg"  width="200" height="300" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/10.jpg"  width="200" height="107" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/2.jpg"  width="200" height="267" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="/blog/Public/images/about/photo/3.jpg"  width="200" height="125" alt="" /></li>
                    </ul>
               </div>
             </div>
           </div>
         </div>
    </div>
    <!--content end-->
  <!--footer-->
    <div id="footer">
     <p>Copy@Right&nbsp&nbsp&nbsp&nbsp<a href="http://www.duanliang920.com" target="_blank">&nbsp&nbsp&nbsp&nbspyoung</a>&nbsp&nbsp&nbsp&nbsp2014/8/9-2015/9/1</p>
    </div>
    <!--footer end-->
    <script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
    <script  type="text/javascript" src="__ROOT_/Public/js/nav.js"></script>
     <script>

    var timer, m = 0, m1 = $("img[rel='lazy']").length;

    function fade() {

        $("img[rel='lazy']").each(function () {

            var $scroTop = $(this).offset();

            if ($scroTop.top <= $(window).scrollTop() + $(window).height()) {

                $(this).hide();

                $(this).attr("src", $(this).attr("lazy_src"));

                $(this).attr("top", $scroTop.top);

                $(this).removeAttr("rel");

                $(this).removeAttr("lazy_src");

                $(this).fadeIn(600);

                var _left = $(this).parent().parent().attr("_left");

                if (_left != undefined)

                    $(this).parent().parent().animate({ left: _left }, 400);

                m++;

            }

        });

        if (m < m1) { timer = window.setTimeout(fade, 300); }

        else { window.clearTimeout(timer); }

    }

    $(function () {

        $("#wf-main img[rel='lazy']").each(function (i) {

            var _left = $(this).parent().parent().css("left").replace("px", "");

            $(this).parent().parent().attr("_left", _left);

            $(this).parent().parent().css("left", 0);

        });

        fade();

    });

    $(".loading").hide();

    $("#wf-main").show();

</script>	
</body>
</html>