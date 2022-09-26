<?php //   1       2       3      4      5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'MD052GR');
	$COLOR = asignar(2, 'SAGE W4669');
	$SIZE = asignar(3, 'S');
	$UPC = asignar(4, '190172396923');
	$PRICE = asignar(5, '69.00');

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
	texto('STYLE ', 12, 78, 0, 0, $arialBold, $black, 9, 0, 0);
	texto($STYLE, 60, 78, 0, 0, $arialBold, $black, 9, 0, 0);

	texto('COLOR ', 12, 98, 0, 0, $arialBold, $black, 9, 0, 0);

	IF (strlen($COLOR) > 13) {
		texto($COLOR, 60, 98, 0, 0, $arialNb, $black, 9, 0, 0);
	} else {
		texto($COLOR, 60, 98, 0, 0, $arialBold, $black, 9, 0, 0);

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
