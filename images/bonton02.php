<?php //    1        2     3     4       5       6       7
$correctos = array('QTY', 'DEPT', 'STYLE', 'UPC', 'COLOR', 'SIZE', 'GROUP NAME', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DEPT = asignar(1, '453');
	$STYLE = asignar(2, 'JFGN700976');
	$UPC = asignar(3, '887840164662');
	$COLOR = asignar(4, 'NAVY/BLACK');
	$SIZE = asignar(5, '3');
	$GROUP = asignar(6, 'GROUP NAME');
	$PRICE = asignar(7, '68.00');

	// Creacion del formato
	formato(169, 300, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	agujero(85, 25);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialnBold = fuente('arialnb.ttf');

	// Introducimos los datos

	imageline($img, 0, 45, 168, 45, $black);

	texto('STYLE# ' . $STYLE, 14, 62, 0, 0, $arialBold, $black, 9, 0, 0);

	texto('DEPT# ' . $DEPT, 14, 80, 0, 0, $arialBold, $black, 9, 0, 0);

	imageline($img, 0, 86, 168, 86, $black);

	imageline($img, 0, 164, 200, 164, $black);

	texto('COLOR/SIZE', 20, 182, 0, 0, $arialnBold, $black, 7, 0, 0);

	if (strlen($COLOR) < 13)
		texto($COLOR, 45, 198, 0, 0, $arialBold, $black, 9.5, 0, 0);
	else
		texto($COLOR, 45, 198, 0, 0, $arialnBold, $black, 9.5, 0, 0);

	texto($SIZE, 45, 220, 0, 0, $arialBold, $black, 14, 0, 0);

	texto($GROUP, 0, 240, 1, 0, $arialBold, $black, 9, 0, 0);

	perforacion(169, 300, 250);
	texto($PRICE, 0, 285, 1, 0, $arialBold, $black, 16, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 28, 94, 1, 52, 'UPC');
	//texto(formatizarTexto('1   23456   12345   6', $UPC), 0, 184, 1, 0, $arial, $black, 9, 0, 0);
	barcodeTexto(2, -1, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
