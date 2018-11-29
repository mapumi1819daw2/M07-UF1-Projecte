<?php

class Producte{


    private $name;
    private $foto;


    public function  __construct($name, $f){

        $this->name = $name;
        $this->foto = $f;
    }


    public function getName(){
        return $this->name;
    }

    public function getFoto(){
        return $this->foto;
    }


    public function __toString()
    {
        echo "[Producte]: $this->name , $this->foto";
    }

}


?>