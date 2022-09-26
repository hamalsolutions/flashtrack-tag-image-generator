<?php //   1      2       3      4     5           6               7
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'DEPT', 'SIZE', 'RETAIL PRICE', 'SPECIAL PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	$STYLE = asignar(1, 'A01234567890123');
	$COLOR = asignar(2, 'BLACK');
	$UPC = asignar(3, '429572416994');
	$DEPT = asignar(4, '012');
	$SIZE = asignar(5, 'S');
	$RETAILPRICE = asignar(6, '$120.00');
	$SPECIALPRICE = asignar(7, '$99.00');
	// Creacion del formato
	formato(169, 300, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$LOGO = fuente('Nordstrom_Logo.ttf');
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');

	// Introducimos los datos
	agujero(85, 25);

	texto('N', 0, 65, 1, 0, $LOGO, $black, 26, 0, 0);

	texto($STYLE, 0, 90, 2, 15, $arial, $black, 8, 0, 0);

	texto($COLOR, 0, 109, 2, 15, $arial, $black, 8, 0, 0);

	texto('Size:', 15, 194, 0, 0, $arial, $black, 12, 0, 0);
	texto($SIZE, 58, 194, 0, 0, $arial, $black, 12, 0, 0);

	texto('Dept:', 15, 217, 0, 0, $arial, $black, 12, 0, 0);
	texto($DEPT, 58, 217, 0, 0, $arial, $black, 12, 0, 0);

	perforacion(169, 300, 250);

	perforacion(169, 300, 275);

	texto($RETAILPRICE, 0, 270, 2, 7, $arialBold, $black, 10, 0, -1);

	texto('Anniversary', 15, 292, 0, 0, $arialBold, $black, 10, 0, 0);
	texto($SPECIALPRICE, 0, 292, 2, 7, $arialBold, $black, 10, 0, -1);

	texto(formatizarTexto('0        12345       67890        1', $UPC), 0, 163, 1, 0, $arial, $black, 8, 0, 0);
	// Creacion del Barcode
	barcode($UPC, 13, 101, 1.2, 55, 'UPC');

	barcodeTexto(-1, 0, 0, 6, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
