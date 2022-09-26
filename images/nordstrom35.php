<?php //                    1       2       3      4        5      6
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'DEPT', 'SIZE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'DR19572RY7');
	$COLOR = asignar(2, 'D608 BLUSH');
	$UPC = asignar(3, '190475132495');
	$DEPT = asignar(4, '164');
	$SIZE = asignar(5, 'XS');
	$PRICE = asignar(6, '24.97');

	// Creacion del formato
	formato(175, 300, 255, 255, 255);
	agujero(87, 25);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$logo = fuente('nordstrom_2010.ttf');
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');

	// Introducimos los datos
	texto('N', 0, 64, 1, 0, $logo, $black, 22, 0, 0);

	texto($STYLE, 12, 85, 0, 0, $arialBold, $black, 9, 0, 0);

	texto($COLOR, 0, 105, 2, 12, $arialBold, $black, 9, 0, 0);

	texto('Size: ' . $SIZE, 12, 190, 0, 0, $arial, $black, 13, 0, 0);

	texto('Dept: ' . $DEPT, 12, 215, 0, 0, $arial, $black, 11, 0, 0);
	perforacion(175, 300, 250);
	perforacion(175, 300, 275);

	texto($PRICE, 0, 294, 2, 14, $arialBold, $black, 11, 0, 0);
	//texto(sinSigno($PRICE), 0, 282, 2, 10, $arialBold, $black, 14, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 16, 98, 1.2, 55, 'UPC');
	barcodeTexto(2, 0, -4, 8, 'OCR-B_SB.ttf');

	require_once('../includes/footer.php');
}
?>