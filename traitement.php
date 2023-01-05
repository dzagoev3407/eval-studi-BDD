<?php

require 'connexion/connexion.php'; // On génére le fichier à la connexion vers la BDD

?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Confirmation</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/popup.css">
</head>
<body>

<?php

if(isset($_POST["envoyer"])) // Si le bouton "envoyer" existe bien
{

/* ===== Les éléments du formulaire qu'on récupère avec la méthode POST ===== */

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $tarif = $_POST["tarif"];
    $film = $_POST["movie"];
    $cinema = $_POST["name_cine"];

    $info = [$nom, $prenom, $email, $tarif, $film, $cinema]; // On crée un tableau avec toutes les données utilisateur qu'on va pouvoir stocker

    if($info)
    {

        $numPlace = rand(0,200); // rand fonction qui génère un numéro de place compris entre 0 et 200

        ?>

    <div class="alert alert-success" role="alert">

        <?php

        echo "Merci ".'<strong>'." $nom ". " $prenom ".'</strong>'. " d'avoir réservé votre place, pour le film : '<strong>'".$film."'</strong>' comportant le numéro ".'<strong>'.$numPlace.'</strong>'." veuillez aller vous rendre au cinéma : ".'<strong>'.$cinema.'</strong>'." pour payer la somme de ".'<strong>'.$tarif.'</strong>'." , merci et à bientôt ! :)";

        ?>

    </div>

     <?php

     $sql = "INSERT INTO `reservations`(`nom_cinema`, `nom`, `prenom`, `nom_film`, `num_place`, `tarif`, `email`) 
             VALUES (:nomCine, :nom, :prenom, :nomFilm, :numPlace, :tarif, :email)"; // On crée la requête SQL

     $req = $db->prepare($sql); // On la prépare

     $req->bindvalue(':nomCine', $cinema);
     $req->bindvalue(':nom', $nom);
     $req->bindvalue(':prenom', $prenom);
     $req->bindvalue(':nomFilm', $film);
     $req->bindvalue('numPlace', $numPlace);
     $req->bindvalue(':tarif', $tarif);
     $req->bindvalue(':email', $email);

/* On envoi les données vers la BDD */

     if($req)
     {
        $req->execute();

        echo "Envoyé vers la BDD !";
     }
     else
     {
        echo "Non envoyé !";
     }

/* Si non envoyé on génère un message d'erreur */

    }
    else
    {
        echo "Veuillez réessayer !";
    }
}

?>

<!-- POPUP Message d'avertissement pour tarifs réduits -->

<div class="box">
	<a class="button" href="#popup1">INFORMATIONS IMPORTANTES</a>
</div>

<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Concernant les tarifs réduits</h2>
		<a class="fermeture" href="#">&times;</a>
		<div class="content">
			Pour les tarifs réduits (&Eacutetudiants, moins de 14 ans), un justificatif vous sera demandé sur place !
		</div>
	</div>
</div>

<?php

?>

</body>
</html>