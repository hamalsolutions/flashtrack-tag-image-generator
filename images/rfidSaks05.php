<?php //  1       2       3      4      5
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'SIZE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato

	$STYLE = asignar(1, 'ST MJ1021');
	$COLOR = asignar(2, 'WHT');
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
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos

	texto('E', 0, 28, 2, 10, $logo, $black, 20, 0, 0);

	texto($STYLE, 10, 20, 0, 0, $arialBold, $black, 11, 0, 0);

	texto($COLOR, 10, 38, 0, 0, $arialBold, $black, 11, 0, 0);

	//texto('SIZE',0,56,1,0,$timesNewBold,$black,7,0,0);

	texto($SIZE, 0, 128, 1, 0, $arialNB, $black, 14, 0, 0);

	perforacion(133, 238, 200);
	texto('MSRP:', 10, 224, 0, 0, $arialNB, $black, 11, 0, 0);
	texto($PRICE, 0, 224, 2, 10, $arialNB, $black, 11, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 12, 54, 1, 36, 'UPC');

	barcodeTexto(2, -1, 2, 2, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
