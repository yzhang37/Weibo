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
function get_common_page(){
	require_once('./common_page.php');
}

function getUserInfo($uid, $pwd){
	$query = mysql_query("SELECT * FROM user WHERE user_id='$uid' AND pw='$pwd'") or die('');
	// 判断信息是否正确
	$userinfo = array();
	if($row = mysql_fetch_array($query)){
		$userinfo = array(
			'uid' => $uid,
			'pwd' => $pwd
		);
	}return $userinfo;
}

// 检查用户是否登录
// 返回值为false为未登录，返回值为ture为已登录
function checklogin(){
    if(empty($_SESSION['user_info'])){    //检查一下已建立会话状态
    	if(empty($_COOKIE['uid']) || empty($_COOKIE['pwd'])){  //会话与COOKIE皆无，需要登陆
    		$tag = false;
		}else{   //当前已有用户COOKIE  
    		$user = getUserInfo($_COOKIE['uid'],$_COOKIE['pwd']);   //检验COOKIE有效性
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
    if (! empty ( $_COOKIE ['uid'] ) || ! empty ( $_COOKIE ['pwd'] ))   
    {  
        setcookie ( "uid", null, time () - COOKIETIME );  
        setcookie ( "pwd", null, time () - COOKIETIME );  
    }
    session_destroy();
    if(empty($_SESSION['user_info']) && empty($_COOKIE['uid']) && empty($_COOKIE['pwd']))
    	return true;
    else return false;
}  

?>