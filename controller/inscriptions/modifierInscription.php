<?php
include('../../BDD/bdd.php');

if (isset($_POST['modifier'])) {
    $id = $_POST['id'];
    $statut = $_POST['statut'];

    $req = $bdd->prepare('UPDATE inscriptions SET statut = :statut WHERE id = :id');
    $req->bindParam(':statut', $statut);
    $req->bindParam(':id', $id);
    $req->execute();
}
header('Location: ../../index.php?page=inscriptions');
?>
