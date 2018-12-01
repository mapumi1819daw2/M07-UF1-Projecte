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

       $taula= null;

        $usuari = new Usuari($_POST["nom"], $_POST["cognom"]);


            /**Comprovem que l'usuari existeix */
            $gestor = new GestorUsuaris($usuari); 
            $trobat = $gestor->getTrobat();
       
            /**En cas d'existir redirigim a l'espai privat */
            if($trobat){

              print '<META HTTP-EQUIV="refresh" CONTENT="1;URL=./Privat.php">';

              $_SESSION["acces"]=1;
              /* Missatge de benvinguda */
                
            }

            else{
              echo "Usuari o contrasenya incorrectes"; 
              print '<META HTTP-EQUIV="refresh" CONTENT="1;URL=./Principal.html">';
            }


        ?>


</body>

</html>