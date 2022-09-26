<?php //                    1         2       3       4           5            6
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'SIZE', 'COMPARE PRICE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, '147234');
	$COLOR = asignar(2, 'Black');
	$UPC = asignar(3, '840611135179');
	$SIZE = asignar(4, 'ONE SIZE');
	$COMPARE_PRICE = asignar(5, '70.00');
	$PRICE = asignar(6, '39.99');

	// Creacion del formato
	formato(169, 300, 255, 255, 255);
	agujero(85, 25);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialBoldSlash = fuente('Arial_Slash_bld.ttf');
	$arialNBold = fuente('arialnb.ttf');
	//$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	if (strlen($STYLE) < 10) {
		texto($STYLE, 10, 50, 0, 0, $arialBold, $black, 8, 0, 0);
	} else {
		texto($STYLE, 10, 50, 0, 0, $arialNBold, $black, 8, 0, 0);
	}

	if (strlen($COLOR) < 15) {
		texto($COLOR, 0, 50, 2, 10, $arialBold, $black, 8, 0, 0);
	} else {
		texto($COLOR, 0, 50, 2, 10, $arialNBold, $black, 8, 0, 0);
	}

	texto($SIZE, 0, 200, 1, 0, $arialBold, $black, 12, 0, 0);

	texto('COMPARE AT:', 14, 225, 0, 0, $arialNBold, $black, 5.5, 0, 0);

	$COMPAREPRICE = str_replace('$', '', $COMPARE_PRICE);
	$COMPARE = ' $' . $COMPAREPRICE . ' '; // added the spaces at the begining and at the end to extend the Slash
	texto($COMPARE, 65, 227, 0, 0, $arialBoldSlash, $black, 10, 0, 0);

	perforacion(169, 300, 254);

	texto($PRICE, 0, 285, 2, 20, $arialBold, $black, 12, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 12, 50, 1.25, 120, 'UPC');

	barcodeTexto(3, -1, -1, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
