<?php //                     1        2        3      4
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, '123456789');
	$COLOR = asignar(2, 'BLK/WHT');
	$SIZE = asignar(3, 'XL');
	$UPC = asignar(4, '730679612586');

	// Creacion del formato
	formato(125, 300, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNarrowBold = fuente('arialnb.ttf');

	// Introducimos los datos

	agujero(63, 25);

	texto('STYLE', 10, 60, 0, 0, $arialBold, $black, 6, 0, 0);
	If (strlen($STYLE) < 10) {
		texto($STYLE, 10, 75, 0, 0, $arialBold, $black, 6, 0, 0);
	} else {
		texto($STYLE, 10, 75, 0, 0, $arialNarrowBold, $black, 9, 0, 0);
	}

	texto('COLOR', 0, 60, 2, 10, $arialBold, $black, 6, 0, 0);
	If (strlen($STYLE) < 10) {
		texto($COLOR, 0, 75, 2, 10, $arialBold, $black, 6, 0, 0);
	} else {
		texto($COLOR, 0, 75, 2, 10, $arialNarrowBold, $black, 6, 0, 0);
	}

	texto('SIZE:  ' . $SIZE, 0, 112, 1, 0, $arialNarrowBold, $black, 7, 0, 0);

	//texto($PRICE, 0, 314, 1, 0, $arial, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 6, 140, 1, 76, 'UPC');

	barcodeTexto(2, 0, -2, 7, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
