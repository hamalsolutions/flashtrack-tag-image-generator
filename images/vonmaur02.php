<?php //   1      2     3      4       5        6         7
$correctos = array('QTY', 'SIZE', 'DEPT', 'UPC', 'STYLE', 'COLOR', 'PRICE', 'VENDOR');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	$SIZE = asignar(1, '4');
	$DEPT = asignar(2, '696');
	$UPC = asignar(3, '190121199162');
	$STYLE = asignar(4, 'QC967OCS1');
	$COLOR = asignar(5, 'WHITE');
	$PRICE = asignar(6, '18.00');
	$VENDOR = asignar(7, '235390');

	// Creacion del formato
	formato(169, 300, 255, 255, 255);
	agujero(85, 25);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('arialnb.ttf');

	// Introducimos los datos
	texto('VON MAUR', 0, 60, 1, 0, $arialBold, $black, 10, 0, 0);

	texto($DEPT, 10, 80, 0, 0, $arialNBold, $black, 7.5, 0, 0);
	texto('DEPT', 10, 95, 0, 0, $arial, $black, 7, 0, 0);

	texto($VENDOR, 0, 80, 1, 0, $arialNBold, $black, 7.5, 0, 0);
	texto('VENDOR', 0, 95, 1, 0, $arial, $black, 7, 0, 0);

	texto($STYLE, 0, 80, 2, 10, $arialNBold, $black, 7.5, 0, 0);
	texto('STYLE', 0, 95, 2, 10, $arial, $black, 7, 0, 0);

	texto('COLOR ' . $COLOR, 0, 110, 1, 0, $arialBold, $black, 7, 0, 0);

	texto('SIZE', 0, 125, 1, 0, $arial, $black, 7, 0, 0);

	texto($SIZE, 0, 145, 1, 0, $arialBold, $black, 12, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 13, 128, 1.2, 100, 'UPC');
	barcodeTexto(2, 0, 0, 5, 'arial.ttf');

	texto($PRICE, 0, 285, 1, 0, $arialNBold, $black, 16, 0, 1);

	require_once('../includes/footer.php');
}
?>
