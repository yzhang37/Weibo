<?php
require_once('/functions.php');

$action = $_POST['action'];


if ($action = 'modify_basic') {
	$nickname = $_POST['nick'];
	$signdata = $_POST['sign'];
	$teledata = $_POST['tele'];
	$celldata = $_POST['cell'];
	if (modify_user_basic($nickname, $signdata, $celldata, $teledata))
		echo 'success';
	else
		echo 'false';
} 

?>