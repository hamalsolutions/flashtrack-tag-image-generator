<?php //                     1        2        3      4       5          6             7
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE', 'GROUP NAME', 'DESCRIPTION');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, '76876B');
	$COLOR = asignar(2, 'MUSTARD');
	$SIZE = asignar(3, 'X-SMALL');
	$UPC = asignar(4, '697146535932');
	$PRICE = asignar(5, '114.00');
	$GROUP_NAME = asignar(6, '');
	$DESCRIPTION = asignar(7, 'PARADISE DRS');

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

	texto('E', 112, 29, 0, 0, $logo, $black, 24, 0, 0);

	if (strpos($SIZE, '/')) {
		$SIZE = str_replace(' ', '', $SIZE);
		$splitedSize = explode('/', $SIZE);
		$vicsColor = colorVic($splitedSize[0]);
	} else {
		$vicsColor = colorVic($SIZE);
	}

	If (strlen($STYLE) < 8) {
		texto($STYLE, 8, 55, 0, 0, $arialBold, $black, 7, 0, 0);
	} else {
		texto($STYLE, 8, 55, 0, 0, $arialNarrowBold, $black, 7, 0, 0);
	}

	If (strlen($COLOR) < 8) {
		texto($COLOR, 0, 55, 2, 8, $arialBold, $black, 7, 0, 0);
	} else {
		texto($COLOR, 0, 55, 2, 8, $arialNarrowBold, $black, 7, 0, 0);
	}

	If (strlen($DESCRIPTION) < 20) {
		texto($DESCRIPTION, 8, 70, 0, 0, $arialBold, $black, 7, 0, 0);
	} else {
		texto($DESCRIPTION, 8, 70, 0, 0, $arialNarrowBold, $black, 7, 0, 0);
	}

	cajaRellena(0, 150, 150, 25, $vicsColor, $vicsColor);
	texto($SIZE, 0, 170, 1, 0, $arialNarrowBold, $black, 12, 0, 0);

	texto($PRICE, 0, 316, 1, 0, $arialBold, $black, 14, 0, 1);

	//texto('MSRP', 26, 316, 0, 0, $arialBold, $black, 8, 0, 0);

	texto($GROUP_NAME, 0, 235, 1, 0, $arialBold, $black, 8, 0, 0);

	perforacion(150, 287, 290);

	// Creacion del Barcode
	barcode($UPC, 18, 75, 1, 60, 'UPC');

	barcodeTexto(2, 0, -3, 7, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
