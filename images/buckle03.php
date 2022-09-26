<?php //   1             2      3      4      5
$correctos = array('QTY', 'DESCRIPTION', 'COLOR', 'UPC', 'SIZE', 'PRICE');
require_once('../includes/html.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DESCRIPT = asignar(1, 'CORONA EXTRA SS TEE');
	$COLOR = asignar(2, 'WHITE');
	$UPC = asignar(3, '190371843181');
	$SIZE = asignar(4, 'XLARGE');
	$PRICE = asignar(5, '22.50');

	// Creacion del formato
	formato(170, 300, 255, 255, 255);

	agujero(85, 25);

	// Colores a usar
	$black = color(0, 0, 0);
	$red = color(128, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arial60BD = fuente('Arial_60_Bold.ttf');
	$arial80 = fuente('Arial_80.ttf');
	$arialNB = fuente('arialnb.ttf');
	//$arialBold = fuente('arialbd.ttf');
	$logo = fuente('bucklelogo.ttf');

	// Introducimos los datos

	texto('B', 0, 56, 1, 0, $logo, $black, 21, 0, 0);

	If (strlen($DESCRIPT) < 12) {
		texto($DESCRIPT, 8, 82, 0, 0, $arialNB, $black, 9, 0, 0);
	} else {
		texto($DESCRIPT, 8, 82, 0, 0, $arial60BD, $black, 9.5, 0, 0);
	}

	If (strlen($COLOR) < 9) {
		texto($COLOR, 0, 82, 2, 8, $arialNB, $black, 9, 0, 0);
	} else {
		texto($COLOR, 0, 82, 2, 8, $arial60BD, $black, 9.5, 0, 0);
	}
	// texto($COLOR,0,82,2,8,$arialNB,$black,9.5,0,0);

	texto('SIZE', 10, 192, 0, 0, $arialBold, $black, 6.5, 0, 0);
	texto($SIZE, 40, 200, 0, 0, $arialNB, $black, 16, 0, 0);

	texto($PRICE, 0, 280, 1, 0, $arialNB, $black, 16, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 8, 75, 1.35, 75, 'upc');

	barcodeTexto(1, 1, 1, 4, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
