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

if ($action == 'fol_op') {
	$fo_mail = strtolower($_POST['mail']);
	$fan_mail = $_SESSION['user_info']['mail'];
	$flag = $_POST['flag'];
	$query = mysql_query("SELECT user_id FROM user WHERE mail='$fan_mail'") or die('error');
	$row = mysql_fetch_array($query);
	$fan_id = $row['user_id'];
	$query2 = mysql_query("SELECT user_id FROM user WHERE mail='$fo_mail'") or die('error');
	$row2 = mysql_fetch_array($query2);
	$fo_id = $row2['user_id'];
	if ($flag == 'true') {
		$query3 = mysql_query("DELETE FROM follow WHERE fa_id='$fan_id' AND fo_id = '$fo_id'") or die(mysql_error());
	}
	else {
		$query3 = mysql_query("INSERT INTO follow(fo_id,fa_id) VALUES('$fo_id','$fan_id')") or die(mysql_error());
	}
	return false;
}

if ($action == 'search') {
	$str = $_POST['str'];
	echo "success";	
	//return true;
}

?>