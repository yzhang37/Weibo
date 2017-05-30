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
<nav class="navbar navbar-default navbar-fixed" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">我的微博</a>
    </div>
    <?php if( checklogin() == false ){?>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> 注册</a></li>
      <li class="dropdown">
      	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> 登录</a>
      	<ul class="dropdown-menu">
      		<div id="user_login" class="form-group">
      			<li><label>用户名</label><input name="log_uid" type="text"/></li>
      			<li><label>密码</label><input name="log_pwd" type="text"/></li>
      			<li><button class="btn btn-default" name="submit">登陆</button></li>
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
</nav>
