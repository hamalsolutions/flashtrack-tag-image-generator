<?php //   1      2       3       4       5      6      7       8
$correctos = array('QTY', 'DEPT', 'CLASS', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DEPT = asignar(1, '1839');
	$CLASS = asignar(2, '443');
	$STYLE = asignar(3, 'CHN1446001');
	$COLOR = asignar(4, 'WHITE');
	$SIZE = asignar(5, 'S');
	$UPC = asignar(6, '887840084328');
	$PRICE = asignar(7, '$120.00');

	// Creacion del formato
	formato(169, 300, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');

	agujero(85, 25);
	// Introducimos los datos

	texto('DEPT ' . $DEPT, 10, 52, 0, 0, $arial, $black, 9, 0, 0);

	texto('CL ' . $CLASS, 0, 53, 2, 10, $arial, $black, 9, 0, 0);

	texto('STYLE# ' . $STYLE, 10, 74, 0, 0, $arial, $black, 9, 0, 0);

	texto('COLOR: ' . $COLOR, 10, 196, 0, 0, $arial, $black, 9, 0, 0);

	texto('SIZE: ' . $SIZE, 10, 216, 0, 0, $arial, $black, 12, 0, 0);

	lineaHorizontal(5, 84, 158, 0, 2);

	perforacion(169, 300, 250);

	texto($PRICE, 0, 280, 1, 0, $arialBold, $black, 16, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 21, 88, 1.1, 75, 'UPC');

	barcodeTexto(3, 0, 0, 7, 'arialbd.ttf');

	require_once('../includes/footer.php');
}
?>
