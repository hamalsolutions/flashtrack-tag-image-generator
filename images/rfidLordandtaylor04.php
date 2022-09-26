<?php //                     1        2       3       4      5       6
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE', 'DESC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'ACDR95030B');
	$COLOR = asignar(2, 'BLUE-PCH FLR');
	$SIZE = asignar(3, 'XS');
	$UPC = asignar(4, '191293041754');
	$PRICE = asignar(5, '$128.00');
	$DESC = asignar(6, '');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arial70BD = fuente('Arial_70_Bold.ttf');
	$arialNarrowBold = fuente('arialnb.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos

	agujero(75, 25);

	texto('E', 110, 32, 0, 0, $logo, $black, 22, 0, 0);

	if (strlen($DESC) <> '') {
		// if the field DESC is not EMPTY then display the Value in DESC field
		texto($DESC, 0, 65, 1, 0, $arialNarrowBold, $black, 10, 0, 0);
	} else {

		// This is the default Value in case the DESC Field is EMPTY
		texto('ASTR the Label', 0, 65, 1, 0, $arialNarrowBold, $black, 10, 0, 0);
	}

	texto('STYLE', 7, 88, 0, 0, $arialBold, $black, 9, 0, 0);
	if (strlen($STYLE) > 9) {
		texto($STYLE, 8, 103, 0, 0, $arial70BD, $black, 9.5, 0, 0);
	} else {
		texto($STYLE, 8, 103, 0, 0, $arialNarrowBold, $black, 9, 0, 0);
	}

	texto('COLOR', 0, 88, 2, 7, $arialBold, $black, 9, 0, 0);
	if (strlen($COLOR) > 9) {
		texto($COLOR, 0, 103, 2, 6, $arial70BD, $black, 9.5, 0, 0);
	} else {
		texto($COLOR, 0, 103, 2, 6, $arialNarrowBold, $black, 9.5, 0, 0);
	}

	// Creacion del Barcode
	barcode($UPC, 12, 106, 1.1, 58, 'UPC');
	barcodeTexto(2, 0, -2, 7, 'arial.ttf');

	texto('SIZE  ' . $SIZE, 0, 200, 1, 0, $arialNarrowBold, $black, 12, 0, 0);

	texto($PRICE, 0, 310, 1, 0, $arialBold, $black, 14, 0, 1);

	require_once('../includes/footer.php');
}
?>
