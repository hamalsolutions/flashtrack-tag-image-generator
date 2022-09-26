<?php //                    1          2         3           4
$correctos = array('QTY', 'SKU', 'DESCRIPTION');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$SKU = asignar(1, 'X001AJ76GH');
	$DESCRIPTION = asignar(2, 'New - Frozen Olaf Big Face Smiling T-Shirt (Medium, White)');

	// Creacion del formato
	formato(200, 150, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialNBold = fuente('arialnb.ttf');
	// Introducimos los datos
	setAsSticker(15);

	$DATA = $SKU;
	// Creacion del Barcode
	barcode($DATA, 18, 20, 1.1, 70, '128');
	texto($DATA, 0, 100, 1, 0, $arial, $black, 6, 0, 0);
	parrafo($DESCRIPTION, 15, 115, 0, 0, $arial, $black, 6, 0, 50, 10);

	require_once('../includes/footer.php');
}
?>