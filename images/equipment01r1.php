<?php //        1         2       3       4     5      6
$correctos = array('QTY', 'DESCRIPTION', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	$DESCRIPTION = asignar(1, 'ESSENTIAL');
	$STYLE = asignar(2, 'Q2982-E900');
	$COLOR = asignar(3, 'BT WHITE BLAC');
	$SIZE = asignar(4, 'L');
	$UPC = asignar(5, '884926553518');
	$PRICE = asignar(6, '280.00');

	// Creacion del formato
	formato(138, 330, 255, 255, 255);
	// THE FORMAT IS 10% BIGGER TO FIT THE TEXT PROPERLY
	agujero(69, 25);
	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialN = fuente('arialn.ttf');
	$arial80 = fuente('Arial_80.ttf');
	$arialBD = fuente('arialbd.ttf');
	$logo = fuente('EQUIPMENT_LOGO.ttf');

	// Introducimos los datos

	texto('E', 0, 55, 1, 0, $logo, $black, 17, 0, 0);

	parrafo($DESCRIPTION, 0, 84, 1, 0, $arial, $black, 8, 0, 21, 14);
	texto('STYLE', 0, 128, 1, 0, $arial80, $black, 8, 0, 0);
	texto($STYLE, 0, 142, 1, 0, $arial80, $black, 8, 0, 0);
	texto('COLOR', 0, 164, 1, 0, $arialN, $black, 8, 0, 0);
	texto($COLOR, 0, 178, 1, 0, $arialN, $black, 8, 0, 0);
	texto('SIZE', 0, 204, 1, 0, $arialN, $black, 10.5, 0, 0);
	texto($SIZE, 0, 220, 1, 0, $arialBD, $black, 10.5, 0, 0);

	texto('- - - - - - - - - - - - - - - -', 0, 304, 1, 0, $arial, $black, 10, 0, 0);

	texto('MANUFACTURER\'S', 10, 310, 0, 0, $arialN, $black, 5.5, 0, 0);
	texto('SUGGESTED', 10, 318, 0, 0, $arialN, $black, 5.5, 0, 0);
	texto('RETAIL PRICE', 10, 326, 0, 0, $arialN, $black, 5.5, 0, 0);
	texto($PRICE, 0, 318, 2, 10, $arial, $black, 7.5, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 12, 232, 1, 38, 'UPC');

	barcodeTexto(1.1, 0, 2, 0, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
