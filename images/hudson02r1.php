<?php //   1       2       3     4       5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'NRW407ZNA');
	$COLOR = asignar(2, 'PRAN');
	$SIZE = asignar(3, '25');
	$UPC = asignar(4, '801682051034');
	$PRICE = asignar(5, '189.00');

	// Creacion del formato
	formato(300, 100, 255, 255, 255);
	setAsSticker(10);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('arialnb.ttf');

	// Introducimos los datos
	texto('STYLE:', 15, 25, 0, 0, $arial, $black, 8, 0, 0);
	texto($STYLE, 55, 25, 0, 0, $arial, $black, 8, 0, 0);

	texto('COLOR:', 15, 50, 0, 0, $arial, $black, 8, 0, 0);
	texto($COLOR, 55, 50, 0, 0, $arial, $black, 8, 0, 0);

	texto('SIZE:', 15, 80, 0, 0, $arialBold, $black, 12, 0, 0);
	texto($SIZE, 60, 80, 0, 0, $arialBold, $black, 12, 0, 0);

	texto('----------------------------', 1, 278, 0, 0, $arial, $black, 8, 90, 0);

	texto('----------------------------', 1, 278, 0, 0, $arial, $black, 8, 90, 0);
	if ($PRICE <> "") {
		texto('MSRP:  $' . str_replace("$", "", $PRICE), 0, 293, 1, 0, $arialNBold, $black, 9, 90, 0);
	}

	// Creacion del Barcode
	barcode($UPC, 100, 15, 1.2, 60, 'UPC');

	barcodeTexto(2, 0, -3, 6, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
