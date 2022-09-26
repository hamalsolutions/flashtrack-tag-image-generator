<?php //   1       2      3      4      5      6
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE', 'FIXTURE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'M542192V');
	$COLOR = asignar(2, 'OFF WHITE');
	$SIZE = asignar(3, '0');
	$UPC = asignar(4, '661414490599');
	$PRICE = asignar(5, '$59.00');
	$FIXTURE = asignar(6, 'DAY TIME');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	//$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arial70Bold = fuente('Arial_70_Bold.ttf');
	$arialNB = fuente('arialnb.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos

	agujero(75, 25);

	texto('E', 100, 34, 2, 10, $logo, $black, 22, 0, 0);

	if (strlen($STYLE) < 9) {
		texto($STYLE, 10, 85, 0, 0, $arialNB, $black, 9, 0, 0);

	} else {
		texto($STYLE, 10, 85, 0, 0, $arial70Bold, $black, 9, 0, 0);
	}

	if (strlen($COLOR) < 9) {
		texto($COLOR, 0, 85, 2, 10, $arialNB, $black, 9, 0, 0);

	} else {
		texto($COLOR, 0, 85, 2, 10, $arial70Bold, $black, 9, 0, 0);

	}

	// texto($COLOR,0,85,2,10,$arial,$black,10,0,0);

	texto($FIXTURE, 0, 218, 1, 0, $arialNB, $black, 9, 0, 0);

	texto($SIZE, 0, 269, 1, 0, $arialNB, $black, 18, 0, 0);

	texto($PRICE, 0, 300, 1, 0, $arialNB, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 18, 95, 1, 60, 'UPC');

	barcodeTexto(2, -1, 5, 0, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
