<?php //    1     2         3           4
$correctos = array('QTY', 'PO', 'SKU');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$PO = asignar(1, 'W0221912');
	$SKU = asignar(2, '00001506336');

	// Creacion del formato
	formato(400, 300, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');

	// Introducimos los datos
	setAsSticker(15);

	$DATA = $PO . ":" . $SKU;
	// Creacion del Barcode
	barcode($DATA, 18, 30, 1.7, 205, '128');
	texto($DATA, 0, 255, 1, 0, $arial, $black, 12, 0, 0);

	require_once('../includes/footer.php');
}
?>