<?php
include ('BDD/bdd.php');

$req = $bdd->prepare('SELECT * FROM films');

$req->execute();
$allfilms = $req->fetchAll();


/*
var_dump($allMembres);
die();*/



?>