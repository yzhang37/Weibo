<?php
require_once('/functions.php');

$action = $_POST['action'];

if( $action == 'register' ){
	$email = $_POST['reg_email'];
	$nickname = $_POST['reg_nickname'];
	$pwd = $_POST['reg_pwd'];
	$pwdconf = $_POST['reg_pwdconf'];
	$sign = $_POST['reg_sign'];
	
	// 检测是否存在重复的用户名
	$user = getUserInfo( $username, $password );
	
	if(! empty ( $user ) ) {
		if($remember == 1) {
			setcookie ( "username", $username, time() + COOKIETIME );
			setcookie ( "password", $password, time() + COOKIETIME );
		}
		$_SESSION['user_info'] = $user;
		echo "success";
	} else {
		echo "error";
	}
}
?>