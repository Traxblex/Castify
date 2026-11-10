<?php

include('controller/acteurs/statutActeur.php');
include('controller/acteurs/accueilActeur.php');
?>

<div class="max-w-3xl mx-auto">

    <div class="bg-white rounded-xl shadow-lg overflow-hidden">

        <div class="bg-foret text-white px-6 py-5 text-center">
            <h1 class="text-3xl font-bold uppercase">Mon Profil</h1>
            <p class="mt-2 text-lg opacity-90">Bonjour, <?php echo $_SESSION['nom']; ?></p>
        </div>

        <div class="p-6">

            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-bold text-foret"><i class="bi bi-person-circle mr-2"></i>Mes informations</h3>
                <a href="index.php?page=modifierProfilActeur" class="bg-ocre text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-orange-b transition duration-200 shadow-md">
                    <i class="bi bi-pencil mr-1"></i> Modifier mes infos
                </a>
            </div>

            <div class="space-y-2 mb-6">
                <div class="flex items-center gap-3 bg-creme rounded-lg px-4 py-3">
                    <span class="text-sm font-semibold text-gray-500 w-28">Nom :</span>
                    <span class="text-gray-800"><?php echo $profilConnecte['nom']; ?></span>
                </div>
                <div class="flex items-center gap-3 bg-creme rounded-lg px-4 py-3">
                    <span class="text-sm font-semibold text-gray-500 w-28">Prénom :</span>
                    <span class="text-gray-800"><?php echo $profilConnecte['prenom']; ?></span>
                </div>
                <div class="flex items-center gap-3 bg-creme rounded-lg px-4 py-3">
                    <span class="text-sm font-semibold text-gray-500 w-28">Email :</span>
                    <span class="text-gray-800"><?php echo $profilConnecte['email']; ?></span>
                </div>
                <div class="flex items-center gap-3 bg-creme rounded-lg px-4 py-3">
                    <span class="text-sm font-semibold text-gray-500 w-28">Téléphone :</span>
                    <span class="text-gray-800"><?php echo $profilConnecte['telephone']; ?></span>
                </div>
                <div class="flex items-center gap-3 bg-creme rounded-lg px-4 py-3">
                    <span class="text-sm font-semibold text-gray-500 w-28">Expérience :</span>
                    <span class="text-gray-800"><?php echo $profilConnecte['experience']; ?> ans</span>
                </div>
            </div>

            <h3 class="text-lg font-bold text-foret mb-4 text-center">Mon statut</h3>
            <div class="flex items-center justify-center gap-4 mb-6 flex-wrap">

                <form method="POST" action="controller/acteurs/boutondisponible.php">
                    <?php if ($statutActuel === 'disponible'){ ?>
                        <button type="submit" name="changer_statut" class="bg-ocre text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-orange-b transition duration-200 shadow-md">
                            <i class="bi bi-x-circle mr-1"></i> Me mettre en 'Non disponible'
                        </button>
                    <?php } else { ?>
                        <button type="submit" name="changer_statut" class="bg-olive text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-foret transition duration-200 shadow-md">
                            <i class="bi bi-check-circle mr-1"></i> Me mettre en 'Disponible'
                        </button>
                    <?php } ?>
                </form>
            </div>

            <div class="text-center mt-4">
                <a href="index.php?page=offers" class="border-2 border-foret text-foret px-5 py-2 rounded-lg font-semibold hover:bg-foret hover:text-white transition duration-200">
                    Voir les offres de casting
                </a>
            </div>
        </div>
    </div>
</div>