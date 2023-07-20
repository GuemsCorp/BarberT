<?php

$host = "localhost"; // 
$username = "root"; // Utilisateur root
$password = "root"; // Vide si pas de mot de passe
$dbname = "barber_T"; // Nom de la base de données utilisée

//? J'exécute les instructions dans le try, si il y a une erreur elle est attrapée dans le catch qui va l'afficher
try {
    //? Je crée une connexion à ma base de données avec les différents paramètres
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (ErrorException $e) {
    echo $e;
}