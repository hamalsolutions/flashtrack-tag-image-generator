<?php //                     1        2        3      4      5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'NAME');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'JBST1600');
	$COLOR = asignar(2, 'LGBL');
	$SIZE = asignar(3, '4');
	$UPC = asignar(4, '191271424937');
	$NAME = asignar(5, 'SHORE BREAK');

	// Creacion del formato
	formato(200, 200, 255, 255, 255);

	setAsSticker(15);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arialBold = fuente('arialbd.ttf');
	$arialNB = fuente('arialnb.ttf');

	// Introducimos los datos
	texto('Name:', 12, 30, 0, 0, $arialBold, $black, 9, 0, 0);

	if (strlen($NAME) > 18) {
		texto($NAME, 54, 30, 0, 0, $arialNB, $black, 9.5, 0, 0);
	} else {
		texto($NAME, 54, 30, 0, 0, $arialBold, $black, 9.5, 0, 0);
	}

	texto('Style:', 12, 50, 0, 0, $arialBold, $black, 9, 0, 0);
	texto($STYLE, 54, 50, 0, 0, $arialBold, $black, 9.5, 0, 0);

	texto('Color:', 12, 70, 0, 0, $arialBold, $black, 9, 0, 0);
	texto($COLOR, 54, 70, 0, 0, $arialBold, $black, 9.5, 0, 0);

	texto('Size:', 12, 90, 0, 0, $arialBold, $black, 9, 0, 0);
	texto($SIZE, 54, 90, 0, 0, $arialBold, $black, 9.5, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 16, 74, 1.4, 100, 'UPC');

	barcodeTexto(1, 0, -4, 6, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>