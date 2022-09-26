<?php //                    1      2       3        4
$correctos = array('QTY', 'UPC', 'STYLE', 'SIZE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$UPC = asignar(1, '123456789012');
	$STYLE = asignar(2, 'Superhero');
	$SIZE = asignar(3, 'S/P');
	$PRICE = asignar(4, '20.00');

	// Creacion del formato
	formato(150, 250, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	agujero(75, 25);
	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('arialnb.ttf');

	// Creacion del Barcode
	barcode($UPC, 12, 60, 1.1, 78, 'UPC');

	barcodeTexto(1, 0, 0, 5, 'arial.ttf');

	// Introducimos los datos
	texto($STYLE, 0, 168, 1, 0, $arialBold, $black, 10, 0, 0);

	texto($SIZE, 13, 240, 0, 0, $arialBold, $black, 12, 0, 0);

	texto($PRICE, 0, 240, 2, 12, $arialNBold, $black, 12, 0, 1);

	require_once('../includes/footer.php');
}
?>
