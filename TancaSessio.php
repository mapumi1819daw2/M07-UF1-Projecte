<?php session_start(); ?>


<html>

<head>

</head>



<body>

    <?php $_SESSION["access"] = 0;

        session_destroy();


        ?>

        <a> "Heu sortit del sistema</a><BR><BR>
	<a href=Principal.html>Torneu a l'inici</a>;
	<META HTTP-EQUIV="refresh" CONTENT="1;URL=./Principal.html">';
<body>

</html>