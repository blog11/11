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
<script type="text/javascript" src="/blog/Public/js/theme/photo.js"></script>
<script type="text/javascript" src="/blog/Public/js/common.js"></script>
<script type="text/javascript" src="/blog/Public/js/waterfall.js" ></script> 
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
</head>

<body>
    <div id="content_xc" style="height: 900px;">
         <div class="xc_content" style="height: 900px;">
          <div class="con-bg" style="height: 900px;">
              <div class="w960 mt_10" style="height: 900px;">
               <div class="w650" style="height: 900px;">
                <ul class="tips" id="wf-main" style="display:none" >
                        <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="wf-cld"><img src="<?php echo ($vo["imgpath"]); ?>" alt="" onclick="disable();" style="cursor: pointer;" /></li><?php endforeach; endif; else: echo "" ;endif; ?>         
                    </ul>
               </div>
             </div>
           </div>
         </div>
    </div>
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

        $(".wf-cld").each(function(){
          $(this).click(function(){
            var src = $(this).children('img').attr('src');
            if(confirm('确定要禁用此照片吗?')){
              $.post('/blog/Admin/Photo/delphoto',{'src':src},function(result){
                if(result.result==1){
                  alert('操作成功');
                  location.reload();
                }else{
                  alert('操作失败');
                }
              });
            }
          });
        });

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