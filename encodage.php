<?php

// header('Content-type: application/json');
$pdo = new PDO('mysql:host=localhost;dbname=autocompletion', 'root', '');

$input_text = $_GET['text_search'].'%';
$input_text2 = '% '.$_GET['text_search'].'%';

// if(!empty($_GET['text_search'])){
    $tab1 = array();
    $tab2 = array();
    $i = 0;

    $sql = "SELECT * FROM autocompletion_hardware WHERE mot LIKE :input_text OR :input_text2" ;
    $result = $pdo->prepare($sql);
    $result->bindValue(':input_text',$input_text,PDO::PARAM_STR);
    $result->bindValue(':input_text2',$input_text2,PDO::PARAM_STR);

    $result->execute();
    while( $fetch = $result->fetch(PDO::FETCH_ASSOC)){
        
       $tab1[$i][] = $fetch;
        $i++;
    }
    
    // $sql2 = "SELECT * FROM autocompletion_hardware WHERE mot LIKE :input_text2";
    // $result2 = $pdo->prepare($sql2);
    // $result2->bindValue(':input_text2',$input_text2,PDO::PARAM_STR);
    // $result2->execute();
    
    // while( $fetch2 = $result2->fetch(PDO::FETCH_ASSOC)){
        
    //    $tab2[$i][] = $fetch2;
    //     $i++;
    // }
    
    // $tab = $tab1 + $tab2;
    // matchlist
    // var_dump($fetch);
    
    // echo json_last_error_msg(); 
    
// }


echo json_encode($tab1);
 //cheatcode.exe ou tout simplement un probleme mystique avec une solution mystique.......
// function utf8ize( $mixed ) {
//     if (is_array($mixed)) {
//         foreach ($mixed as $key => $value) {
//             $mixed[$key] = utf8ize($value);
//         }
//     } elseif (is_string($mixed)) {
//         return mb_convert_encoding($mixed, "UTF-8", "UTF-8");
//     }
//     return $mixed;
// }



?>