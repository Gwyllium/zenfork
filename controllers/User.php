<?php

class User extends Controller{
    public function __construct() {
        echo "Контроллер User <br>";
    }

	public function index(){
		$cfg=new Config();
		$cfg->load(__DIR__."/../config.php");

		echo $cfg->get("method_name")."<br>";
		echo $cfg->get("method_description")."<br>";
	}


    public function add(){

		$cfg=new Config(__DIR__."/../config2.php");

		echo $cfg->get("method_name")."<br>";
		echo $cfg->get("method_description")."<br>";
    }
}