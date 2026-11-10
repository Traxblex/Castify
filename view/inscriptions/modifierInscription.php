<?php
include ('controller/inscriptions/detailInscription.php');
?>

<div class="max-w-2xl mx-auto mt-10">
    <div class="bg-white rounded-xl shadow-lg p-8">
        <h1 class="text-2xl font-bold text-foret uppercase mb-6">Traitement de la candidature</h1>

        <form action="controller/inscriptions/modifierInscription.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

            <div class="mb-4">
                <label class="block text-sm font-semibold text-gray-700 mb-1">Candidat (Acteur)</label>
                <input type="text" value="<?php echo $detailInscription['nom'] . ' ' . $detailInscription['prenom']; ?>" disabled
                    class="w-full bg-creme border border-gray-200 rounded-lg px-4 py-2 text-gray-600">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-semibold text-gray-700 mb-1">Offre concernée</label>
                <input type="text" value="<?php echo $detailInscription['libelle_offre']; ?>" disabled
                    class="w-full bg-creme border border-gray-200 rounded-lg px-4 py-2 text-gray-600">
            </div>

            <div class="mb-6">
                <label for="statut" class="block text-sm font-semibold text-gray-700 mb-1">Validation du statut</label>
                <select name="statut" id="statut"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-olive">
                    <option value="en attente" <?php if($detailInscription['statut'] == 'en attente') echo 'selected'; ?>>En attente</option>
                    <option value="accepté" <?php if($detailInscription['statut'] == 'accepté') echo 'selected'; ?>>Accepté</option>
                    <option value="refusé" <?php if($detailInscription['statut'] == 'refusé') echo 'selected'; ?>>Refusé</option>
                </select>
            </div>

            <button type="submit" name="modifier" class="w-full bg-ocre text-white py-3 rounded-lg text-lg font-bold hover:bg-orange-b transition duration-200 shadow-md">
                Valider la décision
            </button>
        </form>
    </div>
</div>