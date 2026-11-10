<?php
include('controller/inscriptions/inscriptions.php'); 
include('controller/acteurs/acteurs.php');

?>

<div class="max-w-6xl mx-auto">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-foret uppercase">Liste des Inscriptions (Candidatures)</h1>
        <div class="flex gap-2">
            <a href="controller/inscriptions/exportPdf.php" class="bg-olive text-white px-4 py-2 rounded-lg font-semibold hover:bg-foret transition duration-200 shadow-md flex items-center gap-2">
                <i class="bi bi-file-earmark-pdf"></i> Exporter PDF
            </a>
            <a href="index.php?page=ajouterinscription" class="bg-foret text-white px-4 py-2 rounded-lg font-semibold hover:bg-olive transition duration-200 shadow-md flex items-center gap-2">
                <i class="bi bi-plus-circle"></i> Ajouter Inscription
            </a>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-foret text-white">
                    <tr>
                        <?php if (!isset($_SESSION['role']) || $_SESSION['role'] != 'acteur') { ?>
                        <th class="px-4 py-3 text-left text-sm font-semibold">#</th>
                        <?php } ?>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Acteur</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Offre (Casting)</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Statut</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Date d'expiration</th>
                        <?php if ($_SESSION['role'] != 'acteur') { ?>
                        <th class="px-4 py-3 text-right text-sm font-semibold">Actions</th>
                        <?php } ?>
                        <?php if ($_SESSION['role'] != 'producteur') { ?>
                        <th class="px-4 py-3 text-center text-sm font-semibold">Supprimer</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php foreach($allInscriptions as $inscription){ ?>
                    <tr class="hover:bg-creme transition duration-150">
                        <?php if (!isset($_SESSION['role']) || $_SESSION['role'] != 'acteur') { ?>
                        <td class="px-4 py-3 font-bold text-gray-700"><?php echo $inscription['id']; ?></td>
                        <?php } ?>
                        <td class="px-4 py-3 text-gray-700 break-all"><?php echo $inscription['nom'] . ' ' . $inscription['prenom']; ?></td>
                        <td class="px-4 py-3 text-gray-700 break-all"><?php echo $inscription['libelle_offre']; ?></td>

                        <td class="px-4 py-3 whitespace-nowrap">
                            <?php if ($inscription['statut'] == 'accepté') { ?>
                                <span class="bg-olive text-white text-xs font-semibold px-3 py-1 rounded-full">Accepté</span>
                            <?php } elseif ($inscription['statut'] == 'refusé') { ?>
                                <span class="bg-orange-b text-white text-xs font-semibold px-3 py-1 rounded-full">Refusé</span>
                            <?php } else { ?>
                                <span class="bg-ocre text-white text-xs font-semibold px-3 py-1 rounded-full">En attente</span>
                            <?php } ?>
                        </td>
                        <td class="px-4 py-3 text-gray-700 whitespace-nowrap">
                            <?php echo !empty($inscription['date_expiration']) ? htmlspecialchars($inscription['date_expiration'], ENT_QUOTES, 'UTF-8') : '—'; ?>
                        </td>

                        <?php if ($_SESSION['role'] != 'acteur') { ?>
                        <td class="px-4 py-3 text-right whitespace-nowrap">
                            <a href="index.php?page=modifierInscription&id=<?php echo $inscription['id']; ?>" class="bg-ocre text-white px-3 py-1 rounded-lg text-sm font-semibold hover:bg-orange-b transition duration-200">
                                <i class="bi bi-pencil"></i> Modifier le statut
                            </a>
                        </td>
                        <?php } ?>

                        <?php if ($_SESSION['role'] != 'producteur') { ?>
                        <td class="px-4 py-3 text-center whitespace-nowrap">
                            <form method="POST" action="controller/inscriptions/supprimerInscription.php">
                                <input type="hidden" name="id" value="<?php echo $inscription['id']; ?>">
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