<?php

class Tarea
{
    // Aquí se definiría la clase Tarea con los atributos/propiedades, constructor y métodos solicitados.
private $quehacer, $prioridad, $fechaCreacion, $fechaTope;
    function __construct($quehacer, $prioridad, $fechaCreacion, $fechaTope){
        $this->quehacer = $quehacer;
        $this->prioridad = $prioridad;
        $this->fechaCreacion = $fechaCreacion;
        $this->fechaTope=$fechaTope;
        
    }

    //setter para quehacer
    function setQueHacer($quehacer){
        $this->quehacer = $quehacer;
    }
    //getter para quehacer
    function getQueHacer(){
        return $this->quehacer;
    }

    //setter para prioridad
    function setPrioridad($prioridad){
        $this->proiridad = $prioridad;
    }
    //getter para prioridad
    function getPrioridad(){
        return $this->quehacer;
    }

    //setter para fechaCreacion
    function setFechaCreacion($fechaCreacion){
        $this->fechaCreacion = $fechaCreacion;
    }
    //getter para fechaCreacion
    function getFechaCreacion(){
        return $this->fechaCreacion;
    }

    //setter para fechaTope
    function setfechaTope($fechaTope){
        $this->fechaTope = $fechaTope;
    }
    //getter para fechaTope
    function getfechaTope(){
        return $this->fechaTope;
    }

    function guardarTarea(){
        $_SESSION['lol'] = $this->getTarea();
    }

}

if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_POST['queHacer']) && !empty($_POST['queHacer']) 
    &&isset($_POST['prioridad']) && !empty($_POST['prioridad'])
    && isset($_POST['fechaTope']) && !empty($_POST['fechaTope'])){
        $quehacer = filter_var($_POST['queHacer'], FILTER_SANITIZE_STRING);
        $prioridad = $_POST['prioridad'];
        $fechaTope = $_POST['fechaTope'];
        $fechaCreacion = date("Y-m-d");
        $tarea = new Tarea($quehacer, $prioridad , $fechaCreacion, $fechaTope);
        return $tarea;
        $tarea->guardarTarea();
      //  require_once($modelo);
     //  $_SESSION['lol'] = $tarea;
      // echo $_SESSION['tarea1'] ;
      

    
    
   // $_SESSION['tareas'] = $tareas->getTareas();
     }else{ ?>
     
      <p>Alguno de los campos está vacio, debes rellenar todos campos del formulario</p> <?php

    }
} 

?>
