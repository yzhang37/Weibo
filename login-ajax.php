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
?>