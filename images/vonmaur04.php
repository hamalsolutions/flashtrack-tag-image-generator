<?php //                    1           2            3          4          5      6         7
$correctos = array('QTY', 'STYLE', 'DESCRIPTION', 'COLOR', 'COLOR CODE', 'UPC', 'SIZE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	$STYLE = asignar(1, '45124A-GYL');
	$DESCRIPTION = asignar(2, 'Grey Varsity Cardigan');
	$COLOR = asignar(3, 'Grey');
	$COLORCODE = asignar(4, '31');
	$UPC = asignar(5, '849115096023');
	$SIZE = asignar(6, '6/9');
	$PRICE = asignar(7, '40.00');

	// Creacion del formato
	formato(169, 300, 255, 255, 255);
	agujero(84.5, 25);

	// Colores a usar
	$black = color(0, 0, 0);
	$white = color(255, 255, 255);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arial80 = fuente('Arial_80.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('arialnb.ttf');
	$timesBold = fuente('timesbd.ttf');

	// Introducimos los datos
	texto('VON MAUR', 0, 58, 1, 0, $timesBold, $black, 14, 0, 0);

	texto($STYLE, 0, 78, 1, 0, $arialNBold, $black, 11, 0, 0);

	if (strlen($DESCRIPTION) < 29) {
		texto($DESCRIPTION, 0, 93, 1, 0, $arial, $black, 8, 0, 0);
	} else {
		texto($DESCRIPTION, 0, 93, 1, 0, $arial80, $black, 8, 0, 0);
	}

	texto($COLOR, 14, 116, 0, 0, $arialBold, $black, 9, 0, 0);

	texto($COLORCODE, 0, 116, 2, 12, $arialBold, $black, 9, 0, 0);

	texto($SIZE, 0, 220, 1, 0, $arialBold, $black, 16, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 13, 104, 1.2, 80, 'UPC');
	barcodeTexto(2, 0, 0, 5, 'arial.ttf');

	texto('- - - - - - - - - - - - - - - - - - - - -', 5, 260, 0, 0, $arial, $black, 9, 0, 0);

	texto('MSRP:', 12, 290, 0, 0, $arialNBold, $black, 8, 0, 1);
	texto($PRICE, 0, 290, 2, 12, $arialNBold, $black, 16, 0, 1);

	require_once('../includes/footer.php');
}
?>
