<?php
require_once('/functions.php');

$action = $_POST['action'];

if( $action == 'login' ){
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	$remember = 1;
	//$remember = $_POST['log_rmb'];
	
	// 判断信息是否正确
	$user = getUserInfo( $uid, $pwd );
	
	if(! empty ( $user ) ) {
		if($remember == 1) {
			setcookie ( "uid", $uid, time() + COOKIETIME );
			setcookie ( "pwd", $pwd, time() + COOKIETIME );
		}
		$_SESSION['user_info'] = $user;
		echo "success";
	} else {
		echo "error";
	}
} elseif ($action == 'loginWithEmail')
{
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];	
}
elseif ( $action == 'logout' ) {
	if(logout()) echo "success";
	else echo "error";
}
?>