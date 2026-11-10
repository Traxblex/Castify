<?php
    session_start();
    include('view/commun/header.php');


$page = isset($_GET['page']) ? $_GET['page'] : 'accueil'; #si get page il y a qqchose dedans recupérer sinon (les :) page=accueil

switch ($page) {
    case 'accueil':
        include('view/accueil/accueil.php');
    break;

    case 'accueil_admin':
        include('view/accueil/accueil_admin.php');
    break;

    case 'accueil_producteur':
        include('view/accueil/accueil_producteur.php');
    break;

    case 'accueil_acteur':
        include('view/accueil/accueil_acteur.php');
    break;

    case 'login':
        include('view/login/login.php');
    break;

    case 'signin':
        include('view/login/signin.php');
    break;

    case 'signinActeur':
        include('view/login/signinActeur.php');
    break;

    case 'signinProducteur':
        include('view/login/signinProducteur.php');
    break;

    case 'logout':
        include('controller/login/logout.php');
    break;

    case 'offers':
        include('view/offers/offers.php');
    break;

    case 'detailOffre':
        include('view/offers/detailOffre.php');
    break;

    case 'ajouteroffers':
        include('view/offers/ajouteroffre.php');
    break;

    case 'modifierOffre':
        include('view/offers/modifierOffre.php');
    break;

    case 'producteurs':
        include('view/producteurs/producteurs.php');
    break;

    case 'acteurs':
        include('view/acteurs/acteurs.php');
    break;

    case 'ajouteracteur':
        include('view/acteurs/ajouterActeur.php');
    break;

    case 'modifierActeurAdmin':
        include('view/acteurs/modifierActeurAdmin.php');
    break;

    case 'modifierProducteurAdmin':
        include('view/producteurs/modifierProducteurAdmin.php');
    break;

    case 'ajouterProducteur':
        include('view/producteurs/ajouterProducteur.php');
    break;

    case 'inscriptions':
        include('view/inscriptions/inscriptions.php');
    break;

    case 'modifierInscription':
        include('view/inscriptions/modifierInscription.php');
    break;

    case 'ajouterinscription':
        include('view/inscriptions/ajouterInscription.php');
    break;

    case 'stats':
        include('view/stats/stats.php');
    break;

    case 'modifierProfilActeur':
        include('view/acteurs/modifierProfilActeur.php');
    break;

    case 'modifierProfilProducteur':
        include('view/producteurs/modifierProfilProducteur.php');
    break;

    default:
        include('view/accueil/accueil.php');
    break;
}

    include('View/Commun/footer.php');
?>