<?php 
include ('BDD/bdd.php');

$id = $_GET['id'];

$req = $bdd->prepare('SELECT * FROM acteurs where id = ?');
$req->execute([$id]);

$detailActeur = $req->fetch();

?>
