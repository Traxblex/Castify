<?php
include('BDD/bdd.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    // Compte Admin
    if ($email === 'admin@admin.com' && $mdp === 'admin') {
        $_SESSION['user_id'] = 0;
        $_SESSION['role'] = 'admin';
        $_SESSION['nom'] = 'ADMIN';
        header("Location: index.php?page=accueil_admin");
    }

    // Cas de si Producteur
    $req = $bdd->prepare("SELECT * FROM producteurs WHERE email = ? AND mdp = ?");
    $req->execute([$email, $mdp]);
    $producteur = $req->fetch();

    if ($producteur) {
        $_SESSION['user_id'] = $producteur['id'];
        $_SESSION['role'] = 'producteur';
        $_SESSION['nom'] = $producteur['nom'].' ' . $producteur['prenom'];
        header("Location: index.php?page=accueil_producteur");
    }

    // Cas de si Acteur
    $req = $bdd->prepare("SELECT * FROM acteurs WHERE email = ? AND mdp = ?");
    $req->execute([$email, $mdp]);
    $acteur = $req->fetch();

    if ($acteur) {
        $_SESSION['user_id'] = $acteur['id'];
        $_SESSION['role'] = 'acteur';
        $_SESSION['nom'] = $acteur['nom'] . ' ' . $acteur['prenom'];
        header("Location: index.php?page=accueil_acteur");
    }

    $erreur = "Email ou mot de passe incorrect.";
}

?>