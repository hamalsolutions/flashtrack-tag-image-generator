<?php //    1      2      3            4      5      6
$correctos = array('QTY', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$SIZE = asignar(1, 'Small');
	$UPC = asignar(2, '190371579769');
	$PRICE = asignar(3, '12.99');

	// Creacion del formato
	formato(169, 300, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	agujero(84, 25);
	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('arialnb.ttf');

	// Introducimos los datos

	texto('Size:', 10, 208, 0, 0, $arialBold, $black, 8, 0, 0);
	texto($SIZE, 40, 213, 0, 0, $arialBold, $black, 18, 0, 0);

	texto($PRICE, 0, 283, 1, 0, $arialNBold, $black, 16, 0, 1);

	perforacion();

	// Creacion del Barcode
	barcode($UPC, 8, 60, 1.3, 98, 'UPC');

	barcodeTexto(1, 0, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
