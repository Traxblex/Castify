<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Castyfy</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    'foret':  '#283618',
                    'olive':  '#606C38',
                    'creme':  '#FEFAE0',
                    'ocre':   '#DDA15E',
                    'orange-b': '#BC6C25',
                },
                fontFamily: {
                    'sans': ['Inter', 'sans-serif'],
                }
            }
        }
    }
    </script>

    <style>
        /* Style pour cacher la barre de scroll */
        .sidebar-scroll::-webkit-scrollbar { display: none; }
        .sidebar-scroll { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>

<body class="bg-creme font-sans min-h-screen flex">

<aside class="w-56 bg-foret text-white fixed top-0 left-0 h-screen flex flex-col shadow-xl z-50 sidebar-scroll overflow-y-auto">

    <div class="p-5 border-b border-olive">
        <a href="index.php" class="flex items-center gap-2 text-white no-underline">
            <i class="bi bi-camera-reels text-2xl text-ocre"></i>
            <span class="text-xl font-bold tracking-wide">Castyfy</span>
        </a>
        <?php if (isset($_SESSION['role'])) { ?>
            <div class="mt-3 text-sm opacity-80">
                <p class="font-semibold"><?php echo ($_SESSION['nom']) ?></p>
                <p class="text-xs text-ocre capitalize"><?php echo ($_SESSION['role']) ?></p>
            </div>
        <?php } ?>
    </div>

    <nav class="flex-1 p-4 flex flex-col gap-1">

        <a href="index.php?page=accueil" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-white hover:bg-olive transition duration-200">
            <i class="bi bi-house-door"></i> Accueil
        </a>

        <?php if (isset($_SESSION['role'])) { ?>

            <?php if ($_SESSION['role'] == 'admin') { ?>
                <!-- Menu ADMIN  -->
                <a href="index.php?page=offers" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-white hover:bg-olive transition duration-200">
                    <i class="bi bi-megaphone"></i> Toutes les offres
                </a>
                <a href="index.php?page=producteurs" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-white hover:bg-olive transition duration-200">
                    <i class="bi bi-person-video3"></i> Producteurs
                </a>
                <a href="index.php?page=acteurs" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-white hover:bg-olive transition duration-200">
                    <i class="bi bi-people"></i> Acteurs
                </a>
                <a href="index.php?page=inscriptions" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-white hover:bg-olive transition duration-200">
                    <i class="bi bi-card-checklist"></i> Toutes les inscriptions
                </a>
                <a href="index.php?page=stats" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-white hover:bg-olive transition duration-200">
                    <i class="bi bi-bar-chart-line"></i> Statistiques
                </a>

            <?php } elseif ($_SESSION['role'] == 'producteur') { ?>
                <!-- Menu PRODUCTEUR -->
                <a href="index.php?page=offers" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-white hover:bg-olive transition duration-200">
                    <i class="bi bi-megaphone"></i> Toutes les offres
                </a>
                <a href="index.php?page=inscriptions" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-white hover:bg-olive transition duration-200">
                    <i class="bi bi-card-checklist"></i> Candidatures
                </a>
                <a href="index.php?page=acteurs" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-white hover:bg-olive transition duration-200">
                    <i class="bi bi-search"></i> Rechercher un acteur
                </a>

            <?php } elseif ($_SESSION['role'] == 'acteur') { ?>
                <!-- Menu ACTEUR -->
                <a href="index.php?page=offers" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-white hover:bg-olive transition duration-200">
                    <i class="bi bi-megaphone"></i> Toutes les offres
                </a>
                <a href="index.php?page=inscriptions" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-white hover:bg-olive transition duration-200">
                    <i class="bi bi-card-checklist"></i> Mes candidatures
                </a>
            <?php } ?>


            <a href="index.php?page=accueil_<?php echo ($_SESSION['role']) ?>" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-white hover:bg-olive transition duration-200">
                <i class="bi bi-person-circle"></i> Mon profil
            </a>

        <?php } else { ?>
            <!-- Menu non login -->
            <a href="index.php?page=login" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-white hover:bg-olive transition duration-200">
                <i class="bi bi-box-arrow-in-right"></i> Connexion
            </a>
        <?php } ?>
    </nav>

    <?php if (isset($_SESSION['role'])) { ?>
    <div class="p-4 border-t border-olive">
        <a href="index.php?page=logout" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-red-300 hover:bg-red-900 hover:text-white transition duration-200">
            <i class="bi bi-box-arrow-left"></i> Déconnexion
        </a>
    </div>
    <?php } ?>
</aside>

<main class="ml-56 flex-1 min-h-screen flex items-center justify-center">
    <div class="w-full p-6">