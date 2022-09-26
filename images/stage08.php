<?php //     1      2       3      4      5      6       7         8
$correctos = array('QTY', 'COLOR', 'SIZE', 'STYLE', 'UPC', 'CLASS', 'DEPT', 'PRICE', 'GROUP NAME');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$COLOR = asignar(1, 'DARK BLUE/BLACK ANTIQUE');
	$SIZE = asignar(2, '4');
	$STYLE = asignar(3, 'J12540AG 2');
	$UPC = asignar(4, '619720171596');
	$CLASS = asignar(5, '305');
	$DEPT = asignar(6, '1740');
	$PRICE = asignar(7, '18.00');
	$GROUP = asignar(8, 'WOW 6');

	// Creacion del formato
	formato(170, 300, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNB = fuente('arialnb.ttf');

	// Introducimos los datos
	agujero(85, 25);

	texto('DPT ' . $DEPT . '         ' . 'CL ' . $CLASS, 0, 55, 1, 0, $arial, $black, 8, 0, 0);

	texto('VPN', 28, 80, 0, 0, $arialBold, $black, 9, 0, 0);

	texto($STYLE, 0, 80, 2, 24, $arialBold, $black, 9, 0, 0);

	texto('Group: ' . $GROUP, 10, 192, 0, 0, $arialNB, $black, 9, 0, 0);
	texto('Color: ' . substr($COLOR, 0, 19), 10, 212, 0, 0, $arialNB, $black, 9, 0, 0);
	texto('Size: ' . $SIZE, 10, 232, 0, 0, $arialBold, $black, 10, 0, 0);

	perforacion(169, 300, 256);

	texto($PRICE, 0, 285, 1, 0, $arialBold, $black, 16, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 15, 72, 1.2, 88, 'UPC');

	barcodeTexto(2, 0, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
