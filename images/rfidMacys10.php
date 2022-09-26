<?php //                     1        2        3      4       5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'VT7200N');
	$COLOR = asignar(2, 'RED');
	$SIZE = asignar(3, 'XS');
	$UPC = asignar(4, '090688116766');
	$PRICE = asignar(5, 'MSRP $100.00');

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

	texto('E', 110, 30, 0, 0, $logo, $black, 24, 0, 0);

	if (strpos($SIZE, '/')) {
		$SIZE = str_replace(' ', '', $SIZE);
		$splitedSize = explode('/', $SIZE);
		$vicsColor = colorVic($splitedSize[0]);
	} else {
		$vicsColor = colorVic($SIZE);
	}

	texto('STYLE', 10, 58, 0, 0, $arialBold, $black, 10, 0, 0);
	If (strlen($STYLE) < 9) {
		texto($STYLE, 10, 73, 0, 0, $arialBold, $black, 9, 0, 0);
	} else {
		texto($STYLE, 10, 73, 0, 0, $arialNarrowBold, $black, 9, 0, 0);
	}

	texto('COLOR', 0, 58, 2, 10, $arialBold, $black, 10, 0, 0);
	If (strlen($STYLE) < 9) {
		texto($COLOR, 0, 73, 2, 10, $arialBold, $black, 9, 0, 0);
	} else {
		texto($COLOR, 0, 73, 2, 10, $arialNarrowBold, $black, 9, 0, 0);
	}

	cajaRellena(1, 150, 147, 25, $vicsColor, $vicsColor);
	texto($SIZE, 0, 170, 1, 0, $arialNarrowBold, $black, 15, 0, 0);

	texto($PRICE, 0, 314, 1, 0, $arial, $black, 14, 0, (strpos($PRICE,'MSRP') !== false)?0:1);

	// Creacion del Barcode
	barcode($UPC, 18, 80, 1, 56, 'UPC');

	barcodeTexto(2, 0, -2, 7, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
