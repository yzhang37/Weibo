
<?php 
// 引入工具函数等
require_once('functions.php');
// 引入配置
require_once('config.php');
?>
<nav class="navbar navbar-default navbar-fixed" role="navigation">
	<?php
get_header(); 
?>
</nav>
<link rel="stylesheet" href="js/easyform/easyform.css">
<link rel="stylesheet" href="css/platform-1.css">
<style type="text/css">
	body {
		background: url("http://wx3.sinaimg.cn/mw1024/869f1348ly1fg5sdb5qkaj218g0pa75d.jpg");
	}
	.form_field_warning
	{
		text-align: left;
		color: red;
		padding-left: 1em;
		padding-right: 1em;
	}    	
</style> 

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			 <h1 class="text-center" style="font-style:italic;font-size:35px;margin:1em">
				<img src="images/weibo.jpg"/> 发现好玩有趣的事情
			</h1>
		</div>
	</div>

	<div style="background-color:white;padding:15px;width:800px;margin:0 auto" > 
		<h3 class="text-left">登录 Weibo</h3>
		<br/>
		<div class="row clearfix">
			<div class="col-md-8 column">
				<form id="register_form" class="form-horizontal">
					<div class="form-group" >
						<label class="col-sm-3 control-label" for="inputEmail3"style="float:left">用户名: </label>
						<div class="col-sm-7">
							<input class="form-control" type="text" id="log_email" autofocus placeholder="用户名（注册时候的邮箱）"
							       data-easyform="email;real-time"
	                               data-message="请输入正确的邮箱格式！"
								   data-easytip="position:top;class:easy-blue;" />
							<div class="form_field_warning" id="warning_email"></div>
						</div>
					</div>
					<div class="form-group" >
						 <label class="col-sm-3 control-label" for="inputPassword3"style="float:left"> 密码: </label>
						<div class="col-sm-7" >
							<input class="form-control" type="password"  id="log_pwd" placeholder="登录密码"
							       data-easyform="length:6 16;char-normal;real-time;"
	                               data-message="密码必须为6—16位"
	                               data-easytip="position:right;class:easy-blue;"/>
	                        <div class="form_field_warning" id="warning_pass"></div>
						</div>
					</div>
					<div class="buttons">
						<button type="button" class="btn btn-primary" id="log_submit" style="margin-right:20px; margin-top:20px;">登录</button>
					</div>
				</form>
			</div>
			<div class="col-md-4 column">
				<p>
					 还没有账号吗？<a href="javascript: void(0);" onclick="window.location.href='/register';" class="btn btn-default">立即注册</a>
				</p>
		        <hr style="border:1px dotted #000; height:1px">
				<p>weibo 登录帮助</p>
                <p>
					 忘记密码？<a href="javascript: void(0);" onclick="alert('密码找不回就算了，注册一个新的帐户呗。')" class="btn btn-default">找回密码</a>
				</p>
	    	</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
