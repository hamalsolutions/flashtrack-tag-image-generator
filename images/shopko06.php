<?php //   1      2       3      4      5      6
$correctos = array('QTY', 'COLOR', 'SIZE', 'SKU', 'UPC', 'PRICE', 'DEPT');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	//$COLOR = asignar(1,'KELLY GREEN HEATHER');
	$COLOR = asignar(1, 'Electric Lime');
	$SIZE = asignar(2, 'M');
	$SKU = asignar(3, '164-73449');
	$UPC = asignar(4, '829268997682');
	$PRICE = asignar(5, '19.00');
	$DEPT = asignar(6, '194');
                
	// Creacion del formato
	formato(126, 228, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arialNB = fuente('arialnb.ttf');
	$arial70B = fuente('Arial_70_Bold.ttf');

	// Introducimos los datos
	texto('DEPT', 10, 30, 0, 0, $arialNB, $black, 7, 0, 0);

	texto($DEPT, 39, 30, 0, 0, $arialNB, $black, 7, 0, 0);

	texto('SIZE:', 10, 56, 0, 0, $arialNB, $black, 7, 0, 0);

	texto($SIZE, 35, 56, 0, 0, $arialNB, $black, 10, 0, 0);

	texto('COLOR:', 10, 76, 0, 0, $arialNB, $black, 7, 0, 0);

	if (strlen($COLOR) < 14) {
		texto($COLOR, 44, 76, 0, 0, $arialNB, $black, 7.5, 0, 0);
	} else {
		texto($COLOR, 44, 76, 0, 0, $arial70B, $black, 7.5, 0, 0);
	}

	texto('SKU ' . $SKU, 0, 96, 1, 0, $arialNB, $black, 7, 0, 0);

	texto($PRICE, 0, 215, 1, 0, $arialNB, $black, 24, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 7, 103, 1, 40, 'UPC');

	barcodeTexto(1, 1, 1, 0, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
