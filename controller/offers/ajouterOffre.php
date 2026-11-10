<?php

include('../../BDD/bdd.php');

if (isset($_POST['valider'])){
    $libelle_offre = $_POST['libelle_offre'];
    $nom_film = $_POST['nom_film'];
    $description_offre = $_POST['description_offre'];
    $date_expiration = !empty($_POST['date_expiration']) ? $_POST['date_expiration'] : null;

    if (!empty($_POST['nouveau_nom_film']) && !empty($_POST['nouveau_film_distribution'])) {
        $nouveau_nom_film = $_POST['nouveau_nom_film'];
        $nouveau_film_distribution = $_POST['nouveau_film_distribution'];
        $nouveau_film_affiche = isset($_POST['nouveau_film_affiche']) ? $_POST['nouveau_film_affiche'] : '';
        $producteur = $_POST['producteur'];

        $reqFilm = $bdd->prepare('INSERT INTO films (nom_film, distribution, producteur_id, affiche) VALUES (:nom_film, :distribution, :producteur_id, :affiche)');
        $reqFilm->bindParam(':nom_film', $nouveau_nom_film);
        $reqFilm->bindParam(':distribution', $nouveau_film_distribution);
        $reqFilm->bindParam(':producteur_id', $producteur);
        $reqFilm->bindParam(':affiche', $nouveau_film_affiche);
        $reqFilm->execute();

        $nom_film = $bdd->lastInsertId();
    } else {
        $reqfilmid = $bdd->prepare('SELECT id FROM films WHERE nom_film = :nom_film');
        $reqfilmid->bindParam(':nom_film', $nom_film);
        $reqfilmid->execute();
        $filmid = $reqfilmid->fetch();
        if ($filmid) {
            $nom_film = $filmid['id'];
        }
    }

    $req = $bdd->prepare('INSERT INTO offres (libelle_offre, nom_film, description_offre, date_expiration) VALUES (:libelle_offre, :nom_film, :description_offre, :date_expiration)');

    $req->bindParam(':libelle_offre', $libelle_offre);
    $req->bindParam(':nom_film', $nom_film);
    $req->bindParam(':description_offre', $description_offre);
    $req->bindParam(':date_expiration', $date_expiration);

    $req->execute();
};
    header('Location: ../../index.php?page=offers');


?>