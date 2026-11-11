<?php
include ('BDD/bdd.php');

// Compteurs principaux
$reqActeurs = $bdd->prepare('SELECT COUNT(*) as nb FROM acteurs');
$reqActeurs->execute();
$nbActeurs = $reqActeurs->fetch()['nb'];

$reqProducteurs = $bdd->prepare('SELECT COUNT(*) as nb FROM producteurs');
$reqProducteurs->execute();
$nbProducteurs = $reqProducteurs->fetch()['nb'];

$reqFilms = $bdd->prepare('SELECT COUNT(*) as nb FROM films');
$reqFilms->execute();
$nbFilms = $reqFilms->fetch()['nb'];

$reqOffres = $bdd->prepare('SELECT COUNT(*) as nb FROM offres');
$reqOffres->execute();
$nbOffres = $reqOffres->fetch()['nb'];

$reqInscriptions = $bdd->prepare('SELECT COUNT(*) as nb FROM inscriptions');
$reqInscriptions->execute();
$nbInscriptions = $reqInscriptions->fetch()['nb'];

// Disponibilité des acteurs
$reqDispos = $bdd->prepare("SELECT COUNT(*) as nb FROM acteurs WHERE disponible = 'disponible'");
$reqDispos->execute();
$nbDispos = $reqDispos->fetch()['nb'];

// Répartition des candidatures
$reqAcceptees = $bdd->prepare("SELECT COUNT(*) as nb FROM inscriptions WHERE statut = 'accepté'");
$reqAcceptees->execute();
$nbAcceptees = $reqAcceptees->fetch()['nb'];

$reqEnAttente = $bdd->prepare("SELECT COUNT(*) as nb FROM inscriptions WHERE statut = 'en attente'");
$reqEnAttente->execute();
$nbEnAttente = $reqEnAttente->fetch()['nb'];

$reqRefusees = $bdd->prepare("SELECT COUNT(*) as nb FROM inscriptions WHERE statut = 'refusé'");
$reqRefusees->execute();
$nbRefusees = $reqRefusees->fetch()['nb'];

// Pourcentages
$pctDispos = $nbActeurs > 0 ? round(($nbDispos / $nbActeurs) * 100) : 0;
$pctAcceptees = $nbInscriptions > 0 ? round(($nbAcceptees / $nbInscriptions) * 100) : 0;
$pctEnAttente = $nbInscriptions > 0 ? round(($nbEnAttente / $nbInscriptions) * 100) : 0;
$pctRefusees = $nbInscriptions > 0 ? round(($nbRefusees / $nbInscriptions) * 100) : 0;

// Ratios
$ratioOffresFilm = $nbFilms > 0 ? round($nbOffres / $nbFilms, 1) : 0;
$ratioCandOffre = $nbOffres > 0 ? round($nbInscriptions / $nbOffres, 1) : 0;
$ratioCandActeur = $nbActeurs > 0 ? round($nbInscriptions / $nbActeurs, 1) : 0;

?>