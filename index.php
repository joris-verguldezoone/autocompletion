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
    <title>autocompletion</title>
</head>
<body>
    <header>
    </header>

    <main>
    
        <table>
            <tbody id='tBody'>
            </tbody>
        </table>
        <form method="GET" action="element.php">
            <input type='text' id='text_search' name='text_search'>
            <input type='button' id='search' name='search' value='Rechercher'>
        </form>
    </main>

    <footer>
    </footer>
<script type="text/javascript" src="libraries/script.js"></script>
</body>
</html>
<!-- taper qqchose qui me redirige vers recherche.php avec les résultats qui correspondent aux lettres entrés 
exemple 
co -> coeur , core 

 -->