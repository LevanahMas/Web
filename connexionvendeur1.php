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
        
#menu-deroulant, #menu-deroulant ul {
    padding: 0;
    margin: 0;
    list-style: none;
}
#menu-deroulant {
/* on centre le menu dans la page */
    text-align: center;
}
#menu-deroulant li {
/* on place les liens du menu horizontalement */
    display: inline-block;
}
#menu-deroulant ul li {
/* on enlève ce comportement pour les liens du sous menu */
    display: inherit;
}
#menu-deroulant a {
    text-decoration: none;
    display: block;
  /**color: #FFFFFF;*/
}
#menu-deroulant ul {
    position: absolute;
/* on cache les sous menus complètement sur la gauche */
    left: -999em;
    text-align: left;
    z-index: 1000;
}
#menu-deroulant li:hover ul {
/* Au survol des li du menu on replace les sous menus */
    left: auto;
}
    </style>
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>


  <body>

    <header>

  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-info">
  <a href="index.html" class="navbar-brand d-flex align-items-center">
        <img src="img/pierre.png"></a>
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <ul id="menu-deroulant">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="categories.html" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégories</a>
            <ul>
              <li><a class="text-dark" href="categories.html">Livres</a></li>
              <li><a class="text-dark" href="categories.html">Musique</a></li>
              <li><a class="text-dark"href="categories.html">Vêtements</a></li>
              <li><a class="text-dark" href="categories.html">Sport et Loisirs</a></li>
            </ul>

        </li>
      </ul>
      <a class="nav-link text-white" href="ventesflash.html">Ventes Flash</a>
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <a href="panier.php" class="btn btn-lg btn-info"><img src=img/panier.png></a> 
      <a class="nav-link text-white" href="deco.php">Se déconnecter</a>
    </form>
  </div>
</nav>
      
</header>

 <br/> <br/> <br/>
    <section class="jumbotron text-center">
    
    <div class="py-3 text-center text-info">
       <h2>Identifiez-vous</h2>
       <img class="mb-4" src="img/connexion.png" alt="" width="72" height="72">
    </div>
    </section>

<div class="container">      
    <div class="row">
    <div class="col-md-12 order-md-1">
      <form class="form-signin" action="connexionvendeur.php" method="POST">
        <div class="row">
            <div class="col-md-3 mb-3">
            </div>
          <div class="col-md-6 mb-3">
            <label for="pseudo">Adresse e-mail</label>


            <input type="email" id="pseudo" name = "mail" class="form-control" placeholder="Adresse e-mail" required autofocus>





            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
            <div class="col-md-3 mb-3">
            </div>
          </div>
          
          
          <div class="row">
            <div class="col-md-3 mb-3">
            </div>
          <div class="col-md-6 mb-3">
            <label for="inputPassword" class="sr-only">Mot de passse</label>
            <input type="password" name = "password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
            <div class="col-md-3 mb-3">
            </div>
          </div>
          <div class="checkbox mb-3 text-center">
            <label>
                <input type="checkbox" value="souvenir-moi"> Se souvenir de moi
            </label>
        </div> 
          
          <div class="alert text-center" role="alert">
            <a href="creercompte.html" class="alert-link">Je n'ai pas encore de compte.</a>
        </div>
       
           <div class="row">
            <div class="col-md-3 mb-3">
            </div>
          <div class="col-md-6 mb-3">
        <button class="btn btn-light btn-outline-info btn-lg btn-block" type="submit">Connexion</button>
          </div>
            <div class="col-md-3 mb-3">
            </div>
          </div>   
          
        </form>

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



