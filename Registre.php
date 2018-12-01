<?php

print_r($_POST);

/**Funció que afegeix un nou usuari a l'arxiu usuaris.csv */
function addUser(){
    file_put_contents("usuaris.csv", "\n".$_POST["nom"].",".$_POST["cognom"], FILE_APPEND);
}

addUser();

?>