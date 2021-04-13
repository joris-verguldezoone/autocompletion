<?php

// header('Content-type: application/json');


$pdo = new PDO('mysql:host=localhost;dbname=autocompletion', 'root', '');

$sql = "SELECT * FROM autocompletion_hardware";
$result = $pdo->prepare($sql);
$result->execute();
$fetch = $result->fetchAll(PDO::FETCH_ASSOC);

// var_dump($fetch);

// echo json_last_error_msg(); 
echo json_encode( utf8ize( $fetch )); //cheatcode.exe ou tout simplement un probleme mystique avec une solution mystique.......

function utf8ize( $mixed ) {
    if (is_array($mixed)) {
        foreach ($mixed as $key => $value) {
            $mixed[$key] = utf8ize($value);
        }
    } elseif (is_string($mixed)) {
        return mb_convert_encoding($mixed, "UTF-8", "UTF-8");
    }
    return $mixed;
}

?>