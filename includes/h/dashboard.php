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
</style> 

<h3>我的信息</h3>
<?php
	$email = $_SESSION['user_info']['mail'];
	$userdata = get_full_user_info($email);
	$raw_nname = $userdata['nname'];
	$raw_sign = $userdata['sign'];
?>
<style>
	
</style>
<div id="basic_info">
个人昵称:
<input name="nickname" value="<?php echo $raw_nname;?>"></input>
<div class="form_field_warning" id="warning_nickname" style="display: none;"></div>
<br />
个人签名:
<textarea name="signature"><?php echo $raw_sign;?></textarea>
<br />
<input class="btn btn-default" id="dash_modify" type="button" value="修改"/>
</div>
<?php get_footer();?>