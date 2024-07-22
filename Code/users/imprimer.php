<?php



require('fpdf/fpdf.php');

//Création d'un nouveau doc pdf (Portrait, en mm , taille A5)
$pdf = new FPDF('P', 'mm', 'A5');

//Ajouter une nouvelle page
$pdf->AddPage();

// entete
$pdf->Image('logo.png', 10, 5, 130, 20);

// Saut de ligne
$pdf->Ln(18);


// Police Arial gras 16
$pdf->SetFont('Arial', 'B', 12);

// Titre
$pdf->Cell(0, 10, 'ATTESTATION DE PARTICIPATION A UNE FORMATION DE CERTIFICATION EN PHP', 'TB', 1, 'C');
$pdf->Cell(0, 10, 'N°:', 0, 1, 'C');

// Saut de ligne
$pdf->Ln(5);

// Début en police Arial normale taille 10

$pdf->SetFont('Arial', '', 10);
$h = 7;
$retrait = "      ";

$pdf->Write($h, "Je sousigné Mr Imacertif, Expert en Programmation Web, Réseau et Télécom agissant en qualité de formateur interne Imacertif certifie que : \n");

$pdf->Write($h, $retrait . "L'élève : ");

//Ecriture en Gras-Italique-Souligné(U)
$pdf->SetFont('', 'BIU');
$pdf->Write($h,"Diarrassouba Ibrahim\n");

//Ecriture normal
$pdf->SetFont('', '');

$pdf->Write($h, $retrait . "Matricule : 22INP00100 \n");

$pdf->Write($h, $retrait . "Email : ibrahdiarra40@gmail.com \n");


$pdf->Write($h, $retrait . "Filière :  " . $filiere . " \n");

$pdf->Write($h, $retrait . "Niveau de formation :  Animateur PHP  \n");

$pdf->Write($h, $retrait . "Note :  15/20 \n");


$pdf->Write($h, "La présente attestation est délivrée à l'intéressé Pour servir et valoir ce que de droit. \n");

$pdf->Cell(0, 5, 'Fait à Yamoussoukro :' . date('d/m/Y'), 0, 1, 'C');

// Décalage de 20 mm à droite
$pdf->Cell(20);
$pdf->Cell(80, 8, "Le directeur pédagogique de la formation", 1, 1, 'C');

// Décalage de 20 mm à droite
$pdf->Cell(20);
$pdf->Cell(80, 5, "Mr IMACERTIF", 'LR', 1, 'C');
$pdf->Cell(20);
$pdf->Cell(80, 5, ' ', 'LR', 1, 'C'); // LR Left-Right
$pdf->Cell(20);
$pdf->Cell(80, 5, ' ', 'LR', 1, 'C');
$pdf->Cell(20);
$pdf->Cell(80, 5, ' ', 'LR', 1, 'C');
$pdf->Cell(20);
$pdf->Cell(80, 5, ' ', 'LRB', 1, 'C'); // LRB : Left-Right-Bottom (Bas)

//Afficher le pdf
$pdf->Output('', '', true);
?>

