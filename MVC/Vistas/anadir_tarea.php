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
      <a class='nav-link active' href='index.php?acción=mostrar_anadir_tarea'>Insertar tarea</a>  
    </nav>

    <h2 class='display-5 mt-4 mb-3'>Añadir tarea</h2>
 <div class="form-group col-4">
    <form action="index.php?acción=mostrar_add_tarea" method="post">
        Que hacer: <input type="text" name="queHacer" class="form-control" required='required'><br>
        Prioridad: <select  name="prioridad" class="form-control" >
                    <option value="" >Elige opción</option>
                    <option value="baja">baja</option>
                    <option value="media">media</option>
                    <option value="alta">alta</option>
                  </select><br>
        Fecha tope: <input type="date" name="fechaTope" class="form-control" required='required'><br>
        <button type="reset" class="btn btn-primary">Limpiar</button>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
    </div>

  </body>
</html>

