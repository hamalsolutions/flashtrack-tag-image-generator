<?php //     1       2       3     4
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato

	$STYLE = asignar(1, '245669LU61');
	$COLOR = asignar(2, 'BLK/GRY');
	$SIZE = asignar(3, '3');
	$UPC = asignar(4, '123456789012');

	// Creacion del formato
	formato(200, 150, 255, 255, 255);
	setAsSticker(10);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');

	// Introducimos los datos

	texto($STYLE, 0, 20, 1, 0, $arial, $black, 10, 0, 0);

	texto($COLOR, 0, 40, 1, 0, $arial, $black, 10, 0, 0);

	texto($SIZE, 0, 60, 1, 0, $arial, $black, 10, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 15, 47, 1.4, 85, 'UPC');

	barcodeTexto(2, -1, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>