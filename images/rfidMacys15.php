<?php //                     1        2        3      4       5          6
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE', 'GROUP NAME');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'P500JDY6480');
	$COLOR = asignar(2, 'ATHLC NAVY');
	$SIZE = asignar(3, 'XS');
	$UPC = asignar(4, '190344732641');
	$PRICE = asignar(5, '$29.00');
	$GROUP_NAME = asignar(6, '');

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

	texto('E', 12, 27, 0, 0, $logo, $black, 24, 0, 0);

	if (strpos($SIZE, '/')) {
		$SIZE = str_replace(' ', '', $SIZE);
		$splitedSize = explode('/', $SIZE);
		$vicsColor = colorVic($splitedSize[0]);
	} else {
		$vicsColor = colorVic($SIZE);
	}

	If (strlen($STYLE) < 8) {
		texto($STYLE, 8, 66, 0, 0, $arialBold, $black, 7, 0, 0);
	} else {
		texto($STYLE, 8, 66, 0, 0, $arialNarrowBold, $black, 7, 0, 0);
	}

	If (strlen($STYLE) < 8) {
		texto($COLOR, 0, 66, 2, 8, $arialBold, $black, 7, 0, 0);
	} else {
		texto($COLOR, 0, 66, 2, 8, $arialNarrowBold, $black, 7, 0, 0);
	}

	cajaRellena(0, 150, 150, 25, $vicsColor, $vicsColor);
	texto($SIZE, 0, 170, 1, 0, $arialNarrowBold, $black, 12, 0, 0);

	texto($PRICE, 68, 314, 0, 0, $arialBold, $black, 14, 0, 1);

	// Nota, el cliente no becesita el MSRP si el precio esta vacio
	if ($PRICE <> '') {
		texto('MSRP', 28, 312, 0, 0, $arial, $black, 8, 0, 0);
	}


	texto($GROUP_NAME, 0, 235, 1, 0, $arialBold, $black, 8, 0, 0);

	perforacion(150, 287, 290);

	// Creacion del Barcode
	barcode($UPC, 18, 75, 1, 59, 'UPC');

	barcodeTexto(2, 0, 0, 7, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
