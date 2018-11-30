<?php

session_start();
?>


<html>

<head>
</head>



<body>

<h2>Comanda</h2>
<p>Client: <?php echo $_SESSION["nom"]?></p>

<h2 id="p">Productes:  </h2>


<script tye="text/javascript">

    $("#p").append(sessionStorage.getItem("q"));

    var t = sessionStorage.getItem("q");

    for(var i=0; i<t; i++){
        $("body").append("<img src='"+sessionStorage.getItem(i)+"'>");
    }

    
</script>





</body>

</html>