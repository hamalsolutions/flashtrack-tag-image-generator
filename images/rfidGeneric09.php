<?php //   1       2       3           4      5
$correctos = array('QTY', 'SIZE', 'DPCI', 'COLOR', 'STYLE', 'UPC', 'PRICE');

require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$SIZE = asignar(1, 'OSFA');
	$DPCI = asignar(2, '040 10 1813');
	$COLOR = asignar(3, 'BLACK/CHAR HTHR');
	$STYLE = asignar(4, 'ZM6LBNMVL');
	$UPC = asignar(5, '190371831355');
	$PRICE = asignar(6, '4.98');

	// Creacion del formato
	formato(197, 72, 255, 255, 255);
	setAsSticker(10);
	setAsSticker(15);
	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arial70Bd = fuente('Arial_70_Bold.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	texto($SIZE, 0, 12, 1, 0, $arialBold, $black, 8, 90, 0);
	lineaVertical(15, 0, 70, $black, 1);

	texto($DPCI, 0, 26, 1, 0, $arialBold, $black, 7, 90, 0);
	lineaVertical(30, 0, 70, $black, 1);

	texto($COLOR, 0, 41, 1, 0, $arial70Bd, $black, 7, 90, 0);
	texto($STYLE, 0, 51, 1, 0, $arial70Bd, $black, 7, 90, 0);
	lineaVertical(53, 0, 70, $black, 1);

	texto('E', 70, 65, 0, 0, $logo, $black, 10, 0, 0);

	lineaVertical(176, 0, 70, $black, 1);
	texto($PRICE, 0, 190, 1, 0, $arialBold, $black, 7, 90, 1);

	// Creacion del Barcode
	barcode($UPC, 54, 10, 1, 30, 'UPC');

	texto(formatizarTexto('12 345 61 2345 6', $UPC), 72, 52, 0, 0, $arial, $black, 8, 0, 0);

	require_once('../includes/footer.php');
}
?>
