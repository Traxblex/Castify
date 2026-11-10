<div class="max-w-6xl mx-auto mt-4">

    <div class="bg-gradient-to-br from-foret to-olive rounded-2xl shadow-2xl p-12 text-center text-white mb-16 relative overflow-hidden">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-white opacity-5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-white opacity-5 rounded-full blur-3xl"></div>

        <div class="relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold uppercase tracking-tight mb-6 drop-shadow-lg">Le cinéma commence ici</h1>
            <p class="text-xl md:text-2xl font-light max-w-3xl mx-auto mb-10 opacity-90">
                Castyfy est LA plateforme connectant les talents aux plus grands producteurs du cinéma.
            </p>
            
            <div class="flex justify-center gap-4 flex-wrap">
                <?php if (!isset($_SESSION['user_id'])) { ?>
                    <a href="index.php?page=login" class="bg-white text-foret px-8 py-4 rounded-full text-lg font-bold hover:bg-creme transition duration-300 shadow-lg hover:-translate-y-1">
                        <i class="bi bi-box-arrow-in-right mr-2"></i> Rejoignez nous !
                    </a>
                <?php } else { ?>
                    <a href="index.php?page=accueil_<?php echo $_SESSION['role']; ?>" class="bg-ocre text-white px-8 py-4 rounded-full text-lg font-bold hover:bg-orange-b transition duration-300 shadow-lg hover:-translate-y-1">
                        <i class="bi bi-person-circle mr-2"></i> Mon tableau de bord
                    </a>
                    <a href="index.php?page=logout" class="bg-orange-b text-white px-8 py-4 rounded-full text-lg font-bold hover:bg-ocre transition duration-300 shadow-lg hover:-translate-y-1">
                        <i class="bi bi-power mr-2"></i> Déconnexion
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
        
        <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition duration-300 group border-t-4 border-olive">
            <div class="w-16 h-16 mx-auto bg-creme text-olive rounded-full flex items-center justify-center text-3xl mb-6 group-hover:scale-110 group-hover:rotate-12 transition duration-300 shadow-inner">
                <i class="bi bi-stars"></i>
            </div>
            <h3 class="text-2xl font-bold text-foret mb-3">Pour les Acteurs</h3>
            <p class="text-gray-600 leading-relaxed">Accédez à des centaines d'offres de casting exclusives. Postulez en un clic, gérez votre disponibilité pour propulser votre carrière vers de nouveaux sommets.</p>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition duration-300 group border-t-4 border-ocre">
            <div class="w-16 h-16 mx-auto bg-creme text-ocre rounded-full flex items-center justify-center text-3xl mb-6 group-hover:scale-110 group-hover:-rotate-12 transition duration-300 shadow-inner">
                <i class="bi bi-camera-reels"></i>
            </div>
            <h3 class="text-2xl font-bold text-foret mb-3">Pour les Producteurs</h3>
            <p class="text-gray-600 leading-relaxed">Gérez vos castings de A à Z. Publiez vos annonces, parcourez les profils et trouvez les talents parfaits pour vos prochaines productions.</p>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition duration-300 group border-t-4 border-orange-b">
            <div class="w-16 h-16 mx-auto bg-creme text-orange-b rounded-full flex items-center justify-center text-3xl mb-6 group-hover:scale-110 group-hover:rotate-12 transition duration-300 shadow-inner">
                <i class="bi bi-film"></i>
            </div>
            <h3 class="text-2xl font-bold text-foret mb-3">Le 7ème Art !!</h3>
            <p class="text-gray-600 leading-relaxed">Castyfy centralise tous les rôles pour faire vivre la magie du cinéma, qu'il s'agisse d'un court-métrage indépendant ou d'un immense blockbuster.</p>
        </div>

    </div>

</div>
