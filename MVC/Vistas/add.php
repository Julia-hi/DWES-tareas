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
      <a class='nav-link ' href='index.php?acción=mostrar_anadir_tarea'>Insertar tarea</a>
      <a class='nav-link ' href='index.php?acción=mostrar_borrar_tarea'>Borrar tarea</a>
    </nav>

    <h2 class='display-5 mt-4 mb-3'>Insertar tarea</h2>

    <p>Se ha creado tarea:</p>
    <ul>
      <li>Que hacer: <?= $_POST['queHacer'] ?>.</li>
      <li>Prioridad: <?= $_POST['prioridad'];   ?>.</li>
      <li>Fecha de creación: <?php echo(date("Y-m-d")) ?>.</li>
      <li>Fecha tope: <?= $_POST['fechaTope'] ?>.</li>
    </ul>
    <?php 
    require_once('Modelo/Tareas.php');
    
   // $tareas = new Tareas();
    //$tareas->anadirTarea($tarea);
   // echo "tareas: ". $_SESSION['tareas']."<br>";
  // $_SESSION["tarea"] = "tarea";
 if(isset($_SESSION["lol"])){
  echo "lol: ". $_SESSION["lol"];
}else{ echo "Sesion no est'a establecida";} ?>
  </body>
</html>
