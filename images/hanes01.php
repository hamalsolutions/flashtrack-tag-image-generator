<?php //                     1       2       3         4            5
$correctos = array('QTY', 'SIZE', 'STYLE', 'UPC', 'COLOR CODE', 'COLOR NAME');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$SIZE = asignar(1, '1X');
	$STYLE = asignar(2, '0141');
	$UPC = asignar(3, '781013260789');
	$COLORCODE = asignar(4, 'WA6');
	$COLORNAME = asignar(5, 'IND DENIM');

	// Creacion del formato
	formato(200, 150, 255, 255, 255);
	setAsSticker(12);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('Arial_60_Bold.ttf');
	// Introducimos los datos
	texto('STYLE', 12, 20, 0, 0, $arialBold, $black, 12, 0, 0);
	texto('SIZE', 12, 40, 0, 0, $arialBold, $black, 12, 0, 0);
	texto('COLOR', 12, 60, 0, 0, $arialBold, $black, 12, 0, 0);
	texto($STYLE, 92, 20, 0, 0, $arialBold, $black, 12, 0, 0);
	texto($SIZE, 92, 40, 0, 0, $arialBold, $black, 12, 0, 0);
	texto($COLORCODE, 92, 60, 0, 0, $arialBold, $black, 12, 0, 0);
	IF (strlen($COLORNAME) > 10) {
		texto($COLORNAME, 92, 76, 0, 0, $arialNBold, $black, 12, 0, 0);
	} else {
		texto($COLORNAME, 92, 76, 0, 0, $arialBold, $black, 12, 0, 0);
	}

	// Creacion del Barcode
	barcode($UPC, 15, 59, 1.4, 74, 'UPC');
	barcodeTexto(1, 0, -1, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>