<?php

class Tareas
{
    // Aquí se definiría la clase Tarea con los atributos/propiedades, constructor y métodos solicitados.
    private $tareas;
    // function __construct(){
    //     if(isset($_SESSION["tareas"])){
    //         $this->$tareas = $_SESSION["tareas"];
    //     }
    // }

    //setter para quehacer
    function setTareas($tareas){
        $this->tareas = $tareas;
    }
    //getter para quehacer
    function getTareas(){
        return $this->tareas;
    }

    function anadirTarea($tarea){
        array_push($this, $tarea);
        return $tarea." insertada";
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
