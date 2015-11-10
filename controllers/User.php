<?php

class User{
    public function __construct() {
        echo "Контроллер User <br>";
    }
    public function add($array=false){
        echo "Метод ADD <br>";
        echo "$array[0] <br>";
        echo "$array[1] <br>";
        echo "$array[2] <br>";
    }
}