<?php 
// 引入工具函数等
require_once('functions.php');
// 引入配置
require_once('config.php');
if (checklogin() == true)
{
	//当前已经登录了，那么直接跳转到用户界面
	//TODO: 使用 AJAX 转到另一个页面
	header('Location: /h/user');
}
?>
<nav class="navbar navbar-default navbar-fixed" role="navigation">
	<?php
get_header(); 
?>
</nav>
    <script src="js/easyform/easyform.js"></script>
	<link rel="stylesheet" href="css/platform-1.css">
    <link rel="stylesheet" href="js/easyform/easyform.css">
    <link rel="stylesheet" href="css/tab.css">
    <style type="text/css">
    	.form_field_warning
    	{
    		text-align: left;
    		color: red;
    	}    	
    </style> 
<!-------------------------------------------------页面整体--------------------------------------------------->
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			 <h1 class="text-center" style="font-style:italic;font-size:35px;margin:1em">
				<img src="images/weibo.jpg"/> 发现好玩有趣的事情
			</h1>
		</div>
	</div>
<!----------------------------------注册部分----------------------------------------------------->
	<div  style="background-color:white;padding:15px;width:800px;margin:0 auto" > 
			<h3 class="text-left" >
				注册
			</h3>
			<br/>
    <div class="row clearfix">
		<div class="col-md-8 column">
<!--------------------------------下一行action里是提交表单后的处理程序--------------------------------------->
			<form id="register_form" class="form-horizontal">
				<div class="form-group" >
					<label class="col-sm-3 control-label" for="inputEmail3"style="float:left">* 输入邮箱</label>
					<div class="col-sm-7">
						<input class="form-control" type="email" id="reg_email"  name="reg_email" autofocus placeholder="以后将作为用户名登录使用"
						       data-easyform="email;real-time"
                               data-message="请输入正确的邮箱格式！"
							   data-easytip="position:top;class:easy-blue;" />
						<div id="warning_email" class="form_field_warning"></div>
					</div>
				</div>
				<div class="form-group" >
					 <label class="col-sm-3 control-label" for="inputEmail3"style="float:left">* 设置昵称</label>
					<div class="col-sm-7">
						<input class="form-control" type="text" id="reg_nickname" name="reg_nickname" placeholder="必须为4—16位的中文、英文字母或数字"
                               data-easyform="length:4 16;char-chinese;real-time;";
                               data-message="用户名必须为4—16位的中文、英文字母或数字"
                               data-easytip="position:right;class:easy-blue;" 
						/>  
						<div id="warning_nickname" class="form_field_warning"></div>
					</div>
				</div>
				<div class="form-group" >
					 <label class="col-sm-3 control-label" for="inputPassword3"style="float:left">* 设置密码</label>
					<div class="col-sm-7" >
						<input class="form-control" type="password" id="reg_pwd" name="reg_pwd" placeholder="密码必须为6—16位"
						       data-easyform="length:6 16;char-normal;real-time;"
                               data-message="密码必须为6—16位"
                               data-easytip="position:right;class:easy-blue;"/>
                        <div id="warning_password" class="form_field_warning"></div>
					</div>
				</div>
				<div class="form-group" >
					 <label class="col-sm-3 control-label" for="inputPassword3"style="float:left">* 再次输入密码</label>
					<div class="col-sm-7">
						<input class="form-control" type="password" id="reg_pwdconf" name="reg_pwdconf" placeholder="两次密码输入要一致"
                          data-easyform="equal:#psw1;real-time"
                          data-message="两次密码输入要一致" 
						  data-easytip="position:right;class:easy-blue;"
						/>
						<div id="warning_passconf" class="form_field_warning"></div>
					</div>
				</div>
                <div class="form-group">
                    <label class="col-sm-3" for="name">一句话描述自己</label>
                      <div class="col-sm-7">
					  <textarea id="reg_sign" class="form-control" rows="3" name="reg_sign" placeholder="我是...."></textarea>
					 
					  </div>
                </div>
				<div class="buttons">
					<button class="btn btn-primary" id="reg_submit" name="reg_submit" style="margin-right:20px; margin-top:20px;">注册</button>
				</div>
			</form>
		</div>		
		<div class="col-md-4 column">
			<p>
				 已经有账号了吗？<a class="btn btn-default" href="/login">直接登录</a>
			</p>
        <hr style="border:1px dotted #000; height:1px">
		<p>weibo注册帮助</p>
                    <div class="reg_help">
                    	<ul class="help_list">
                        	<li><a target="_blank" href="#"style="font-size:12px">weibo注册操作指南</a></li>
                            <li><a target="_blank" href="#"style="font-size:12px">手机注册时提示手机号码已被绑定怎么办?</a></li>
                            <li><a target="_blank" href="#"style="font-size:12px">注册时昵称显示“已经被注册”如何处理?</a></li>
                            <li><a target="_blank" href="#"style="font-size:12px">注册时提示"你所使用的IP地址异常",怎么办?</a></li>
                        </ul>
						<br/>
                        <a target="_blank" href="http://help.weibo.com/faq/q/201" class="help_more"style="font-size:15px">更多帮助»</a>
                    </div>
	    </div>
    </div>
	<br/><br/>
	</div>
	<br/>
	<div class="nologin_footer clearfix">
	<div class="col-sm-offset-1 col-sm-5">
		<i class="footer_logo"></i>
		<em class="company_name">服务器维护及网站建设</em>
	</div>
	<div class="col-md-5 column">
		<span>Copyright © 2017-5 WEIBO</span>
				<select id="pl_content_changeLanguage" action-data="login=0">
			<option selected="selected" value="zh-cn">中文(简体)</option>
			<option  value="zh-tw">中文(台湾)</option>
			<option  value="zh-hk">中文(香港)</option>
			<option  value="en-us">English</option>
		</select>
	</div>
    </div>
   </div>
</body>
</html>
<?php get_footer(); ?>
