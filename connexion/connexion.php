<?php

/* Connexion vers la BDD en LOCALHOST */

$username = "root";
$password = "";

$db = new PDO("mysql:host=localhost;dbname=cinema", $username, $password);