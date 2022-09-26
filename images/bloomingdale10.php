<?php //                     1        2       3      4            5            6        7
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'SIZE', 'COMPARE PRICE', 'PRICE', 'PCS-SET');

require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'BST23114-GYU');
	$COLOR = asignar(2, 'Grey');
	$UPC = asignar(3, '842618114348');
	$SIZE = asignar(4, '3/6');
	$COMPARE = asignar(5, '29.99');
	$PRICE = asignar(6, '19.99');
	$SET = asignar(7, '2 PC SET');

	// Creacion del formato
	//formato(340	, 300, 255, 255, 255);
	//agujero(85, 25);
	//agujero(255, 25);
	formato(338, 300, 255, 255, 255);
	agujero(84.5, 25);
	agujero(253.5, 25);
	lineaVertical(169, 0, 300, $black, 1);

	// Colores a usar
	$black = color(0, 0, 0);
	$white = color(255, 255, 255);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialNarrow = fuente('arialn.ttf');
	$arialBold = fuente('arialbd.ttf');
	$logoBloom = fuente('bloomingdales_Logo.ttf');
	$arialBoldSlash = fuente('Arial_Slash_bld.ttf');

	// Introducimos los datos

	texto('A', 16, 70, 0, 0, $logoBloom, $black, 45, 0, 0);
	texto('B', 65, 47, 0, 0, $logoBloom, $black, 10.5, 0, 0);
	texto('A', 16, 70, 2, 103, $logoBloom, $black, 45, 0, 0);
	texto('B', 65, 47, 2, 15, $logoBloom, $black, 10.5, 0, 0);

	texto($STYLE, 0, 84, 3, 170, $arialBold, $black, 9, 0, 0);
	texto($STYLE, 169, 120, 3, -170, $arialBold, $black, 9, 0, 0);

	texto($COLOR, 0, 104, 3, 170, $arialBold, $black, 8, 0, 0);
	texto($COLOR, 169, 148, 3, -170, $arialBold, $black, 8, 0, 0);

	cajaRellena(35, 112, 100, 19, $black, $black, 0);
	cajaRellena(205, 190, 100, 19, $black, $black, 0);
	$SETPCS = str_replace(' PC SET', '', $SET);
	texto($SETPCS . ' PC SET', 0, 126, 3, 170, $arialBold, $white, 9, 0, 0);
	texto($SETPCS . ' PC SET', 0, 204, 3, -175, $arialBold, $white, 9, 0, 0);

	texto($SIZE, 0, 220, 3, 170, $arialBold, $black, 10, 0, 0);
	texto($SIZE, 169, 178, 3, -170, $arialBold, $black, 10, 0, 0);

	texto('COMPARE AT', 15, 245, 0, 0, $arial, $black, 8, 0, 0);
	texto($COMPARE, 0, 245, 2, 181, $arialBoldSlash, $black, 9, 0, 1);

	texto($PRICE, 0, 290, 3, 170, $arial, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 15, 115, 1.2, 68, 'UPC');

	barcodeTexto(1, 0, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
