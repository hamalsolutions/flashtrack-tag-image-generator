<?php //  1       2       3      4      5
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'SIZE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato

	$STYLE = asignar(1, 'ST MJ1021');
	$COLOR = asignar(2, 'WHITE');
	$UPC = asignar(3, '490320738491');
	$SIZE = asignar(4, 'M');
	$PRICE = asignar(5, '$148.00');

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
	//$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos

	//texto('E', 0, 23, 2, 9, $logo, $black, 15, 0, 0);

	if (strlen($STYLE) > 10) {
		texto($STYLE, 9, 20, 0, 0, $arialNB, $black, 11, 0, 0);
	} else {
		texto($STYLE, 9, 20, 0, 0, $arialBold, $black, 11, 0, 0);
	}

	if (strlen($COLOR) > 11) {
		texto($COLOR, 10, 46, 0, 0, $arialNB, $black, 11, 0, 0);
	} else {
		texto($COLOR, 10, 46, 0, 0, $arialBold, $black, 11, 0, 0);
	}

	texto($SIZE, 0, 178, 1, 0, $arialBold, $black, 14, 0, 0);

	perforacion(133, 238, 206);
	texto('MSRP:', 10, 225, 0, 0, $arialNB, $black, 12, 0, 0);
	texto($PRICE, 0, 225, 2, 10, $arialNB, $black, 12, 0, 1);

	// Creacion del Barcode barcode Height: 11 mm = Length 48
	barcode($UPC, 12, 82, 1, 48, 'UPC');

	barcodeTexto(2, -1, 2, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
