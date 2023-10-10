<?php
    include "head.php";

    $nombre= $_POST["txtnombre"]; // usamos un arreglo para almacenar  
    $password= $_POST["txtpassword"]; // usamos un arreglo para almacenar  

    if(($nombre=="Ezequiel") and ($password=="1234")){
        echo "<h3>Bienvenido ".$nombre."</h3> ";
        echo "<h3>Contraseña: ".$password. "</h3> ";
    }else{
        echo "<h3>No te conozcoooo</h3> ";
    }
    echo "<br><br><a href='index.php'>Volver a escoger ejercicio</a>";  
    echo "<br><br><a href='login.html'>Volver a meter datos</a>";  
    include "footeer.php";
?>