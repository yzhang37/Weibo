<?php
session_start();
require_once('sql_connect.php');	//加载数据库信息
require_once('./php-tools/tools-require.php');	
// cookie保存时间
define("COOKIETIME", 3600*12);
// 页首拼装组件
function get_header(){
	global $page_script, $page_css;
	require_once('./header.php');
}
// 页脚拼装组件
function get_footer(){
	require_once('./footer.php');
}
function getUserInfo($mail, $pwd){
	$mail = strtolower($mail);
	$query = mysql_query("SELECT mail, pwd FROM user WHERE LOWER(mail)='$mail' AND pwd='$pwd'") or die('');
	// 判断信息是否正确
	$userinfo = array();
	if($row = mysql_fetch_array($query)){
		$userinfo = array(
			'mail' => $mail,
			'pwd' => $pwd
		);
	}return $userinfo;
}

function modify_user_basic($nickname, $signdata)
{
	$email = $_SESSION['user_info']['mail'];
	$userinfo = get_full_user_info($email);
	
	if ( $nickname != $userinfo['nname']) {
		//$nickname = "'".$nickname."'";
		$query_str = "UPDATE user SET nname = '$nickname' WHERE mail= '$email'";
		//$query_str = 'UPDATE user SET nname = '.$nickname.' WHERE mail = '."'".$email."'";
		mysql_query($query_str);//or die(mysql_error());
	}
	
	if ( $signdata != $userinfo['sign']) {
		if (!isset($signdata) or empty($signdata))
			$signdata = 'NULL';
		else
			$signdata = "'".$signdata."'";
		$query_str = 'UPDATE user SET sign = '.$signdata.' WHERE mail = '."'".$email."'";
		mysql_query($query_str);	
	}
	return true;
}

function directly_insert_user($mail, $pwd, $name, $mysign)
{
	$mail = "'".$mail."'";
	$pwd = "'".$pwd."'";
	$name = "'".$name."'";
	if ( !isset($mysign) or empty($mysign) or strlen($mysign) == 0) {
		$mysign = "NULL";
	} else {
		$mysign = "'".$mysign."'";
	}
	$result = mysql_query("INSERT INTO user (nname, mail, pwd, sign) VALUES ($name, $mail, $pwd, $mysign)");
	return $result;
}


function get_full_user_info($user_mail){
	$query = mysql_query("SELECT * FROM user WHERE mail='$user_mail'") or die('');
	$row = mysql_fetch_array($query);
	return $row;
}

function display_follow_msg() {
	$email = $_SESSION['user_info']['mail'];
	$userdata = get_full_user_info($email);
	$uid = $userdata['user_id'];
	$query = mysql_query("SELECT * FROM ( ((SELECT * FROM publish WHERE user_id = '$uid' OR user_id IN (SELECT fo_id FROM follow WHERE fa_id = '$uid' ORDER BY time DESC) )AS FO 
	NATURAL JOIN message) NATURAL JOIN user) ORDER BY time DESC LIMIT 30") or die('');
	while ($row=mysql_fetch_array($query)) {
		display_weibo_single($row);
	}
}

function display_personal_page_msg($userdata){
	$uid = $userdata['user_id'];
	$query = mysql_query("SELECT * FROM ( ((SELECT * FROM publish WHERE user_id = '$uid' OR user_id IN (SELECT fo_id FROM follow WHERE fa_id = '$uid' ORDER BY time DESC) )AS FO 
	NATURAL JOIN message) NATURAL JOIN user) ORDER BY time DESC LIMIT 10") or die('');
	while ($row=mysql_fetch_array($query)) {
		personal_page_display_single_msg($row);
}
}

function is_new_email($user_mail)
{
	$query = mysql_query("SELECT * FROM user WHERE mail='$user_mail'") or die('');
	if(mysql_num_rows($query)==0) {
		return true;
	} else {
		return false; 
	}
}

// 检查用户是否登录
// 返回值为false为未登录，返回值为ture为已登录
function checklogin(){
    if(empty($_SESSION['user_info'])){    //检查一下已建立会话状态
    	if(empty($_COOKIE['mail']) || empty($_COOKIE['pwd'])){  //会话与COOKIE皆无，需要登陆
    		$tag = false;
		}else{   //当前已有用户COOKIE  
    		$user = getUserInfo($_COOKIE['mail'],$_COOKIE['pwd']);   //检验COOKIE有效性
			if(empty($user)){    //COOKIE失效，需登陆
				$tag = false;
			}else{  //COOKIE有效，更新会话状态
				$tag = true;
				$_SESSION['user_info'] = $user;
			}  
		}
	} else { $tag = true; }
	
	return $tag;
}
// 退出登录  
// 调用此函数清理session和cookie中的用户登陆信息
// 返回true为确认登出成功，false为登出失败
function logout()
{
	unset ( $_SESSION['user_info'] );
    if (! empty ( $_COOKIE ['mail'] ) || ! empty ( $_COOKIE ['pwd'] ))   
    {  
        setcookie ( 'mail', null, time() - COOKIETIME );  
        setcookie ( 'pwd', null, time() - COOKIETIME );  
    }
    session_destroy();
    if( empty($_SESSION['user_info']) && empty( $_COOKIE['mail']) && empty($_COOKIE['pwd'])) {
    	return true;
    } else {
    	return false;
    }
}
function is_followed($fan_mail,$fo_mail) {
	$query = mysql_query("SELECT user_id FROM user WHERE mail='$fan_mail'") or die('error');
	$row = mysql_fetch_array($query);
	$fan_id = $row['user_id'];
	$query2 = mysql_query("SELECT user_id FROM user WHERE mail='$fo_mail'") or die('error');
	$row2 = mysql_fetch_array($query2);
	$fo_id = $row2['user_id'];
	$query3 = mysql_query("SELECT * FROM follow WHERE fa_id='$fan_id' AND fo_id = '$fo_id'") or die('error');
	if ($row3 = mysql_fetch_array($query3)) 
		return true;
	return false;
}
?>
