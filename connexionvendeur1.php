<?php 

session_start();


    if(isset($_SESSION["Email"])){

      header('Location: profilvendeur.php');

    }
    else {
?>
          <html lang="en">
            <head>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
              <meta name="description" content="">
              <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
              <meta name="generator" content="Jekyll v3.8.5">
              <title>Connexion</title>

              <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

              <!-- Bootstrap core CSS -->

          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


              <style>
                .bd-placeholder-img {
                  font-size: 1.125rem;
                  text-anchor: middle;
                  -webkit-user-select: none;
                  -moz-user-select: none;
                  -ms-user-select: none;
                  user-select: none;
                }
                @media (min-width: 768px) {
                  .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                  }
                }
              </style>
              <!-- Custom styles for this template -->
              <link href="album.css" rel="stylesheet">

            </head>



            <body class="bg-white">
              <header>

            <div class="navbar navbar-dark bg-info shadow-sm">
              <div class="container d-flex justify-content-between">
                <a href="index.html" class="navbar-brand d-flex align-items-center">
                  <strong>AMA'ZONE ECE</strong>
                </a>

                  <button type="button" class="btn btn-dark btn-lg">Panier</button>


                  <div class="dropdown">
                    <a class="btn btn-default bg-info dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Catégories
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Livres</a>
                      <a class="dropdown-item" href="#">Vêtements</a>
                      <a class="dropdown-item" href="#">Musique</a>
                      <a class="dropdown-item" href="#">Sports</a>
                    </div>
                  </div>    


                  <a class="nav-link text-white" href="ventesflash.html">Ventes Flash</a>

                  <a href="ventesflash.html" class="btn btn-lg btn-info"><img src=img/baseline_local_grocery_store_white_18dp.png></a> 


              </div>
            </div>
          </header>

          <main role="main">

            <section class="jumbotron text-center">
              <div class="container">
                <div class="text"></div>

                  <form class="form-signin" action="connexionvendeur.php" method="POST">
            <img class="mb-4" src="img/connexion.jpg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Identifiez-vous:</h1>
            <label for="inputEmail" class="sr-only">Adresse e-mail</label>
            <input type="email" id="inputEmail" name = "mail" class="form-control" placeholder="Adresse e-mail" required autofocus>
            <label for="inputPassword" class="sr-only">Mot de passse</label>
            <input type="password" name = "password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="souvenir-moi"> Se souvenir de moi
              </label>
            </div>  

            <div class="alert " role="alert">
            <a href="creercompte.html" class="alert-link">Je n'ai pas encore de compte.</a>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
          </form>

                
              </div>
            </section>
            

          </main>

          <footer class="my-5 pt-5 text-muted text-center text-small">
              <p class="mb-1">Site AMA'ZONE &copy; ECE AMA'ZONE_2019</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
              </ul>
              <p>Ou nous retrouver? Visiter notre<a href="https://getbootstrap.com/"> Facebook</a> ou notre page <a href="/docs/4.3/getting-started/introduction/">Instagram</a>.</p>
              <p class="float-right">
                <a href="#">Haut de page</a>
              </p>
          </footer>

          </body>


          </html>

    



<?php
    }


?>



