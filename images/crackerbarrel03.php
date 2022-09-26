<?php //      1            2        3       4
$correctos = array('QTY', 'DESCRIPTION', 'BARCODE', 'DEPT', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	$DESCRIPTION = asignar(1, 'Pass The Corn Bib');
	$BARCODE = asignar(2, '628365');
	$DEPT = asignar(3, '245');
	$PRICE = asignar(4, '9.99');

	// Creacion del formato
	formato(150, 100, 255, 255, 255);
	setAsSticker(12);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');

	// Introducimos los datos
	texto($DESCRIPTION, 0, 16, 1, 0, $arial, $black, 7, 0, 0);

	texto($DEPT, 10, 78, 0, 0, $arial, $black, 6.5, 0, 0);
	texto($PRICE, 0, 78, 2, 10, $arialBold, $black, 9, 0, 1);

	texto('Distributed by: Cracker Barrel', 0, 88, 1, 0, $arial, $black, 5, 0, 0);
	texto('900 Hutchinson Place, Lebanon TN 37090', 0, 96, 1, 0, $arial, $black, 5, 0, 0);

	// Creacion del Barcode
	barcode($BARCODE, 20, 16, 1.4, 40, '128');

	barcodeTexto(1, 10, 0, 3, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
