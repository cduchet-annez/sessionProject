<?php

class Session
{
    public $attributs = [];

    public function __construct(){
    }

    public function getAttributs(){
        return $this->attributs;
    }


    public function addSession($key, $value){
    $this->attributs[$key] = $value;
    }

    public function updateSession($key, $value){
    $this->attributs[$key] = $value;
    }

    public function __set($key, $value){
        $this->addSession($key, $value);
    }
    public function __get($key) {
        return $this->attributs[$key];
    }

}

?>