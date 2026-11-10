<?php include('controller/login/login.php'); ?>
<div class="max-w-md mx-auto mt-20">
    <div class="bg-white rounded-xl shadow-lg p-8">

        <h2 class="text-center text-2xl font-bold text-foret uppercase mb-6">Connexion</h2>

        <?php if (isset($erreur)) { ?>
            <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-lg text-center mb-4">
                <?php echo $erreur; ?>
            </div>
        <?php } ?>

        <form action="index.php?page=login" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Adresse Email :</label>
                <input type="email" id="email" name="email"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
            </div>

            <div class="mb-6">
                <label for="mdp" class="block text-sm font-semibold text-gray-700 mb-1">Mot de passe :</label>
                <input type="password" id="mdp" name="mdp"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
            </div>

            <button type="submit" name="submit" class="w-full bg-foret text-white py-3 rounded-lg text-lg font-bold hover:bg-olive transition duration-200 shadow-md mb-4">
                Se connecter
            </button>

            <div class="text-center">
                <p class="text-gray-600 text-sm">Pas encore de compte ?</p>
                <a href="index.php?page=signin" class="text-olive hover:text-foret font-bold transition duration-200">
                    Créer un compte
                </a>
            </div>
        </form>
    </div>
</div>