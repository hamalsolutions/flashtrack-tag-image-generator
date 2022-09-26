<?php //                     1       2       3       4       5
$correctos = array('QTY', 'STYLE', 'SIZE', 'UPC', 'LOGO', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'DH609DDW1');
	$SIZE = asignar(2, 'M');
	$UPC = asignar(3, '190121199162');
	$LOGO = asignar(4, 'Books A Million');
	$PRICE = asignar(5, '$19.00');

	// Creacion del formato
	formato(169, 300, 255, 255, 255);

	agujero(85, 25);
	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');

	// Introducimos los datos
	texto($LOGO, 0, 58, 1, 0, $arialBold, $black, 12, 0, 0);

	texto('Style:', 10, 95, 0, 0, $arial, $black, 9, 0, 0);
	texto($STYLE, 60, 95, 0, 0, $arial, $black, 9, 0, 0);

	texto('Size:', 10, 118, 0, 0, $arial, $black, 9, 0, 0);
	texto($SIZE, 60, 118, 0, 0, $arial, $black, 9, 0, 0);

	texto($PRICE, 0, 285, 1, 0, $arial, $black, 13, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 14, 110, 1.2, 120, 'UPC');

	barcodeTexto(3, 0, 1.5, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
