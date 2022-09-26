<?php //                     1        2       3       4       5         6
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE', 'REMARKS');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'CK5820F56');
	$COLOR = asignar(2, 'BRN');
	$SIZE = asignar(3, '10');
	$UPC = asignar(4, '123456789012');
	$PRICE = asignar(5, '$34.00');
	$REMARKS = asignar(6, 'REMARKS');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos

	agujero(75, 25);

	texto('E', 108, 36, 0, 0, $logo, $black, 24, 0, 0);

	texto($STYLE, 12, 72, 0, 0, $arial, $black, 9, 0, 0);

	texto($COLOR, 12, 101, 0, 0, $arial, $black, 9, 0, 0);

	texto($SIZE, 12, 130, 0, 0, $arial, $black, 9, 0, 0);

	texto($REMARKS, 12, 159, 0, 0, $arial, $black, 9, 0);

	texto($PRICE, 0, 315, 1, 0, $arialBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 18, 180, 1, 60, 'UPC');

	barcodeTexto(3, -1, -3, 5, 'OCR-B_SB.ttf');

	require_once('../includes/footer.php');
}
?>
