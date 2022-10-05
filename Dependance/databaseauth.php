
<?php

//PHP pour se connecter à la base de donnée

$db="d44bhvg4rcgin0";
$dbhost="ec2-52-30-159-47.eu-west-1.compute.amazonaws.com";
$dbport=5432;
$dbuser="qpsqnueqtzaalp";
$dbpasswd="d8179da39241c3774da94d0b63d50c86ba042369fd05abdee340d3fdc02372b0";

$auth = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);


if (!$auth) {
    die("Erreur: Connexion à la base de donnée échouée");
    
}
else {
}
