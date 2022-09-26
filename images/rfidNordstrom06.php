<?php //                     1        2        3      4       5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'AT16720-003');
	$COLOR = asignar(2, 'SAGE');
	$SIZE = asignar(3, 'XL');
	$UPC = asignar(4, '840196210803');
	$PRICE = asignar(5, '$256.00');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNarrowBold = fuente('arialnb.ttf');
	$logo = fuente('EPC_Logo.ttf');
	$lush_logo = fuente('LUSH_Logo.ttf');
	//$nordLogo = fuente('n.ttf');

	// Introducimos los datos
	agujero(75, 25);
    // Ticket was approved without NORDSTROM Logo 2/18/2021 by Greg Ward
	texto('E', 110, 30, 0, 0, $logo, $black, 23, 0, 0);
	texto('L', 0, 80, 1, 0, $lush_logo, $black, 14, 0, 0);

	If (strlen($STYLE) < 18) {
		texto($STYLE, 16, 106, 0, 0, $arialBold, $black, 9, 0, 0);
	} else {
		texto($STYLE, 16, 106, 0, 0, $arialNarrowBold, $black, 9, 0, 0);
	}

	If (strlen($COLOR) < 18) {
		texto($COLOR, 16, 124, 0, 0, $arialBold, $black, 9, 0, 0);
	} else {
		texto($COLOR, 16, 124, 0, 0, $arialNarrowBold, $black, 9, 0, 0);
	}

	texto('Size: '.$SIZE, 16, 236, 0, 0, $arialBold, $black, 11, 0, 0);
	//perforacion(150,325,300);
	texto('MSRP', 16, 316, 0, 0, $arialBold, $black, 10, 0, 0);
	texto($PRICE, 0, 316, 2, 18, $arialNarrowBold, $black, 11, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 18, 140, 1, 42, 'UPC');

	barcodeTexto(2, 0,  6, 0, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
