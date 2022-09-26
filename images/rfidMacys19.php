<?php //   1       2      3      4      5         6         7
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'MSRP', 'GROUP NAME', 'NAME');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'KDR103863-MC');
	$COLOR = asignar(2, 'BLACK/WHT');
	$SIZE = asignar(3, 'XS');
	$UPC = asignar(4, '193328000910');
	$MSRP = asignar(5, '$64.00');
	$GROUPNAME = asignar(6, 'DECEMBER ALL DOOR 2');
	$NAME = asignar(7, '11.30 TZ TRANSITION');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);
	agujero(75, 25);
	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNB = fuente('arialnb.ttf');
	$arial70B = fuente('Arial_70_Bold.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	texto('E', 100, 27, 0, 0, $logo, $black, 27, 0, 0);

	if (strlen($NAME) > 20) {
		texto($NAME, 0, 64, 1, 0, $arial70B, $black, 8, 0, 0);
	} else {
		texto($NAME, 0, 64, 1, 0, $arialBold, $black, 8, 0, 0);
	}

	if (strlen($STYLE) > 11) {
		texto($STYLE, 10, 85, 0, 0, $arial70B, $black, 9, 0, 0);
	} else {
		texto($STYLE, 10, 85, 0, 0, $arial, $black, 9, 0, 0);
	}

	if (strlen($COLOR) > 8) {
		texto($COLOR, 0, 85, 2, 10, $arial70B, $black, 9, 0, 0);
	} else {
		texto($COLOR, 0, 85, 2, 10, $arial, $black, 9, 0, 0);
	}

	texto($SIZE, 0, 200, 1, 0, $arialBold, $black, 12, 0, 0);

	if (strlen($GROUPNAME) > 20) {
		texto($GROUPNAME, 0, 230, 1, 0, $arialNarrow, $black, 8, 0, 0);
	} else {
		texto($GROUPNAME, 0, 230, 1, 0, $arialBold, $black, 8, 0, 0);
	}

	texto('MSRP $' . sinSigno($MSRP), 0, 315, 1, 0, $arialBold, $black, 14, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 18, 95, 1, 60, 'UPC');

	barcodeTexto(2, -1, 5, 0, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
