<?php

include('../../BDD/bdd.php');

if (isset($_POST['modifier'])) {
    $id = $_POST['id'];
    $genre = $_POST['genre'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $experience = $_POST['experience'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $disponible = $_POST['disponible'];

    if (!empty($_POST['mdp'])) {
        $mdp = $_POST['mdp'];
        $req = $bdd->prepare('UPDATE acteurs SET genre = :genre, nom = :nom, prenom = :prenom, experience = :experience, email = :email, mdp = :mdp, telephone = :telephone, disponible = :disponible WHERE id = :id');
        $req->bindParam(':mdp', $mdp);
    } else {
        $req = $bdd->prepare('UPDATE acteurs SET genre = :genre, nom = :nom, prenom = :prenom, experience = :experience, email = :email, telephone = :telephone, disponible = :disponible WHERE id = :id');
    }

    $req->bindParam(':genre', $genre);
    $req->bindParam(':nom', $nom);
    $req->bindParam(':prenom', $prenom);
    $req->bindParam(':experience', $experience);
    $req->bindParam(':email', $email);
    $req->bindParam(':telephone', $telephone);
    $req->bindParam(':disponible', $disponible);
    $req->bindParam(':id', $id);
    $req->execute();
}
header('Location: ../../index.php?page=acteurs');
?>
