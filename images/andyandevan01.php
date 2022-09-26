<?php //                    1           2           3          4          5      6         7         8
$correctos = array('QTY', 'STYLE', 'DESCRIPTION', 'COLOR', 'UPC', 'SIZE', 'PCS-SET', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	$STYLE = asignar(1, 'ST27118A-LBC');
	$DESCRIPTION = asignar(2, 'Seersucker 2-Piece Playsuit');
	$COLOR = asignar(3, 'LIGHT BLUE');
	//$COLORCODE = asignar(4, '410');
	$UPC = asignar(4, '849115096023');
	$SIZE = asignar(5, '3/6');
	$SET = asignar(6, '2 PC SET');
	$PRICE = asignar(7, '59.00');

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
	$arial80 = fuente('Arial_80.ttf');
	$arialNBold = fuente('arialnb.ttf');
	$timesBold = fuente('timesbd.ttf');

	// Introducimos los datos
	texto('ANDY & EVAN', 0, 58, 3, 170, $timesBold, $black, 14, 0, 0);
	texto('ANDY & EVAN', 169, 58, 3, -170, $timesBold, $black, 14, 0, 0);

	texto($STYLE, 0, 78, 3, 170, $arialNBold, $black, 11, 0, 0);
	texto($STYLE, 169, 78, 3, -170, $arialNBold, $black, 11, 0, 0);
	if (strlen($DESCRIPTION) < 29) {
		texto($DESCRIPTION, 0, 93, 3, 170, $arial, $black, 8, 0, 0);
		texto($DESCRIPTION, 169, 93, 3, -170, $arial, $black, 8, 0, 0);
	} else {
		texto($DESCRIPTION, 0, 93, 3, 170, $arial80, $black, 8, 0, 0);
		texto($DESCRIPTION, 169, 93, 3, -170, $arial80, $black, 8, 0, 0);
	}
	texto($COLOR, 14, 116, 0, 0, $arialBold, $black, 9, 0, 0);
	texto($COLOR, 169, 116, 3, -170, $arialBold, $black, 9, 0, 0);

	//texto($COLORCODE, 0, 116, 2, 181, $arialBold, $black, 9, 0, 0);
	//texto($COLORCODE, 0, 116, 2, 12, $arialBold, $black, 9, 0, 0);

	cajaRellena(35, 226, 100, 19, $black, $black, 0);
	cajaRellena(205, 226, 100, 19, $black, $black, 0);

	$SETPCS = str_replace(' PC SET', '', $SET);
	texto($SETPCS . ' PC SET', 0, 241, 3, 170, $arialBold, $white, 10, 0, 0);
	texto($SETPCS . ' PC SET', 0, 241, 3, -175, $arialBold, $white, 10, 0, 0);

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
