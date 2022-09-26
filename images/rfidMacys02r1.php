<?php //   1       2      3      4      5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE', 'GROUP NAME');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'J1739CG2');
	//$COLOR = asignar(2, 'BRN');
	$COLOR = asignar(2, 'BLUE/BLACK ANTQ');
	$SIZE = asignar(3, '1');
	$UPC = asignar(4, '614015401310');
	$PRICE = asignar(5, '$49.00');
	$GROUPNAME = asignar(6, 'SLIM STRAIGHT CROPS');
	//$GROUPNAME = asignar(6, 'SLIM STRAIGHT');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arial70 = fuente('Arial_70.ttf');
	$arialBold = fuente('arialbd.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos

	agujero(75, 25);

	texto('E', 100, 37, 0, 0, $logo, $black, 27, 0, 0);
	texto($STYLE, 12, 95, 0, 0, $arial, $black, 11, 0, 0);

	IF (strlen($COLOR)>14) {
		texto($COLOR, 12, 125, 0, 0, $arial70, $black, 12, 0, 0);
	}	else {
		texto($COLOR, 12, 125, 0, 0, $arial, $black, 11, 0, 0);
	}

	texto($SIZE, 12, 155, 0, 0, $arial, $black, 11, 0, 0);

	texto($PRICE, 0, 315, 1, 0, $arialBold, $black, 14, 0, 1);

	if (strlen($GROUPNAME)>15) {
		texto($GROUPNAME, 0, 280, 1, 0, $arial70, $black, 10, 0, 0);
	} else {
		texto($GROUPNAME, 0, 280, 1, 0, $arialBold, $black, 9, 0, 0);
	}



	// Creacion del Barcode
	barcode($UPC, 18, 180, 1, 60, 'UPC');

	barcodeTexto(3, -1, -3, 5, 'OCR-B_SB.ttf');

	require_once('../includes/footer.php');
}
?>
