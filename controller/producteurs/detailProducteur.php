<?php 
include ('bdd/bdd.php');

$id = $_GET['id'];

$req = $bdd->prepare('SELECT * FROM producteurs WHERE id = ?');
$req->execute([$id]);

$detailProducteur = $req->fetch();

?>
