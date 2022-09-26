<?php //                    1           2           3          4          5      6         7         8
$correctos = array('QTY', 'STYLE', 'DESCRIPTION', 'COLOR', 'COLOR CODE', 'UPC', 'SIZE', 'PCS-SET', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	$STYLE = asignar(1, 'ST47119A-NVI');
	$DESCRIPTION = asignar(2, 'Navy Suiting Vest Set');
	$COLOR = asignar(3, 'NAVY');
	$COLORCODE = asignar(4, '410');
	$UPC = asignar(5, '849115096023');
	$SIZE = asignar(6, '3/6');
	$SET = asignar(7, '2 PC SET');
	$PRICE = asignar(8, '79.00');

	// Creacion del formato
	formato(338, 300, 255, 255, 255);
	agujero(84.5, 25);
	agujero(253.5, 25);
	lineaVertical(169, 0, 300, $black, 1);

	// Colores a usar
	$black = color(0, 0, 0);
	$white = color(255, 255, 255);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('arialnb.ttf');
	$timesBold = fuente('timesbd.ttf');

	// Introducimos los datos
	texto('VON MAUR', 0, 58, 3, 170, $timesBold, $black, 14, 0, 0);
	texto('VON MAUR', 169, 58, 3, -170, $timesBold, $black, 14, 0, 0);

	texto($STYLE, 0, 78, 3, 170, $arialNBold, $black, 11, 0, 0);
	texto($STYLE, 169, 78, 3, -170, $arialNBold, $black, 11, 0, 0);

	texto($DESCRIPTION, 0, 93, 3, 170, $arial, $black, 8, 0, 0);
	texto($DESCRIPTION, 169, 93, 3, -170, $arial, $black, 8, 0, 0);

	texto($COLOR, 14, 116, 0, 0, $arialBold, $black, 9, 0, 0);
	texto($COLOR, 184, 116, 0, 0, $arialBold, $black, 9, 0, 0);

	texto($COLORCODE, 0, 116, 2, 181, $arialBold, $black, 9, 0, 0);
	texto($COLORCODE, 0, 116, 2, 12, $arialBold, $black, 9, 0, 0);

	cajaRellena(35, 226, 100, 19, $black, $black, 0);
	cajaRellena(205, 226, 100, 19, $black, $black, 0);

	texto($SET, 0, 241, 3, 170, $arialBold, $white, 10, 0, 0);
	texto($SET, 0, 241, 3, -175, $arialBold, $white, 10, 0, 0);

	texto($SIZE, 169, 190, 3, -170, $arialBold, $black, 16, 0, 0);
	texto($SIZE, 0, 220, 3, 170, $arialBold, $black, 16, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 13, 104, 1.2, 80, 'UPC');
	barcodeTexto(2, 0, 0, 5, 'arial.ttf');

	texto('- - - - - - - - - - - - - - - - - - - - -', 5, 260, 0, 0, $arial, $black, 9, 0, 0);
	texto('- - - - - - - - - - - - - - - - - - - - -', 175, 260, 0, 0, $arial, $black, 9, 0, 0);

	texto('MSRP:', 12, 290, 0, 0, $arialNBold, $black, 8, 0, 1);
	texto($PRICE, 0, 290, 2, 181, $arialNBold, $black, 16, 0, 1);

	require_once('../includes/footer.php');
}
?>
