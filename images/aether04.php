<?php //      1         2       3       4     5      6
$correctos = array('QTY', 'STYLE NAME', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLENAME = asignar(1, 'ATLAS HAT');
	//$STYLENAME = asignar(1, 'MERINO LONG-SLEEVE CREW 1234');
	$STYLE = asignar(2, 'AA1487');
	$COLOR = asignar(3, 'WINTER WHITE');
	$SIZE = asignar(4, 'O/S');
	$UPC = asignar(5, '848239065984');
	//$UPC = asignar(5,'123456789012');
	$PRICE = asignar(6, '$95.00');

	// Creacion del formato
	formato(207, 83, 255, 255, 255, 270);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arialNarrow = fuente('arialn.ttf');
	$arial = fuente('arial.ttf');
	$arial_70BD = fuente('Arial_70_Bold.ttf');
	$arial_60BD = fuente('Arial_60_Bold.ttf');
	$arialNBold = fuente('arialnb.ttf');

	// Creacion del Barcode
	barcode($UPC, 22, 114, 1, 38, 'UPC', 270);
	texto(formatizarTEXTO('123456 123456', $UPC), 113, 76, 0, 0, $arialNarrow, $black, 8, 0, 0);

	// Introducimos los datos
	texto($COLOR, 5, 14, 0, 0, $arialNBold, $black, 7, 0, 0);

	texto($STYLE, 5, 30, 0, 0, $arialNBold, $black, 8, 0, 0);

	if (strlen($STYLENAME) > 19) {
		texto($STYLENAME, 5, 45, 0, 0, $arial_70BD, $black, 7, 0, 0);
	} elseif (strlen($STYLENAME) > 22) {
		texto($STYLENAME, 5, 45, 0, 0, $arial_60BD, $black, 7, 0, 0);
	} else {
		texto($STYLENAME, 5, 45, 0, 0, $arialNBold, $black, 7, 0, 0);
	}

	texto('SIZE: ' . $SIZE, 5, 62, 0, 0, $arialNarrow, $black, 9, 0, 0);

	texto('MSRP:', 5, 78, 0, 0, $arialNarrow, $black, 8, 0, 0);

	texto($PRICE, 34, 78, 0, 0, $arialNarrow, $black, 9, 0, 1);

	require_once('../includes/footer.php');
}
?>
