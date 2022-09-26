<?php //   1      2       3        4      5      6      7           8         9         10
$correctos = array('QTY', 'COLOR', 'SIZE', 'STYLE', 'SEASON', 'DEPT', 'UPC', 'CLASS', 'VENDOR STYLE', 'MSRP', 'RETAIL PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	//$COLOR = asignar(1,'OATMEAL');
	$COLOR = asignar(1, 'WROUGHT IRON');
	$SIZE = asignar(2, '1X');
	$STYLE = asignar(3, '12993546');
	$SEASON = asignar(4, 'S19');
	$DEPT = asignar(5, '175');
	$UPC = asignar(6, '193190025189');
	$CLASS = asignar(7, '');
	$VENSTYLE = asignar(8, 'XC7K05BCK');
	$MSRP = asignar(9, '27.99');
	$RETAIL = asignar(10, '13.50');

	// Creacion del formato
	formato(127, 254, 255, 255, 255);
	agujero(62, 27);
	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNB = fuente('arialnb.ttf');

	// Introducimos los datos
	texto('NAVY EXCHANGE', 0, 18, 1, 0, $arialNB, $black, 8, 0, 0);

	texto('Dept', 8, 50, 0, 0, $arial, $black, 6.5, 0, 0);
	texto($DEPT, 8, 63, 0, 0, $arial, $black, 6, 0, 0);

	texto('Class', 0, 50, 1, 0, $arial, $black, 6.5, 0, 0);
	texto($CLASS, 0, 63, 1, 0, $arial, $black, 6, 0, 0);

	texto('Season', 90, 50, 0, 0, $arial, $black, 6.5, 0, 0);
	texto($SEASON, 92, 63, 0, 10, $arial, $black, 6, 0, 0);

	texto('Vendor Style', 8, 86, 0, 0, $arial, $black, 6.5, 0, 0);
	texto($VENSTYLE, 8, 98, 0, 0, $arial, $black, 6, 0, 0);

	texto('Style No', 78, 86, 0, 0, $arial, $black, 6.5, 0, 0);
	texto($STYLE, 78, 98, 0, 0, $arial, $black, 6, 0, 0);

	texto('Size', 8, 118, 0, 0, $arial, $black, 6.5, 0, 0);
	texto($SIZE, 8, 130, 0, 0, $arialNB, $black, 9, 0, 0);

	texto('Color', 94, 118, 0, 0, $arial, $black, 6.5, 0, 0);
	texto($COLOR, 0, 130, 2, 8, $arial, $black, 6, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 7, 138, 1, 32, 'UPC');

	barcodeTexto(-1, 0, 0, 0, 'arial.ttf');

	texto(formatizarTexto('0 1 2 3 4 5 6 7 8 9 0 1', $UPC), 0, 182, 1, 0, $arial, $black, 7, 0, 0);

	texto($RETAIL, 0, 205, 1, 0, $arialBold, $black, 10, 0, 1);

	texto('MSRP', 0, 225, 1, 0, $arial, $black, 8, 0, 0);

	texto($MSRP, 0, 242, 1, 0, $arial, $black, 8, 0, 1);

	require_once('../includes/footer.php');
}
?>
