<?php

class User extends Controller{
    public function __construct() {
        echo "Контроллер User <br>";
    }

	public function index(){
		echo "метод по умолчанию";
	}


    public function add(){
        echo "Метод ADD <br>";
    }
}