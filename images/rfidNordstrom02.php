<?php /** @noinspection PhpRedundantClosingTagInspection */ //                     1        2        3      4       5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'CL1140PS');
	$COLOR = asignar(2, 'IVY');
	$SIZE = asignar(3, 'OS');
	$UPC = asignar(4, '843831173464');
	$PRICE = asignar(5, '');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNarrowBold = fuente('arialnb.ttf');
	$logo = fuente('EPC_Logo.ttf');
	$nordLogo = fuente('n.ttf');

	// Introducimos los datos
	agujero(75, 25);

	texto('E', 110, 30, 0, 0, $logo, $black, 23, 0, 0);
	texto('1', 0, 70, 1, 0, $nordLogo, $black, 12, 0, 0);

	If (strlen($STYLE) < 18) {
		texto($STYLE, 16, 113, 0, 0, $arialBold, $black, 8.5, 0, 0);
	} else {
		texto($STYLE, 16, 113, 0, 0, $arialNarrowBold, $black, 8.5, 0, 0);
	}

	If (strlen($COLOR) < 18) {
		texto($COLOR, 16, 136, 0, 0, $arialBold, $black, 8, 0, 0);
	} else {
		texto($COLOR, 16, 136, 0, 0, $arialNarrowBold, $black, 8, 0, 0);
	}

	texto('Size: '.$SIZE, 16, 160, 0, 0, $arialNarrowBold, $black, 10.5, 0, 0);
	//perforacion(150,325,300);
	texto($PRICE, 0, 319, 2, 18, $arialNarrowBold, $black, 10.5, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 18, 182, 1, 42, 'UPC');

	barcodeTexto(2, 0, -2, 7, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
