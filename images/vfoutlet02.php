<?php //                     1        2           3          4       5           6            7
$correctos = array('QTY', 'STYLE', 'COLOR', 'DESCRIPTION', 'SIZE', 'UPC', 'COMPARE PRICE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, '2429BMVX');
	$COLOR = asignar(2, 'BLK');
	$DESCRIPTION = asignar(3, 'SPLICED OTTMN DRESS');
	$SIZE = asignar(4, 'XS');
	$UPC = asignar(5, '887840031889');
	$COMPARE = asignar(6, '$36.00');
	$PRICE = asignar(7, '$18.00');

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

	texto($STYLE, 15, 60, 0, 0, $arial, $black, 9, 0, 0);

	texto($COLOR, 0, 60, 2, 15, $arial, $black, 9, 0, 0);

	texto($DESCRIPTION, 0, 80, 1, 0, $arial, $black, 6, 0, 0);

	texto($SIZE, 0, 110, 1, 0, $arialBold, $black, 12, 0, 0);

	texto('Compare at:', 10, 230, 0, 0, $arialNBold, $black, 7, 0, 0);

	texto($COMPARE, 40, 248, 0, 0, $arial, $black, 8, 0, 1);

	texto('You Pay:', 10, 270, 0, 0, $arialBold, $black, 8, 0, 0);

	texto($PRICE, 34, 289, 0, 0, $arialNBold, $black, 11, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 9, 98, 1.3, 94, 'UPC');
	barcodeTexto(3, 0, -1, 7, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
