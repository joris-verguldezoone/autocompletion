<?php
$pdo = new PDO('mysql:host=localhost;dbname=autocompletion', 'root', '');

$sql = "SELECT * FROM autocompletion_hardware";
$result = $pdo->prepare($sql);
$result->execute();
$fetch = $result->fetchAll(PDO::FETCH_ASSOC);

//var_dump($fetch);

echo json_encode($fetch);


?>