<?php
include('controller/acteurs/acteurs.php');
include('controller/offers/listAllOffers.php');
?>


<div class="max-w-2xl mx-auto mt-10">
    <div class="bg-white rounded-xl shadow-lg p-8">
        <h1 class="text-2xl font-bold text-foret uppercase mb-6">Ajouter une Inscription</h1>

        <form action="controller/inscriptions/ajouterInscription.php" method="POST">

            <div class="mb-4">
                <label for="acteur" class="block text-sm font-semibold text-gray-700 mb-1">Acteur (Candidat)</label>

                <?php if ($_SESSION['role'] == 'acteur') { ?>
                    <input type="hidden" name="acteur" value="<?php echo $_SESSION['user_id']; ?>">
                    <input type="text" value="<?php echo $_SESSION['nom']; ?>" disabled
                        class="w-full bg-creme border border-gray-200 rounded-lg px-4 py-2 text-gray-600">
                <?php } else { ?>
                    <select name="acteur" id="acteur"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                        <option value="">--- Choisissez un acteur ---</option>
                        <?php foreach($allacteurs as $acteur) { ?>
                            <option value="<?php echo $acteur['id']; ?>">
                                <?php echo ($acteur['nom'] . ' ' . $acteur['prenom']); ?>
                            </option>
                        <?php } ?>
                    </select>
                <?php } ?>
            </div>


            <div class="mb-6">
                <label for="offre" class="block text-sm font-semibold text-gray-700 mb-1">Offre (Casting)</label>
                <select name="offre" id="offre"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                    <option value="">--- Choisissez une offre ---</option>
                    <?php foreach($alloffers as $offre) { ?>
                        <option value="<?php echo $offre['id']; ?>" <?php if(isset($_GET['offre_id']) && $_GET['offre_id'] == $offre['id']) echo 'selected'; ?>>
                            <?php echo ($offre['libelle_offre'] . ' - Film : ' . $offre['nom_film']); ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <button type="submit" name="valider" class="w-full bg-foret text-white py-3 rounded-lg text-lg font-bold hover:bg-olive transition duration-200 shadow-md">
                Ajouter l'inscription
            </button>
        </form>
    </div>
</div>
