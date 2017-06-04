<?php

require_once('/functions.php');

$action = $_POST['action'];

if( $action == 'login' ){
	$mail = strtolower($_POST['mail']);
	$pwd = $_POST['pwd'];
	$remember = 1;
	//$remember = $_POST['log_rmb'];
	
	// 判断信息是否正确
	$user = getUserInfo( $mail, $pwd );
	
	if(! empty ( $user ) ) {
		if($remember == 1) {
			setcookie ( "mail", $mail, time() + COOKIETIME );
			setcookie ( "pwd", $pwd, time() + COOKIETIME );
		}
		$_SESSION['user_info'] = $user;
		echo "success";
	} else {
		echo "error";
	}
}
elseif ( $action == 'logout' ) {
	if(logout()) echo "success";
	else echo "error";
}
elseif ( $action == 'register')
{
	$mail = $_POST['reg_email'];
	$nickname = $_POST['reg_nickname'];
	$pwd = $_POST['reg_pwd'];
	$pwdconf = $_POST['reg_pwdconf'];
	$sign = $_POST['reg_sign'];
	
	// 检测是否存在重复的用户名
	if ( ! is_new_email(strtolower($mail)) ) {
		echo "already_in_use";
	} elseif ( ! isset($nickname)) {
		echo "no_nickname";
	} elseif ( ! isset($pwd)) {
		echo "no_password";
	} elseif (strlen($pwd) < 6 or strlen($pwd) > 16) {
		echo "invalid_password_length";
	} elseif ( ! isset($pwdconf) or ! ($pwd == $pwdconf)) {
		echo "dismatch_passconf";
	} else {
		if ( ! directly_insert_user($mail, $pwd, $nickname, $sign))
		{
			echo "error";
			return;
		}
		$remember = 1;
		if ($remember == 1) {
			setcookie ( "mail", $mail, time() + COOKIETIME );
			setcookie ( "pwd", $pwd, time() + COOKIETIME );
		}
		$_SESSION['user_info'] = $user;
		echo "success";
	}
}
?>