<?php

// header('Content-type: application/json');


$pdo = new PDO('mysql:host=localhost;dbname=autocompletion', 'root', '');

$input_text = $_POST['text_search'].'%';
$input_text2 = '% '.$_POST['text_search'].'%';

if(!empty($_POST['text_search'])){

    $sql = "SELECT * FROM autocompletion_hardware WHERE mot LIKE :input_text OR :input_text2";
    $result = $pdo->prepare($sql);
    $result->bindValue(':input_text',$input_text,PDO::PARAM_STR);
    $result->bindValue(':input_text2',$input_text2,PDO::PARAM_STR);
    $result->execute();
    $tab = array();
    while( $fetch = $result->fetch(PDO::FETCH_OBJ)){

        array_push($tab, $fetch );
    }
    
    // matchlist
}
    // var_dump($fetch);
    
// echo json_last_error_msg(); 

echo json_encode( utf8ize( $tab )); //cheatcode.exe ou tout simplement un probleme mystique avec une solution mystique.......

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