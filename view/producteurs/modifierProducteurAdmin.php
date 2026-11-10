<?php
include ('controller/producteurs/detailProducteur.php');
?>
<div class="max-w-2xl mx-auto mt-10">
    <div class="bg-white rounded-xl shadow-lg p-8">
        <h1 class="text-2xl font-bold text-foret uppercase mb-6">Modification d'un producteur</h1>

        <form action="controller/producteurs/modifierProducteurAdmin.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="nom" class="block text-sm font-semibold text-gray-700 mb-1">Nom</label>
                    <input type="text" id="nom" name="nom" value="<?php echo ($detailProducteur['nom']); ?>"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                </div>
                <div>
                    <label for="prenom" class="block text-sm font-semibold text-gray-700 mb-1">Prénom</label>
                    <input type="text" id="prenom" name="prenom" value="<?php echo ($detailProducteur['prenom']); ?>"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo ($detailProducteur['email']); ?>"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                </div>
                <div>
                    <label for="telephone" class="block text-sm font-semibold text-gray-700 mb-1">Téléphone</label>
                    <input type="text" id="telephone" name="telephone" value="<?php echo ($detailProducteur['telephone']); ?>"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                </div>
            </div>

            <div class="mb-6">
                <label for="mdp" class="block text-sm font-semibold text-gray-700 mb-1">Mot de passe (Laisser vide si aucun changement)</label>
                <input type="password" id="mdp" name="mdp"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
            </div>

            <button type="submit" name="modifier" class="w-full bg-ocre text-white py-3 rounded-lg text-lg font-bold hover:bg-orange-b transition duration-200 shadow-md">
                Modifier !
            </button>
        </form>
    </div>
    <div class="mt-4 text-center">
        <a href="index.php?page=producteurs" class="text-olive hover:text-foret font-semibold transition duration-200">
            <i class="bi bi-arrow-left mr-1"></i> Retour aux producteurs
        </a>
    </div>
</div>
