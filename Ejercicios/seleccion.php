<?php
    include "head.php";

    $ejercicio=$_POST['ejercicio'];
    
    if($ejercicio == 1){
        include("PPT.html");
    }elseif($ejercicio == 2){
        include("Calif.html");
    }elseif($ejercicio == 3){
        include("Login.html");
    }elseif($ejercicio == 4){
        echo "<h1>No seleccionaste ejercicio :/ </h1>";
        echo "<img src='imagenes/pulgar.png' height='500' width'750'/>";
        echo "<br><br><a href='index.php'>Volver a escoger ejercicio</a>";
    }

    include "footeer.php";
?>
