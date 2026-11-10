<?php
include('controller/offers/detailOffre.php'); ?>

<div class="max-w-2xl mx-auto mt-10">
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">

        <div class="bg-foret text-white px-6 py-4">
            <h1 class="text-2xl font-bold"><?php echo ($detailFilm['nom_film']); ?></h1>
        </div>

        <div class="p-6">
            <div class="space-y-4">
                <div class="bg-creme rounded-lg p-4">
                    <p class="text-sm text-gray-500 mb-1">Titre de l'offre</p>
                    <p class="text-gray-800 font-semibold"><?php echo ($detailOffre['libelle_offre']); ?></p>
                </div>

                <div class="bg-creme rounded-lg p-4 overflow-hidden">
                    <p class="text-sm text-gray-500 mb-1">Description de l'offre</p>
                    <p class="text-gray-700 break-words"><?php echo ($detailOffre['description_offre']); ?></p>
                </div>

                <div class="bg-creme rounded-lg p-4">
                    <p class="text-sm text-gray-500 mb-1">Distribution du film</p>
                    <p class="text-gray-800 font-semibold"><?php echo ($detailFilm['distribution']); ?></p>
                </div>
            </div>

            <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'acteur') { ?>
            <div class="mt-6">
                <a href="index.php?page=ajouterinscription&offre_id=<?php echo $detailOffre['id']; ?>" class="block w-full text-center bg-foret text-white px-4 py-3 rounded-lg text-lg font-bold hover:bg-olive transition duration-200 shadow-md">
                    <i class="bi bi-send mr-2"></i> Postuler à cette offre
                </a>
            </div>
            <?php } ?>

            <div class="mt-4">
                <a href="index.php?page=offers" class="text-olive hover:text-foret font-semibold transition duration-200">
                    <i class="bi bi-arrow-left mr-1"></i> Retour aux offres
                </a>
            </div>
        </div>
    </div>
</div>
