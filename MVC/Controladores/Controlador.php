<?php


class Controlador
{
    private $tarea;
   // $tarea->setQueHacer("Entregar tarea");

   // $tarea = new Tarea("Entregar tarea", 1, "2022-03-15", "2022-05-30"); // function __construct($quehacer, $prioridad, $fechaCreacion, $fechaTope)

    // public function __construct($tarea) {
    //     $this->tarea = $tarea;
    // }

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

   
   

}


   




