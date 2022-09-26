<?php //                     1        2        3      4       5      6      7
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE','PCS','DEPT');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'ND-TR018');
	$COLOR = asignar(2, 'HOT RED');
	$SIZE = asignar(3, 'LARGE');
	$UPC = asignar(4, '000123456074');
	$PRICE = asignar(5, '7.99');
	$PCS = asignar(6, '2 PC');
	$DEPT = asignar(7, '172');
	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNarrowBold = fuente('arialnb.ttf');
	$logo = fuente('EPC_Logo.ttf');
	$brand_logo = fuente('n.ttf');
	//$nordLogo = fuente('n.ttf');

	// Introducimos los datos
	agujero(75, 25);
    // Ticket was approved without NORDSTROM Logo 2/18/2021 by Greg Ward
	texto('E', 110, 34, 0, 0, $logo, $black, 24, 0, 0);
	texto('3', 0, 80, 1, 0, $brand_logo, $black, 11, 0, 0);

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

	texto('DEPT: '.$DEPT, 16, 218, 0, 0, $arialBold, $black, 10, 0, 0);
	texto($PCS, 0, 242, 1, 0, $arialBold, $black, 10, 0, 0);
	texto($SIZE, 16, 264, 0, 0, $arialBold, $black, 10, 0, 0);
	texto($PRICE, 0, 316, 2, 17, $arialNarrowBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 18, 140, 1, 36, 'UPC');
	barcodeTexto(2, 0,  6, 0, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
