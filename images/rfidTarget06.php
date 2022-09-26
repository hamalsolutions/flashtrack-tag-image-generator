<?php //                    1        2        3       4        5       6       7       8        9       10
$correctos = array('QTY', 'SIZE', 'COLOR', 'STYLE', 'DEPT', 'CLASS', 'ITEM', 'UPC', 'MISC1', 'MISC2', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$SIZE = asignar(1, '12M');
	$COLOR = asignar(2, 'BLACK');
	$STYLE = asignar(3, '31270736');
	$DEPT = asignar(4, '033');
	$CLASS = asignar(5, '13');
	$ITEM = asignar(6, '4523');
	$UPC = asignar(7, '490331345237');
	$MISC1 = asignar(8, '');
	$MISC2 = asignar(9, '');
	$PRICE = asignar(10, '$8.99');

	// Creacion del formato
	formato(150, 250, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos

	agujero(75, 25);

	texto('E', 0, 30, 2, 10, $logo, $black, 22, 0, 0);

	texto('SIZE', 0, 46, 1, 0, $arial, $black, 7, 0, 0);

	$SIZE = strtoupper($SIZE); // Convert size to Upper Case

	if (strstr($SIZE, '(')) {
		$SIZE = str_replace(" ", "", $SIZE);

		$size1 = substr($SIZE, 0, strpos($SIZE, '('));
		texto($size1, 0, 62, 1, 0, $arialBold, $black, 11, 0, 0);

		$size2 = substr($SIZE, strpos($SIZE, '('), strlen($SIZE));
		texto($size2, 0, 77, 1, 0, $arialBold, $black, 11, 0, 0);

	} else {

		texto($SIZE, 0, 62, 1, 0, $arialBold, $black, 11, 0, 0);
	}

	texto($COLOR, 10, 98, 0, 0, $arial, $black, 7, 0, 0);
	texto('STYLE ' . $STYLE, 10, 112, 0, 0, $arial, $black, 7, 0, 0);
	texto($DEPT, 10, 126, 0, 0, $arial, $black, 7, 0, 0);
	texto($CLASS, 0, 126, 1, 0, $arial, $black, 7, 0, 0);
	texto($ITEM, 0, 126, 2, 10, $arial, $black, 7, 0, 0);
	texto('DEPT              CL              ITEM', 0, 138, 1, 0, $arial, $black, 7, 0, 0);
	texto($MISC1, 0, 208, 1, 0, $arial, $black, 7, 0, 0);
	texto($MISC2, 0, 220, 1, 0, $arial, $black, 7, 0, 0);

	texto($PRICE, 0, 244, 1, 0, $arialBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 18, 144, 1, 30, 'UPC');

	texto(formatizarTexto('12  345  67  8901  2', $UPC), 0, 190, 1, 0, $arial, $black, 8, 0, 0);

	require_once('../includes/footer.php');
}
?>
