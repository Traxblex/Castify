<?php
include('../../BDD/bdd.php');

if (isset($_POST['supprimer'])){
    $id = $_POST['id'];

    $req = $bdd->prepare('DELETE FROM inscriptions WHERE id = ?');
    $req->execute([$id]);
}
header('Location: ../../index.php?page=inscriptions');
?>
