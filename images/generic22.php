<?php //   1       2       3     4     5       6
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'LOGO');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'DJ260DBY1');
	$COLOR = asignar(2, 'CHARCOAL');
	$SIZE = asignar(3, 'XL');
	$UPC = asignar(4, '190121263757');
	$LOGO = asignar(5, 'HAUTELOOK');
	// Creacion del formato
	formato(169, 300, 255, 255, 255);

	agujero(85, 25);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');

	// Introducimos los datos

	texto($LOGO, 0, 56, 1, 0, $arialBold, $black, 13, 0, 0);

	texto($STYLE, 0, 88, 1, 0, $arial, $black, 10, 0, 0);

	texto($COLOR, 0, 120, 2, 15, $arial, $black, 10, 0, 0);

	texto('Size: ' . $SIZE, 30, 214, 0, 0, $arial, $black, 11, 0, 0);

	// perforacion();

	// Creacion del Barcode
	barcode($UPC, 13, 120, 1.2, 60, 'UPC');

	barcodeTexto(2, 0, -5, 8, 'cour.ttf');

	require_once('../includes/footer.php');
}
?>