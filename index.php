<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
  </script>
  <link rel='stylesheet' href='css/style.css'>
    <title>autocompletion</title>
</head>
<body>
<?php
    $recherche = 'pages_back/recherche.php';
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
    
        <form method="get" action="pages_back/recherche.php">
    
            <div class="flex_col">
                <input type='text' id='text_search' name='text_search' autocomplete="off">
                <div id='matchList'></div>
            </div>
            <input type='hidden' id='result' name='result'>
            <input type='submit' id='search' name='search' value='Rechercher'>
  
        </form>
    
    </main>

    <footer>
    </footer>
    <script type="text/javascript" src="libraries/script.js"></script>
    <!-- <script type="text/javascript" src="libraries/jesuscript.js"></script> -->
</body>
</html>
<!-- taper qqchose qui me redirige vers recherche.php avec les résultats qui correspondent aux lettres entrés 
exemple 
co -> coeur , core 

 -->