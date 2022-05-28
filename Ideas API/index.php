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

<body>
    <div class="container text-center">
    <header>
        <h1 class="text-center">Ideas</h1>
    </header>
    <main>
        <div class="px-3 py-3"><button  id="listar" class="btn btn-primary mx-3">Listar ideas</button>
        <a id="insertar" class="btn btn-primary mx-3">Modificar idea</a>
        <a id="insertar" class="btn btn-primary mx-3">Insertar idea</a>
        <a id="borrar" class="btn btn-primary mx-3">Borrar idea</a>
    </div>
        <?php
        include_once 'Ayuda.php';
        $obj= json_encode($ideas[0]);
        echo $obj;

       // echo $ideas[];
        // $ideas = $_REQUEST["ideas"];
        // foreach($ideas as $idea){
        //     echo $idea;
        // }
        ?>
    </main>
    </div>
    <script src="../librerias/jquery/jquery-3.6.0.min.js"></script>
       <script src="../librerias/sweetAlert/sweetalert2.all.min.js"></script>
       <script src="../librerias/crearXMLHTTP.js"></script> 
       <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
       <script src="js/script.js"></script>
</body>

</html>