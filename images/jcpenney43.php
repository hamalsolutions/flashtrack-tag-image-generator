<?php //   1       2     3       4      5         6         7     8
$correctos = array('QTY', 'COLOR', 'SIZE', 'STYLE', 'UPC', 'PRICE', 'GROUP', 'SUB', 'LOT');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$COLOR = asignar(1, 'BLACK');
	$SIZE = asignar(2, 'M');
	$STYLE = asignar(3, 'FY23405001');
	$UPC = asignar(4, '797130589795');
	$PRICE = asignar(5, '90.00');
	$GROUP = asignar(6, 'DRESSY');
	$SUB = asignar(7, '221');
	$LOT = asignar(8, '2844');

	// Creacion del formato
	formato(169, 300, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNarrow = fuente('arialn.ttf');
	$arialNB = fuente('arialnb.ttf');

	agujero(85, 25);
	// Introducimos los datos

	texto('STYLE', 10, 55, 0, 0, $arial, $black, 9, 0, 0);
	if (strlen($STYLE) < 13) {
		texto($STYLE, 10, 71, 0, 0, $arialBold, $black, 8.5, 0, 0);
	} else {
		texto($STYLE, 10, 71, 0, 0, $arialNB, $black, 8.5, 0, 0);
	}

	texto('COLOR', 0, 55, 2, 8, $arial, $black, 9, 0, 0);
	if (strlen($COLOR) < 12) {
		texto($COLOR, 0, 71, 2, 7, $arialBold, $black, 8, 0, 0);
	} else {
		texto($COLOR, 0, 71, 2, 7, $arialNB, $black, 8.5, 0, 0);
	}

	texto('SUB ' . $SUB . '-' . 'LOT ' . $LOT, 0, 92, 1, 0, $arialBold, $black, 8, 0, 0);

	if (strlen($GROUP) < 19) {
		parrafo('GROUP: ' . $GROUP, 0, 118, 1, 0, $arialBold, $black, 9, 0, 20, 14);
	} else {
		parrafo('GROUP: ' . $GROUP, 0, 112, 1, 0, $arialBold, $black, 9, 0, 20, 14);
	}

	//texto('GROUP: '.$GROUP,0,118,1,0,$arial,$black,9,0,0);

	texto('Size ' . $SIZE, 0, 234, 1, 0, $arialBold, $black, 12, 0, 0);

	perforacion(169, 300, 256);
	texto($PRICE, 0, 284, 1, 0, $arialBold, $black, 16, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 9, 104, 1.3, 96, 'UPC');

	barcodeTexto(2, -1, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
