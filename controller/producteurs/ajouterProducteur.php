<?php

include('../../BDD/bdd.php');

if (isset($_POST['valider'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $telephone = $_POST['telephone'];

    $req = $bdd->prepare('INSERT INTO producteurs (nom, prenom, email, mdp, telephone) VALUES (:nom, :prenom, :email, :mdp, :telephone)');

    $req->bindParam(':nom', $nom);
    $req->bindParam(':prenom', $prenom);
    $req->bindParam(':email', $email);
    $req->bindParam(':mdp', $mdp);
    $req->bindParam(':telephone', $telephone);

    $req->execute();
}
header('Location: ../../index.php?page=producteurs');
?>
