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

    

}


?>
