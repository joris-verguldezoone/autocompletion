<?php

// header('Content-type: application/json');


$pdo = new PDO('mysql:host=localhost;dbname=autocompletion', 'root', '');

$sql = "SELECT * FROM autocompletion_hardware";
$result = $pdo->prepare($sql);
$result->execute();
$tab = array();
while($res=$result->fetch(PDO::FETCH_ASSOC)) {
    array_push($tab, $res);
    }

// var_dump($tab);

// echo 
var_dump(json_encode($tab));



?>