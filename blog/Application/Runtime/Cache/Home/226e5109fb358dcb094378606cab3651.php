<?php if (!defined('THINK_PATH')) exit();?><!Doctype Html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>我的心情</title>

<!--可无视-->
<link rel="stylesheet" type="text/css" href="/blog/Public/css/moodlist/default.css">

<!--必要样式-->
<link rel="stylesheet" type="text/css" href="/blog/Public/css/moodlist/styles.css">

<link href="/blog/Public/css/moodlist/style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="/blog/Public/css/index_moodlist.css"/>
<link rel="stylesheet" href="/blog/Public/css/moodlist.css"/>

<script src="/blog/Public/js/jquery.min.js" type="text/javascript"></script> 
<!-- <script src="/blog/Public/js/moodlist/animate-bg.js" type="text/javascript"></script>
<script src="/blog/Public/js/moodlist/scripts.js" type="text/javascript"></script> -->

</head>
<body>
<div id="header">
      <h1>个人博客</h1>
      <p>青春是打开了,就合不上的书。人生是踏上了，就回不了头的路，爱情是扔出了，就收不回的赌注。</p>    
</div>
<div id="nav">
    <ul>
        <li><a href="/blog/index.php/Home/Index/index">首页</a></li>
        <li><a href="/blog/index.php/Home/About/index">关于我</a></li>
        <li><a id="nava" href="/blog/index.php/Home/Moodlist/index">碎言碎语</a></li>
        <li><a href="/blog/index.php/Home/Learn/index">技术讨论</a></li>
        <li><a href="/blog/index.php/Home/Photo/index">相册展示</a></li>
        <li><a href="/blog/index.php/Home/Dialog/index">漫生活</a></li>
        <li><a href="/blog/index.php/Home/Wish/index">留言板</a></li>
        <div class="clear"></div>
    </ul>
</div>
<div class="skw-pages">
  <!-- <div class="skw-page skw-page-1 active">
  <div class="skw-page__half skw-page__half--left">
    <div class="skw-page__skewed">
    <div class="skw-page__content" style="background-image: url(<?php echo ($info[0]['imgpath']); ?>)"></div>
    </div>
  </div>
  <div class="skw-page__half skw-page__half--right">
    <div class="skw-page__skewed">
    <div class="skw-page__content">
      <h2 class="skw-page__heading">content</h2>
      <p>关于我的心情</p>
    </div>
    </div>
  </div>
  </div> -->

  <div class="skw-page skw-page-1 active">
  <div class="skw-page__half skw-page__half--left">
    <div class="skw-page__skewed">
    <div class="skw-page__content" style="background-image: url(<?php echo ($info[0]['imgpath']); ?>)"></div>
    </div>
  </div>
  <div class="skw-page__half skw-page__half--right">
    <div class="skw-page__skewed">
    <div class="skw-page__content">
      <p style="font-size: 24px;"><?php echo ($info[0]['mood']); ?></p>
    </div>
    </div>
  </div>
  </div>
  

  <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="skw-page skw-page-<?php echo ($vo["id"]); ?>">
      <div class="skw-page__half skw-page__half--left">
        <div class="skw-page__skewed">
        <div class="skw-page__content" style="background-image: url(<?php echo ($vo["imgpath"]); ?>)"></div>
        </div>
      </div>
      <div class="skw-page__half skw-page__half--right">
        <div class="skw-page__skewed">
        <div class="skw-page__content" style="background: #292929;">
          <p style="font-size: 24px;"><?php echo ($vo["mood"]); ?></p>
        </div>
        </div>
      </div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
  
<!--   <div class="skw-page skw-page-2">
  <div class="skw-page__half skw-page__half--left">
    <div class="skw-page__skewed">
    <div class="skw-page__content">
      <h2 class="skw-page__heading">Page 2</h2>
      <p class="skw-page__description">Nothing to do here, continue scrolling.</p>
    </div>
    </div>
  </div>
  <div class="skw-page__half skw-page__half--right">
    <div class="skw-page__skewed">
    <div class="skw-page__content"></div>
    </div>
  </div>
  </div>
  <div class="skw-page skw-page-3">
  <div class="skw-page__half skw-page__half--left">
    <div class="skw-page__skewed">
    <div class="skw-page__content"></div>
    </div>
  </div>
  <div class="skw-page__half skw-page__half--right">
    <div class="skw-page__skewed">
    <div class="skw-page__content">
      <h2 class="skw-page__heading">Page 3</h2>
      <p class="skw-page__description">The end is near, I promise!</p>
    </div>
    </div>
  </div>
  </div>
  <div class="skw-page skw-page-4">
  <div class="skw-page__half skw-page__half--left">
    <div class="skw-page__skewed">
    <div class="skw-page__content">
      <h2 class="skw-page__heading">Page 4</h2>
      <p class="skw-page__description">Ok, ok, just one more scroll!</p>
    </div>
    </div>
  </div>
  <div class="skw-page__half skw-page__half--right">
    <div class="skw-page__skewed">
    <div class="skw-page__content"></div>
    </div>
  </div>
  </div>
  <div class="skw-page skw-page-5">
  <div class="skw-page__half skw-page__half--left">
    <div class="skw-page__skewed">
    <div class="skw-page__content"></div>
    </div>
  </div>
  <div class="skw-page__half skw-page__half--right">
    <div class="skw-page__skewed">
    <div class="skw-page__content">
      <h2 class="skw-page__heading">Epic finale</h2>
      <p class="skw-page__description">story the end!</p>
    </div>
    </div>
  </div>
  </div> -->
</div>

<script src="/blog/Public/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
  var curPage = 1;
  var numOfPages = $('.skw-page').length;
  var animTime = 1000;
  var scrolling = false;
  var pgPrefix = '.skw-page-';
  function pagination() {
    scrolling = true;
    $(pgPrefix + curPage).removeClass('inactive').addClass('active');
    $(pgPrefix + (curPage - 1)).addClass('inactive');
    $(pgPrefix + (curPage + 1)).removeClass('active');
    setTimeout(function () {
      scrolling = false;
    }, animTime);
  }
  ;
  function navigateUp() {
    if (curPage === 1)
      return;
    curPage--;
    pagination();
  }
  ;
  function navigateDown() {
    if (curPage === numOfPages)
      return;
    curPage++;
    pagination();
  }
  ;
  $(document).on('mousewheel DOMMouseScroll', function (e) {
    if (scrolling)
      return;
    if (e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
      navigateUp();
    } else {
      navigateDown();
    }
  });
  $(document).on('keydown', function (e) {
    if (scrolling)
      return;
    if (e.which === 38) {
      navigateUp();
    } else if (e.which === 40) {
      navigateDown();
    }
  });
});
</script>
<script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
</body>
</html>