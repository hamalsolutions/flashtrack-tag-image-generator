<?php //                     1           2       3       4        5        6
$correctos = array('QTY','DESCRIPTION','UPC', 'STYLE', 'COLOR', 'SIZE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DESCRIPTION = asignar(1, 'BOMBSHELL SKINN');
	$UPC = asignar(2, '194278258949');
	$STYLE = asignar(3, 'MY17475P');
	$COLOR = asignar(4, '5 POINTS');
	$SIZE = asignar(5, '4');
	$PRICE = asignar(6, '$89.00');


	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNarrowBold = fuente('arialnb.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos

	agujero(75, 25);

	texto('E', 114, 29, 0, 0, $logo, $black, 22, 0, 0);

	If (strlen($DESCRIPTION) < 20) {
		texto($DESCRIPTION, 0, 64, 1, 0, $arialBold, $black, 7, 0, 0);
	} else {
		texto($DESCRIPTION, 0, 64, 1, 0, $arialNarrowBold, $black, 7, 0, 0);
	}

	If (strlen($STYLE) < 8) {
		texto('STYLE: '.$STYLE, 14, 170, 0, 0, $arialBold, $black, 7, 0, 0);
	} else {
		texto('STYLE: '.$STYLE, 14, 170, 0, 0, $arialNarrowBold, $black, 7, 0, 0);
	}

	If (strlen($COLOR) < 8) {
		texto($COLOR, 0, 193, 2, 0, $arialBold, $black, 7, 0, 0);
	} else {
		texto($COLOR, 0, 193, 1, 0, $arialNarrowBold, $black, 7, 0, 0);
	}

	texto($SIZE, 0, 230, 1, 0, $arialBold, $black, 14, 0, 0);

	texto($PRICE, 0, 314, 1, 0, $arialBold, $black, 12, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 18, 74, 1, 68, 'UPC');

	barcodeTexto(2, 0, -3, 7, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
