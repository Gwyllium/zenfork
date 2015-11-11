<?php
class Index
{
	public function controller()
	{
		if ($_GET['url']) {
			$url = $_GET['url'];
			$url = rtrim($url, '/');
			$url = explode('/', $url);
			require 'controllers/' . ucfirst(strtolower($url[0])) . '.php';
			$controller = new $url[0];
			$getparm = array_slice($url, 2);
			if ($url[1]) {
				if ($getparm) {
					$controller->$url[1]($getparm);
				} else {
					$controller->$url[1]();
				}
			}
		} else {
			echo "empty url";
		}
	}
}
$index = new Index;
$index->controller();
?>
