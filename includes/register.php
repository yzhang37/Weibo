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
            <form id="login_form" class="form-horizontal" method="post" action="">
                <span class="heading">注册微博账号</span>
                <div class="form-group">
                    <input type="text" class="form-control" name="reg_email" id="reg_email" placeholder="你的邮箱" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="reg_nickn" id="reg_nickn" placeholder="你的昵称（不超过16个字）" />
                </div>
                <div class="form-group help">
                    <input type="password" class="form-control" name="reg_pwd" id="reg_pwd" placeholder="密码(6-16位字符组成，区分大小写)" />
                    <!--<a href="#" class="fa fa-question-circle"></a>-->
                </div>
                <div class="form-group">
                		<div class="col-sm-10">
                			已经有账号了吗？
                			<a href="/login" class="btn btn-default">立即登录</a>
                		</div>
                    <button type="submit" name="reg_submit" id="reg_submit" class="btn btn-primary">注册</button>
                </div>
            </form>
        </div>
    </div>
</div>




<?php get_footer(); ?>
