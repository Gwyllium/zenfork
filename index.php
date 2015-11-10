<?php

if($_GET['url']){
	$url = $_GET['url'];
	$url = rtrim($url, '/');
	$url = explode('/', $url);
	require 'controllers/'.$url[0].'.php';
	$controller = new $url[0];
	$getparm=[$url[2],$url[3],$url[4]];
	if($url[1]) {
		if($getparm){
			$controller->$url[1]($getparm);
		}
		else {
			$controller->$url[1]();
		}
	}
}
else{
	echo "empty url";
}


