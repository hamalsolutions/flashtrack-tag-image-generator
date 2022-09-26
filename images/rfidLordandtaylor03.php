<?php //   1       2      3      4      5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'VT7200N');
	$COLOR = asignar(2, 'RED');
	$SIZE = asignar(3, 'L');
	$UPC = asignar(4, '090688116797');
	$PRICE = asignar(5, '$38.00');

	// Creacion del formato
	formato(150, 300, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNarrowBold = fuente('arialnb.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos

	agujero(75, 25);

	texto('E', 110, 32, 0, 0, $logo, $black, 27, 0, 0);

	texto('EMERALD SUNDAE', 0, 65, 1, 0, $arialNarrowBold, $black, 12, 0, 0);

	texto('STYLE', 7, 85, 0, 0, $arialBold, $black, 10, 0, 0);
	if (strlen($STYLE) > 8) {
		texto($STYLE, 8, 100, 0, 0, $arialNarrowBold, $black, 9.5, 0, 0);
	} else {
		texto($STYLE, 8, 100, 0, 0, $arialBold, $black, 9, 0, 0);
	}

	texto('COLOR', 0, 85, 2, 7, $arialBold, $black, 10, 0, 0);
	if (strlen($COLOR) > 6) {
		texto($COLOR, 0, 100, 2, 5, $arialNarrowBold, $black, 9, 0, 0);
	} else {
		texto($COLOR, 0, 100, 2, 5, $arialBold, $black, 9, 0, 0);
	}

	texto(formatizarTexto('1  23456  12345  6', $UPC), 0, 175, 1, 0, $arial, $black, 8, 0, 0);

	texto('SIZE  ' . $SIZE, 0, 200, 1, 0, $arialNarrowBold, $black, 12, 0, 0);

	texto($PRICE, 0, 290, 1, 0, $arialNarrowBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 18, 110, 1, 50, 'UPC');

	require_once('../includes/footer.php');
}
?>
