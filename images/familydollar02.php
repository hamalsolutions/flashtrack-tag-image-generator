<?php //                      1         2        3          4            5       6       7       8         9             10           11
$correctos = array('QTY', 'CATEGORY', 'SIZE', 'PRICE', 'DESCRIPTION', 'COLOR', 'UPC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$CATEGORY = asignar(1, 'LADIES');
	$SIZE = asignar(2, 'S');
	$PRICE = asignar(3, '$5.00');
	$DESCRIPTION = asignar(4, 'LADIES');
	$COLOR = asignar(5, 'KELLY GREEN');
	$UPC = asignar(6, '191764027669');
	// Creacion del formato
	formato(440, 100, 255, 255, 255, 90);

	// Si requiere rotar la imagen ( TODA LA IMAGEN )

	$anguloDeRotacion = 90;
	// setAsSticker(10);  // it doesnt work when using $anguloDeRotacion = 90

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('arialnb.ttf');

	// Introducimos los datos
	texto($CATEGORY, 0, 30, 1, 0, $arialBold, $black, 14, 90, 0);

	texto($SIZE, 0, 81, 1, 0, $arialBold, $black, 14, 90, 0);

	texto($SIZE, 0, 137, 1, 0, $arialBold, $black, 14, 90, 0);

	texto($SIZE, 0, 195, 1, 0, $arialBold, $black, 14, 90, 0);

	texto($SIZE, 0, 251, 1, 0, $arialBold, $black, 14, 90, 0);

	texto($PRICE, 275, 15, 0, 0, $arial, $black, 8, 0, 0);

	texto($DESCRIPTION, 440, 15, 2, 10, $arialNBold, $black, 7, 0, 0);

	//texto($TRACKING, 440, 30, 2, 10, $arialNBold, $black, 7, 0, 0);

	texto($COLOR, 442, 32, 2, 10, $arialNBold, $black, 7, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 58, 315, 1, 44, 'UPC', 90);

	barcodeTexto(2, -1, -4, 7, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>