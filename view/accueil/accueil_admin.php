<div class="max-w-3xl mx-auto mt-10">
    <div class="bg-white rounded-xl shadow-lg p-8 text-center">

        <h1 class="text-3xl font-bold text-orange-b uppercase">Espace Admin</h1>
        <h2 class="mt-3 text-xl text-gray-600">Bonjour, <?php echo $_SESSION['nom']; ?> !</h2>

        <div class="mt-8 flex justify-center gap-4 flex-wrap">
            <a href="index.php?page=producteurs" class="bg-orange-b text-white px-6 py-3 rounded-lg font-semibold hover:bg-ocre transition duration-200 shadow-md">
                <i class="bi bi-person-video3 mr-2"></i>Gérer les producteurs
            </a>
            <a href="index.php?page=acteurs" class="bg-foret text-white px-6 py-3 rounded-lg font-semibold hover:bg-olive transition duration-200 shadow-md">
                <i class="bi bi-people mr-2"></i>Gérer les acteurs
            </a>
        </div>
    </div>
</div>