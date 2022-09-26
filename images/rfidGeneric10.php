<?php //                    1        2        3       4       5
$correctos = array('QTY', 'SIZE', 'COLOR', 'STYLE', 'UPC', 'PRICE');

require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$SIZE = asignar(1, 'S');
	$COLOR = asignar(2, 'wht');
	$STYLE = asignar(3, 'LM8AC617');
	$UPC = asignar(4, '191898637987');
	$PRICE = asignar(5, '95.00');

	// Creacion del formato
	formato(197, 72, 255, 255, 255);
	setAsSticker(15);
	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	//$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNB = fuente('arialnb.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	texto('E', 0, 16, 2, 15, $logo, $black, 10, 0, 0);

	texto($SIZE, 197, 36, 3, -106, $arialBold, $black, 10, 0, 0);

	texto($STYLE, 130, 52, 0, 0, $arialBold, $black, 6, 0, 0);
	texto($COLOR, 130, 65, 0, 0, $arialBold, $black, 6, 0, 0);

	texto('MSRP', 5, 192, 0, 0, $arialNB, $black, 7, 90, 0);
	texto($PRICE, 0, 192, 2, 5, $arialNB, $black, 7, 90, 1);

	// Creacion del Barcode
	barcode($UPC, 10, 10, 1, 42, 'UPC');
	barcodeTexto(2, -1, 1, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
