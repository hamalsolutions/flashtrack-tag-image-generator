<?php //                    1       2       3      4        5        6
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'DEPT', 'SIZE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, '1626YI');
	$COLOR = asignar(2, 'WHITE');
	$UPC = asignar(3, '841445175942');
	$DEPT = asignar(4, '0167');
	$SIZE = asignar(5, 'S');
	$PRICE = asignar(6, '$14.97');

	// Creacion del formato
	formato(169, 300, 255, 255, 255);
	agujero(85, 25);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$logo = fuente('NordstromRack_Logo-10-19-2016.ttf');
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');

	// Introducimos los datos
	//texto('n', 0, 64, 1, 0, $logo, $black, 24, 0, 0);
	texto('n', 0, 56, 1, 0, $logo, $black, 13.5, 0, 0);

	texto($STYLE, 15, 85, 0, 0, $arialBold, $black, 9, 0, 0);

	texto($COLOR, 15, 105, 0, 0, $arialBold, $black, 9, 0, 0);

	texto('DEPT: ' . $DEPT, 15, 190, 0, 0, $arial, $black, 11, 0, 0);

	texto($SIZE, 15, 215, 0, 0, $arial, $black, 14, 0, 0);

	texto($PRICE, 0, 290, 2, 14, $arialBold, $black, 11, 0, 0);
	//texto(sinSigno($PRICE), 0, 282, 2, 10, $arialBold, $black, 14, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 13, 98, 1.2, 55, 'UPC');
	barcodeTexto(2, 0, -4, 8, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>