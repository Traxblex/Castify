<?php
include('controller/producteurs/producteurs.php'); ?>

<div class="max-w-6xl mx-auto">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-foret uppercase">Liste des Producteurs</h1>
        <a href="index.php?page=ajouterProducteur" class="bg-foret text-white px-4 py-2 rounded-lg font-semibold hover:bg-olive transition duration-200 shadow-md flex items-center gap-2">
            <i class="bi bi-plus-circle"></i> Ajouter un producteur
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
                        <th class="px-4 py-3 text-left text-sm font-semibold">Email</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Téléphone</th>
                        <th class="px-4 py-3 text-right text-sm font-semibold">Actions</th>
                        <th class="px-4 py-3 text-center text-sm font-semibold">Supprimer</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php foreach($allproducteurs as $producteurs) { ?>
                    <tr class="hover:bg-creme transition duration-150">
                        <td class="px-4 py-3 font-bold text-gray-700"><?php echo $producteurs['id']; ?></td>
                        <td class="px-4 py-3 text-gray-700"><?php echo ($producteurs['nom']); ?></td>
                        <td class="px-4 py-3 text-gray-700"><?php echo ($producteurs['prenom']); ?></td>
                        <td class="px-4 py-3">
                            <a href="mailto:<?php echo ($producteurs['email']); ?>" class="text-olive hover:text-foret transition"><?php echo ($producteurs['email']); ?></a>
                        </td>
                        <td class="px-4 py-3 text-gray-700"><?php echo ($producteurs['telephone']); ?></td>

                        <td class="px-4 py-3 text-right">
                            <a href="index.php?page=modifierProducteurAdmin&id=<?php echo $producteurs['id']; ?>" class="bg-ocre text-white px-3 py-1 rounded-lg text-sm font-semibold hover:bg-orange-b transition duration-200">
                                <i class="bi bi-pencil"></i> Modifier
                            </a>
                        </td>

                        <td class="px-4 py-3 text-center">
                            <form method="POST" action="controller/producteurs/supprimerProducteur.php">
                                <input type="hidden" name="id" value="<?php echo $producteurs['id']; ?>">
                                <button type="submit" name="supprimer" value="supprimer" class="border border-red-400 text-red-500 px-3 py-1 rounded-lg text-sm font-semibold hover:bg-red-500 hover:text-white transition duration-200">
                                    <i class="bi bi-trash-fill"></i> Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
