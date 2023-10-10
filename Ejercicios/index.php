<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
          <!--Import Google Icon Font-->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <!--Import materialize.css-->
          <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    
          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios en php</title>
    <h1>Ejercicios</h1>
</head>

<body>
  <form class="col s12" action="seleccion.php" method="post">

  <label>Seleccionar Ejercicios</label>
  <select class="browser-default" name="ejercicio" require>
    <option value="4">Choose your option</option>
    <option value="1">Piedra papel o tijeras</option>
    <option value="2">Calificaciones</option>
    <option value="3">Validacion (login)</option>
  </select>
    <br>
    <button>Enviar</button>
  </form>

</body>
<?php
include "footeer.php";
?>