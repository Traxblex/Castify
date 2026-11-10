<?php 

include ('bdd/bdd.php');

$now = date('Y-m-d H:i:s');

$reqDelete = $bdd->prepare('DELETE FROM inscriptions WHERE date_expiration IS NOT NULL AND date_expiration < ?');
$reqDelete->execute([$now]);

if (isset($_SESSION['role']) && $_SESSION['role'] == 'acteur') {
    $req = $bdd->prepare('
        SELECT inscriptions.*, acteurs.nom, acteurs.prenom, offres.libelle_offre, inscriptions.date_expiration
        FROM inscriptions
        INNER JOIN acteurs ON inscriptions.acteur = acteurs.id
        INNER JOIN offres ON inscriptions.offre = offres.id
        WHERE inscriptions.acteur = ?
    ');
    $req->execute([$_SESSION['user_id']]);
} elseif (isset($_SESSION['role']) && $_SESSION['role'] == 'producteur') {
    $req = $bdd->prepare('
        SELECT inscriptions.*, acteurs.nom, acteurs.prenom, offres.libelle_offre, inscriptions.date_expiration
        FROM inscriptions
        INNER JOIN acteurs ON inscriptions.acteur = acteurs.id
        INNER JOIN offres ON inscriptions.offre = offres.id
        INNER JOIN films ON offres.nom_film = films.id
        WHERE films.producteur_id = ?
    ');
    $req->execute([$_SESSION['user_id']]);
} else {
    $req = $bdd->prepare('
        SELECT inscriptions.*, acteurs.nom, acteurs.prenom, offres.libelle_offre, inscriptions.date_expiration
        FROM inscriptions
        INNER JOIN acteurs ON inscriptions.acteur = acteurs.id
        INNER JOIN offres ON inscriptions.offre = offres.id
    ');
    $req->execute();
}

$allInscriptions = $req->fetchAll();
?>