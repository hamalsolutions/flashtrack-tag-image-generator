<?php //                     1      2        3       4         5          6
$correctos = array('QTY', 'SIZE','SIZE2', 'STYLE', 'UPC', 'COLORCODE', 'COLOR');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$SIZE = asignar(1, '5L');
    $SIZE2 = asignar(2, '16W');
	$STYLE = asignar(3, '30360A');
	$UPC = asignar(4, '781013444516');
	$COLORCODE = asignar(5, '410');
	$COLOR = asignar(6, 'NAVY');

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
	texto('STYLE', 19, 20, 0, 0, $arialBold, $black, 9, 0, 0);
	texto('SIZE', 19, 40, 0, 0, $arialBold, $black, 9, 0, 0);
	texto('COLOR', 19, 70, 0, 0, $arialBold, $black, 9, 0, 0);
	texto($STYLE, 78, 20, 0, 0, $arialBold, $black, 9, 0, 0);
	texto($SIZE, 78, 40, 0, 0, $arialBold, $black, 9, 0, 0);
    texto($SIZE2, 78, 54, 0, 0, $arialBold, $black, 9, 0, 0);
	texto($COLORCODE, 78, 70, 0, 0, $arialBold, $black, 9, 0, 0);
	IF (strlen($COLOR) > 10) {
		texto($COLOR, 78, 84, 0, 0, $arialNBold, $black, 9, 0, 0);
	} else {
		texto($COLOR, 78, 84, 0, 0, $arialBold, $black, 9, 0, 0);
	}
	// Creacion del Barcode
	barcode($UPC, 15, 66, 1.4, 68, 'UPC');
	barcodeTexto(1, 0, -1, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>