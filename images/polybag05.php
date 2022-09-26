<?php //                    1      2      3        4         5
$correctos = array('QTY', 'STYLE', 'PCS-SET', 'COLOR', 'SIZE', 'UPC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'M201CG32');
	$PCS = asignar(2, '2 PC');
	$COLOR = asignar(3, 'MAGENTA');
	$SIZE = asignar(4, 'M');
	$UPC = asignar(5, '123456789012');

	// Creacion del formato
	formato(200, 150, 255, 255, 255);

	setAsSticker(10);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');

	// Introducimos los datos

	if (strlen($PCS) <> 0) {
		texto($STYLE, 10, 25, 0, 0, $arialBold, $black, 9, 0, 0);
		texto($PCS, 10, 43, 0, 0, $arialBold, $black, 9, 0, 0);
	} else {
		texto($STYLE, 10, 43, 0, 0, $arialBold, $black, 9, 0, 0);
	}

	texto($COLOR, 10, 60, 0, 0, $arialBold, $black, 9, 0, 0);
	texto($SIZE, 10, 77, 0, 0, $arialBold, $black, 9, 0, 0);

	barcode($UPC, 34, 76, 1.1, 50, 'UPC');
	barcodeTexto(1, 0, 0, 4, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
