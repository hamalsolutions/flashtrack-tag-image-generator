<?php //   1       2      3      4      5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'X24628588');
	$COLOR = asignar(2, 'H GREY');
	$SIZE = asignar(3, '1X');
	$UPC = asignar(4, '190172330613');
	$PRICE = asignar(5, '$55.00');

	// Creacion del formato
	formato(169, 300, 255, 255, 255);

	agujero(85, 25);
	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNarrowBold = fuente('arialnb.ttf');

	// Introducimos los datos
	texto('LORD & TAYLOR', 0, 58, 1, 0, $arialBold, $black, 10, 0, 0);
	texto('STYLE', 10, 80, 0, 0, $arialNarrowBold, $black, 9, 0, 0);
	texto($STYLE, 10, 95, 0, 0, $arialNarrowBold, $black, 8, 0, 0);

	texto('COLOR', 0, 80, 2, 10, $arialNarrowBold, $black, 9, 0, 0);
	texto($COLOR, 0, 95, 2, 10, $arialNarrowBold, $black, 8, 0, 0);

	texto('SIZE:  ' . $SIZE, 0, 210, 1, 0, $arialBold, $black, 9, 0, 0);

	perforacion(169, 300, 250);

	texto($PRICE, 0, 285, 1, 0, $arialNarrowBold, $black, 16, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 9, 82, 1.3, 84, 'UPC');
	barcodeTexto(2, 0, 2, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
