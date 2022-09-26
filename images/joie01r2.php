<?php //        1         2       3       4     5      6
$correctos = array('QTY', 'DESCRIPTION', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	$DESCRIPTION = asignar(1, 'Dillon C');
	$STYLE = asignar(2, '19-1-006051-28063C');
	$COLOR = asignar(3, 'PORCELAIN');
	$SIZE = asignar(4, 'XXS');
	$UPC = asignar(5, '193683015635');
	$PRICE = asignar(6, '98.00');

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
	$logo = fuente('j.ttf');

	// Introducimos los datos
	//texto('J', 0, 66, 1, 0, $logo, $black, 38, 0, 0);
	texto('8', 0, 66, 1, 0, $logo, $black, 26, 0, 0);

	//texto($DESCRIPTION, 0, 86, 1, 0, $arial80, $black, 8, 0, 0);
	parrafo($DESCRIPTION, 0, 88, 1, 0, $arial, $black, 8, 0, 21, 14);
	texto('STYLE', 0, 128, 1, 0, $arial80, $black, 8, 0, 0);
	texto($STYLE, 0, 142, 1, 0, $arial80, $black, 8, 0, 0);
	texto('COLOR', 0, 164, 1, 0, $arialN, $black, 8, 0, 0);
	texto($COLOR, 0, 178, 1, 0, $arialN, $black, 8, 0, 0);
	texto('SIZE', 0, 200, 1, 0, $arialN, $black, 10.5, 0, 0);
	texto($SIZE, 0, 220, 1, 0, $arial, $black, 14, 0, 0);

	texto('- - - - - - - - - - - - - - - -', 0, 304, 1, 0, $arial, $black, 10, 0, 0);

	texto('MANUFACTURER\'S', 10, 310, 0, 0, $arial, $black, 5, 0, 0);
	texto('SUGGESTED', 10, 318, 0, 0, $arial, $black, 5, 0, 0);
	texto('RETAIL PRICE', 10, 326, 0, 0, $arial, $black, 5, 0, 0);
	texto($PRICE, 0, 318, 2, 10, $arial, $black, 8, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 12, 232, 1, 38, 'UPC');

	barcodeTexto(1.1, 0, 2, 0, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
