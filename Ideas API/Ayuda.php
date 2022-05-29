

<?php
include_once 'Idea.php'; // Aquí implementarás la clase Idea con los atributos y métodos necesarios

$ideas=[];
//$ideas[]=new Idea(1, ...); // Aquí insertarás en un array varias instancias de la clase Idea
//$ideas[]=new Idea(2, ...);

$ideas[]=new Idea(1,"Estudiar", 5);
$ideas[]=new Idea(2,"Ir a la playa", 8);
$ideas[]=new Idea(3,"Cocinar paella", 7);


function obtenerIdeaPorId(array $ideas, int $id )
{
	// Aquí implementarás la obtener una idea por identificador

    foreach($ideas as $idea){
        if($idea->getId() == $id){
            return $idea; //->toString();
        }
    }
}

//  se ejecuta al pulsar botón "listar" - lista de ideas guardados en la base de datos
if (isset($_GET['listar'])){
   require_once "connect_db.php";

    $sql = 'SELECT * FROM ideas';
    $sth = $dbh->prepare($sql);
    $sth->execute();
    $rows = $sth->fetchAll();

if (count($rows)>0) {
  
    foreach($rows as $row) {
       $array = array('id'=>$row['id'], 'idea' =>$row['idea'], 'votos'=>$row['votos']);
       ?><p class="result"> <?php
        echo json_encode($array);?></p><?php   
    }
 
}else{ ?>
<p> <?php echo "No hay datos"; ?></p><?php
}
exit();
}



// Ejercicio 2, apartado 3a.

if ($_SERVER['REQUEST_METHOD']=='GET'
    && isset($_GET['id']) && is_numeric($_GET['id']))
{
    $idea = obtenerIdeaPorId($ideas,$_GET['id']);
    if ($idea)
    {
        $i=new class() {};
        $i->id=$idea->getId();
        $i->idea=$idea->getIdea();
        $i->votos=$idea->getVotos();
        echo json_encode($i, JSON_UNESCAPED_UNICODE);
     
    }else{
        echo "Idea con id = ".$_GET['id']." no existe";
    }
}

// Ejercicio 2, apartado 3d.
if ($_SERVER['REQUEST_METHOD']=='POST' 
    && isset($_POST['id_idea'])
    && is_numeric($_POST['id']) && isset($_POST['idea'])&& isset($_POST['votos']))
{    
	// Insertar en la BBDD
	require_once "connect_db.php";
    $idea = filter_var($_POST['idea'], FILTER_SANITIZE_STRING);

    $id = $_POST['id'];
    $votos = $_POST['votos'];
    if (filter_var($id, FILTER_VALIDATE_INT) === false) {
      die('Error: id no es numero enterois.');
    }

    $sql = 'INSERT INTO ideas(id,idea,votos) values(?,?,?)';
    echo $sql;
    $sth = $dbh->prepare($sql);
    $sth->execute(array($id, $idea, $votos));

}else {
    die('<p class="result">Alguno de los campos está vacio, debes rellenaro todos campos del formulario.</p>');
  }
  
  exit(); ?>
