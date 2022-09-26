<?php //  1       2       3        4        5      6
$correctos = array('QTY', 'STYLE', 'DEPT', 'CLASS', 'ITEM', 'UPC', 'COLOR', 'SIZE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, '4AN91990T');
	$DEPT = asignar(2, '031');
	$CLASS = asignar(3, '13');
	$ITEM = asignar(4, '3024');
	$UPC = asignar(5, '191159031479');
	$COLOR = asignar(6, 'NAVY');
	$SIZE = asignar(7, '2T');

	// Creacion del formato
	formato(150, 150, 255, 255, 255);
	setAsSticker(13);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');

	// Introducimos los datos
	texto('SIZE', 0, 15, 1, 0, $arialBold, $black, 8, 0, 0);

	texto($SIZE, 0, 30, 1, 0, $arialBold, $black, 8, 0, 0);

	texto($STYLE, 12, 45, 0, 0, $arialBold, $black, 8, 0, 0);
	texto($COLOR, 0, 45, 2, 12, $arialBold, $black, 8, 0, 0);

	texto('DEPT           CL             ITEM', 0, 58, 1, 0, $arialBold, $black, 7, 0, 0);

	texto($DEPT, 16, 70, 0, 0, $arialBold, $black, 8, 0, 0);

	texto($CLASS, 0, 70, 1, 0, $arialBold, $black, 8, 0, 0);

	texto($ITEM, 0, 70, 2, 14, $arialBold, $black, 8, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 12, 70, 1.1, 60, 'UPC');

	barcodeTexto(2, 0, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>