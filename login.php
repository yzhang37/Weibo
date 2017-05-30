<?php 
// 引入工具函数等
require_once('functions.php');
// 引入配置
require_once('config.php');
get_header(); 
?>
<div class="container login">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <form id="user_login" class="form-horizontal" method="post" action="">
                <span class="heading">登录微博</span>
                <div class="form-group">
                    <input type="text" class="form-control" name="log_email" id="log_email" placeholder="用户名（注册时候的邮箱）" />
                </div>
                <div class="form-group help">
                    <input type="password" class="form-control" name="log_pwd" id="log_pwd" placeholder="登录密码" />
                </div>
                <div class="form-group">
                		<div class="col-sm-10">
                			还没有账号吗？
                			<a href="/register" class="btn btn-default">立即注册</a>
              		</div>
              		<button type="submit" name="log_submit" id="log_submit" class="btn btn-primary">登录</button>
                </div>
            </form>
        </div>
    </div>
</div>




<?php get_footer(); ?>
