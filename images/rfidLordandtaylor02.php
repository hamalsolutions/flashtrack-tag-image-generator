<?php //   1       2      3      4      5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'M0684406S5TM');
	$COLOR = asignar(2, 'AQUA');
	$SIZE = asignar(3, 'S');
	$UPC = asignar(4, '190172300012');

	// Creacion del formato
	formato(150, 300, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arialBold = fuente('arialbd.ttf');
	$arialNarrowBold = fuente('arialnb.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos

	agujero(75, 25);

	texto('E', 100, 30, 0, 0, $logo, $black, 27, 0, 0);

	texto('STYLE', 8, 90, 0, 0, $arialBold, $black, 10, 0, 0);

	if (strlen($STYLE) > 8) {
		texto($STYLE, 8, 106, 0, 0, $arialNarrowBold, $black, 9.5, 0, 0);
	} else {
		texto($STYLE, 8, 106, 0, 0, $arialBold, $black, 9, 0, 0);
	}

	texto('COLOR', 0, 90, 2, 8, $arialBold, $black, 10, 0, 0);
	if (strlen($COLOR) > 6) {
		texto($COLOR, 0, 106, 2, 5, $arialNarrowBold, $black, 9, 0, 0);
	} else {
		texto($COLOR, 0, 106, 2, 5, $arialBold, $black, 9, 0, 0);
	}

	texto(formatizarTexto('1  23456  12345  6', $UPC), 0, 160, 1, 0, $arialNarrowBold, $black, 12, 0, 0);

	texto('SIZE  ' . $SIZE, 0, 206, 1, 0, $arialBold, $black, 12, 0, 0);

	require_once('../includes/footer.php');
}
?>
