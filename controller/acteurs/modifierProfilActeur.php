<?php
session_start();
include('../../bdd/bdd.php');

if (isset($_POST['modifier'])) {
    $id = $_SESSION['user_id'];
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $email = trim($_POST['email']);
    $telephone = trim($_POST['telephone']);
    $experience = (int)$_POST['experience'];

    $mdp = trim($_POST['mdp']);
    $mdp_confirm = trim($_POST['mdp_confirm']);

    if ($mdp !== '') {
        if ($mdp !== $mdp_confirm) {
            die("Erreur : Les mots de passe ne correspondent pas.");
        }

        $pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[^A-Za-z0-9]).{12,}$/'; // permet de vérifier la complexité du mot de passe

        if (!preg_match($pattern, $mdp)) {
            die("Erreur : Le mot de passe doit contenir au moins 12 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial.");
        }
    }

    if ($mdp !== '') {
        $req = $bdd->prepare('UPDATE acteurs SET nom = ?, prenom = ?, email = ?, telephone = ?, experience = ?, mdp = ? WHERE id = ?');
        $req->execute([$nom, $prenom, $email, $telephone, $experience, $mdp, $id]);
    } else {
        $req = $bdd->prepare('UPDATE acteurs SET nom = ?, prenom = ?, email = ?, telephone = ?, experience = ? WHERE id = ?');
        $req->execute([$nom, $prenom, $email, $telephone, $experience, $id]);
    }

    $_SESSION['nom'] = $nom . ' ' . $prenom;

    header('Location: ../../index.php?page=accueil_acteur');
    exit();
}
?>
