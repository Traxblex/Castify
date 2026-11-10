<?php 
include ('bdd/bdd.php');

$reqProfilConnecte = $bdd->prepare("SELECT * FROM producteurs WHERE id = ?");
$reqProfilConnecte->execute([$_SESSION['user_id']]);
$profilConnecte = $reqProfilConnecte->fetch();
?>
