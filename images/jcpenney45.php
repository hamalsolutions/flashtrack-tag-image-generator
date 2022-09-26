<?php //    1        2      3      4      5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, '12345678');
	$COLOR = asignar(2, 'WHITE');
	$SIZE = asignar(3, 'SMALL');
	$UPC = asignar(4, '614141999996');
	$PRICE = asignar(5, '12');

	// Creacion del formato
	formato(200, 150, 255, 255, 255);
	setAsSticker(12);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arialBold = fuente('arialbd.ttf');
	//$arialSmallDollar = fuente('Arial_Small_Dollar.ttf');

	// Introducimos los datos
	texto($STYLE, 10, 24, 0, 0, $arialBold, $black, 9, 0, 0);
	texto($SIZE, 0, 24, 2, 10, $arialBold, $black, 9, 0, 0);
	texto($COLOR, 11, 44, 0, 0, $arialBold, $black, 9, 0, 0);

	$start = texto($PRICE, 0, 138, 1, 0, $arialBold, $black, 12, 0, 0);
	texto('$', $start - 6, 136, 0, 0, $arialBold, $black, 8, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 24, 44, 1.25, 60, 'UPC');
	barcodeTexto(1, -1, -2, 3, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
