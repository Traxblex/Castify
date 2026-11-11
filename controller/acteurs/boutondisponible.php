<?php
session_start();
include('../../BDD/bdd.php');

if (isset($_POST['changer_statut']) && isset($_SESSION['user_id'])) {
    $reqDispo = $bdd->prepare("SELECT disponible FROM acteurs WHERE id = ?");
    $reqDispo->execute([$_SESSION['user_id']]);
    $acteurDispo = $reqDispo->fetch();
    $statutActuel = $acteurDispo['disponible'];

    if ($statutActuel == 'disponible') {
        $nouveauStatut = 'non disponible';
    } else {
        $nouveauStatut = 'disponible';
    }

    $req = $bdd->prepare("UPDATE acteurs SET disponible = ? WHERE id = ?");
    $req->execute([$nouveauStatut, $_SESSION['user_id']]);
}

header('Location: ../../index.php?page=accueil_acteur');
?>