<?php //                     1        2        3      4       5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'CB1528BM');
	$COLOR = asignar(2, 'TAN');
	$SIZE = asignar(3, 'OS');
	$UPC = asignar(4, '840196210803');
	$PRICE = asignar(5, '$258.00');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNarrowBold = fuente('arialnb.ttf');
	$logo = fuente('EPC_Logo.ttf');
	//$nordLogo = fuente('n.ttf');

	// Introducimos los datos
	agujero(75, 25);
    // Ticket was approved without NORDSTROM Logo 2/18/2021 by Greg Ward
	texto('E', 110, 30, 0, 0, $logo, $black, 23, 0, 0);
	//texto('1', 0, 70, 1, 0, $nordLogo, $black, 12, 0, 0);

	If (strlen($STYLE) < 18) {
		texto($STYLE, 10, 94, 1, 0, $arialBold, $black, 8.5, 0, 0);
	} else {
		texto($STYLE, 10, 94, 1, 0, $arialNarrowBold, $black, 8.5, 0, 0);
	}

	If (strlen($COLOR) < 18) {
		texto($COLOR, 0, 110, 2, 18, $arialBold, $black, 8, 0, 0);
	} else {
		texto($COLOR, 0, 110, 2, 18, $arialNarrowBold, $black, 8, 0, 0);
	}

	texto('Size: '.$SIZE, 18, 208, 0, 0, $arialNarrowBold, $black, 10.5, 0, 0);
	//perforacion(150,325,300);
	texto($PRICE, 0, 319, 2, 18, $arialNarrowBold, $black, 10.5, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 18, 124, 1, 42, 'UPC');

	barcodeTexto(2, 0, -2, 7, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
