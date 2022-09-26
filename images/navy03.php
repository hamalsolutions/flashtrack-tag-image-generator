<?php //   1      2        3           4          5      6       7      8      9
$correctos = array('QTY', 'DEPT', 'CLASS', 'SEASON', 'VENDOR STYLE', 'STYLE', 'SIZE', 'COLOR', 'UPC', 'PRICE',);
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	$DEPT = asignar(1, '173');
	$CLASS = asignar(2, '');
	$SEASON = asignar(3, '');
	$VENDSTYLE = asignar(4, 'JGBJIB2326');
	$STYLE = asignar(5, '');
	$SIZE = asignar(6, 'MED');
	$COLOR = asignar(7, 'BLACK');
	$UPC = asignar(8, '619720947351');
	$PRICE = asignar(9, '19.99');
	// Creacion del formato
	formato(150, 275, 255, 255, 255);

	agujero(75, 25);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');

	// Introducimos los datos
	texto('NAVY EXCHANGE', 0, 56, 1, 0, $arial, $black, 9, 0, 0);

	texto('Dept', 10, 78, 0, 0, $arial, $black, 6, 0, 0);
	texto($DEPT, 10, 90, 0, 0, $arial, $black, 7, 0, 0);

	texto('Class', 0, 78, 1, 0, $arial, $black, 6, 0, 0);
	texto($CLASS, 0, 90, 1, 0, $arial, $black, 7, 0, 0);

	texto('Season', 112, 78, 0, 0, $arial, $black, 6, 0, 0);
	texto($SEASON, 0, 90, 2, 10, $arial, $black, 7, 0, 0);

	texto('Vendor Style', 10, 110, 0, 0, $arial, $black, 6, 0, 0);
	texto($VENDSTYLE, 10, 124, 0, 0, $arial, $black, 8, 0, 0);

	texto('Style No', 109, 110, 0, 0, $arial, $black, 6, 0, 0);
	texto($STYLE, 0, 124, 2, 9, $arial, $black, 8, 0, 0);

	texto('Size', 10, 144, 0, 0, $arial, $black, 6, 0, 0);
	texto($SIZE, 10, 156, 0, 0, $arial, $black, 8, 0, 0);

	texto('Color', 120, 144, 0, 0, $arial, $black, 6, 0, 0);
	texto($COLOR, 0, 156, 2, 8, $arial, $black, 8, 0, 0);

	texto(formatizarTexto('0         12345       67890        1', $UPC), 0, 230, 1, 0, $arial, $black, 8, 0, 0);

	texto($PRICE, 0, 260, 1, 0, $arialBold, $black, 12, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 13, 158, 1.1, 64, 'UPC');

	barcodeTexto(-1, 0, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
