<?php 
include ('BDD/bdd.php');

$id = $_GET['id'];

$req = $bdd->prepare('
    SELECT inscriptions.*, acteurs.nom, acteurs.prenom, offres.libelle_offre 
    FROM inscriptions 
    INNER JOIN acteurs ON inscriptions.acteur = acteurs.id 
    INNER JOIN offres ON inscriptions.offre = offres.id 
    WHERE inscriptions.id = ?
');
$req->execute([$id]);

$detailInscription = $req->fetch();
?>
