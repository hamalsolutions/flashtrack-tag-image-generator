<?php //                     1        2       3       4         5           6
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'DESCRIPTION', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'KTF2693019');
	$COLOR = asignar(2, 'BLACK/BERRY');
	$SIZE = asignar(3, 'SMALL');
	$UPC = asignar(4, '887840205730');
	$DESCRIPTION = asignar(5, '');
	$PRICE = asignar(6, '23.67');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arialNarrowBold = fuente('arialnb.ttf');
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos

	agujero(75, 25);

	texto('E', 0, 35, 2, 10, $logo, $black, 22, 0, 0);

	texto($STYLE, 0, 65, 1, 0, $arialBold, $black, 9, 0, 0);

	if (strlen($COLOR) < 18) {
		texto($COLOR, 0, 90, 1, 0, $arialBold, $black, 9, 0, 0);
	} else {
		texto($COLOR, 0, 90, 1, 0, $arialNarrowBold, $black, 9, 0, 0);
	}

	texto($SIZE, 0, 114, 1, 0, $arialNarrowBold, $black, 10, 0, 0);

	if (strlen($DESCRIPTION) < 18) {
		texto($DESCRIPTION, 0, 224, 1, 0, $arialBold, $black, 8, 0, 0);
	} else {
		texto($DESCRIPTION, 0, 224, 1, 0, $arialNarrowBold, $black, 8, 0, 0);
	}

	//texto($DESCRIPTION, 0, 224, 1, 0, $arialBold, $black, 8, 0, 0);

	texto($PRICE, 0, 310, 1, 0, $arialNarrowBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 18, 124, 1, 38, 'UPC');

	barcodeTexto(1, 0, 1, 0, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
