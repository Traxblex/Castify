<?php
session_start();
include('../../BDD/bdd.php');

$today = date('Y-m-d H:i:s');
$reqDelete = $bdd->prepare('DELETE FROM inscriptions WHERE date_expiration IS NOT NULL AND date_expiration < ?');
$reqDelete->execute([$today]);

if (isset($_SESSION['role']) && $_SESSION['role'] == 'acteur') {
    $req = $bdd->prepare('SELECT inscriptions.*, acteurs.nom, acteurs.prenom, offres.libelle_offre, inscriptions.date_expiration FROM inscriptions INNER JOIN acteurs ON inscriptions.acteur = acteurs.id INNER JOIN offres ON inscriptions.offre = offres.id WHERE inscriptions.acteur = ?');
    $req->execute([$_SESSION['user_id']]);
} elseif (isset($_SESSION['role']) && $_SESSION['role'] == 'producteur') {
    $req = $bdd->prepare('SELECT inscriptions.*, acteurs.nom, acteurs.prenom, offres.libelle_offre, inscriptions.date_expiration FROM inscriptions INNER JOIN acteurs ON inscriptions.acteur = acteurs.id INNER JOIN offres ON inscriptions.offre = offres.id INNER JOIN films ON offres.nom_film = films.id WHERE films.producteur_id = ?');
    $req->execute([$_SESSION['user_id']]);
} else {
    $req = $bdd->prepare('SELECT inscriptions.*, acteurs.nom, acteurs.prenom, offres.libelle_offre, inscriptions.date_expiration FROM inscriptions INNER JOIN acteurs ON inscriptions.acteur = acteurs.id INNER JOIN offres ON inscriptions.offre = offres.id');
    $req->execute();
}

$allInscriptions = $req->fetchAll();

$lines = [];
$lines[] = 'Liste des candidatures';
$lines[] = 'Genere le ' . date('d/m/Y H:i');
$lines[] = '';

if (!empty($allInscriptions)) {
    foreach ($allInscriptions as $index => $inscription) {
        $lines[] = ($index + 1) . '. ' . $inscription['nom'] . ' ' . $inscription['prenom'];
        $lines[] = 'Offre: ' . $inscription['libelle_offre'];
        $lines[] = 'Statut: ' . $inscription['statut'];
        $lines[] = 'Date expiration: ' . (!empty($inscription['date_expiration']) ? $inscription['date_expiration'] : '—');
        $lines[] = '';
    }
} else {
    $lines[] = 'Aucune candidature à exporter.';
}

$pdf = "%PDF-1.4\n";
$pdf .= "1 0 obj\n<< /Type /Catalog /Pages 2 0 R >>\nendobj\n";
$pdf .= "2 0 obj\n<< /Type /Pages /Kids [3 0 R] /Count 1 >>\nendobj\n";
$pdf .= "3 0 obj\n<< /Type /Page /Parent 2 0 R /MediaBox [0 0 612 792] /Contents 4 0 R /Resources << /Font << /F1 5 0 R >> >> >>\nendobj\n";
$pdf .= "5 0 obj\n<< /Type /Font /Subtype /Type1 /BaseFont /Helvetica >>\nendobj\n";

$text = '';
$y = 760;
foreach ($lines as $line) {
    $text .= "BT /F1 10 Tf 50 $y Td ($line) Tj ET\n";
    $y -= 12;
}

$pdf .= "4 0 obj\n<< /Length " . strlen($text) . " >>\nstream\n" . $text . "\nendstream\nendobj\n";

$offsets = [];
$offsets[1] = 0;
$pos = strlen($pdf);
$objects = [1, 2, 3, 5, 4];
foreach ($objects as $objNum) {
    $offsets[$objNum] = $pos;
    $pos = strlen($pdf);
}

$pdf .= "xref\n0 6\n";
$pdf .= "0000000000 65535 f \n";
for ($i = 1; $i <= 5; $i++) {
    $pdf .= str_pad($offsets[$i], 10, '0', STR_PAD_LEFT) . " 00000 n \n";
}
$pdf .= "trailer\n<< /Size 6 /Root 1 0 R >>\nstartxref\n" . strlen($pdf) . "\n%%EOF";

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="candidatures.pdf"');
echo $pdf;
