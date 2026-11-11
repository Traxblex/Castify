<?php
include('BDD/bdd.php');

if (isset($_POST['valider'])) {
    $genre = $_POST['genre'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $experience = $_POST['experience'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $telephone = $_POST['telephone'];

    $req = $bdd->prepare("INSERT INTO acteurs(genre, nom, prenom, experience, email, mdp, telephone, disponible) VALUES (?, ?, ?, ?, ?, ?, ?, 'disponible')");
    $req->execute([$genre, $nom, $prenom, $experience, $email, $mdp, $telephone]);

    header("Location: index.php?page=login");
}

?>
