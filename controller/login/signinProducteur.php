<?php
include('bdd/bdd.php');

if (isset($_POST['valider'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $telephone = $_POST['telephone'];

    $req = $bdd->prepare("INSERT INTO producteurs(nom, prenom, email, mdp, telephone) VALUES (?, ?, ?, ?, ?)");
    $req->execute([$nom, $prenom, $email, $mdp, $telephone]);

    header("Location: index.php?page=login");
}

?>
