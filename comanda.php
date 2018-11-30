<?php

session_start();
?>


<html>

<head>
</head>



<body>

<h2>Comanda</h2>
<p>Client: <?php echo $_SESSION["nom"]?></p>

<h2>Productes: <?php echo $_SESSION["q"] ?> </h2>


<?php
echo "<img src='".$_SESSION[0].".JPG'><BR><BR>";
 for ($i=0; $i <$_SESSION["q"] ; $i++){
    echo "<img src='".$_SESSION[$i].".JPG'><BR><BR>";
}?>



</body>

</html>