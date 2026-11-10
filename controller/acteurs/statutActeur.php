<?php
include('bdd/bdd.php');

$reqDispo = $bdd->prepare("SELECT disponible FROM acteurs WHERE id = ?");
$reqDispo->execute([$_SESSION['user_id']]);
$acteurDispo = $reqDispo->fetch();
$statutActuel = $acteurDispo['disponible'];
?>
