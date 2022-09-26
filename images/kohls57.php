<?php //                   1          2           3          4       5          6         7      8
$correctos = array('QTY', 'DEPT', 'MAJOR CLASS', 'SUB CLASS', 'STYLE', 'COLOR', 'DESCRIPTION', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DEPT = asignar(1, '323');
	$MAJORCLASS = asignar(2, '03');
	$SUBCLASS = asignar(3, '20');
	$STYLE = asignar(4, 'NL6200K');
	$COLOR = asignar(5, 'COLOR');
	$DESCRIPTION = asignar(6, 'Item Description');
	$UPC = asignar(7, '123456789012');
	$PRICE = asignar(8, '$29.00');

	// Creacion del formato
	formato(200, 150, 255, 255, 255);
	setAsSticker(12);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arial70BD = fuente('Arial_70_Bold.ttf');
	$LOGO = fuente('KohlsLogo-B.ttf');
	// Introducimos los datos
	texto('k', 10, 20, 0, 0, $LOGO, $black, 26, 0, 0);

	texto('Kohls.com', 10, 32, 0, 0, $arial, $black, 9, 0, 0);

	$DCS = $DEPT . '  ' . $MAJORCLASS . '  ' . $SUBCLASS;

	texto($DCS, 0, 20, 2, 10, $arialBold, $black, 12, 0, 0);

	//if (strlen($STYLE) > 11) {
	//	texto($STYLE, 10, 46, 0, 0, $arial70BD, $black, 8, 0, 0);
	//} else {
	texto($STYLE, 10, 48, 0, 0, $arialBold, $black, 10, 0, 0);
	texto($DESCRIPTION, 0, 60, 1, 0, $arialBold, $black, 8, 0, 0);
	//}

	if (strlen($COLOR) > 11) {
		texto($COLOR, 0, 34, 2, 10, $arial70BD, $black, 10, 0, 0);
	} else {
		texto($COLOR, 0, 34, 2, 10, $arial, $black, 9, 0, 0);
	}

	texto($PRICE, 0, 143, 2, 10, $arialBold, $black, 12, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 12, 44, 1.5, 72, 'UPC');

	barcodeTexto(2, 0, 0, 5, 'arialbd.ttf');

	require_once('../includes/footer.php');
}
?>