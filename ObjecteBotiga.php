<?php


class Botiga{



    private $nom;

    private $cataleg;

    private $usuaris;


    public function __construct($n){

        $this->nom = $n;

    }



    public function getNomBotiga(){
        echo $this->nom;
    }



}

?>