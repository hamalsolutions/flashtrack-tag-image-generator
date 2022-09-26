<?php //    1     2       3      4      5        6          7           8           9
$correctos = array('QTY', 'PO', 'STYLE', 'COLOR', 'DEPT', 'UPC', 'GROUP NAME', 'SIZE', 'COMPARE PRICE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$PO = asignar(1, 'TEMP-022019');
	$STYLE = asignar(2, 'SB4147');
	$COLOR = asignar(3, 'BLUSH/BLACK-HHXXXXX');
	$DEPT = asignar(4, '362');
	$UPC = asignar(5, '619720871595');
	$GROUPNAME = asignar(6, 'BIG GIRLS');
	$SIZE = asignar(7, '7');
	$COMPARE = asignar(8, '60.00');
	$PRICE = asignar(9, '17.97');

	// Creacion del formato
	formato(170, 300, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);
	agujero(85, 25);
	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialNarrow = fuente('arialn.ttf');
	$arialBold = fuente('arialbd.ttf');

	// Introducimos los datos
	texto('BEALLS', 0, 54, 1, 0, $arialBold, $black, 14, 0, 0);

	texto('PO#  ' . $PO, 0, 72, 1, 0, $arial, $black, 8, 0, 0);

	$STYLECOLOR = $STYLE . '   ' . $COLOR;

	if (strlen($STYLECOLOR) < 24) {
		texto($STYLECOLOR, 0, 90, 1, 0, $arial, $black, 8, 0, 0);
	} else {
		texto($STYLECOLOR, 0, 90, 1, 0, $arialNarrow, $black, 8.5, 0, 0);
	}

	texto('DEPT #  ' . $DEPT, 0, 109, 1, 0, $arial, $black, 8, 0, 0);

	texto($GROUPNAME, 0, 196, 1, 0, $arialBold, $black, 10, 0, 0);

	texto($SIZE, 0, 222, 1, 0, $arial, $black, 12, 0, 0);

	texto('COMPARE   $' . $COMPARE, 0, 240, 1, 0, $arialBold, $black, 8, 0, 0);

	texto($PRICE, 0, 268, 1, 0, $arialBold, $black, 16, 0, 1);

	texto('BEV', 0, 292, 1, 0, $arialBold, $black, 10, 0, 0);
	// Creacion del Barcode
	barcode($UPC, 15, 98, 1.2, 68, 'UPC');

	barcodeTexto(3, -1, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
