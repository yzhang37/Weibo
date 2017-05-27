<?php

// url路由配置
Router::init(array(
	'URL_MODE' => 1,
	'VAR_CONTROLLER' => '',
	'VAR_ACTION' => '',
	'VAR_MODULE' => ''
));
// 解析url
$url_param = Router::makeUrl();
// 拼装模版路径
$url_path = '';
if ( !empty( $url_param['module'] ) ){
	if( !empty( $url_param['controller']) ){
		$url_path = './includes/'.$url_param['module'].'/'.$url_param['controller'].'.php';
	} else {
		$url_path = './includes/'.$url_param['module'].'.php';
	}
}


// 页面单独需求css
$page_css = '';
// 页面单独需求js
$page_script = '';

/* 'module-controller'结构在css和js匹配中优先，其次'module' */
if ( file_exists('./css/'.$url_param['module'].'-'.$url_param['controller'].'.css') ){
	$page_css = '/css/'.$url_param['module'].'-'.$url_param['controller'].'.css';
} if ( file_exists('./css/'.$url_param['module'].'.css') ){
	$page_css = '/css/'.$url_param['module'].'.css';
}

if ( file_exists('./js/'.$url_param['module'].'-'.$url_param['controller'].'.js') ){
	$page_script = '/js/'.$url_param['module'].'-'.$url_param['controller'].'.js';
} elseif ( file_exists('./js/'.$url_param['module'].'.js') ){
	$page_script = '/js/'.$url_param['module'].'.js';
}


?>