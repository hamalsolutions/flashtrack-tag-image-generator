<?php //     1      2      3      4     5      6
$correctos = array('QTY', 'DEPT', 'SIZE', 'COLOR', 'SKU', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DEPT = asignar(1, '184');
	$SIZE = asignar(2, 'S');
	$COLOR = asignar(3, 'RED');
	$SKU = asignar(4, '882701624');
	$UPC = asignar(5, '637677417673');
	$PRICE = asignar(6, '8.99');

	// Creacion del formato
	formato(150, 225, 255, 255, 255);
	agujero(75, 25);
	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNB = fuente('arialnb.ttf');
	//$OCRB = Fuente('OCR-B_SB.ttf');
	$OCRBC = Fuente('OCR-B_CND.ttf');

	// Introducimos los datos
	texto('DEPT:', 10, 40, 0, 0, $arialBold, $black, 6.5, 0, 0);
	texto($DEPT, 38, 40, 0, 0, $arialBold, $black, 6.5, 0, 0);

	texto('SIZE:', 10, 60, 0, 0, $arialBold, $black, 6.5, 0, 0);
	texto($SIZE, 38, 60, 0, 0, $arialBold, $black, 10, 0, 0);

	texto('COLOR:', 11, 80, 0, 0, $arialBold, $black, 6.5, 0, 0);
	if (strlen($COLOR) < 20) {
		texto($COLOR, 48, 80, 0, 0, $arialBold, $black, 6.5, 0, 0);
	} else {
		texto($COLOR, 48, 80, 0, 0, $arialNB, $black, 6.5, 0, 0);
	}

	texto('SKU', 34, 100, 0, 0, $arialBold, $black, 6.5, 0, 0);
	texto($SKU, 68, 100, 0, 0, $arial, $black, 7, 0, 0);

	texto($PRICE, 0, 180, 1, 0, $OCRBC, $black, 11, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 17, 108, 1, 38, 'UPC');

	barcodeTexto(1, 0, 2, 0, 'OCR-B_SB.ttf');

	require_once('../includes/footer.php');
}
?>
