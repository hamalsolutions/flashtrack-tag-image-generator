<?php //   1       2       3     4      5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'LOGO');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'DH609DDW1');
	$COLOR = asignar(2, 'CHHT');
	$SIZE = asignar(3, 'XL');
	$UPC = asignar(4, '190121199162');
	$LOGO = asignar(5, 'Stylin');
	// Creacion del formato
	formato(169, 300, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');

	agujero(85, 25);

	// Introducimos los datos
	texto($LOGO, 0, 58, 1, 0, $arialBold, $black, 12, 0, 0);

	texto('Style:', 10, 95, 0, 0, $arial, $black, 9, 0, 0);
	texto($STYLE, 60, 95, 0, 0, $arial, $black, 9, 0, 0);

	texto('Color:', 10, 118, 0, 0, $arial, $black, 9, 0, 0);
	parrafo($COLOR, 60, 118, 0, 0, $arial, $black, 9, 0, 15, 12);

	texto('Size:', 10, 141, 0, 0, $arial, $black, 9, 0, 0);
	texto($SIZE, 60, 141, 0, 0, $arial, $black, 9, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 14, 130, 1.2, 120, 'UPC');

	barcodeTexto(2, 0, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
