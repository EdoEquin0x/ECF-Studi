


<?php

//PHP pour se connecter à la base de donnée

$db="maxisport";
$dbhost="localhost";
$dbport=3306;
$dbuser="root";
$dbpasswd="Nico0405*";

$auth = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);


if (!$auth) {
    die("Erreur: Connexion à la base de donnée échouée");
    
}
else {
}