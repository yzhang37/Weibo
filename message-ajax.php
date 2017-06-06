<?php

require_once('/functions.php');

$action = $_POST['action'];

if( $action == 'publish' ){
	$mail = strtolower($_POST['mail']);
	$message = $_POST['message'];
	$remember = 1;
	//$remember = $_POST['log_rmb'];
	
	// 判断信息是否正确
	$user = get_full_user_info($mail);
	$query = mysql_query("CALL publish_msg('$mail','$message')") or die("error");
	echo "success";
}

?>