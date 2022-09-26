<?php //   1      2
$correctos = array('QTY', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$UPC = asignar(1, '63677604318');
	$MSRP = asignar(2, '24.00');

	// Creacion del formato
	formato(150, 150, 255, 255, 255);
	setAsSticker(10);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arialBold = fuente('arialbd.ttf');

	// Introducimos los datos
	texto('$' . sinSigno($MSRP), 0, 135, 1, 0, $arialBold, $black, 10, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 13, 30, 1.1, 70, 'UPC');

	barcodeTexto(2, 0, -1, 5, 'arialbd.ttf');

	require_once('../includes/footer.php');
}
?>