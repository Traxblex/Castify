<?php

include('../../BDD/bdd.php');
    //var_dump($_POST);


if (isset($_POST['valider'])){
    $genre = $_POST['genre'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $experience = $_POST['experience'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $telephone = $_POST['telephone'];
    $disponible = $_POST['disponible'];

    $req = $bdd->prepare('INSERT INTO acteurs (`genre`, `nom`, `prenom`, `experience`, `email`, `mdp`, `telephone`, `disponible`) VALUES (:genre, :nom, :prenom, :experience, :email, :mdp, :telephone, :disponible)');


    $req->bindParam(':genre', $genre);
    $req->bindParam(':nom', $nom);
    $req->bindParam(':prenom', $prenom);
    $req->bindParam(':experience', $experience);
    $req->bindParam(':email', $email);
    $req->bindParam(':mdp', $mdp);
    $req->bindParam(':telephone', $telephone);
    $req->bindParam(':disponible', $disponible);

    $req->execute();
};
    header('Location: ../../index.php?page=acteurs');


?>