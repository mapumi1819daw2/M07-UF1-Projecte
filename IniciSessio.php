<html>
<head>


    <?php

        require_once("GestorUsuaris.php");
        require_once("ObjecteUsuari.php");
        
    
    ?>


    <title>Espai usuari</title>

</head>


<body>
    
        <?php

/* echo $_POST["nom"];
echo $_POST["cognom"];  */ 

       

        $usuari = new Usuari($_POST["nom"], $_POST["cognom"]);


   
        $gestor = new GestorUsuaris($usuari); 
        
            $trobat = $gestor->getTrobat();

            if($trobat){
                echo "Benvingut, ".$usuari->getName()."!";

                echo "
                <html>

                <head>
                <link rel='stylesheet' type='text/css' href='estil.css'>
                </head>

                <body>

                <table style='width:100%'>
                <tr>
                  <th>Name:</th>
                  <td>Bill Gates</td>
                </tr>
                <tr>
                  <th rowspan='2'>Telephone:</th>
                  <td>55577854</td>
                </tr>
                <tr>
                  <td>55577855</td>
                </tr>

                </body>
              </table>";
            }


        ?>


</body>

</html>