<?php

session_start();

  

?>


<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="jquerySession/jquery.session.js"></script>
<script type="text/javascript" src="script.js"></script>
</head>



<body>


<h2>Comanda</h2>
<p>Client: <?php echo $_SESSION["nom"]?></p>

<h2 id="p">Productes:  </h2>


<?php

    /**GENERA ARXIU COMNADA I LA MOSTRA */

    $arxiu = "comanda.csv";
    $aComanda = fopen("comanda.csv", "w") or die ("Error al generar arxiu");


    fwrite($aComanda, $_SESSION["nom"].",");

foreach ($_POST as $key => $value) {


    if($value == "on"){

        fwrite($aComanda, $_COOKIE[$key]);

        setcookie($key, $key, time()+60*60*7);

       /*  echo $_COOKIE[$key]; */
        

        echo "<ul>
                <li><img src='fotos/".$key.".JPG'></li>
                </ul>";

    }
    
}
   
    
       fclose($aComanda);
    

    

?>




</body>

</html>