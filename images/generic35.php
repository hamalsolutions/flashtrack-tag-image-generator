<?php //     1       2      3      4
$correctos = array('QTY', 'NAME', 'STYLE', 'COLOR', 'SIZE', 'UPC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {

	$NAME = asignar(1, 'CALI STRIPE');
	//$NAME = asignar(1, 'CALI STRIPEHHHHHHHXXXXX');
	$STYLE = asignar(2, 'JMST1700');
	$COLOR = asignar(3, 'RPPL');
	$SIZE = asignar(4, 'S');
	$UPC = asignar(5, '001234567895');

	formato(200, 200, 255, 255, 255);
	setAsSticker(10);

	$Black = color(0, 0, 0);

	$Arial = fuente('arial.ttf');
	$Arialbd = fuente('arialbd.ttf');
	$ArialNb = fuente('arialnb.ttf');

	texto('Name:', 10, 25, 0, 0, $Arial, $Black, 9, 0, 0);

	If (strlen($NAME) < 19) {
		texto($NAME, 50, 25, 0, 0, $Arialbd, $Black, 9.5, 0, 0);
	} else {
		texto($NAME, 50, 25, 0, 0, $ArialNb, $Black, 9, 0, 0);
	}

	texto('Style:', 10, 45, 0, 0, $Arial, $Black, 9, 0, 0);
	texto($STYLE, 50, 45, 0, 0, $Arialbd, $Black, 9.5, 0, 0);

	texto('Color:', 10, 65, 0, 0, $Arial, $Black, 9, 0, 0);
	texto($COLOR, 50, 65, 0, 0, $Arialbd, $Black, 9.5, 0, 0);

	texto('Size:', 10, 85, 0, 0, $Arial, $Black, 9, 0, 0);
	texto($SIZE, 50, 85, 0, 0, $Arialbd, $Black, 9.5, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 20, 75, 1.3, 90, 'UPC');

	barcodeTexto(3, -1, -2, 6, 'arial.ttf');

	require_once('../includes/footer.php');

} ?>
