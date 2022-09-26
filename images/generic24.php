<?php //                      1             2       3        4       5     6
$correctos = array('QTY', 'STYLE NAME', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'LOGO');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLENAME = asignar(1, 'PIZZA PARTY TEE');
	$STYLE = asignar(2, 'A7685JAC1');
	$COLOR = asignar(3, 'White');
	$SIZE = asignar(4, 'XXL');
	$UPC = asignar(5, '190121165594');
	$LOGO = asignar(6, 'DYLANS CANDY BAR');

	// Creacion del formato
	formato(169, 300, 255, 255, 255);

	agujero(85, 25);
	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('arialnb.ttf');

	// Introducimos los datos
	texto($LOGO, 0, 58, 1, 0, $arialNBold, $black, 10, 0, 0);

	texto($STYLENAME, 0, 78, 1, 0, $arialNBold, $black, 10, 0, 0);

	texto('Style: ' . $STYLE, 0, 95, 1, 0, $arialNBold, $black, 10, 0, 0);
	texto($COLOR, 0, 115, 1, 0, $arialNBold, $black, 10, 0, 0);

	texto($SIZE, 0, 285, 1, 0, $arialBold, $black, 14, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 14, 108, 1.2, 120, 'UPC');

	barcodeTexto(3, 0, 1.5, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
