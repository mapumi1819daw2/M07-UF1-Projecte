<?php

class Usuari{

    /**0--> Admin
     * 1--> Client
     */
    private $tipus;
    private $name;
    private $pass;
    private $cataleg;


    public function  __construct($name, $p){
        $this->name = $name;
        $this->pass = $p;

       $this->determinaUsuari();

        $this->cataleg = array();
    }


    /**Funció que determina si l'usuari és o no admin */
    private function determinaUsuari(){
        if(!strcmp($this->name, "admin")){
            $this->tipus =0;
            $this->pass = "admin";
        }
        else{
            $this->tipus =1;
        }
    }


    public function getTipus(){
        return $this->tipus;
    }



    public function getName(){
        return $this->name;
    }

    public function getPass(){
        return $this->pass;
    }

    /**
     * Function to add a product
     */
    public function addProducte ($prodcute){
        $this->cataleg[] = $producte; 
    }

    public function getProductes (){
       return $this->cataleg;
    }

    public function __toString()
    {
        echo "[Usuari]: $this->tipus, $this->name , $this->pass <BR>";
    }

}


?>