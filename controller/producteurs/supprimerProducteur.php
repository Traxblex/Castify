<?php
include('../../BDD/bdd.php');

if (isset($_POST['supprimer'])){
    $id = $_POST['id'];

    $reqSupprInscription = $bdd->prepare('DELETE FROM inscriptions WHERE offre IN (SELECT id FROM offres WHERE nom_film IN (SELECT id FROM films WHERE producteur_id = ?))');
    $reqSupprInscription->execute([$id]);

    $reqSupprOffres = $bdd->prepare('DELETE FROM offres WHERE nom_film IN (SELECT id FROM films WHERE producteur_id = ?)');
    $reqSupprOffres->execute([$id]);

    $reqSupprfilms = $bdd->prepare('DELETE FROM films WHERE producteur_id = ?');
    $reqSupprfilms->execute([$id]);

    $reqSupprProducteurs = $bdd->prepare('DELETE FROM producteurs WHERE id = ?');
    $reqSupprProducteurs->execute([$id]);
}
header('Location: ../../index.php?page=producteurs');
?>
