<?php //                     1        2        3      4       5          6
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE', 'DESCRIPTION');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'WBB759PK');
	$COLOR = asignar(2, '960 MULTI');
	$SIZE = asignar(3, '0-3M');
	$UPC = asignar(4, '191159167406');
	$PRICE = asignar(5, '$38.00');
	$DESCRIPTION = asignar(6, 'BATMAN 3PK BODYSUIT');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNarrowBold = fuente('arialnb.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos

	agujero(75, 25);

	texto('E', 114, 29, 0, 0, $logo, $black, 22, 0, 0);

	If (strlen($DESCRIPTION) < 20) {
		texto($DESCRIPTION, 0, 64, 1, 0, $arialBold, $black, 7, 0, 0);
	} else {
		texto($DESCRIPTION, 0, 64, 1, 0, $arialNarrowBold, $black, 7, 0, 0);
	}

	If (strlen($STYLE) < 8) {
		texto($STYLE, 0, 78, 1, 0, $arialBold, $black, 7, 0, 0);
	} else {
		texto($STYLE, 0, 78, 1, 0, $arialNarrowBold, $black, 7, 0, 0);
	}

	If (strlen($COLOR) < 8) {
		texto($COLOR, 0, 174, 2, 12, $arialBold, $black, 8, 0, 0);
	} else {
		texto($COLOR, 0, 174, 2, 12, $arialNarrowBold, $black, 8, 0, 0);
	}

	texto($SIZE, 12, 174, 0, 0, $arialBold, $black, 8, 0, 0);

	texto($PRICE, 0, 318, 1, 0, $arialBold, $black, 12, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 18, 84, 1, 58, 'UPC');

	barcodeTexto(2, 0, -3, 7, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
