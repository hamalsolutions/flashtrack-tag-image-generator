<?php //                     1           2         3      4       5            6           7         8        9
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'SIZE', 'DEPT', 'COMPARABLE-PRICE', 'PRICE', 'SAVINGS', 'PCS');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'B3007JA-437');
	$COLOR = asignar(2, 'GREY');
	$UPC = asignar(3, '881759010713');
	$SIZE = asignar(4, 'S');
	$DEPT = asignar(5, '059');
	$COMPARABLE = asignar(6, '118.00');
	$PRICE = asignar(7, '29.97');
	$SAVINGS = asignar(8, '42%');
	$SET = asignar(9, '2 PC');

	// Creacion del formato
	formato(338, 300, 255, 255, 255);
	agujero(84.5, 25);
	agujero(253.5, 25);
	lineaVertical(169, 0, 300, $black, 1);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arialNB = fuente('arialnb.ttf');
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$logo = fuente('n.ttf');
	$arialBoldSlash = fuente('Arial_Slash_bld.ttf');

	// Introducimos los datos
	// Logo
	texto('3', 0, 60, 3, 170, $logo, $black, 14, 0, 0);
	texto('3', 169, 58, 3, -170, $logo, $black, 14, 0, 0);

	texto($STYLE, 15, 90, 0, 0, $arialBold, $black, 9, 0, 0);
	texto($STYLE, 0, 90, 3, -175, $arialBold, $black, 9, 0, 0);

	texto($COLOR, 15, 107, 0, 0, $arialBold, $black, 9, 0, 0);

	texto('DEPT: ' . $DEPT, 15, 198, 0, 0, $arialNB, $black, 11, 0, 0);

	$SETPCS = str_replace(' PC', '', $SET);
	texto($SETPCS . ' PC', 0, 220, 3, 170, $arialBold, $white, 10, 0, 0);
	texto($SETPCS . ' PC', 0, 220, 3, -175, $arialBold, $white, 10, 0, 0);

	texto($SIZE, 15, 240, 0, 0, $arialBold, $black, 13, 0, 0);
	texto($SIZE, 185, 240, 0, 0, $arialBoldSlash, $black, 13, 0, 0);

	perforacion(175, 30, 256);

	texto(sinSigno($PRICE), 0, 288, 2, 181, $arialBold, $black, 11, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 10, 90, 1.3, 64, 'UPC');

	barcodeTexto(3, -1, 2, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
