<?php //                     1        2        3      4       5          6
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE', 'GROUP NAME');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'CR152JSF');
	$COLOR = asignar(2, 'NVY');
	$SIZE = asignar(3, 'SMALL');
	$UPC = asignar(4, '886349123170');
	$PRICE = asignar(5, '14.99');
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

	texto('E', 0, 27, 2, 10, $logo, $black, 24, 0, 0);

	// if (strpos($SIZE, '/')) {
	//     $SIZE = str_replace(' ', '', $SIZE);
	//     $splitedSize = explode('/', $SIZE);
	//     $vicsColor = colorVic($splitedSize[0]);
	// } else {
	//     $vicsColor = colorVic($SIZE);
	// }

	If (strlen($STYLE) < 8) {
		texto($STYLE, 8, 57, 0, 0, $arialBold, $black, 8, 0, 0);
	} else {
		texto($STYLE, 8, 57, 0, 0, $arialNarrowBold, $black, 8, 0, 0);
	}

	If (strlen($STYLE) < 8) {
		texto($COLOR, 0, 57, 2, 8, $arialBold, $black, 8, 0, 0);
	} else {
		texto($COLOR, 0, 57, 2, 8, $arialNarrowBold, $black, 8, 0, 0);
	}

	//cajaRellena(0, 150, 150, 25, $vicsColor, $vicsColor);
	texto($SIZE, 0, 170, 2, 10, $arialNarrowBold, $black, 12, 0, 0);

	texto($PRICE, 0, 314, 2, 15, $arialBold, $black, 12, 0, 1);

	If (strlen($PRICE) <> "") {
		texto('MANUFACTURER\'S', 10, 303, 0, 0, $arialNarrowBold, $black, 5, 0, 0);
		texto('SUGGESTED', 9, 311, 0, 0, $arialNarrowBold, $black, 5, 0, 0);
		texto('RETAIL PRICE', 10, 319, 0, 0, $arialNarrowBold, $black, 5, 0, 0);
	}

	texto($GROUP_NAME, 0, 220, 1, 0, $arialBold, $black, 8, 0, 0);

	perforacion(150, 287, 290);

	// Creacion del Barcode
	barcode($UPC, 18, 65, 1, 69, 'UPC');

	barcodeTexto(2, 0, -3, 7, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
