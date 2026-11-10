<?php 

include ('bdd/bdd.php');

$req = $bdd->prepare('SELECT * FROM producteurs');
$req->execute();

$allproducteurs = $req->fetchAll();



?>