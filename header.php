<?php 
	header("Content-type: text/html; charset:utf-8");
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />  
	<title>weibo-发现好玩有趣的事情</title>
	
	<link rel="stylesheet" type="text/css" href='https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css' />
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<?php if ( !empty ($page_css) ) echo '<link rel="stylesheet" type="text/css" href="'.$page_css.'" />';?>
	
	<script type='text/javascript' src='http://upcdn.b0.upaiyun.com/libs/jquery/jquery-2.0.3.min.js'></script>
	<script type="text/javascript" src='https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
	<script type="text/javascript" src='/js/plugin.js'></script>
	<script type="text/javascript" src="/js/main.js"></script>
	<?php if ( !empty ($page_script) ) echo '<script type="text/javascript" src="'.$page_script.'"></script>';?>
   <script src="//cdn.bootcss.com/jquery-cookie/1.4.1/jquery.cookie.js"></script>
   <script src="//cdn.bootcss.com/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
   <link href="../styles/weibo.css" type="text/css" rel="stylesheet" />
   <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://cdn.static.runoob.com/libs/jquery/2.0.0/jquery.min.js"></script>
   <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>
					 <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" style="font-size:30px"><strong>weibo<strong/></a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input class="form-control" type="text" />
						</div> <button type="submit" class="btn btn-default">搜索</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
					<?php
					   if (checklogin() == false) {
					?>
						<li class="active">
							 <a href="javascript: void(0);" onclick="window.location.href='/';"><span class="glyphicon glyphicon-home" style="color: rgb(0,0,0);"><span style="margin-left: 0.8em;">首页</span>
							 	</span></a>
						</li>
						<li>
							 <a href="javascript: void(0);" onclick="window.location.href='/login';"><span class="glyphicon glyphicon-log-in" style="color: rgb(0,0,0);"><span style="margin-left: 0.8em;">登录</span>
							 </span></a>
						</li>
						<li>
							 <a href="javascript: void(0);" onclick="window.location.href='/register';"><span class="glyphicon glyphicon-tower" style="color: rgb(0,0,0);"><span style="margin-left: 0.8em;">注册</span>
							 </span></a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-leaf" style="color: rgb(0,0,0);"> 关于我们</span><strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									 <a href="#">联系我们</a>
								</li>
								<li>
									 <a href="#">我们的故事</a>
								</li>
								<li>
									 <a href="#">更多设置</a>
								</li>
							<?php } else {
								$email = $_SESSION['user_info']['mail'];
								$userdata = get_full_user_info($email);
								 ?>
							<li class="active">
                             <a href="/"><span class="glyphicon glyphicon-home" style="color: rgb(0,0,0);"><span style="margin-left: 0.8em;">首页</span></span></a>
                        </li>
                        <li>
                             <a href="#"><span class="glyphicon glyphicon-film" style="color: rgb(0,0,0);"><span style="margin-left: 0.8em;">视频</span></span></a>
                        </li>
                        <li>
                             <a href="#"><span class="glyphicon glyphicon-user" style="color: rgb(0,0,0);"><span style="margin-left: 0.8em;"><?php
                             	echo $userdata['nname'];
                             	?></span></span></a><!--需要显示用户名-->
                        </li>
                        <li>
                             <a href="javascript:void(0);" id="user_logout"><span class="glyphicon glyphicon-log-out" style="color: rgb(0,0,0);"><span style="margin-left: 0.8em;">退出</span></span></a><!--需要显示用户名-->
                        </li>
                        <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                             	<span class="glyphicon glyphicon-cog" style="color: rgb(0,0,0);">设置</span><strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                     <a href="#">账号设置</a>
                                </li>
                                <li>
                                     <a href="#">会员中心</a>
                                </li>
                                <li>
                                     <a href="#">V认证</a>
                                </li>
                                <li>
                                     <a href="#">隐私设置</a>
                                </li>
                                <li>
                                     <a href="#">屏蔽设置</a>
                                </li>
                                <li>
                                     <a href="#">消息设置</a>
                                </li>
                                <li>
                                     <a href="#">帮助中心</a>
                                </li>
                            </ul>
                        </li>
							<?php } ?>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
		</div>
	</div>
</div>

