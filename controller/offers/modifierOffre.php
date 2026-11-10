<?php

include('../../BDD/bdd.php');

if (isset($_POST['modifier'])){
    $id = $_POST['id'];
    $libelle_offre = $_POST['libelle_offre'];
    $nom_film = $_POST['nom_film'];
    $description_offre = $_POST['description_offre'];
    $date_expiration = !empty($_POST['date_expiration']) ? $_POST['date_expiration'] : null;
    if (isset($_POST['affiche_film'])) {
        $affiche_film = $_POST['affiche_film'];
    } else {
        $affiche_film = '';
    }
    
    // cas du nouveau film
    if (!empty($_POST['nouveau_nom_film']) && !empty($_POST['nouveau_film_distribution'])) {
        $nouveau_nom_film = $_POST['nouveau_nom_film'];
        $nouveau_film_distribution = $_POST['nouveau_film_distribution'];
        if (isset($_POST['nouveau_film_affiche'])) {
            $nouveau_film_affiche = $_POST['nouveau_film_affiche'];
        } else {
            $nouveau_film_affiche = '';
        }
        $producteur = $_POST['producteur'];

        $reqFilm = $bdd->prepare('INSERT INTO films (nom_film, distribution, producteur_id, affiche) VALUES (:nom_film, :distribution, :producteur_id, :affiche)');
        $reqFilm->bindParam(':nom_film', $nouveau_nom_film);
        $reqFilm->bindParam(':distribution', $nouveau_film_distribution);
        $reqFilm->bindParam(':producteur_id', $producteur);
        $reqFilm->bindParam(':affiche', $nouveau_film_affiche);
        $reqFilm->execute();

        $film_id = $bdd->lastInsertId();
    } else {
        // sinon on cherche l'id du film existant
        $reqfilmid = $bdd->prepare('SELECT id FROM films WHERE nom_film = ?');
        $reqfilmid->execute([$nom_film]);
        $filmid = $reqfilmid->fetch();
        $film_id = $filmid['id'];
    }

    // Si on a le film, on met à jour l'offre et le film
    if (isset($film_id)) {
        $producteur = $_POST['producteur'];

        $req = $bdd->prepare('UPDATE offres SET libelle_offre = ?, nom_film = ?, description_offre = ?, date_expiration = ? WHERE id = ?');
        $req->execute([$libelle_offre, $film_id, $description_offre, $date_expiration, $id]);

        $reqUpdateFilm = $bdd->prepare('UPDATE films SET producteur_id = ?, affiche = ? WHERE id = ?');
        $reqUpdateFilm->execute([$producteur, $affiche_film, $film_id]);
    }
}

header('Location: ../../index.php?page=offers');

?>