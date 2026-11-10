<?php include('controller/login/signinProducteur.php'); 

?>
<div class="max-w-2xl mx-auto mt-10">
    <div class="bg-white rounded-xl shadow-lg p-8 border-t-4 border-ocre">
        <h1 class="text-2xl font-bold text-foret uppercase mb-2 text-center">Créer mon compte Producteur</h1>
        <p class="text-center text-gray-500 mb-6">Inscrivez-vous pour publier vos offres de casting</p>

        <form action="index.php?page=signinProducteur" method="POST">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="nom" class="block text-sm font-semibold text-gray-700 mb-1">Nom</label>
                    <input type="text" id="nom" name="nom"  
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-ocre">
                </div>
                <div>
                    <label for="prenom" class="block text-sm font-semibold text-gray-700 mb-1">Prénom</label>
                    <input type="text" id="prenom" name="prenom"  
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-ocre">
                </div>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Adresse Email</label>
                <input type="email" id="email" name="email"  
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-ocre">
            </div>

            <div class="mb-4">
                <label for="mdp" class="block text-sm font-semibold text-gray-700 mb-1">Mot de passe</label>
                <input type="password" id="mdp" name="mdp"  
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-ocre">
            </div>

            <div class="mb-6">
                <label for="telephone" class="block text-sm font-semibold text-gray-700 mb-1">Téléphone</label>
                <input type="tel" id="telephone" name="telephone"  
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-ocre">
            </div>

            <button type="submit" name="valider" class="w-full bg-ocre text-white py-3 rounded-lg text-lg font-bold hover:bg-orange-b transition duration-200 shadow-md">
                S'inscrire
            </button>
        </form>
    </div>
    
    <div class="mt-4 text-center">
        <a href="index.php?page=signin" class="text-ocre hover:text-orange-b font-semibold transition duration-200">
            <i class="bi bi-arrow-left mr-1"></i> Retour au choix
        </a>
    </div>
</div>
