<?php
session_start();
$_SESSION["tarif"]=0;
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Panier</title>

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

<main role="main">
<br/> <br/>
  <section class="jumbotron text-center">
    <div class="container">
      <div class="py-5 text-center text-info">

      <h2> Bienvenue dans votre panier </h2>
      </div>
    </div>
  </section>

<div class='row'>

<?php 

define('DB_SERVER', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASS', 'root');

// identifier le nom de la base de données 

$database = "Projetweb";
//connecter l'utilsateur dans la BDD
$db_handle = mysqli_connect (DB_SERVER, DB_USER, DB_PASS);
$db_found = mysqli_select_db ($db_handle, $database);

// si la BDD existe, faire le traitement

$i = 0;
$image = "img/BOSE.png";
$workwith = $_SESSION['newvaleueonthecart'];


    foreach($workwith as $key => &$value){
        if ($value==0){
            unset($workwith[$key]);

        }
    }
$_SESSION['newvaleueonthecart'] = $workwith ;
$workwith = $_SESSION['newvaleueonthecart'];



    if ($db_found) {
       // $sql = "SELECT* FROM Items  ";
        $sql = "SELECT * FROM Items WHERE Id IN (".implode(',',array_keys($_SESSION['newvaleueonthecart'])).")";
        $result = mysqli_query ($db_handle, $sql);
            while ($data = mysqli_fetch_assoc($result)){

            	if($i%5 == 4){


                		echo " </div> <div class='row'> <div class='col-lg-3 col-md-6 mb-3'>
                	        <h1 class='my-4'> </h1> </div>";
                		//echo "on print : ". $i;
            	}

            	echo " <div class='col-lg-3 col-md-6 mb-3'>
            	        <h1 class='my-4'> </h1>
              <a href='article.php?param=".$data["Id"]."'><img class='card-img-top' src='".$image."' alt=''></a>
              <div class='card-body'>
                <h5 class='card-title'>
                  <a href='#'>". $data['Nom'] ."</a>
                </h5>

                <h6>".$data['Prix']."€ </h6>
                <p class='card-text'> Quantité dans le panier : ".$workwith[$data["Id"]]."x </p>
                <form method= 'POST' action = 'cart.php?id=". $data["Id"]."&action=supp'> 
                    <input type= 'submit' class='float-right btn btn-dark btn-sm' value='Supprimer du panier' name = 'deletefromcart' ></input> </br>
              </form>

              </div>
              <div class='card-footer'>
                <small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>";
            $_SESSION["tarif"]= $_SESSION["tarif"] + $data['Prix']*$workwith[$data["Id"]];

            	$i = $i +1;

            }// end while
    }//end if

// si la BDD n'existe pas 
    else {
        echo 'Database not found';
    }

// Fermer la connection 
mysqli_close($db_handle);
?>

</div>


<div class="row">
  
  <div class="col-5"> 

  </div>
  <div class="col-2">
    <button type="button" class="btn btn-light btn-outline-info btn-lg btn-block" id = "passageachat">Payer : <?php echo "".$_SESSION["tarif"]."€"; ?></button>
  </div>
    <div class="col-5"></div>
</div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){

          $("#passageachat").click(function() {
            document.location.href="livraison.php"; 

          });
        });

      </script>


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


<h1>coucou  <?php echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
  ?></h1>



</html>






