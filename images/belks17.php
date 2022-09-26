<?php //             0       1        2       3       4
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'SIZE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, '3CPHG0289BT');
	$COLOR = asignar(2, 'BLACK');
	$UPC = asignar(3, '123456789012');
	$SIZE = asignar(4, 'SMALL');
	// Creacion del formato
	formato(200, 150, 255, 255, 255);
	setAsSticker(12);

	// Colores a usar
	$black = color(0, 0, 0);
	$red = color(255, 0, 0);
	$white = color(255, 255, 255);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBD = fuente('arialbd.ttf');

	// Introducimos los datos
	texto($STYLE, 0, 28, 1, 0, $arialBD, $black, 9, 0, 0);
	texto($SIZE, 0, 120, 1, 0, $arialBD, $black, 9, 0, 0);
	texto($COLOR, 15, 140, 0, 0, $arialBD, $black, 9, 0, 0);
	// Creacion del Barcode
	barcode($UPC, 20, 30, 1.3, 70, 'UPC');

	barcodeTexto(1.5, 0, -6, 6, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
