<?php //                     1        2          3        4      5       6       7
$correctos = array('QTY', 'STYLE', 'COLOR', 'COLOR_FR', 'CAT', 'UPC', 'SIZE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'PEP0053XX');
	$COLOR = asignar(2, 'NAVY HEATHER');
	$COLORFR = asignar(3, 'MARINE CHINÈ');
	$CAT = asignar(4, '2D');
	$UPC = asignar(5, '871634007402');
	$SIZE = asignar(6, '2XL/2GT');
	$PRICE = asignar(7, '14.99');

	// Creacion del formato
	formato(150, 250, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);
	$grey = color(123, 134, 140);

	agujero(75, 25);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('arialnb.ttf');
	$logo = fuente('MARKS_LEQUIPEUR_LOGO.ttf');

	// Introducimos los datos

	texto('M', 0, 74, 1, 0, $logo, $grey, 48, 0, 0);

	texto($STYLE, 0, 93, 1, 0, $arialBold, $black, 8, 0, 0);
	texto($COLOR, 0, 105, 1, 0, $arialBold, $black, 8, 0, 0);
	texto($COLORFR, 0, 117, 1, 0, $arialBold, $black, 8, 0, 0);
	texto($CAT, 0, 135, 1, 0, $arialBold, $black, 6.5, 0, 0);

	texto($SIZE, 13, 240, 0, 0, $arialBold, $black, 12, 0, 0);

	perforacion(150, 250, 215);

	texto($PRICE, 0, 240, 2, 12, $arialNBold, $black, 12, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 12, 128, 1.1, 68, 'UPC');

	barcodeTexto(1, 0, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
