<?php //   1       2       3    4      5       6
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'MSRP', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, '6360');
	$COLOR = asignar(2, 'MINERAL');
	$SIZE = asignar(3, 'XS');
	$UPC = asignar(4, '690681715524');
	$MSRP = asignar(5, '$450.00');
	$PRICE = asignar(6, '$169.99');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('arialnb.ttf');
	$arialSlash = fuente('Arial_Slash_bld.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos

	agujero(75, 25);

	texto('E', 100, 37, 0, 0, $logo, $black, 27, 0, 0);

	texto($STYLE, 12, 60, 0, 0, $arialBold, $black, 11, 0, 0);

	texto($COLOR, 12, 80, 0, 0, $arialBold, $black, 11, 0, 0);

	texto($SIZE, 12, 100, 0, 0, $arialBold, $black, 11, 0, 0);

	texto($MSRP, 0, 270, 1, 0, $arialSlash, $black, 14, 0, 1);

	texto($PRICE, 0, 310, 1, 0, $arialBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 18, 120, 1, 80, 'UPC');

	barcodeTexto(2, -1, 5, 0, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
