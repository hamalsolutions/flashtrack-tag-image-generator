<?php //   1      2          3            4          5      6      7
$correctos = array('QTY', 'STYLE', 'DEPT', 'MAJOR CLASS', 'SUB CLASS', 'COLOR', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'DI5614270');
	$DEPT = asignar(2, '147');
	$MASTERCLASS = asignar(3, '20');
	$SUBCLASS = asignar(4, '28');
	$COLOR = asignar(5, 'BLACK');
	$UPC = asignar(6, '808295812908');
	$PRICE = asignar(7, '$28.00');

	// Creacion del formato
	formato(150, 150, 255, 255, 255);
	setAsSticker(10);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arial70BD = fuente('Arial_70_Bold.ttf');
	// Introducimos los datos
	texto('KOHL\'S', 10, 20, 0, 0, $arialBold, $black, 9, 0, 0);

	texto('Kohls.com', 10, 30, 0, 0, $arial, $black, 6.5, 0, 0);

	$DCS = $DEPT . ' ' . $MASTERCLASS . ' ' . $SUBCLASS;

	texto($DCS, 0, 20, 2, 10, $arialBold, $black, 8, 0, 0);

	if (strlen($STYLE) > 11) {
		texto($STYLE, 10, 46, 0, 0, $arial70BD, $black, 8, 0, 0);
	} else {
		texto($STYLE, 10, 46, 0, 0, $arialBold, $black, 8, 0, 0);
	}

	if (strlen($COLOR) > 11) {
		texto($COLOR, 0, 46, 2, 10, $arial70BD, $black, 8, 0, 0);
	} else {
		texto($COLOR, 0, 46, 2, 10, $arialBold, $black, 8, 0, 0);
	}

	texto($PRICE, 0, 143, 2, 10, $arialBold, $black, 8.5, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 12, 48, 1.1, 68, 'UPC');

	barcodeTexto(2, 0, 0, 5, 'arialbd.ttf');

	require_once('../includes/footer.php');
}
?>