

<?php
require_once "connect_db.php";
$sql = 'SELECT * FROM ideas';
      $sth = $dbh->prepare($sql);
      $sth->execute();
      $rows = $sth->fetchAll();

$jsondata = array();

if (count($rows)>0) {
  
    while ($rows) {
        $jsondata["data"][] = $row;
        echo $row;
    }
    header('Content-type: application/json; charset=utf-8');
    echo "<p>".json_encode($row)."</p>";
}else{
    echo "<p>No hay datos</p>";
}

exit();
?>