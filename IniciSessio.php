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

     /*    echo  GestorUsuaris::selfUsuari();
        echo $usu->__toString(); */

        
        
            $trobat = $gestor->getTrobat();


            

            

            if($trobat){

              print '<META HTTP-EQUIV="refresh" CONTENT="1;URL=./Privat.php">';

              $_SESSION["acces"]=1;
              /* Missatge de benvinguda */
                
            }

            else{
              echo "Usuari o contrasenya incorrectes";  
            }


        ?>


</body>

</html>