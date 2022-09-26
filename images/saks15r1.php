<?php //     1      2       3       4     5          6           7        8
$correctos = array('QTY', 'DEPT', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'COMPARE PRICE', 'PRICE', 'SAVINGS');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DEPT = asignar(1, '959');
	$STYLE = asignar(2, 'LOAFER');
	$COLOR = asignar(3, 'BROWN');
	$SIZE = asignar(4, '11.5');
	$UPC = asignar(5, '813272021075');
	$COMPARE = asignar(6, '400.00');
	$PRICE = asignar(7, '199.99');
	$SAVINGS = asignar(8, '50% SAVINGS');

	// Creacion del formato
	formato(170, 300, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	agujero(85, 25);
	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialBoldSlash = fuente('Arial_Slash_bld.ttf');

	// Introducimos los datos
	texto($DEPT, 0, 60, 1, 0, $arialBold, $black, 9, 0, 0);
	texto($STYLE, 0, 78, 1, 0, $arialBold, $black, 9, 0, 0);
	texto($COLOR, 0, 97, 1, 0, $arialBold, $black, 9, 0, 0);
	texto('SIZE: ' . $SIZE, 0, 116, 1, 0, $arialBold, $black, 9, 0, 0);
	texto('MARKET PRICE', 0, 202, 1, 0, $arialBold, $black, 7, 0, 0);
	texto($COMPARE, 0, 220, 1, 0, $arialBoldSlash, $black, 10, 0, 1);
	texto('YOU PAY', 0, 240, 1, 0, $arialBold, $black, 7, 0, 0);
	texto($PRICE, 0, 260, 1, 0, $arialBold, $black, 11, 0, 1);

	$TRIMSAVINGS = str_replace(strtoupper('SAVINGS'), '', strtoupper($SAVINGS));
	texto(trim($TRIMSAVINGS) . ' Savings', 0, 284, 1, 0, $arialBold, $black, 9, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 16, 104, 1.2, 66, 'UPC');
	barcodeTexto(1, 0, 0, 6, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
