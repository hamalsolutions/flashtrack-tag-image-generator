<?php //   1       2      3        4     5       6     7
$correctos = array('QTY', 'STYLE', 'COLOR', 'DEPT', 'SEASON', 'UPC', 'SIZE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'TCT2924113');
	$COLOR = asignar(2, 'WHITE/MULTI');
	$DEPT = asignar(3, '423');
	$SEASON = asignar(4, 'S17');
	$UPC = asignar(5, '887840217689');
	$SIZE = asignar(6, '7');
	$PRICE = asignar(7, '65.00');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arialNarrowBold = fuente('arialnb.ttf');
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos

	agujero(75, 25);

	texto('E', 0, 35, 2, 10, $logo, $black, 24, 0, 0);

	texto('STYLE/MODÈLE', 0, 85, 1, 0, $arialNarrowBold, $black, 7.5, 0, 0);
	texto($STYLE, 0, 96, 1, 0, $arialBold, $black, 7.5, 0, 0);

	texto('COLOR/COULEUR', 0, 116, 1, 0, $arialNarrowBold, $black, 7.5, 0, 0);
	texto($COLOR, 0, 128, 1, 0, $arialBold, $black, 7.5, 0, 0);

	texto($SEASON . ' - DEPT# ' . $DEPT, 0, 154, 1, 0, $arialBold, $black, 7, 0, 0);

	texto('SIZE/TAILLE', 0, 250, 1, 0, $arialBold, $black, 8, 0, 0);
	texto($SIZE, 0, 270, 1, 0, $arialBold, $black, 12, 0, 0);

	texto($PRICE, 0, 310, 1, 0, $arialBold, $black, 12, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 18, 180, 1, 40, 'UPC');

	barcodeTexto(1, 0, -2, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
