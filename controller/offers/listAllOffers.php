<?php
include ('bdd/bdd.php');

$search = isset($_GET['search']) ? trim($_GET['search']) : '';

//Ce que le SQL fait : infos classiques de l'offre avec les infos du film, laffiche
// et compte le nombre de candidats
$sql = '
    SELECT offres.*, 
           films.nom_film AS nom_film, 
           films.affiche AS affiche, 
           films.producteur_id AS producteur_id,
           producteurs.nom AS producteur_nom,
           producteurs.prenom AS producteur_prenom,
           (SELECT COUNT(*) FROM inscriptions WHERE inscriptions.offre = offres.id) AS nb_candidats
    FROM offres
    INNER JOIN films ON offres.nom_film = films.id
    LEFT JOIN producteurs ON films.producteur_id = producteurs.id
';

$params = [];

if ($search !== '') {
    $sql .= ' WHERE LOWER(films.nom_film) LIKE ? OR LOWER(producteurs.nom) LIKE ? OR LOWER(producteurs.prenom) LIKE ?';
    $searchTerm = '%' . strtolower($search) . '%';
    $params = [$searchTerm, $searchTerm, $searchTerm];
}

$sql .= ' ORDER BY offres.id DESC';

$req = $bdd->prepare($sql);
$req->execute($params);
$alloffers = $req->fetchAll();

?>