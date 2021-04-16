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
  <link rel='stylesheet' href='css/style_recherche.css'>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    <!-- boostrap 5 -->
    <link rel='stylesheet' href='css/bootstrap.min.css'>
    <title>autocompletion</title>
</head>
<body>
<header> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.youtube.com/watch?v=W8drxRl1fiY&list=PL1hmYleVaXpA5ibo5wrGR1X1EJygy7PZe&index=7" target='_blank'>AMV TV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
            </ul>
            <form method="get" class="d-flex" action="recherche.php">
                <div class="flex_col">
                    <input type='text' class="form-control me-2" id='text_search_header' name='text_search_header' autocomplete="off">
                    <div id='matchList_header'></div>
                </div>
                <input type='hidden' id='result_header' name='result'>
                <input class="btn btn-outline-success" type='submit' id='search_header' name='search_header' value='Rechercher'>
            </form>

            </div>
        </div>
    </nav>
</header>


    <main>
    <tbody id='tBody'>

        <div class="result">
        <?php if(isset($_GET['result'])){

            echo ($_GET['result']); 
        }
        if(isset($_GET['result_header'])){
            echo ($_GET['result_header']); 

        }
       ?>
        </div>
                
    </main>

    <footer class="bg-dark text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Explication du site</h5>

                <p>
                Theme HARDWARE, j'ai choisis une auto completion d'un champs lexical et non pas de produits a acheter ce qui fait que le choix des images est un peu chelou
                </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>

                <ul class="list-unstyled mb-0">
                <li>
                    <a href="https://joris-verguldezoone.students-laplateforme.io./" target="_blank">Le profil du dev-bg</a>
                </li>
                </ul>
            </div>
            <div>
                <div>
                    <img id='img_signature' src='images/netero.png'>
                    <p id='signature'>HARDJOJO</p>
                </div>
            </div>
            <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>  
    </footer>
    <script type="text/javascript" src="libraries/script.js"></script>
</body>
</html>
