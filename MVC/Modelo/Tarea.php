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
        return $this->prioridad;
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
        if(isset($_SESSION['tareas'])){
           array_push($_SESSION['tareas'], $this); 
        }else{
            $_SESSION['tareas'] = array();
            array_push($_SESSION['tareas'], $this); 
        }
       
    }

    function borrarTarea($tarea){
        if(buscarTarea($tarea)){
            $pos = array_search($tarea,$this); //posicion de elemento del array  
            array_splice($a1,$pos,1); //elimina un elemento de posición $pos
            echo "La tarea se ha borrado correctamente!";
        }
        
    }

    function buscarTarea($tarea){
        if (in_array($tarea, $this)){
            return true; // se ha encontrado la tarea
        }else{
            echo "La tarea no existe";
            return false; // no se ha encontrado la tarea
    }
    }

}


?>
