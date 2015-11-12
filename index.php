<?php

//эту функцию потом перенести в ядро
function __autoload($class_name)
{

	$file="include/".$class_name.".php";

	if((file_exists($file))){
		include $file;
	}
	else{
		die("Класс $class_name не найден");
	}

}


Router::parse($_GET['url']);

$controller_name=Router::getController();
$controller_path="controllers/".Router::getController().".php";
$controller_method=Router::getMethod();


$params=Router::getParams();


if(file_exists($controller_path)){
	require_once($controller_path);

	if(class_exists($controller_name)){
		$controller=new $controller_name;

		if(method_exists( $controller, $controller_method)){
			$controller->$controller_method();
		}
		else{//у нас однозначно должен быть определен метод index
			$controller->index();
		}
	}
	else{
		die("Файл найден, но класс неопределен");
	}
}
else{//пока просто ошибка, в дальнейшем, будем запрашивать у роутера специальные контроллеры
	die("controller not found");
}

?>
