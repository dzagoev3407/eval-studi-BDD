<?php

require 'connexion/connexion.php';

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Cinéma - Réservation">
        <meta name="author" content="Bonnefoy Kévin">
        <title>Cinéma - réservation</title>

        <!-- Favicon-->
        <link rel="shortcut icon" href="img/favicon.webp" type="image/x-icon">

        <!-- GOOGLE WEB FONT -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bs-icon-font/bootstrap-icons.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/vendors.min.css" rel="stylesheet">
        <link href="css/vegas.min.css" rel="stylesheet">

    </head>
    <body class="datepicker_mobile_full">
        <div id="preloader">
            <div data-loader="circle-side"></div>
        </div>
        <!-- /Page Preload -->

        <div class="jarallax jarallax_element" data-jarallax-video="https://vimeo.com/360765915"></div>

        <div class="min-vh-100 d-flex flex-column" id="main">
            <div class="container">
                <div id="logo"><img src="img/logo.png" alt="" width="80" height="70" /></div>
            </div>

            <div class="container my-auto main_content">
                <div class="row countdown">
                    <div class="col-md-12">
                        <h1>Réservez votre séance !</h1>
                    </div>
                <div id="book">
                    <form method="POST" action="traitement.php" id="check_avail" autocomplete="off">
                        <div class="row">
                            <div class="col-md-3 nogutter position-relative">
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom">
                                <span class="input-icon"><i class="bi bi-people"></i></span>
                            </div>
                            <div class="col-md-3 nogutter position-relative">
                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prenom">
                                <span class="input-icon"><i class="bi bi-people"></i></span>
                            </div>
                            <div class="col-md-3 nogutter position-relative">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                                <div class="invalid-feedback">
                                    Veuillez entrer un email valide !
                                </div>
                                <span class="input-icon"><i class="bi bi-envelope"></i></span>
                            </div>

                            <div class="col-md-3 nogutter position-relative">
                                <label for="tarif-select">Choissisez votre tarif</label>

                                <select name="tarif" id="tarif-select">
                                <option value="">Votre tarif</option>
                                <option value="9,50€">Plein tarif : 9,50€</option>
                                <option value="7,50€">&Eacutetudiant : 7,50€</option>
                                <option value="5,90€">Moins de 14 ans: 5,90€</option>

                                </select>
                            </div>

                            <div class="col-md-3 nogutter position-relative">
                                <label for="movie-select">Choissisez votre film</label>

                                <select name="movie" id="movie-select">
                                <option value="">Votre Film</option>
                                <option value="Spiderman No-Way Home">Spiderman No-Way Home</option>
                                <option value="Creed II">Creed II</option>
                                <option value="Rambo">Rambo</option>
                                <option value="La haut">La haut</option>
                                <option value="Ronaldo : Le film">Ronaldo : Le film</option>
                                <option value="ET : l'extraterrestre">ET : l'extraterrestre</option>

                                </select>
                            </div>

                            <div class="col-md-3 nogutter position-relative">
                                <input type="text" class="form-control" id="name_cine" name="name_cine" placeholder="Votre cinéma">
                                <span class="input-icon"><i class="bi bi-film"></i></span>
                            </div>

                            <div class="col-md-1 ps-0 pe-3">
                                <button type="submit" class="btn_check text-center" name="envoyer" id="submit-check">Réserver</button>
                            </div>
                        </div>
                    </form>
                    <div id="message-booking"></div>
                </div>
            </div>
        <!-- End main -->

        <!-- JS -->
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/vegas.min.js"></script>
        <script src="js/moment.min.js"></script>
        <script src="js/daterangepicker.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/fslightbox.js"></script>
        <script src="js/functions.js"></script>
    </body>
</html>