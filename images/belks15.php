<?php //      1        2       3       4       5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, '2SW80050');
	$COLOR = asignar(2, 'BLACK');
	$SIZE = asignar(3, 'S');
	$UPC = asignar(4, '191764200352');
	$PRICE = asignar(5, '$18.00 2 For $24.00');

	// Creacion del formato
	formato(170, 300, 255, 255, 255);
	// Colores a usar
	$black = color(0, 0, 0);
	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	// Introducimos los datos
	agujero(85, 25);

	texto('BELK.COM', 0, 215, 1, 0, $arialBold, $black, 7, 0, 0);

	texto('STYLE: ' . $STYLE, 0, 55, 1, 0, $arialBold, $black, 8, 0, 0);

	texto($SIZE, 0, 110, 1, 0, $arialBold, $black, 15, 0, 0);

	texto('COLOR: ' . $COLOR, 0, 77, 1, 0, $arialBold, $black, 8, 0, 0);

	$priceLines = ['', ''];
	if (strpos($PRICE, ' 2 ')) {
		$priceLines = explode(' 2 ', $PRICE);
		texto($priceLines[0], 0, 260, 1, 0, $arialBold, $black, 10, 0, 0);
		texto(' 2 ' . $priceLines[1], 0, 278, 1, 0, $arialBold, $black, 10, 0, 0);
	}

	// texto(' 2 '.$priceLines[1], 0, 282, 1, 0, $arialBold, $black, 10, 0, 0);

	barcode($UPC, 10, 95, 1.3, 100, 'UPC');

	barcodeTexto(.7, -1, -4, 6, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>