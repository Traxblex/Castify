<?php
include('../../BDD/bdd.php');

if (isset($_POST['modifier'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    if (!empty($_POST['mdp'])) {
        $mdp = $_POST['mdp'];
        $req = $bdd->prepare('UPDATE producteurs SET nom = :nom, prenom = :prenom, email = :email, telephone = :telephone, mdp = :mdp WHERE id = :id');
        $req->bindParam(':mdp', $mdp);
    } else {
        $req = $bdd->prepare('UPDATE producteurs SET nom = :nom, prenom = :prenom, email = :email, telephone = :telephone WHERE id = :id');
    }

    $req->bindParam(':nom', $nom);
    $req->bindParam(':prenom', $prenom);
    $req->bindParam(':email', $email);
    $req->bindParam(':telephone', $telephone);
    $req->bindParam(':id', $id);
    $req->execute();
}
header('Location: ../../index.php?page=producteurs');
?>
