<?php 
include ('BDD/bdd.php');

$reqProfilConnecte = $bdd->prepare("SELECT * FROM acteurs WHERE id = ?");
$reqProfilConnecte->execute([$_SESSION['user_id']]);
$profilConnecte = $reqProfilConnecte->fetch();
?>
