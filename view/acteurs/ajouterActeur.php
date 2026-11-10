<div class="max-w-2xl mx-auto mt-10">
    <div class="bg-white rounded-xl shadow-lg p-8">
        <h1 class="text-2xl font-bold text-foret uppercase mb-6">Ajouter un acteur</h1>

        <form action="controller/acteurs/ajouterActeur.php" method="POST">
            <div class="mb-4">
                <label class="block text-sm font-semibold text-gray-700 mb-2">Genre</label>
                <div class="flex gap-6">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="genre" id="genreHomme" value="1" class="accent-olive w-4 h-4" checked>
                        <span class="text-gray-700">Homme</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="genre" id="genreFemme" value="0" class="accent-olive w-4 h-4" >
                        <span class="text-gray-700">Femme</span>
                    </label>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="nom" class="block text-sm font-semibold text-gray-700 mb-1">Nom</label>
                    <input type="text" id="nom" name="nom"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                </div>
                <div>
                    <label for="prenom" class="block text-sm font-semibold text-gray-700 mb-1">Prénom</label>
                    <input type="text" id="prenom" name="prenom"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                </div>
            </div>

            <div class="mb-4">
                <label for="experience" class="block text-sm font-semibold text-gray-700 mb-1">Expérience</label>
                <input type="number" id="experience" name="experience" min="0"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Adresse Email</label>
                <input type="email" id="email" name="email"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
            </div>

            <div class="mb-4">
                <label for="mdp" class="block text-sm font-semibold text-gray-700 mb-1">Mot de passe</label>
                <input type="password" id="mdp" name="mdp"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
            </div>

            <div class="mb-4">
                <label for="telephone" class="block text-sm font-semibold text-gray-700 mb-1">Téléphone</label>
                <input type="tel" id="telephone" name="telephone"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
            </div>

            <div class="mb-6">
                <label for="disponible" class="block text-sm font-semibold text-gray-700 mb-1">Disponibilité</label>
                <select name="disponible" id="disponible"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                    <option value='disponible'>Disponible</option>
                    <option value='non disponible'>Non disponible</option>
                </select>
            </div>

            <button type="submit" name="valider" class="w-full bg-foret text-white py-3 rounded-lg text-lg font-bold hover:bg-olive transition duration-200 shadow-md">
                Bienvenue !
            </button>
        </form>
    </div>
    <div class="mt-4 text-center">
        <a href="index.php?page=acteurs" class="text-olive hover:text-foret font-semibold transition duration-200">
            <i class="bi bi-arrow-left mr-1"></i> Retour aux acteurs
        </a>
    </div>
</div>