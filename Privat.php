<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();

require_once("GestorUsuaris.php");
require_once("GestorProductes.php");

?>


<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="jquerySession/jquery.session.js"></script>
<script type="text/javascript" src="script.js"></script>

<link rel='stylesheet' type='text/css' href='estil.css'>
<head>


<body>
    <?php
        

        $estatSessio = $_SESSION["acces"];
        
        
        /* NO ACCEDIT */
        if($estatSessio!=1){
            echo "Error a l'accedir";
            print '<META HTTP-EQUIV="refresh" CONTENT="1;URL=./Principal.html">';
        }



        /* ACCEDIT */
        else{
            
            $gestorProductes = new GestorProductes();

            /**Obtenim llista de productes */
            $lProductes = $gestorProductes->llegeixLlistaProductes();

            
            echo "<h2>Benvingut ".$_SESSION["nom"]."!</h2>";

                /* Cistell */
                echo "<form method='POST' action='comanda.php'>
                
                
                ";
                

                /* Num productes */
                echo "<a id='productes'>0</a>";


                /**Taula productes */
                $taula= "
                <table>
                <tr>
                  <td>Nom</li>
                  <td>Producte</li>
                </tr>
                ";

                foreach($lProductes as $p){
                    $taula .= "<tr id='f".$p->getName()."'>
                                <td class='producte'>".$p->getName()."</td>
                                <td id='".$p->getName()."' class='producte'><img src='".$p->getFoto()."'></td>
                                <td><input id='c".$p->getName()."' name='".$p->getName()."' type='checkbox'/></td>
                                </tr>";

                }
                  
                $taula.="<!--<tr>
                  
                  <td>55577854</td>
                </tr>
                <tr>
                  <td>55577855</td>
                </tr>-->

                
              </table><input type='submit' value='comanda'><img id='cistell' src='/fotos/cistell.png'></input></form>";

              echo $taula;
        ?>
            <BR><BR><a href=Principal.html>Tanca la sessió</a>
        

        <?php

        }
        ?>
    

</body>


</html>