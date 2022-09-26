<?php //                     1           2         3      4       5            6           7         8
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'SIZE', 'DEPT', 'COMPARABLE-PRICE', 'PRICE', 'SAVINGS');
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

	// Creacion del formato
	formato(170, 300, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arialNB = fuente('arialnb.ttf');
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$logo = fuente('NordstromRack_Logo-10-19-2016.ttf');
	$arialBoldSlash = fuente('Arial_Slash_bld.ttf');

	// Introducimos los datos

	agujero(85, 25);

	texto('n', 0, 60, 1, 0, $logo, $black, 13, 0, 0);

	texto($STYLE, 15, 90, 0, 0, $arialBold, $black, 9, 0, 0);

	texto($COLOR, 15, 107, 0, 0, $arialBold, $black, 9, 0, 0);

	texto('DEPT: ' . $DEPT, 15, 198, 0, 0, $arialNB, $black, 11, 0, 0);

	texto($SIZE, 15, 220, 0, 0, $arialNB, $black, 13, 0, 0);

	texto('COMPARABLE VALUE:', 10, 274, 0, 0, $arial, $black, 6, 0, 0);
	texto(sinSigno($COMPARABLE), 0, 274, 2, 10, $arialBoldSlash, $black, 11, 0, 1);

	perforacion(175, 30, 256);

	texto(suffix($SAVINGS, ' Savings'), 10, 292, 0, 0, $arial, $black, 7, 0, 0);
	texto(sinSigno($PRICE), 0, 292, 2, 10, $arialBold, $black, 11, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 10, 90, 1.3, 64, 'UPC');

	barcodeTexto(3, -1, 2, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
