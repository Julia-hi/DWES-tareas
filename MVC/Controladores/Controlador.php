<?php


class Controlador
{
    private $tarea;

    public function mostrar_inicio()
    {
        require_once('Vistas/inicio.php');
    }

    public function mostrar_ver_tarea()
    {
        require_once('Vistas/ver_tarea.php');
    }

    public function mostrar_anadir_tarea()
    {

        
        
        require_once('Vistas/anadir_tarea.php');
    }

    public function mostrar_borrar_tarea()
    {
        require_once('Vistas/borrar_tarea.php');
    }

    public function mostrar_add_tarea()
    {
        
        require_once('Vistas/add.php');
    }

public function comprobarForm(){
    $correcto = false;
 if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){

     if(isset($_POST['queHacer']) && !empty($_POST['queHacer']) 
     &&isset($_POST['prioridad']) && !empty($_POST['prioridad'])
     && isset($_POST['fechaTope']) && !empty($_POST['fechaTope'])
     && validarPrioridad()>0){
        
         $quehacer = $_POST['queHacer'];
         $prioridad = $_POST['prioridad'];
         $fechaCreacion = date("Y/m/d");
         $fechaTope = $_POST['fechaTope'];
        
         $tarea = new Tarea($quehacer, $prioridad , $fechaCreacion, $fechaTope);
         $_SESSION['tarea'] = serialize($tarea); 
         $correcto = true;
      }else{
      $correcto = false;
     }
 }
 return $correcto;
}
}


function validarPrioridad(){
    $valores = array('baja','madia','alta'); // opciones disponibles
    $num=0;
    foreach($valores as $valor){
        if(($_POST['prioridad']) === $valor){
            $num++;
        }   
    }
    return $num;
}  




