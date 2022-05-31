<?php


class Controlador
{
    private $tarea;
    // private $modelo, $vista;

    // public function __construct($modelo, $vista) {
    //     $this->modelo = $modelo;
    //     $this->vista = $vista;
    // }

    // public function __construct() {
    //         $this->tarea = $tarea;
    //     }


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
        && isset($_POST['fechaTope']) && !empty($_POST['fechaTope'])){
           
            // $this->tarea->setQueHacer($quehacer);
            // $this->tarea->setPrioridad($prioridad);
            // $this->tarea->setFechaCreacion($fechaCreacion);
            // $this->tarea->setfechaTope($fechaTope);
            
           
           // $tarea->guardarTarea();
          //  require_once($modelo);
            $_SESSION['lol'] = "sesion guardada";  
            $correcto =  true;
         }else{
         $correcto = false;
        }
        
    }
    //$correcto = true;
    return $correcto;
   }
   

}


   




