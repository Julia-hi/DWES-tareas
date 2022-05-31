<?php
// Start the session
 session_start();


?>

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
    <a class='nav-link active' href='index.php?acción=mostrar_inicio'>Inicio</a>
    <!-- <a class='nav-link' href='index.php?acción=mostrar_ver_tarea'>Ver tarea</a> -->
    <a class='nav-link' href='index.php?acción=mostrar_anadir_tarea'>Insertar tarea</a>
  </nav>

  <h2 class='display-5 mt-4 mb-3'>Inicio</h2>

  <p>Página de inicio.</p><?php
  if(isset($_SESSION["tareas"])){
    echo $_SESSION["tareas"];
  }else{ echo "Sesión no está establecida";}

  if(!isset($_REQUEST["tareas"])){ ?>
        <p>Colección de tareas no existe</p><?php
      }else{ ?>

  <table class="table">
    <thead>
      <tr>
        <th>Que Hacer</th>
        <th>Prioridad</th>
        <th>Fecha de creación</th>
        <th>Fecha tope</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php  
      $tareas = $_REQUEST["tareas"];
      foreach ($tareas as $key => $tarea) { ?>
        <tr>
          <td><?= $tarea->getQueHacer() ?></td>
          <td><?= $tarea->getPrioridad() ?></td>
          <td><?= $tarea->getFechaCreacion() ?></td>
          <td><?= $tarea->getfechaTope() ?></td>
          <td><a class='nav-link' href='index.php?acción=mostrar_ver_tarea'>Ver</a>
          <!-- <a class='nav-link' href='index.php?acción=mostrar_borrar_tarea'>Borrar</a> -->
          <a class='btn' href='borrar_tarea.php?=<?php $tarea->getQueHacer() ?>'>Borrar</a>
        </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php if (count($tareas) == 0) { ?>
    <p>No hay tareas que mostrar</p>
  <?php }} ?>
</body>

</html>