<?php //     1       2      3       4      5      6         7           8          9     10
$correctos = array('QTY', 'CLASS', 'STYLE', 'SIZE', 'COLOR', 'DIM', 'VEN #', 'VEN STYLE', 'DESCRIPTION', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$CLASS = asignar(1, '2407');
	$STYLE = asignar(2, '1235');
	$SIZE = asignar(3, '17');
	$COLOR = asignar(4, '3 PINK');
	$DIM = asignar(5, 'XXX');
	$VENDOR = asignar(6, '0458');
	$VENDORSTYLE = asignar(7, '8420Y039 PINK');
	$DESCRIPTION = asignar(8, 'PRL NECK HALTER MESH');
	$UPC = asignar(9, '424070093494');
	$PRICE = asignar(10, '99.00');

	// Creacion del formato
	formato(400, 275, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);
	$gray = color(200, 200, 200);
	agujero(100, 25);
	agujero(300, 25);
	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$logo = fuente('DavidsBridal_Logo.ttf');

	// Introducimos los datos
	lineaVertical(200, 1, 274, $gray, 2);

	texto('D', 70, 115, 0, 0, $logo, $black, 47.5, 270, 0);

	texto('CLASS / STYLE', 20, 55, 0, 0, $arial, $black, 7, 0, 0);
	texto($CLASS . '-' . $STYLE, 20, 67, 0, 0, $arial, $black, 7, 0, 0);

	texto('SIZE:', 18, 85, 0, 0, $arial, $black, 7.5, 0, 0);
	texto($SIZE, 18, 97, 0, 0, $arial, $black, 8, 0, 0);

	texto('COLOR', 0, 85, 3, 200, $arial, $black, 7.5, 0, 0);
	texto($COLOR, 0, 97, 3, 200, $arial, $black, 8, 0, 0);

	texto('DIM', 0, 85, 2, 218, $arial, $black, 7.5, 0, 0);
	texto($DIM, 0, 97, 2, 216, $arial, $black, 8, 0, 0);

	texto('VEN #', 18, 115, 0, 0, $arial, $black, 7.5, 0, 0);
	texto($VENDOR, 18, 127, 0, 0, $arial, $black, 8, 0, 0);

	texto('VEN STYLE', 85, 115, 0, 0, $arial, $black, 7.5, 0, 0);
	texto($VENDORSTYLE, 85, 127, 0, 0, $arial, $black, 7.5, 0, 0);

	texto($DESCRIPTION, 0, 150, 3, 200, $arial, $black, 7.5, 0, 0);

	texto($PRICE, 0, 265, 3, 200, $arialBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 22, 128, 1.28, 95, 'UPC');

	barcodeTexto(4, -2, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
