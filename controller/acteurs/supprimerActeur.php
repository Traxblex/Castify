<?php
include('../../BDD/bdd.php');

if (isset($_POST['supprimer'])){
    $id = $_POST['id'];

    $reqActeurInscriptions = $bdd->prepare('DELETE FROM inscriptions WHERE acteur = ?');
    $reqActeurInscriptions->execute([$id]);

    $req = $bdd->prepare('DELETE FROM acteurs WHERE id = ?');
    $req->execute([$id]);
}
header('Location: ../../index.php?page=acteurs');
?>
