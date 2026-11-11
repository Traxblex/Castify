<?php 

include ('BDD/bdd.php');

$req = $bdd->prepare('SELECT * FROM acteurs');
$req->execute();

$allacteurs = $req->fetchAll();

/*
var_dump($allMembres);
die();*/



?>