<?php //                    1        2     3     4       5
$correctos = array('QTY', 'DEPT', 'COLOR', 'SIZE', 'VPN', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DEPT = asignar(1, '1716');
	$COLOR = asignar(2, 'DARK/BLUE/BLACK VIN');
	$SIZE = asignar(3, '1');
	$VPN = asignar(4, 'J1240AG2');
	$UPC = asignar(5, '614015053106');
	$PRICE = asignar(6, '50.00');

	// Creacion del formato
	formato(169, 300, 255, 255, 255);
	agujero(85, 25);
	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNB = fuente('arialnb.ttf');

	// Introducimos los datos
	texto('DPT', 10, 58, 0, 0, $arial, $black, 9, 0, 0);
	texto($DEPT, 42, 58, 0, 0, $arial, $black, 9, 0, 0);

	//texto('VPN', 28, 88, 0, 0, $arialBold, $black, 9, 0, 0);
	//texto($VPN, 60, 88, 2, 24, $arialBold, $black, 9, 0, 0);
	
	texto('VPN '.$VPN, 28, 88, 1, 0, $arialBold, $black, 9, 0, 0); // Customer has a long VPN therefore we created this all in one line and center it to correct the problem 
	texto('Color:', 10, 198, 0, 0, $arialNB, $black, 9, 0, 0);
	texto($COLOR, 44, 198, 0, 0, $arialNB, $black, 8.5, 0, 0);

	texto('Size:', 10, 216, 0, 0, $arialBold, $black, 10, 0, 0);
	texto($SIZE, 45, 216, 0, 0, $arialBold, $black, 10, 0, 0);

	perforacion(170, 300, 256);
	texto($PRICE, 0, 285, 1, 0, $arialBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 15, 80, 1.2, 78, 'UPC');

	barcodeTexto(3, -1, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
