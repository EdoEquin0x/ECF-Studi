
<?php

//PHP pour se connecter à la base de donnée

$db="dbs8778128";
$dbhost="db5010360043.hosting-data.io";
$dbport=3306;
$dbuser="dbu2313881";
$dbpasswd="Nico0405*";

$auth = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);


if (!$auth) {
    die("Erreur: Connexion à la base de donnée échouée");
    
}
else {
}
