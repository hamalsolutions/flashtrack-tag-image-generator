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
	formato(150, 100, 255, 255, 255);
	setAsSticker(10);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arialBold = fuente('arialbd.ttf');
	//$arialSmallDollar = fuente('Arial_Small_Dollar.ttf');

	// Introducimos los datos
	texto($STYLE, 8, 14, 0, 0, $arialBold, $black, 9, 0, 0);

	texto($SIZE, 0, 14, 2, 8, $arialBold, $black, 9, 0, 0);

	texto($COLOR, 10, 28, 0, 0, $arialBold, $black, 9, 0, 0);

	$start = texto($PRICE, 0, 94, 1, 0, $arialBold, $black, 9, 0, 0);
	texto('$', $start - 4, 91, 0, 0, $arialBold, $black, 6, 0, 0);

	//texto($PRICE,0,94,1,0,$arialSmallDollar,$black,9,0,1);

	// Creacion del Barcode
	barcode($UPC, 18, 32, 1, 39, 'UPC');

	barcodeTexto(1, -1, -2, 3, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
