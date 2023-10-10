<?php
    include "head.php";

    $jugador1=$_POST['J1'];
    $jugador2=$_POST['J2'];

    if($jugador1==$jugador2){
        echo "<h1>Empate :0</h1>";
        echo "<img src='imagenes/empate.jpg' />";
    }elseif((($jugador1==1) and ($jugador2==2)) or (($jugador2==1) and ($jugador1==2))){
        echo "<h1>Gana papel!!</h1>";
        if($jugador1==1){
            echo "<h4>Ganador: jugador 2</h4>";
        }else{
            echo "<h4>Ganador: jugador 1</h4>";
        }
        echo "<img src='imagenes/papel.jpg' height='800' width'1050' />";
    }elseif((($jugador1==1) and ($jugador2==3)) or (($jugador2==1) and ($jugador1==3))){
        echo "<h1>Gana piedra!!</h1>";
        if($jugador1==1){
            echo "<h4>Ganador: jugador 1</h4>";
        }else{
            echo "<h4>Ganador: jugador 2</h4>";
        }
        echo "<img src='imagenes/piedra.jpg' height='800' width'1050' />";
    }else{
        echo "<h1>Gana tijeras!!</h1>";
        if($jugador1==3){
            echo "<h4>Ganador: jugador 1</h4>";
        }else{
            echo "<h4>Ganador: jugador 2</h4>";
        }
        echo "<img src='imagenes/tijeras.png' height='800' width'1050' />";
    }

    echo "<br><br><a href='index.php'>Volver a escoger ejercicio</a>";  
    echo "<br><br><a href='PPT.html'>Volver a jugar</a>";  
    include "footeer.php";
?>