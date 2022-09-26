<?php //                     1        2        3      4       5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'STRW1234');
	$COLOR = asignar(2, 'BLACK');
	$SIZE = asignar(3, 'M');
	$UPC = asignar(4, '196033252384');
	$PRICE = asignar(5, '24.00');

	// Creacion del formato
	//formato(100, 325, 255, 255, 255);

	formato(325, 100, 255, 255, 255,90);
	$anguloDeRotacion = 90;
	agujero(25, 50);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNarrowBold = fuente('arialnb.ttf');
	$logo = fuente('EPC_Logo.ttf');

	texto('E', 66, 30, 0, 0, $logo, $black, 20, 90, 0);
	texto('BELK', 0, 64, 1, 0, $arialBold, $black, 15, 90, 0);
	texto('Style #:', 12, 86, 0, 0, $arial, $black, 7.5, 90, 0);
	texto('Color:', 12, 118, 0, 0, $arial, $black, 7.5, 90, 0);
	texto('BELK.COM', 0, 294, 1, 0, $arialBold, $black, 10.5, 90, 0);
	If (strlen($STYLE) < 18) {
		texto($STYLE, 0, 102, 1, 0, $arialBold, $black, 8.5, 90, 0);
	} else {
		texto($STYLE, 0, 102, 1, 0, $arialNarrowBold, $black, 8.5, 90, 0);
	}

	If (strlen($COLOR) < 18) {
		texto($COLOR, 0, 132, 1, 0, $arialBold, $black, 8.5, 90, 0);
	} else {
		texto($COLOR, 0, 132, 1, 0, $arialNarrowBold, $black, 8.5, 90, 0);
	}
	texto($SIZE, 0, 154, 1, 0, $arialNarrowBold, $black, 12, 90, 0);
	//perforacion(150,325,300);
	texto($PRICE, 0, 316, 1, 0, $arialNarrowBold, $black, 11, 90, 1);

	// Creacion del Barcode
	//barcode($UPC, 18, 182, 1, 42, 'UPC');
	//barcodeTexto(2, 0, -2, 7, 'arial.ttf');
	barcode($UPC, 160, 22, 1, 50, 'UPC');

	barcodeTexto(2, 0, -3, 7, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
