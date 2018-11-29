<?php

    include_once("ObjecteProducte.php");

class GestorProductes{

    private $arxiuProductes ="productes.csv";

    private $llistaProductes;
    

    public function __construct(){

        $this->llegeixLlistaProductes =  array();

    }


    /**Funció que llegeix la llista de productes del magatzem */
    public function llegeixLlistaProductes(){
        $arxiu = fopen($this->arxiuProductes, "r") or die("Error al llegir l'arxiu de productes");

        for($i = 0; $i = fgetcsv($arxiu); $i++){
            $nouProducte = new Producte($i[0], $i[1]);
           
            $this->llistaProductes[] =$nouProducte;
        }

        fclose($arxiu);


        return $this->llistaProductes;
    }

}

?>