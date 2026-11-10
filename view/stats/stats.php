<?php include ('controller/stats/stats.php'); 
?>

<div class="max-w-5xl mx-auto">

    <div class="text-center mb-10">
        <h1 class="text-3xl font-bold text-foret uppercase tracking-wider">Tableau de bord</h1>
        <p class="text-gray-500 mt-2">Vue d'ensemble de la plateforme Castyfy</p>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-5 gap-5 mb-10">

        <div class="bg-gradient-to-br from-olive to-foret rounded-2xl shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all duration-300 p-5 text-center relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -translate-y-6 translate-x-6 group-hover:scale-150 transition-transform duration-500"></div>
            <div class="text-4xl mb-3"><i class="bi bi-people-fill text-white/80"></i></div>
            <p class="text-4xl font-black text-white"><?php echo $nbActeurs; ?></p>
            <h5 class="text-xs font-semibold text-white/70 uppercase tracking-widest mt-2">Acteurs</h5>
        </div>

        <div class="bg-gradient-to-br from-ocre to-orange-b rounded-2xl shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all duration-300 p-5 text-center relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -translate-y-6 translate-x-6 group-hover:scale-150 transition-transform duration-500"></div>
            <div class="text-4xl mb-3"><i class="bi bi-camera-reels-fill text-white/80"></i></div>
            <p class="text-4xl font-black text-white"><?php echo $nbProducteurs; ?></p>
            <h5 class="text-xs font-semibold text-white/70 uppercase tracking-widest mt-2">Producteurs</h5>
        </div>

        <div class="bg-gradient-to-br from-ocre to-orange-b rounded-2xl shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all duration-300 p-5 text-center relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -translate-y-6 translate-x-6 group-hover:scale-150 transition-transform duration-500"></div>
            <div class="text-4xl mb-3"><i class="bi bi-film text-white/80"></i></div>
            <p class="text-4xl font-black text-white"><?php echo $nbFilms; ?></p>
            <h5 class="text-xs font-semibold text-white/70 uppercase tracking-widest mt-2">Films</h5>
        </div>

        <div class="bg-gradient-to-br from-olive to-foret rounded-2xl shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all duration-300 p-5 text-center relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -translate-y-6 translate-x-6 group-hover:scale-150 transition-transform duration-500"></div>
            <div class="text-4xl mb-3"><i class="bi bi-megaphone-fill text-white/80"></i></div>
            <p class="text-4xl font-black text-white"><?php echo $nbOffres; ?></p>
            <h5 class="text-xs font-semibold text-white/70 uppercase tracking-widest mt-2">Offres</h5>
        </div>

        <div class="bg-gradient-to-br from-foret to-olive rounded-2xl shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all duration-300 p-5 text-center relative overflow-hidden group col-span-2 lg:col-span-1">
            <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -translate-y-6 translate-x-6 group-hover:scale-150 transition-transform duration-500"></div>
            <div class="text-4xl mb-3"><i class="bi bi-envelope-paper-fill text-white/80"></i></div>
            <p class="text-4xl font-black text-white"><?php echo $nbInscriptions; ?></p>
            <h5 class="text-xs font-semibold text-white/70 uppercase tracking-widest mt-2">Inscriptions</h5>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">

        <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
            <div class="flex items-center gap-3 mb-5">
                <div class="w-10 h-10 bg-olive/10 rounded-xl flex items-center justify-center">
                    <i class="bi bi-person-check-fill text-olive text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-foret">Disponibilité des acteurs</h3>
            </div>

            <div class="flex items-center justify-center mb-6">
                <div class="relative w-36 h-36">
                    <svg class="w-full h-full -rotate-90" viewBox="0 0 120 120">
                        <circle cx="60" cy="60" r="52" fill="none" stroke="#e5e7eb" stroke-width="10"/>
                        <circle cx="60" cy="60" r="52" fill="none" stroke="#606C38" stroke-width="10" 
                            stroke-dasharray="<?php echo ($pctDispos * 3.267); ?> 326.7" 
                            stroke-linecap="round"/>
                    </svg>
                    <div class="absolute inset-0 flex flex-col items-center justify-center">
                        <span class="text-3xl font-black text-foret"><?php echo $pctDispos; ?>%</span>
                        <span class="text-xs text-gray-400">disponibles</span>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div class="bg-olive/5 rounded-xl p-3 text-center">
                    <p class="text-2xl font-bold text-olive"><?php echo $nbDispos; ?></p>
                    <p class="text-xs text-gray-500 mt-1">Disponibles</p>
                </div>
                <div class="bg-orange-b/5 rounded-xl p-3 text-center">
                    <p class="text-2xl font-bold text-orange-b"><?php echo ($nbActeurs - $nbDispos); ?></p>
                    <p class="text-xs text-gray-500 mt-1">Non disponibles</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
            <div class="flex items-center gap-3 mb-5">
                <div class="w-10 h-10 bg-ocre/10 rounded-xl flex items-center justify-center">
                    <i class="bi bi-bar-chart-fill text-ocre text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-foret">Répartition des candidatures</h3>
            </div>

            <div class="space-y-4">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 bg-olive rounded-full"></div>
                            <span class="text-sm font-medium text-gray-700">Acceptées</span>
                        </div>
                        <span class="text-sm font-bold text-olive"><?php echo $nbAcceptees; ?> <span class="text-gray-400 font-normal">(<?php echo $pctAcceptees; ?>%)</span></span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-3 overflow-hidden">
                        <div class="bg-gradient-to-r from-olive to-foret h-3 rounded-full transition-all duration-1000" style="width: <?php echo $pctAcceptees; ?>%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 bg-ocre rounded-full"></div>
                            <span class="text-sm font-medium text-gray-700">En attente</span>
                        </div>
                        <span class="text-sm font-bold text-ocre"><?php echo $nbEnAttente; ?> <span class="text-gray-400 font-normal">(<?php echo $pctEnAttente; ?>%)</span></span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-3 overflow-hidden">
                        <div class="bg-gradient-to-r from-ocre to-orange-b h-3 rounded-full transition-all duration-1000" style="width: <?php echo $pctEnAttente; ?>%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 bg-orange-b rounded-full"></div>
                            <span class="text-sm font-medium text-gray-700">Refusées</span>
                        </div>
                        <span class="text-sm font-bold text-orange-b"><?php echo $nbRefusees; ?> <span class="text-gray-400 font-normal">(<?php echo $pctRefusees; ?>%)</span></span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-3 overflow-hidden">
                        <div class="bg-gradient-to-r from-orange-b to-ocre h-3 rounded-full transition-all duration-1000" style="width: <?php echo $pctRefusees; ?>%"></div>
                    </div>
                </div>
            </div>

            <div class="mt-5 pt-4 border-t border-gray-100 text-center">
                <p class="text-sm text-gray-500">Total : <span class="font-bold text-foret text-lg"><?php echo $nbInscriptions; ?></span> candidatures</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
        <div class="flex items-center gap-3 mb-5">
            <div class="w-10 h-10 bg-foret/10 rounded-xl flex items-center justify-center">
                <i class="bi bi-lightning-charge-fill text-foret text-xl"></i>
            </div>
            <h3 class="text-lg font-bold text-foret">Indicateurs clés</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-gradient-to-br from-olive/5 to-olive/15 rounded-xl p-5 text-center border border-olive/10 hover:shadow-md transition duration-300">
                <div class="text-3xl mb-1"><i class="bi bi-collection-play text-olive/60"></i></div>
                <p class="text-3xl font-black text-foret"><?php echo $ratioOffresFilm; ?></p>
                <p class="text-xs text-gray-500 mt-2 font-medium uppercase tracking-wide">Offres par film</p>
            </div>
            <div class="bg-gradient-to-br from-ocre/5 to-ocre/15 rounded-xl p-5 text-center border border-ocre/10 hover:shadow-md transition duration-300">
                <div class="text-3xl mb-1"><i class="bi bi-person-lines-fill text-ocre/60"></i></div>
                <p class="text-3xl font-black text-foret"><?php echo $ratioCandOffre; ?></p>
                <p class="text-xs text-gray-500 mt-2 font-medium uppercase tracking-wide">Candidatures par offre</p>
            </div>
            <div class="bg-gradient-to-br from-foret/5 to-foret/15 rounded-xl p-5 text-center border border-foret/10 hover:shadow-md transition duration-300">
                <div class="text-3xl mb-1"><i class="bi bi-stars text-foret/60"></i></div>
                <p class="text-3xl font-black text-foret"><?php echo $ratioCandActeur; ?></p>
                <p class="text-xs text-gray-500 mt-2 font-medium uppercase tracking-wide">Candidatures par acteur</p>
            </div>
        </div>
    </div>
</div>