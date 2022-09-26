<?php //       1         2         3          4        5      6
$correctos = array('QTY', 'DESCRIPTION', 'DEPT', 'MASTERSKU', 'BABYSKU', 'SIZE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DESCRIPTION = asignar(1, 'Sh Sequin Sweater');
	$DEPT = asignar(2, '237');
	$MASTERSKU = asignar(3, '565810');
	$BABYSKU = asignar(4, '565811');
	$SIZE = asignar(5, 'Medium');
	$PRICE = asignar(6, '12.99');

	// Creacion del formato
	formato(276, 225, 255, 255, 255);
	agujero(69, 25);
	agujero(207, 25);
	lineaVertical(138, 0, 225, $black, 1);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNarrowBold = fuente('arialnb.ttf');

	// Introducimos los datos
	parrafo($DESCRIPTION, 0, 50, 3, 138, $arial, $black, 9, 0, 18, 12, FALSE);

	texto($DEPT, 10, 86, 0, 0, $arial, $black, 10, 0, 0);
	texto($MASTERSKU, 0, 86, 2, 148, $arial, $black, 10, 0, 0);

	texto('Distributed by:', 138, 94, 3, -138, $arialNarrowBold, $black, 9, 0, 0);
	texto('CBOCS Distribution Inc.', 138, 108, 3, -138, $arialNarrowBold, $black, 9, 0, 0);
	texto('900 Hutchinson Place', 138, 122, 3, -138, $arialNarrowBold, $black, 9, 0, 0);
	texto('Lebanon, TN 37090', 138, 136, 3, -138, $arialNarrowBold, $black, 9, 0, 0);

	texto($SIZE, 0, 186, 3, 138, $arialBold, $black, 12, 0, 0);

	// Creacion del Barcode
	barcode($BABYSKU, 12, 60, 1.5, 80, '128');
	texto($BABYSKU, 0, 156, 3, 138, $arial, $black, 10, 0, 0);

	texto($PRICE, 0, 216, 2, 148, $arialBold, $black, 14, 0, 1);

	require_once('../includes/footer.php');
}
?>
