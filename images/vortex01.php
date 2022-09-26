<?php //                    1      2      3       4       5
$correctos = array('QTY', 'SKU', 'COO', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');
if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$SKU = asignar(1, '121-13-SBHS');
	$COO = asignar(2, 'Made in El Salvador');
	$SIZE = asignar(3, 'S');
	$UPC = asignar(4, '843829117692');
	$PRICE = asignar(5, '19.99');

	// Creacion del formato
	formato(150, 100, 255, 255, 255);
	setAsSticker(12);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arialBold = fuente('arialbd.ttf');

	// Introducimos los datos
	texto($SIZE, 14, 14, 0, 0, $arialBold, $black, 8,0,0);
	texto($SKU, 0, 29, 1, 0, $arialBold, $black, 8,0,0);
	texto($COO, 0, 43, 1, 0, $arialBold, $black, 8,0,0);
	texto($PRICE, 0, 14, 2, 14, $arialBold, $black, 8,0,1);

	// Creacion del Barcode
	barcode($UPC, 18, 49, 1, 36, 'UPC');

	barcodeTexto(1, -1, -2, 3, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
