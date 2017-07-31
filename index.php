<?php
/**
 * 入口
 */
define('ROOTDIR', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);

date_default_timezone_set('Asia/Shanghai');

error_reporting(E_ALL);

$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
$uri = rawurldecode($uri);
$split_uri = explode('?', $uri);
$uri = array_shift($split_uri);

$fileName = ROOTDIR . "example".$uri . ".html";

if (!file_exists($fileName)) {
	$content = '<h3>'.$fileName.'不存在</h3>';
}else {
	ob_start();
	include $fileName;
	$content = ob_get_contents();
	ob_end_clean();
}

ob_start();
include "example/layout/layout.php";
$html = ob_get_contents();
ob_end_clean();

echo $html;



