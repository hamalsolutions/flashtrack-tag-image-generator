<?php //      1           2        3       4      5       6       7     8       9      10       11
$correctos = array('QTY', 'SIZE-ALPHA', 'SIZE-NUM', 'COLOR', 'STYLE', 'DEPT', 'CLASS', 'ITEM', 'UPC', 'MISC1', 'MISC2', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$SIZEALPHA = asignar(1, 'XS');
	$SIZENUM = asignar(2, '(4/5)');
	$COLOR = asignar(3, 'WHITE');
	$STYLE = asignar(4, 'SK221MAB');
	$DEPT = asignar(5, '032');
	$CLASS = asignar(6, '07');
	$ITEM = asignar(7, '3849');
	$UPC = asignar(8, '490320738491');
	$MISC1 = asignar(9, '');
	$MISC2 = asignar(10, '');
	$PRICE = asignar(11, '$8.99');

	// Creacion del formato
	formato(150, 250, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$timesNewBold = fuente('timesbd.ttf');
	$arialBold = fuente('arialbd.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos

	agujero(75, 25);

	texto('E', 0, 30, 2, 10, $logo, $black, 22, 0, 0);

	texto('SIZE', 0, 48, 1, 0, $timesNewBold, $black, 7, 0, 0);

	texto($SIZEALPHA, 0, 62, 1, 0, $timesNewBold, $black, 10, 0, 0);
	texto($SIZENUM, 0, 78, 1, 0, $timesNewBold, $black, 10, 0, 0);

	texto($COLOR, 10, 98, 0, 0, $timesNewBold, $black, 7, 0, 0);
	texto('STYLE ' . $STYLE, 10, 112, 0, 0, $timesNewBold, $black, 7, 0, 0);
	texto($DEPT, 10, 126, 0, 0, $timesNewBold, $black, 7, 0, 0);
	texto($CLASS, 0, 126, 1, 0, $timesNewBold, $black, 7, 0, 0);
	texto($ITEM, 0, 126, 2, 10, $timesNewBold, $black, 7, 0, 0);
	texto('DEPT                CL                ITEM', 0, 138, 1, 0, $timesNewBold, $black, 7, 0, 0);
	texto($MISC1, 0, 208, 1, 0, $timesNewBold, $black, 7, 0, 0);
	texto($MISC2, 0, 220, 1, 0, $timesNewBold, $black, 7, 0, 0);

	texto($PRICE, 0, 244, 2, 12, $arialBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 18, 145, 1, 30, 'UPC');

	barcodeTexto(2, -1, 5, 0, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
