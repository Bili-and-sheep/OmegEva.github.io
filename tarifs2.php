<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/slider-img.png" type="">

  <title> Tarifs du musée </title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <link href="css/style2.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />

</head>
<?php 
try {
    $bdd = new PDO('mysql:host=localhost;dbname=tarifsdb;charset=utf8', 'root', '&6HAUTdanslaFauré');
} 
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$tarifs = $bdd->query('SELECT * FROM Produits');
?>
<body class="sub_page">

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="images/hero-bg.png" alt="">
      </div>
    </div>

    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="default-index.html">
            <span>
              Musée d'Annecy
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item">
                <a class="nav-link" href="default-index.html" id="head-home" target="_blank">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="oeuvres.html" id="head-why" target="_blank">Oeuvres</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="picasso2.html" id="head-who" target="_blank">À propos de Picasso</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="infos.html" id="head-games" target="_blank">Informations pratiques</a>
              </li>
              <li class="nav-item  active">
                <a class="nav-link" href="tarifs2.html" id="head-team" target="_blank">Tarifs</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
        </nav>
      </div>
    </header>
  </div>
  <div class="promotion-banner">
    <div class="promotion-text">🎉 Promotion Spéciale en Cours! Profitez-en maintenant! 🎉</div>
</div>



  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Nos <span id="blue">tarifs</span>
          </h2>
          <p>
            Bienvenue dans notre page dédié à nos tarifs pour visiter l'exposition. Vous pouvez réaliser une ou plusieurs commandes directement depuis cette page en choisisssant le nombre de tarifs différents puis en cliquant sur "Cliquez ici pour commander".
          </p>
        </div>
        <div class="row">
        <?php $tarifs = $bdd->query('SELECT * FROM Produits');
                        while ($tarifsAffiche = $tarifs->fetch()) { ?>
          <div class="col-md-4 center">
            <div class="box">
                <h2><?php echo $tarifsAffiche['nom_tarif'];?></h2>
              <div class="detail-box">
                <h3><?php echo $tarifsAffiche['prix_tarif'];?>€ / personnes</h3>
                <p>Conditions : <br>
                <?php echo $tarifsAffiche['condition1'];?> <br>
              <?php echo $tarifsAffiche['condition2'];?></p>
              <input type="number" class="input-number rounded" id="input<?php echo $tarifsAffiche['id_produit'];?>" oninput="Calcul()">
              </div>
            </div>
          </div>
          <?php } ?>
          <div class="col-md-4 center">
            <div class="box">
                <h2>Commande</h2>
              <div class="detail-box">
                <h4>Contact via mail</h4>
                <p><br>
                Cliquer sur le bouton ci-dessous (après avoir renseigner le nombre de tarifs) pour nous contacter afin de commander.<br>
              </p>
              </div>
            </div>
          </div>

          
          <div class="heading_container heading_center center col-md-12 layout_padding-top">
            <h2 class="center">
              <a class="resultat" id="resultatJS"></a><span id="blue">€</span>
            </h2>
            <br>
            <br>
            <button class="button" onclick="Commande()">
              Cliquez ici pour les commander
            </button>
          </div>
          </div>
        </div>
      </div>
    </section>
  
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
  <script>
    function Calcul() {
    var input1 = parseFloat(document.getElementById("input1").value) || 0;
    var input2 = parseFloat(document.getElementById("input2").value) || 0;
    var input3 = parseFloat(document.getElementById("input3").value) || 0;
    var input4 = parseFloat(document.getElementById("input4").value) || 0;
    var input5 = parseFloat(document.getElementById("input5").value) || 0;

    var resultat = input1*32 + input2*24 + input3*20 + input4*12 + input5*5;
    var resultatAffiche = document.querySelector(".resultat");
    resultatAffiche.textContent = Math.round(resultat);

    document.getElementById("input1-1").textContent = Math.round(input1);
    document.getElementById("input2-2").textContent = Math.round(input2);
    document.getElementById("input3-3").textContent = Math.round(input3);
    document.getElementById("input4-4").textContent = Math.round(input4);
    document.getElementById("input5-5").textContent = Math.round(input5);
  }
  </script>
  <script>
      function Commande() {
        var longueur = 10;
        var resultat1 = '';
        var caracteresPossibles = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789*-+&é()è';

        for (var i = 0; i < longueur; i++) {
            var indiceAleatoire = Math.floor(Math.random() * caracteresPossibles.length);
            var caractereAleatoire = caracteresPossibles.charAt(indiceAleatoire);
            resultat1 += caractereAleatoire;
        }

        var input1 = document.getElementById('input1').value;
        var input2 = document.getElementById('input2').value;
        var input3 = document.getElementById('input3').value;
        var input4 = document.getElementById('input4').value;
        var input5 = document.getElementById('input5').value;

        var resultat = input1 * 32 + input2 * 24 + input3 * 20 + input4 * 12 + input5 * 5;
        var resultat2 = input1 + input2 + input3 + input4 + input5;

        var resultatAffiche = Math.round(resultat);

        var sujet = "Commande";

        var mailtoLink = "mailto:fauxemail@mail.com" +
            "?subject=" + encodeURIComponent(sujet + " " + resultat1) +
            "&body=" + encodeURIComponent("Commande de " + input1 + " tarifs normaux, " + input2 + " tarifs réduits, " + input3 + " tarifs étudiants, " + input4 + " tarifs membres et " + input5 + " tarifs enfants pour un total de : " + resultatAffiche + "€. \n\n(Merci de bien préciser vos coordonnées) \n\nLe musée d'Annecy vous remercie pour votre commande.");

        window.location.href = mailtoLink;
    }
  </script>
</body>

</html>