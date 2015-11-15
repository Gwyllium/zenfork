<?php
/**
 * Created by PhpStorm.
 * User: eugenes
 * Date: 16.11.15
 * Time: 0:56
 */

class Config {

	private $cfg;

	public function __construct($file=""){
		$this->cfg=array();

		if($file){
			$this->load($file);
		}

	}

	public function load($file){

		if(file_exists($file)){
			require($file);
		}
		else{
			die("not found $file");// потом заменить на логирование
		}

		foreach ($config as $key => $value){
			$this->cfg[$key] = $value;

		}
		unset($config);

	}

	public function get($key){
		return $this->cfg[$key];
	}



} 