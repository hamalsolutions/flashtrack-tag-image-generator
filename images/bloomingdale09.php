<?php //  1       2      3     4            5          6
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'SIZE', 'COMPARE PRICE', 'PRICE');

require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'B23109-GWY');
	$COLOR = asignar(2, 'Grey');
	$UPC = asignar(3, '842618101515');
	$SIZE = asignar(4, '0/3');
	$COMPARE = asignar(5, '24.99');
	$PRICE = asignar(6, '14.99');

	// Creacion del formato
	formato(170, 300, 255, 255, 255);
	agujero(85, 25);
	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialNarrow = fuente('arialn.ttf');
	$arialBold = fuente('arialbd.ttf');
	$logoBloom = fuente('bloomingdales_Logo.ttf');
	$arialBoldSlash = fuente('Arial_Slash_bld.ttf');

	// Introducimos los datos

	texto('A', 16, 70, 0, 0, $logoBloom, $black, 45, 0, 0);
	texto('B', 65, 47, 0, 0, $logoBloom, $black, 10.5, 0, 0);

	texto($STYLE, 0, 95, 1, 0, $arialBold, $black, 9, 0, 0);

	texto($COLOR, 0, 115, 1, 0, $arialBold, $black, 8, 0, 0);

	texto($SIZE, 0, 220, 1, 0, $arialBold, $black, 10, 0, 0);

	texto('COMPARE AT', 15, 245, 0, 0, $arial, $black, 8, 0, 0);
	texto($COMPARE, 0, 245, 2, 15, $arialBoldSlash, $black, 8, 0, 1);

	texto($PRICE, 0, 290, 1, 0, $arial, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 15, 115, 1.2, 68, 'UPC');

	barcodeTexto(1, 0, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
