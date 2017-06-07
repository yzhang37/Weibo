<?php
require_once('functions.php');
require_once('config.php');
if ( ! checklogin())
{
	Header('Location: /');
}
?>

<nav class="navbar navbar-default navbar-fixed" role="navigation">
<?php get_header(); ?>
</nav>
<head>
	<script src="/js/dashboard.js"></script>
</head>
<style type="text/css">
	.form_field_warning
	{
		text-align: left;
		color: red;
		padding-left: 1em;
		padding-right: 1em;
	}
	body {
		background-image: url("http://wx2.sinaimg.cn/mw1024/869f1348ly1fg5scrhor1j218g0gw766.jpg");
		background-size:cover;
		background-attachment:fixed;
	}   	
</style>

<?php
	$email = $_SESSION['user_info']['mail'];
	$userdata = get_full_user_info($email);
	$raw_nname = $userdata['nname'];
	$raw_sign = $userdata['sign'];
?>

<div class="container">
	<div class="panel panel-default" style="box-shadow: 0px 10px 20px 0px rgba(30,30,30,0.2);">
		<div class="panel-heading">
			<h3>Personal Settings</h3>
		</div>
		<div class="panel-body">
			<div id="basic_info">
				<h4>Basic Information</h4>
				<div class="row">
					<div class="col-xs-12 col-sm-5 col-md-2 col-lg-2">昵称:</div>
					<div class="col-xs-12 col-sm-7 col-md-4 col-lg-4"><input class="form-control" name="nickname" value="<?php echo $raw_nname;?>"></input>
						<div class="form_field_warning" id="warning_nickname" style="display: none;"></div>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-2 col-lg-2">Mobile phone:</div>
					<div class="col-xs-12 col-sm-7 col-md-4 col-lg-4"><input class="form-control" name="nickname" value="<?php echo $raw_nname;?>"></input>
						<div class="form_field_warning" id="warning_nickname" style="display: none;"></div>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-2 col-lg-2">Telephone:</div>
					<div class="col-xs-12 col-sm-7 col-md-4 col-lg-4"><input class="form-control" name="nickname" value="<?php echo $raw_nname;?>"></input>
						<div class="form_field_warning" id="warning_nickname" style="display: none;"></div>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-2 col-lg-2">个人签名:</div>
					<div class="col-xs-12 col-sm-7 col-md-4 col-lg-4"><textarea class="form-control" name="signature"><?php echo $raw_sign;?></textarea></div>
				</div>
				<input class="btn btn-default" id="dash_modify" type="button" value="修改"/>
			</div>
			<hr />
			<div id="avatar-info">
				<h4>User Avatar</h4>
				<div class="row">
					<?php 
					for ($i=0; $i<=15; ++$i) {
						echo '<img class = "col-xs-6 col-sm-3 col-md-2 col-lg-2 avatar-icon" src="http://wx2.sinaimg.cn/mw1024/869f1348ly1fg5scrhor1j218g0gw766.jpg" alt="test"/>';
					}
					?>
				</div>
			</div>
			<hr />
			<div id="pass-info">
				<h4>Security</h4>
				<div class="row">
					<div class="col-xs-12 col-sm-5 col-md-2 col-lg-2">Password:</div>
					<div class="col-xs-12 col-sm-7 col-md-4 col-lg-4"><input class="form-control" type="password" name="password" value=""></input>
						<div class="form_field_warning" id="warning_nickname" style="display: none;"></div>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-2 col-lg-2">Password Confirm:</div>
					<div class="col-xs-12 col-sm-7 col-md-4 col-lg-4"><input class="form-control" type="password" name="passconf" value=""></input>
						<div class="form_field_warning" id="warning_nickname" style="display: none;"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>