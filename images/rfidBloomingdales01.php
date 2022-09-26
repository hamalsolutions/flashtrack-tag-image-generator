<?php //   1       2      3      4      5         6            7
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE', 'DESCRIPTION', 'PCS-SET');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, '16539PYN');
	$COLOR = asignar(2, 'C052N RUST');
	$SIZE = asignar(3, 'L');
	$UPC = asignar(4, '190475098432');
	$PRICE = asignar(5, '$98.00');
	$DESCRIPTION = asignar(6, 'L/S TOP');
	$PCS = asignar(7, ' ');

	// Creacion del formato
	formato(150, 300, 255, 255, 255);
	agujero(75, 25);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('arialnb.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	texto('E', 114, 32, 0, 0, $logo, $black, 20, 0, 0);

	texto('BLOOMINGDALES', 0, 65, 1, 0, $arialNBold, $black, 12, 0, 0);

	texto($STYLE, 10, 85, 0, 0, $arial, $black, 6, 0, 0);

	texto($COLOR, 0, 85, 2, 10, $arial, $black, 6, 0, 0);

	texto($SIZE, 0, 200, 1, 0, $arialNBold, $black, 12, 0, 0);

	texto($DESCRIPTION, 0, 230, 1, 0, $arialNBold, $black, 9, 0, 0);

	texto($PCS, 0, 250, 1, 0, $arialNBold, $black, 9, 0, 0);

	texto('MSRP', 10, 288, 0, 0, $arial, $black, 7, 0, 0);

	texto($PRICE, 0, 290, 1, 0, $arialNBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 18, 95, 1, 60, 'UPC');

	barcodeTexto(2, -1, -1, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
