<?php
    include "head.php";

    $nombre= $_POST["txtnombre"]; // usamos un arreglo para almacenar  
    $calif= $_POST["txtcalificacion"]; // usamos un arreglo para almacenar  

    echo "<h3>Nombre: ".$nombre."</h3> ";
    echo "<h3>Calificacion: ".$calif. "</h3> ";
    if($calif<=3){
        echo "<br><h5>Tienes que repetir la materia</h5>";
    }elseif(($calif>3) and ($calif<=5)){
        echo "<br><h5>Hechale ganitas</h5>";
    }elseif(($calif>5) and ($calif<=6)){
        echo "<br><h5>Apenas pasaste</h5>";
    }elseif(($calif>6) and ($calif<=8)){
        echo "<br><h5>Very good</h5>";
    }elseif(($calif>8) and ($calif<=10)){
        echo "<br><h5>Eres el mejor</h5>";
    }else{
        echo "<br><h5>El rango de evaluacion es del 1 al 10</h5>";
    }
    
    echo "<br><br><a href='index.php'>Volver a escoger ejercicio</a>";  
    echo "<br><br><a href='Calif.html'>Volver a meter datos</a>";  
    include "footeer.php";
?>