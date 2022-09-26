<?php //                     1        2        3      4       5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'ACP6366');
	$COLOR = asignar(2, 'NATURAL');
	$SIZE = asignar(3, 'XS');
	$UPC = asignar(4, '191293039515');
	$PRICE = asignar(5, '$148.00');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNarrowBold = fuente('arialnb.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos

	agujero(75, 25);

	texto('E', 110, 30, 0, 0, $logo, $black, 23, 0, 0);

	if (strpos($SIZE, '/')) {
		$SIZE = str_replace(' ', '', $SIZE);
		$splitedSize = explode('/', $SIZE);
		$vicsColor = colorVic($splitedSize[0]);
	} else {
		$vicsColor = colorVic($SIZE);
	}

	If (strlen($STYLE) < 18) {
		texto($STYLE, 10, 55, 0, 0, $arialBold, $black, 8, 0, 0);
	} else {
		texto($STYLE, 10, 55, 0, 0, $arialNarrowBold, $black, 8, 0, 0);
	}

	If (strlen($COLOR) < 18) {
		texto($COLOR, 10, 72, 0, 0, $arialBold, $black, 8, 0, 0);
	} else {
		texto($COLOR, 10, 72, 0, 0, $arialNarrowBold, $black, 8, 0, 0);
	}

	cajaRellena(1, 150, 147, 25, $vicsColor, $vicsColor);
	texto($SIZE, 0, 170, 1, 0, $arialNarrowBold, $black, 15, 0, 0);

	texto('MSRP', 10, 312, 0, 0, $arialBold, $black, 8, 0, 0);
	texto($PRICE, 0, 314, 2, 10, $arialBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 18, 80, 1, 56, 'UPC');

	barcodeTexto(2, 0, -2, 7, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
