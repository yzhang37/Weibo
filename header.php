<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />  
	<title>微博</title>
	
	<link rel="stylesheet" type="text/css" href='https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css' />
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<?php if ( !empty ($page_css) ) echo '<link rel="stylesheet" type="text/css" href="'.$page_css.'" />';?>
	
	<script type='text/javascript' src='http://upcdn.b0.upaiyun.com/libs/jquery/jquery-2.0.3.min.js'></script>
	<script type="text/javascript" src='https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
	<script type="text/javascript" src='/js/plugin.js'></script>
	<script type="text/javascript" src="/js/main.js"></script>
	<?php if ( !empty ($page_script) ) echo '<script type="text/javascript" src="'.$page_script.'"></script>';?>
	
</head>
<body>
<!--
<nav class="navbar navbar-default navbar-fixed" role="navigation">

  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WEIBO</a>
    </div>
    <?php if( checklogin() == false ){?>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> 注册</a></li>
      <li class="dropdown">
      	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> 登录</a>
      	<ul class="dropdown-menu">
      		<div id="user_login" class="form-group">
      			<li><label>邮箱</label><input name="log_mail" type="text"/></li>
      			<li><label>密码</label><input name="log_pwd" type="text"/></li>
      			<li><button class="btn" name="submit">登陆</button></li>
      		</div>
      	</ul>
      </li>
    </ul>
    <?php } else {?>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" id="user_logout"><span class="glyphicon glyphicon-log-out"></span> 登出</a></li>
    </ul>
    <?php }?>
  </div>
-->
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
						<li class="active">
							 <a href="http://localhost/index.php"><span class="glyphicon glyphicon-home" style="color: rgb(0,0,0);"> 首页</span></a>
						</li>
						<li>
							 <a href="http://localhost/index.php"><span class="glyphicon glyphicon-user" style="color: rgb(0,0,0);"> 登录</span></a>
						</li>
						<li>
							 <a href="http://localhost/sign.html"><span class="glyphicon glyphicon-tower" style="color: rgb(0,0,0);"> 注册</span></a>
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
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
		</div>
	</div>
</div>

