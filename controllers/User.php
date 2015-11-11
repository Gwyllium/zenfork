<?php

class User{
    public function __construct() {
        echo "Контроллер User <br>";
    }
    public function add($array=false){
        echo "Метод ADD <br>";
        echo "<pre>";
        echo print_r($array);
        echo "</pre>";
    }
}