<html>
<head>


    <?php

        require_once("GestorUsuaris.php");
        require_once("GestorProductes.php");
        require_once("ObjecteUsuari.php");
        require_once("ObjecteProducte.php");
        
    
    ?>


    <title>Espai usuari</title>

</head>


<body>
    
        <?php

/* echo $_POST["nom"];
echo $_POST["cognom"];  */ 

       $taula= null;

        $usuari = new Usuari($_POST["nom"], $_POST["cognom"]);


   
        $gestor = new GestorUsuaris($usuari); 
        
            $trobat = $gestor->getTrobat();


            $gestorProductes = new GestorProductes();

            $lProductes = $gestorProductes->llegeixLlistaProductes();

            

            if($trobat){
              /* Missatge de benvinguda */
                echo "<h2>Benvingut, ".$usuari->getName()."!</h2>";

                /* Cistell */
                echo "<img id='cistell' src='/fotos/cistell.png'>";

                /* Num productes */
                echo "<a id='productes'>1</a>";

                $taula= "
                <html>

                <head>
                <link rel='stylesheet' type='text/css' href='estil.css'>
                </head>

                <body>

                <table>
                <tr>
                  <td>Nom</li>
                  <td>Producte</li>
                </tr>
                ";

                foreach($lProductes as $p){
                    $taula .= "<tr>
                                <td class='producte'>".$p->getName()."</td>
                                <td class='producte'><img src='".$p->getFoto()."'></td>
                                </tr>";

                }
                  
                $taula.="<!--<tr>
                  
                  <td>55577854</td>
                </tr>
                <tr>
                  <td>55577855</td>
                </tr>-->

                </body>
              </table>";

              echo $taula;
            }


        ?>


</body>

</html>