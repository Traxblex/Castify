<?php
session_start();
include('../../bdd/bdd.php');

if (isset($_POST['modifier'])) {
    $id = $_SESSION['user_id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    // si un nouveau mot de passe est donné
    if (!empty($_POST['mdp'])) {
        $mdp = $_POST['mdp'];
        $req = $bdd->prepare("UPDATE producteurs SET nom = ?, prenom = ?, email = ?, telephone = ?, mdp = ? WHERE id = ?");
        $req->execute([$nom, $prenom, $email, $telephone, $mdp, $id]);
    } else {
        $req = $bdd->prepare("UPDATE producteurs SET nom = ?, prenom = ?, email = ?, telephone = ? WHERE id = ?");
        $req->execute([$nom, $prenom, $email, $telephone, $id]);
    }

    $_SESSION['nom'] = $nom . ' ' . $prenom;

    header("Location: ../../index.php?page=accueil_producteur");
}
?>
