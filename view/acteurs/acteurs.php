<?php
include('controller/acteurs/acteurs.php'); ?>

<div class="max-w-6xl mx-auto">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-foret uppercase">Liste des Acteurs</h1>
        <a href="index.php?page=ajouteracteur" class="bg-foret text-white px-4 py-2 rounded-lg font-semibold hover:bg-olive transition duration-200 shadow-md flex items-center gap-2">
            <i class="bi bi-plus-circle"></i> Ajouter un acteur
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-foret text-white">
                    <tr>
                        <th class="px-4 py-3 text-left text-sm font-semibold">#</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Nom</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Prénom</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Expérience</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Email</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Téléphone</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Disponibilité</th>
                        <?php if ($_SESSION['role'] != 'producteur') { ?>
                        <th class="px-4 py-3 text-right text-sm font-semibold">Actions</th>
                        <th class="px-4 py-3 text-center text-sm font-semibold">Supprimer</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php foreach($allacteurs as $acteur){ ?>
                    <tr class="hover:bg-creme transition duration-150">
                        <td class="px-4 py-3 font-bold text-gray-700"><?php echo $acteur['id']; ?></td>
                        <td class="px-4 py-3 text-gray-700 break-all"><?php echo ($acteur['nom']); ?></td>
                        <td class="px-4 py-3 text-gray-700 break-all"><?php echo ($acteur['prenom']); ?></td>
                        <td class="px-4 py-3 text-gray-700"><?php echo ($acteur['experience']).' ans'; ?></td>
                        <td class="px-4 py-3 text-gray-700 break-all"><a href="mailto:<?php echo ($acteur['email']); ?>"><?php echo ($acteur['email']); ?></a></td>
                        <td class="px-4 py-3 text-gray-700"><?php echo ($acteur['telephone']); ?></td>

                        <td class="px-4 py-3 whitespace-nowrap">
                            <?php if ($acteur['disponible'] == 'disponible'){
                                echo '<span class="bg-olive text-white text-xs font-semibold px-2 py-1 rounded-full">disponible</span>';
                            }elseif ($acteur['disponible'] == 'en attente'){
                                echo '<span class="bg-ocre text-white text-xs font-semibold px-2 py-1 rounded-full">en attente</span>';
                            }elseif($acteur['disponible'] == 'non disponible'){
                                echo '<span class="bg-orange-b text-white text-xs font-semibold px-2 py-1 rounded-full">non disponible</span>';
                            } ?>
                        </td>

                        <?php if ($_SESSION['role'] != 'producteur') { ?>
                        <td class="px-4 py-3 text-right whitespace-nowrap">
                            <a href="index.php?page=modifierActeurAdmin&id=<?php echo $acteur['id']; ?>" class="bg-ocre text-white px-3 py-1 rounded-lg text-sm font-semibold hover:bg-orange-b transition duration-200">
                                <i class="bi bi-pencil"></i> Modifier
                            </a>
                        </td>
                        
                        <td class="px-4 py-3 text-center whitespace-nowrap">
                            <form method="POST" action="controller/acteurs/supprimerActeur.php">
                                <input type="hidden" name="id" value="<?php echo $acteur['id']; ?>">
                                <button type="submit" name="supprimer" value="supprimer" class="border border-red-400 text-red-500 px-3 py-1 rounded-lg text-sm font-semibold hover:bg-red-500 hover:text-white transition duration-200">
                                    <i class="bi bi-trash-fill"></i> Supprimer
                                </button>
                            </form>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
