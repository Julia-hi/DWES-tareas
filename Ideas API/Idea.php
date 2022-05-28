<?php

class Idea
{
     // Aquí se definiría la clase Idea con los atributos/propiedades, constructor y métodos solicitados.
    private $idea, $votos, $id;
   

    public function __construct($id, $idea, $votos){
    $this->id = $id;
    $this->idea = $idea;
    $this->votos = $votos;
   }

    public function inicio() {
        require_once('ideas/index.php');
    }

    //setter para id
    function setId($id){
        $this->id = $id;
    }
    //getter para id
    function getId(){
        return $this->id;
    }
   
    //setter para idea
    function setIdea($idea){
        $this->idea = $idea;
    }
    //getter para idea
    function getIdea(){
        return $this->idea;
    }

    //setter para votos
    function setVotos($votos){
        $this->votos = $votos;
    }
    //getter para votos
    function getVotos(){
        return $this->votos;
    }

function toString(){
    return "id: ".$this->getId()." idea: ".$this.getIdea()." votos: ".$this->getVotos();
}
}

?>
