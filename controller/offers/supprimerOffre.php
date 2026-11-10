<?php

include('../../BDD/bdd.php');


if (isset($_POST['supprimer'])){

    $id = $_POST['id'];

    // supprimer d'abord les inscriptions liées à l'offre sinon boom dans la BDD
    $reqInscriptions = $bdd->prepare('DELETE FROM inscriptions WHERE offre = ?');
    $reqInscriptions->execute([$id]);

    $req = $bdd->prepare('DELETE FROM offres WHERE id = ?');
    $req->execute([$id]);
};

header('Location: ../../index.php?page=offers');


?>