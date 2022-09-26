<?php //                     1        2         3       4      5       6
$correctos = array('QTY', 'STYLE', 'GROUP', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'MT7WB1B');
	$GROUP = asignar(2, '03FSH');
	$COLOR = asignar(3, 'COTTON CANDY PLAID');
	$SIZE = asignar(4, 'XL');
	$UPC = asignar(5, '190172719555');
	$PRICE = asignar(6, '59.00');

	// Creacion del formato
	formato(170, 300, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);
	$vicsColor = colorVic($SIZE);

	agujero(85, 25);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNb = fuente('arialnb.ttf');

	// Introducimos los datos
	texto('STYLE ', 10, 58, 0, 0, $arialBold, $black, 9, 0, 0);
	texto($STYLE, 58, 58, 0, 0, $arialBold, $black, 9, 0, 0);

	texto('GROUP ', 10, 78, 0, 0, $arialBold, $black, 9, 0, 0);
	texto($GROUP, 58, 78, 0, 0, $arialBold, $black, 9, 0, 0);

	texto('COLOR ', 10, 98, 0, 0, $arialBold, $black, 9, 0, 0);

	IF (strlen($COLOR) > 13) {
		texto($COLOR, 58, 98, 0, 0, $arialNb, $black, 9, 0, 0);
	} else {
		texto($COLOR, 58, 98, 0, 0, $arialBold, $black, 9, 0, 0);

	}

	texto('SIZE  ', 12, 118, 0, 0, $arialBold, $black, 9, 0, 0);
	texto($SIZE, 60, 118, 0, 0, $arialBold, $black, 9, 0, 0);

	cajaRellena(1, 130, 169, 25, $vicsColor, $vicsColor);

	perforacion(169, 300, 250);

	texto($PRICE, 0, 284, 1, 0, $arialBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 20, 150, 1.1, 84, 'UPC');

	barcodeTexto(2, 0, -4, 7, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
