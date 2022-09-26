<?php //                    1           2            3       4      5        6
$correctos = array('QTY', 'STYLE', 'DESCRIPTION', 'COLOR', 'UPC', 'SIZE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	$STYLE = asignar(1, 'ST27118A-LBC');
	$DESCRIPTION = asignar(2, 'Blue Polo Shirt');
	$COLOR = asignar(3, 'BLUE');
	$UPC = asignar(4, '849115096023');
	$SIZE = asignar(5, '12/18');
	$PRICE = asignar(6, '23.99');

	// Creacion del formato
	formato(169, 300, 255, 255, 255);
	agujero(84.5, 25);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arial80 = fuente('Arial_80.ttf');
	$arialNBold = fuente('arialnb.ttf');
	$timesBold = fuente('timesbd.ttf');

	// Introducimos los datos
	texto('ANDY & EVAN', 0, 58, 1, 0, $timesBold, $black, 14, 0, 0);

	texto($STYLE, 0, 78, 1, 0, $arialNBold, $black, 11, 0, 0);

	if (strlen($DESCRIPTION) < 29) {
		texto($DESCRIPTION, 0, 93, 1, 0, $arial, $black, 8, 0, 0);
	} else {
		texto($DESCRIPTION, 0, 93, 1, 0, $arial80, $black, 8, 0, 0);
	}
	texto($COLOR, 0, 116, 1, 0, $arialBold, $black, 9, 0, 0);

	texto($SIZE, 0, 220, 1, 0, $arialBold, $black, 16, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 13, 104, 1.2, 80, 'UPC');
	barcodeTexto(2, 0, 0, 5, 'arial.ttf');

	texto('- - - - - - - - - - - - - - - - - - - - -', 0, 260, 1, 0, $arial, $black, 9, 0, 0);

	texto('MSRP:', 12, 290, 0, 0, $arialNBold, $black, 8, 0, 1);
	texto($PRICE, 0, 290, 2, 12, $arialNBold, $black, 16, 0, 1);

	require_once('../includes/footer.php');
}
?>
