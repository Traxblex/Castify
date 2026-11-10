<?php
include('controller/acteurs/accueilActeur.php');
?>

<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">

        <div class="bg-foret text-white px-6 py-5 text-center">
            <h1 class="text-2xl font-bold uppercase">Modifier mon profil</h1>
        </div>

        <div class="p-6">
            <form action="controller/acteurs/modifierProfilActeur.php" method="POST">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="nom" class="block text-sm font-semibold text-gray-700 mb-1">Nom</label>
                        <input type="text" id="nom" name="nom" value="<?php echo $profilConnecte['nom']; ?>"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                    </div>
                    <div>
                        <label for="prenom" class="block text-sm font-semibold text-gray-700 mb-1">Prénom</label>
                        <input type="text" id="prenom" name="prenom" value="<?php echo $profilConnecte['prenom']; ?>"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo $profilConnecte['email']; ?>"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                </div>

                <div class="mb-4">
                    <label for="telephone" class="block text-sm font-semibold text-gray-700 mb-1">Téléphone</label>
                    <input type="text" id="telephone" name="telephone" value="<?php echo $profilConnecte['telephone']; ?>"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                </div>

                <div class="mb-4">
                    <label for="experience" class="block text-sm font-semibold text-gray-700 mb-1">Expérience (années)</label>
                    <input type="number" id="experience" name="experience" min="0" value="<?php echo $profilConnecte['experience']; ?>"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                </div>

                <div class="mb-6">
                    <label for="mdp" class="block text-sm font-semibold text-gray-700 mb-1">Nouveau mot de passe (laisser vide si vous ne changez pas de mot de passe)</label>
                    <input type="password" id="mdp" name="mdp" minlength="12"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                    <p class="text-xs text-gray-500 mt-2">Le mot de passe doit contenir au moins 12 caractères, avec une majuscule, une minuscule, un chiffre et un caractère spécial.</p>
                </div>

                <div class="mb-6">
                    <label for="mdp_confirm" class="block text-sm font-semibold text-gray-700 mb-1">Confirmer le nouveau mot de passe</label>
                    <input type="password" id="mdp_confirm" name="mdp_confirm" minlength="12"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                </div>


                <div class="flex gap-3">
                    <button type="submit" name="modifier" class="flex-1 bg-ocre text-white py-3 rounded-lg text-lg font-bold hover:bg-orange-b transition duration-200 shadow-md">
                        Enregistrer
                    </button>
                    <a href="index.php?page=accueil_acteur" class="flex-1 text-center border-2 border-gray-300 text-gray-600 py-3 rounded-lg text-lg font-bold hover:bg-gray-100 transition duration-200">
                        Annuler
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
