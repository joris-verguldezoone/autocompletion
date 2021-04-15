<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Element</title>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
  </script>
</head>
<body>

<?php
    $recherche = 'recherche.php';

?>
    <header>
    <form method="get" action="<?=$recherche?>">

        <div class="flex_col">
            <input type='text' id='text_search_header' name='text_search_header' autocomplete="off">
        <div id='matchList_header'></div>
        </div>

        <input type='hidden' id='result_header' name='result_header'>
        <input type='submit' id='search_header' name='search_header' value='Rechercher'>

    </form>
    </header>
    <main>
    <?php
    
    if(isset($_GET['id'])){
        $pdo = new PDO('mysql:host=localhost;dbname=autocompletion', 'root', '');

        $id = $_GET['id'];

        $sql = $sql = "SELECT * FROM autocompletion_hardware WHERE id=:id";
        $result = $pdo->prepare($sql);
        $result->bindValue(':id',$id,PDO::PARAM_INT);
        $result->execute();

        $fetch = $result->fetch(PDO::FETCH_ASSOC);
    }
    var_dump($fetch);
    echo $fetch['id'];
    echo $fetch['mot'];
    ?>
    </main>
</body>
<script type="text/javascript" src="../libraries/script.js"></script>

</html>
