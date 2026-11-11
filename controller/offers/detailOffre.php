<?php 

include ('BDD/bdd.php');

$id = $_GET['id'];

$req = $bdd->prepare('SELECT * FROM offres where id = ?');
$req->execute([$id]);

$detailOffre = $req->fetch();

$id_du_film = $detailOffre['nom_film']; 

$req2 = $bdd->prepare('SELECT * FROM films WHERE id = ?');
$req2->execute([$id_du_film]);
$detailFilm = $req2->fetch();

?>