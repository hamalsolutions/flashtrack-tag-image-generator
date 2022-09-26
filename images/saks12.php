<?php //    1       2       3      4     5           6           7        8
$correctos = array('QTY', 'DEPT', 'STYLE', 'COLOR', 'UPC', 'SIZE', 'COMPARE PRICE', 'PRICE', 'SAVINGS');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DEPT = asignar(1, '0923');
	$STYLE = asignar(2, '3025MK');
	$COLOR = asignar(3, 'HEATHER');
	$UPC = asignar(4, '841445143484');
	$SIZE = asignar(5, 'XS');
	$COMPAREPRICE = asignar(6, '$64.00');
	$PRICE = asignar(7, '$29.99');
	//$SAVINGS = asignar(8,'53% Savings');
	$SAVINGS = asignar(8, '53%');
	// Creacion del formato
	formato(150, 300, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialBoldSlash = fuente('Arial_Slash_bld.ttf');
	$arialNarrow = fuente('arialn.ttf');

	// Introducimos los datos
	agujero(75, 25);

	texto($DEPT, 0, 62, 1, 0, $arial, $black, 8, 0, 0);

	if (strlen($STYLE) > 8) {
		texto($STYLE, 8, 84, 0, 0, $arialNarrow, $black, 8.5, 0, 0);

	} else {
		texto($STYLE, 8, 84, 0, 0, $arial, $black, 8, 0, 0);
	}

	if (strlen($COLOR) > 6) {
		texto($COLOR, 0, 84, 2, 5, $arialNarrow, $black, 8.5, 0, 0);

	} else {
		texto($COLOR, 0, 84, 2, 5, $arial, $black, 8, 0, 0);
	}

	texto($SIZE, 0, 208, 1, 0, $arialBold, $black, 9, 0, 0);

	texto('MARKET PRICE', 0, 230, 1, 0, $arial, $black, 8, 0, 0);

	texto($COMPAREPRICE, 0, 248, 1, 0, $arialBoldSlash, $black, 9, 0, 1);

	texto($PRICE, 0, 266, 1, 0, $arialBold, $black, 11, 0, 1);

	texto(suffix($SAVINGS, ' Savings'), 0, 289, 1, 0, $arial, $black, 8, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 7, 90, 1.2, 72, 'UPC');
	barcodeTexto(3, -0.8, -1, 9, 'arialbd.ttf');

	require_once('../includes/footer.php');
}
?>
