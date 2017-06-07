<?php
require_once('/functions.php');

$action = $_POST['action'];


if ($action = 'modify_basic') {
	$nickname = $_POST['nick'];
	$signdata = $_POST['sign'];
	if (modify_user_basic($nickname, $signdata))
		echo 'success';
	else
		echo 'false';
} 

?>