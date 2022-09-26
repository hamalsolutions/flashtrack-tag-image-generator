<?php //    1       2      3       4       5         6      7
$correctos = array('QTY', 'GENDER', 'SIZE', 'STYLE', 'COLOR', 'MATERIAL', 'UPC', 'MSRP');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$GENDER = asignar(1, 'MEN');
	$SIZE = asignar(2, 'M');
	$STYLE = asignar(3, 'ALDEN LS POPLIN');
	$COLOR = asignar(4, 'HEATHER GRAY');
	$MATERIAL = asignar(5, '10018969');
	$UPC = asignar(6, '889359164584');
	$MSRP = asignar(7, '49.95');

	// Creacion del formato
	formato(125, 163, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	// $arial = fuente('arial.ttf');
	$arialNB = fuente('arialnb.ttf');
	$arialBold = fuente('arialbd.ttf');
	$eurostile = fuente('eurosti.ttf');

	// Introducimos los datos
	texto($GENDER, 10, 20, 0, 0, $arialBold, $black, 7, 0, 0);

	texto($SIZE, 0, 20, 2, 10, $arialBold, $black, 10, 0, 0);

	texto($STYLE, 10, 40, 0, 0, $arialNB, $black, 7, 0, 0);

	texto($COLOR, 10, 60, 0, 0, $eurostile, $black, 9, 0, 0);

	lineaHorizontal(5, 66, 115);

	texto($MATERIAL, 10, 78, 0, 0, $eurostile, $black, 7, 0, 0);
	perforacion(125, 163, 140);
	texto('MSRP', 10, 155, 0, 0, $eurostile, $black, 6.5, 0, 0);
	texto($MSRP, 0, 155, 2, 10, $eurostile, $black, 9, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 6, 85, 1, 34, 'UPC');

	barcodeTexto(1, 0, -1, 4, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>