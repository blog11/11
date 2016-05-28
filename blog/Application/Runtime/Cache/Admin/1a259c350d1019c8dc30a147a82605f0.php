<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="/blog/Public/css/bootstrap.min.css">
		<link rel="stylesheet" href="/blog/Public/css/moodlist/animate.min.css">
		<link rel="stylesheet" href="/blog/Public/css/moodlist/font-awesome.min.css"> 
		<link rel="stylesheet" href="/blog/Public/css/moodlist/vegas.min.css"> 
        <link rel="stylesheet" href="/blog/Public/css/moodlist/reset.css">
		<link rel="stylesheet" href="/blog/Public/css/moodlist/style1.css">
		<link rel="stylesheet" href="/blog/Public/css/moodlist/mobile.css">
	</head>
	<body>
		<section>
			<div class="container">
				<div class="row">

					<div class="col-xs-12">
						
	            		<div class="countdown-container" id="lwt-countdown">
							<div id="form">
	                        	<div id="form-subscriber"></div>
	                            <div class="form-container wow bounceInLeft" data-wow-delay="0.5s">
	                                <div class="page-section" id="signup">
	                                    <form method="post" action="/blog/index.php/Admin/Moodlist/add" enctype="multipart/form-data">
	                                    	<input type="file" name="file" style="width:100%"/>
	                                    	<textarea rows="4" clos="20" id="email" name="mood" class="emailfield" placeholder="书写你的心情"></textarea>
	                                    	<input type="submit" value="提交" />
	                                    </form>
	                                </div> <!--end page section -->
	                            </div> <!-- End form container -->
	                        </div> <!-- end Subscribe Form -->
            			</div>
            		
					</div> 
				</div>
			</div> 
		</section>
		<div id="jquery_jplayer_1"></div>
		<script src="/blog/Public/js/jquery.min.js"></script>
		<script src="/blog/Public/js/moodlist/wow.min.js"></script>
		<script src="/blog/Public/js/moodlist/jquery.lwtCountdown-1.0.js"></script>
		<script src="/blog/Public/js/moodlist/jquery.jplayer.min.js"></script>
		<script src="/blog/Public/js/moodlist/vegas.min.js"></script>
		<script src="/blog/Public/js/moodlist/theme.js"></script>
	</body>
</html>