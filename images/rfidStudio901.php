<?php //                     1        2           3         4        5       6
$correctos = array('QTY', 'STYLE', 'COLOR', 'DESCRIPTION', 'UPC', 'SIZE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'S1FTJ-T5745M');
	$COLOR = asignar(2, 'SLATE');
	$DESCRIPTION = asignar(3, 'CREW NK BOX TOP');
	$UPC = asignar(4, '046094683750');
	$SIZE = asignar(5, 'M/M');
	$PRICE = asignar(6, '$128.00');

	// Creacion del formato
	// THIS FORMAT IS FOR 35mm x 59mm but we are using aprox inches measurements
	formato(138, 235, 255, 255, 255);
	setAsSticker(10);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNB = fuente('arialnb.ttf');
	$arialN = fuente('arialn.ttf');
	$arial70 = fuente('Arial_70_Bold.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	if (strlen($STYLE) > 16) {
		texto($STYLE, 0, 100, 1, 0, $arial70, $black, 9.5, 0, 0);
	} else {
		texto($STYLE, 0, 100, 1, 0, $arialN, $black, 9.5, 0, 0);
	}

	if (strlen($COLOR) > 20) {
		texto($COLOR, 0, 119, 1, 0, $arial70, $black, 8.5, 0, 0);
	} else {
		texto($COLOR, 0, 119, 1, 0, $arialN, $black, 8.5, 0, 0);
	}

	if (strlen($DESCRIPTION) > 20) {
		texto($DESCRIPTION, 0, 138, 1, 0, $arial70, $black, 8.5, 0, 0);
	} else {
		texto($DESCRIPTION, 0, 138, 1, 0, $arialN, $black, 8.5, 0, 0);
	}

	texto($SIZE, 0, 168, 1, 0, $arialBold, $black, 14, 0, 0);
	texto('E', 0, 190, 2, 12, $logo, $black, 20, 0, 0);
	perforacion(133, 238, 206);
	texto('SUGGESTED RETAIL PRICE', 10, 218, 1, 0, $arialN, $black, 6.5, 0, 0);
	texto($PRICE, 0, 231, 1, 0, $arialNB, $black, 10.5, 0, 1);

	// Creacion del Barcode barcode Height: 11 mm = Length 48
	barcode($UPC, 12, 14, 1, 48, 'UPC');
	barcodeTexto(2, -1, 2, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
