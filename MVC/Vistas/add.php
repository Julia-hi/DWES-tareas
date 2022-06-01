<?php session_start(); ?>
<!DOCTYPE html>
<html lang='es'>
  <head>
    <meta charset='utf-8'>
    <title>MVC básico</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' />
  </head>
  
  <body class='container'>

    <h1 class='display-3 mt-1 mb-4'>MVC básico</h1>

    <nav class='nav nav-pills'>
      <a class='nav-link' href='index.php?acción=mostrar_inicio'>Inicio</a>
      <a class='nav-link ' href='index.php?acción=mostrar_ver_tarea'>Ver tarea</a>
      <a class='nav-link active' href='index.php?acción=mostrar_anadir_tarea'>Insertar tarea</a>
      <!-- <a class='nav-link ' href='index.php?acción=mostrar_borrar_tarea'>Borrar tarea</a> -->
    </nav>

    <h2 class='display-5 mt-4 mb-3'>Insertar tarea</h2>
<?php 
require_once('Modelo/Tarea.php');

if(Controlador::comprobarForm()===true){
  
  $tarea = unserialize($_SESSION["tarea"]); 
  ?>
  <p>Se ha creado tarea:</p>
    <ul>
      <li>Que hacer: <?= $tarea->getQueHacer() ?></li>
      <li>Prioridad: <?= $tarea->getPrioridad() ?></li>
      <li>Fecha de creación: <?= $tarea->getFechaCreacion() ?></li>
      <li>Fecha tope: <?= $tarea->getfechaTope() ?></li>
    </ul>
    
  <?php
}else{ ?>
  <p>Los datos no han guardados.</p>
  <p>Alguno de los campos está vacio o incorrecto, debes rellenar todos campos del formulario</p><?php
}?>

  </body>
</html>
