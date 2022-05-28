<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
    <meta charset="utf-8">
    <title></title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Yulia Tropin Tropina">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.min.css">
</head>

<body class="text-center">
    <div class="px-5 text-center">
    <header>
        <h1 class="text-center my-3">Ideas</h1>
    </header>
    
        <div class="row mb-5" >
        <nav class='nav nav-pills'>
            <div class="col-1">
                <a class='nav-link active' href='http://localhost/ideas/index.php'>Inicio</a>
            </div>
            <div class="col-2">
                <a class='nav-link' href='http://localhost/ideas/index.php?listar'>Listar ideas</a>
            </div>  
            <div class="col-2">
                <button id = "insertar" class='nav-link' >Insertar idea</button>
            </div> 
            <div class="col">
                <form class="input-group px-2" method="get">        
                    <input type="search" class="form-control rounded" placeholder="ID" aria-label="Search" aria-describedby="search-addon" />
                    <button type="submit" class="btn btn-outline-primary">Ver Idea</button>
                </form>
            </div>
            <div class="col">
                <form class="input-group px-2" method="get">        
                    <input type="search" class="form-control rounded" placeholder="ID" aria-label="Search" aria-describedby="search-addon" />
                    <button type="submit" class="btn btn-outline-primary">Votar</button>
                </form>
            </div>
            <div class="col">
                <form class="input-group px-2" method="post">        
                    <input type="search" class="form-control rounded" placeholder="ID" aria-label="Search" aria-describedby="search-addon" />
                    <button type="submit" class="btn btn-outline-primary">Borrar idea</button>
                </form>
            </div>
                
            </nav>
        </div>
     <div id="insert-campo" hidden>
         <h2>Nueva idea para insertar</h2>
         <form>
             Idea: <input type="text" name = "id"></input><br>
             <button type="reset" class="btn btn-outline-primary">Limpiar</button>
             <button type="submit" class="btn btn-primary">Crear</button>
         </form>
     </div>
      </div>
  
        <?php
        include_once ('Ayuda.php');
        ?>
   
    </div>
    <script src="../librerias/jquery/jquery-3.6.0.min.js"></script>
       <script src="../librerias/crearXMLHTTP.js"></script> 
       <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
       <script src="js/script.js"></script>
</body>

</html>