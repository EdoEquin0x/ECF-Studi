


<?php

//PHP pour se connecter à la base de donnée

$db="d80c661365db6t";
$dbhost="ec2-34-247-72-29.eu-west-1.compute.amazonaws.com";
$dbport=5432;
$dbuser="mowiazajkntnhr";
$dbpasswd="ffd483a06293628f00e1b86117ad30398ee27a0a9f9b48e1638e8ce347136b8c";

$auth = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);


if (!$auth) {
    die("Erreur: Connexion à la base de donnée échouée");
    
}
else {
}
