<?php
include ('controller/offers/listAllOffers.php');
?>

<div class="max-w-6xl mx-auto">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-foret uppercase">Liste des Offres</h1>
        <?php if (!isset($_SESSION['role']) || $_SESSION['role'] != 'acteur') { ?>
        <a href="index.php?page=ajouteroffers" class="bg-foret text-white px-4 py-2 rounded-lg font-semibold hover:bg-olive transition duration-200 shadow-md flex items-center gap-2">
            <i class="bi bi-plus-circle"></i> Ajouter offre
        </a>
        <?php } ?>
    </div>

    <form method="GET" action="index.php" class="mb-6 flex flex-col md:flex-row gap-3">
        <input type="hidden" name="page" value="offers">
        <input type="text" name="search" value="<?php echo htmlspecialchars($search, ENT_QUOTES, 'UTF-8'); ?>"
            placeholder="Rechercher par nom de film ou nom de producteur"
            class="flex-1 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
        <button type="submit" class="bg-foret text-white px-4 py-2 rounded-lg font-semibold hover:bg-olive transition duration-200">
            Rechercher
        </button>
        <?php if ($search !== '') { ?>
        <a href="index.php?page=offers" class="px-4 py-2 rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-100 text-center">
            Réinitialiser
        </a>
        <?php } ?>
    </form>

    <div class="flex flex-wrap justify-center gap-8">
        <?php if (empty($alloffers)) { ?>
        <div class="w-full text-center text-gray-600 py-8">
            Aucune offre ne correspond à votre recherche.
        </div>
        <?php } else { ?>
        <?php foreach($alloffers as $offres){ ?>
        <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition duration-200 overflow-hidden flex flex-col justify-between text-sm w-52">
            
            <div class="bg-foret text-white px-3 py-2">
                <h3 class="font-bold" title="<?php echo ($offres['libelle_offre']); ?>"><?php echo ($offres['libelle_offre']); ?></h3>
            </div>

            <?php if (!empty($offres['affiche'])) { ?>
            <div class="w-full">
                <img src="<?php echo ($offres['affiche']); ?>" alt="Affiche de <?php echo ($offres['nom_film']); ?>" class="w-full object-contain">
            </div>
            <?php } ?>

            <div class="p-3 flex-1 flex flex-col">
                <p class="text-gray-500 text-sm mb-1">
                    <i class="bi bi-film mr-1"></i> Film :
                </p>
                <p class="text-gray-700 font-semibold text-lg mb-2"><?php echo ($offres['nom_film']); ?></p>
                <p class="text-gray-500 text-sm mb-4">
                    <i class="bi bi-people-fill mr-1 text-olive"></i> Nombre de candidats : <span class="font-bold text-foret"><?php echo $offres['nb_candidats']; ?></span>
                </p>

                <div class="flex flex-col gap-2 mb-3 mt-auto">
                    <a href="index.php?page=detailOffre&id=<?php echo $offres['id']; ?>" class="w-full text-center bg-olive text-white px-3 py-2 rounded-lg text-sm font-semibold hover:bg-foret transition duration-200">
                        <i class="bi bi-eye mr-1"></i> Voir
                    </a>
                    <?php if ($_SESSION['role'] == 'admin' || (isset($_SESSION['role']) && $_SESSION['role'] == 'producteur' && $_SESSION['user_id'] == $offres['producteur_id'])) { ?>
                    <a href="index.php?page=modifierOffre&id=<?php echo $offres['id']; ?>" class="w-full text-center bg-ocre text-white px-3 py-2 rounded-lg text-sm font-semibold hover:bg-orange-b transition duration-200">
                        <i class="bi bi-pencil mr-1"></i> Modifier
                    </a>
                    <?php } ?>
                </div>

                <?php if ($_SESSION['role'] == 'admin' || (isset($_SESSION['role']) && $_SESSION['role'] == 'producteur' && $_SESSION['user_id'] == $offres['producteur_id'])) { ?>
                <form method="POST" action="controller/offers/supprimerOffre.php">
                    <input type="hidden" name="id" value="<?php echo $offres['id']; ?>">
                    <button type="submit" name="supprimer" value="supprimer" class="w-full text-center border border-red-400 text-red-500 px-3 py-2 rounded-lg text-sm font-semibold hover:bg-red-500 hover:text-white transition duration-200">
                        <i class="bi bi-trash-fill mr-1"></i> Supprimer
                    </button>
                </form>
                <?php } ?>

                <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'acteur') { ?>
                <a href="index.php?page=ajouterinscription&offre_id=<?php echo $offres['id']; ?>" class="block w-full text-center bg-foret text-white px-3 py-2 rounded-lg text-sm font-semibold hover:bg-olive transition duration-200 shadow-md">
                    <i class="bi bi-send mr-1"></i> Postuler
                </a>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
        <?php } ?>
    </div>
</div>
