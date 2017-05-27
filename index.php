<?php
// 引入工具函数等
require_once('functions.php');
// 引入配置
require_once('config.php');

?>

<?php

if( empty ( $url_path ) ||
	( $url_param['module'] == 'index.php' && empty ( $url_param['controller'] ) ) ){
	// 主页入口为 '/' 'index.php' 和 '/home'
	if( checklogin() == true ){
		header("Location: /h/user/".$_SESSION['user_info']['uid']);
	}else{
		require_once( './includes/h/common.php' );
	}
}else {
	if( !file_exists($url_path) ){
	// 访问页面不存在则返回404页面
		require_once( './includes/404.php' );
	} else {
		require_once( $url_path );
	}
};
?>
