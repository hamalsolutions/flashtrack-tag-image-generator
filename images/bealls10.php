<?php //    1        2     3     4       5       6       7
$correctos = array('QTY', 'DEPT', 'STYLE', 'UPC', 'COLOR', 'SIZE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DEPT = asignar(1, '235');
	$STYLE = asignar(2, 'JAC3PN6786');
	$UPC = asignar(3, '619720871595');
	$COLOR = asignar(4, 'BLACK');
	$SIZE = asignar(5, '1');
	$PRICE = asignar(6, '$32.00');

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

	texto('DEPT# ' . $DEPT, 14, 65, 0, 0, $arialBold, $black, 9, 0, 0);

	texto('STYLE# ' . $STYLE, 14, 87, 0, 0, $arialBold, $black, 9, 0, 0);

	imageline($img, 0, 95, 168, 95, $black);

	texto('COLOR:', 14, 205, 0, 0, $arial, $black, 9, 0, 0);

	if (strlen($COLOR) < 11)
		texto($COLOR, 65, 205, 0, 0, $arialBold, $black, 9.5, 0, 0);
	else
		texto($COLOR, 65, 205, 0, 0, $arialnBold, $black, 9.5, 0, 0);

	texto('SIZE:', 14, 224, 0, 0, $arial, $black, 9, 0, 0);
	texto($SIZE, 65, 229, 0, 0, $arialBold, $black, 14, 0, 0);

	perforacion(169, 300, 250);
	texto($PRICE, 0, 285, 1, 0, $arialBold, $black, 16, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 28, 105, 1, 65, 'UPC');
	//texto(formatizarTexto('1   23456   12345   6', $UPC), 0, 184, 1, 0, $arial, $black, 9, 0, 0);
	barcodeTexto(2, -1, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
