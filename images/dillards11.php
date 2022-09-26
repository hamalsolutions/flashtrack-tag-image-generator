<?php //   1       2       3     4        5          6
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'SIZE', 'GROUP NAME', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, '05TQALGW');
	$COLOR = asignar(2, 'BSH/BLUSH');
	$UPC = asignar(3, '637677395599');
	$SIZE = asignar(4, 'M');
	$GROUPNAME = asignar(5, 'PREPPY CHIC');
	$PRICE = asignar(6, '$26.00');

	// Creacion del formato
	formato(169, 300, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('arialnb.ttf');

	// Introducimos los datos
	agujero(85, 25);

	If (strlen($STYLE) < 10) {
		texto($STYLE, 8, 64, 0, 0, $arialBold, $black, 7, 0, 0);
	} else {
		texto($STYLE, 8, 64, 0, 0, $arialNBold, $black, 7, 0, 0);
	}

	If (strlen($COLOR) < 9) {
		texto($COLOR, 0, 64, 2, 10, $arialBold, $black, 7, 0, 0);
	} else {
		texto($COLOR, 0, 64, 2, 10, $arialNBold, $black, 7, 0, 0);
	}

	texto('SIZE', 10, 165, 0, 0, $arial, $black, 8, 0, 0);
	texto($SIZE, 60, 170, 0, 0, $arial, $black, 14, 0, 0);

	If (strlen($GROUPNAME) < 20) {
		texto($GROUPNAME, 0, 212, 1, 0, $arialBold, $black, 8, 0, 0);
	} else {
		texto($GROUPNAME, 0, 212, 1, 0, $arialNBold, $black, 8, 0, 0);
	}

	texto($PRICE, 0, 285, 1, 0, $arialBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 13, 64, 1.2, 70, 'UPC');

	barcodeTexto(2, 0, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
