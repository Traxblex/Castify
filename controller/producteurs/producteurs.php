<?php 

include ('BDD/bdd.php');

$req = $bdd->prepare('SELECT * FROM producteurs');
$req->execute();

$allproducteurs = $req->fetchAll();



?>