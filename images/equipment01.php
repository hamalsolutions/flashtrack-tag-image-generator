<?php //        1         2       3       4     5      6
$correctos = array('QTY', 'DESCRIPTION', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	$DESCRIPTION = asignar(1, 'THE VINTAGE CROPPED SLIM');
	$STYLE = asignar(2, '18-3-002663-PT00923');
	$COLOR = asignar(3, 'FAULKNER');
	$SIZE = asignar(4, '25');
	$UPC = asignar(5, '884926947515');
	$PRICE = asignar(6, '248.00');

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

	// Introducimos los datos
	texto('EQUIPMENT', 0, 55, 1, 0, $arial, $black, 8, 0, 0);

	texto($DESCRIPTION, 0, 86, 1, 0, $arial80, $black, 8, 0, 0);
	texto('STYLE: ' . $STYLE, 8, 120, 0, 0, $arial80, $black, 8, 0, 0);
	texto('COLOR: ' . $COLOR, 8, 140, 0, 0, $arialN, $black, 8, 0, 0);
	texto('SIZE', 0, 170, 1, 0, $arialN, $black, 10.5, 0, 0);
	texto($SIZE, 0, 188, 1, 0, $arialBD, $black, 10.5, 0, 0);

	texto('- - - - - - - - - - - - - - - -', 0, 298, 1, 0, $arial, $black, 10, 0, 0);

	texto('MANUFACTURER\'S', 10, 306, 0, 0, $arialN, $black, 5.5, 0, 0);
	texto('SUGGESTED', 10, 316, 0, 0, $arialN, $black, 5.5, 0, 0);
	texto('RETAIL PRICE', 10, 326, 0, 0, $arialN, $black, 5.5, 0, 0);

	texto($PRICE, 0, 318, 2, 10, $arial, $black, 7.5, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 12, 232, 1, 38, 'UPC');

	barcodeTexto(1.1, 0, 2, 0, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
