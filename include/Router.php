<?php
/**
 * Класс Router
 * Парсит url, введенный пользователем и исходя из этого возвращает нам нужный контроллер
 * со временем желательно сделать сложные правила роутинга, т.е. чтобы он также возвращал контроллер,
 * если страница не найдена и т.п. случаи. для начала же он просто берет первую часть урла в качестве контроллера, вторую - как метод
 * а все последующие как параметры
 */

class Router {

	private static $name;
	private static $method;
	private static $params;


	public static function parse($url){


		$url = rtrim($url, '/');
		$url = explode('/', $url);


		if($url[0]){
			self::$name = ucfirst(strtolower($url[0]));
		}



		self::$method=$url[1];

		self::$params=array();

		if(count($url)>2){//есть параметры
			for($i=2; $i<count($url); $i++){
				self::$params[]=$url[$i];
			}
		}


	}

	public static function getController(){
		return self::$name;
	}

	public static function getMethod(){
		return self::$method;
	}

	public static function getParams(){
		return self::$params;
	}

} 