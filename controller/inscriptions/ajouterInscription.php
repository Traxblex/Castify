<?php
include('../../BDD/bdd.php');

if (isset($_POST['valider'])){
    $acteur = $_POST['acteur'];
    $offre = $_POST['offre'];

    $statut = 'en attente';
    $dateInscription = date('Y-m-d H:i:s');
    $dateExpiration = date('Y-m-d H:i:s', strtotime('+1 minutes', strtotime($dateInscription)));

    $req = $bdd->prepare('INSERT INTO inscriptions (acteur, offre, statut, date_expiration) VALUES (:acteur, :offre, :statut, :date_expiration)');

    $req->bindParam(':acteur', $acteur);
    $req->bindParam(':offre', $offre);
    $req->bindParam(':statut', $statut);
    $req->bindParam(':date_expiration', $dateExpiration);

    if (!$req->execute()) {
        die('Erreur lors de l’ajout de l’inscription.');
    }
}
header('Location: ../../index.php?page=inscriptions');
?>
