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

if(Controlador::comprobarForm()==true){
  $quehacer = filter_var($_POST['queHacer'], FILTER_SANITIZE_STRING);
  $prioridad = $_POST['prioridad'];
  $fechaTope = $_POST['fechaTope'];
  $fechaCreacion = date("Y/m/d");
  $tarea = new Tarea($quehacer, $prioridad , $fechaCreacion, $fechaTope);
  $_SESSION['lol'] = serialize($tarea);
  
  ?>
  <p>Se ha creado tarea:</p>
    <ul>
      <li>Que hacer: <?= $tarea->getQueHacer() ?></li>
      <li>Prioridad: <?= $_POST['prioridad'];   ?></li>
      <li>Fecha de creación: <?php echo(date("Y/m/d")) ?></li>
      <li>Fecha tope: <?= $_POST['fechaTope'] ?></li>
    </ul>
  <?php
}else{ ?>
  <p>Alguno de los campos está vacio, debes rellenar todos campos del formulario</p><?php
}?>
    
    <?php 
   
  
 if(isset($_SESSION["lol"])){
  echo "lol: ". unserialize($_SESSION["lol"])->getQueHacer();
}else{ echo "Sesion no existe";} ?>
  </body>
</html>
