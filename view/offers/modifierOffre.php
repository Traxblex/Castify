<?php
include ('controller/offers/detailOffre.php');
include ('bdd/bdd.php');
include ('controller/producteurs/producteurs.php');
include ('controller/films/ajouterFilm.php');

?>
<div class="max-w-2xl mx-auto mt-10">
    <div class="bg-white rounded-xl shadow-lg p-8">
        <h1 class="text-2xl font-bold text-foret uppercase mb-6">Modification d'une offre</h1>

        <form action="controller/offers/modifierOffre.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="libelle_offre" class="block text-sm font-semibold text-gray-700 mb-1">Titre du poste</label>
                    <input type="text" id="libelle_offre" name="libelle_offre" value="<?php echo ($detailOffre['libelle_offre']); ?>"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                </div>

                <div>
                    <label for="nom_film" class="block text-sm font-semibold text-gray-700 mb-1">Nom du film</label>
                    <select name="nom_film" id="nom_film" onchange="toggleNouveau_Film_Section()"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                        <option value="">--- Choisissez un film ---</option>
                        <?php foreach($allfilms as $film){ ?>
                        <option value='<?php echo ($film['nom_film']); ?>' <?php if(($detailFilm['nom_film'] ?? '') == $film['nom_film']) echo 'selected'; ?>>
                            <?php echo ($film['nom_film']); ?>
                        </option>
                        <?php } ?>
                        <option value="nouveau_film">--- Ajouter un nouveau film ---</option>
                    </select>
                </div>
            </div>

            <div id="nouveau_film_section" class="mb-4 p-4 bg-creme border border-ocre rounded-lg" style="display: none;">
                <h5 class="text-olive font-semibold mb-3">Nouveau film</h5>
                <div class="mb-3">
                    <label for="nouveau_nom_film" class="block text-sm font-semibold text-gray-700 mb-1">Nom du film</label>
                    <input type="text" id="nouveau_nom_film" name="nouveau_nom_film"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                </div>
                <div>
                    <label for="nouveau_film_distribution" class="block text-sm font-semibold text-gray-700 mb-1">Distribution</label>
                    <input type="text" id="nouveau_film_distribution" name="nouveau_film_distribution"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                </div>
                <div class="mt-3">
                    <label for="nouveau_film_affiche" class="block text-sm font-semibold text-gray-700 mb-1">Lien de l'affiche du film</label>
                    <input type="url" id="nouveau_film_affiche" name="nouveau_film_affiche"
                        placeholder="Mettre le lien de l'affiche du film"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                </div>
            </div>

            <div class="mb-4">
                <label for="producteur" class="block text-sm font-semibold text-gray-700 mb-1">Producteur</label>
                
                    <select name="producteur" id="producteur"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                        <option value="">--- Choisissez un producteur ---</option>
                        <?php foreach($allproducteurs as $producteur){ ?>
                            <option value='<?php echo ($producteur['id']); ?>' <?php if(($detailFilm['producteur_id'] ?? '') == $producteur['id']) echo 'selected'; ?>>
                                <?php echo ($producteur['prenom'] . ' ' . $producteur['nom']); ?>
                            </option>
                        <?php } ?>
                    </select>
            </div>

            <div class="mb-4">
                <label for="date_expiration" class="block text-sm font-semibold text-gray-700 mb-1">Date d'expiration des candidatures</label>
                <input type="date" id="date_expiration" name="date_expiration" value="<?php echo ($detailOffre['date_expiration'] ?? ''); ?>"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
            </div>

            <div class="mb-4">
                <label for="description_offre" class="block text-sm font-semibold text-gray-700 mb-1">Description de l'offre</label>
                <textarea id="description_offre" name="description_offre" rows="5" maxlength="255"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive"><?php echo ($detailOffre['description_offre'] ?? ''); ?></textarea>
            </div>

            <div id="affiche_film_section" class="mb-6">
                <label for="affiche_film" class="block text-sm font-semibold text-gray-700 mb-1">Lien de l'affiche du film</label>
                <input type="url" id="affiche_film" name="affiche_film"
                    value="<?php echo ($detailFilm['affiche'] ?? ''); ?>"
                    placeholder="Mettre le lien de l'affiche du film"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
            </div>

            <button type="submit" name="modifier" class="w-full bg-ocre text-white py-3 rounded-lg text-lg font-bold hover:bg-orange-b transition duration-200 shadow-md">
                Modifier !
            </button>
        </form>
    </div>
    <div class="mt-4 text-center">
        <a href="index.php?page=offers" class="text-olive hover:text-foret font-semibold transition duration-200">
            <i class="bi bi-arrow-left mr-1"></i> Retour aux offres
        </a>
    </div>
</div>

<!-- Script pour block caché nouveau film -->
<script>
function toggleNouveau_Film_Section() {
    var select = document.getElementById('nom_film');
    var section = document.getElementById('nouveau_film_section');
    var afficheSection = document.getElementById('affiche_film_section');
    
    if (select.value === 'nouveau_film') {
        section.style.display = 'block';
        afficheSection.style.display = 'none';
    } else {
        section.style.display = 'none';
        afficheSection.style.display = 'block';
    }
}
</script>