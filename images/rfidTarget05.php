<?php //                    1        2        3        4       5        6      7       8
$correctos = array('QTY', 'SIZE', 'COLOR', 'STYLE', 'DEPT', 'CLASS', 'ITEM', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$SIZE = asignar(1, 'XS');
	$COLOR = asignar(2, 'WHITE');
	$STYLE = asignar(3, 'SK221MAB');
	$DEPT = asignar(4, '032');
	$CLASS = asignar(5, '07');
	$ITEM = asignar(6, '3849');
	$UPC = asignar(7, '490320738491');
	$PRICE = asignar(8, '$8.99');

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

	texto('SIZE', 0, 48, 1, 0, $arial, $black, 7, 0, 0);

	texto($SIZE, 0, 66, 1, 0, $arialBold, $black, 10, 0, 0);
	texto($COLOR, 10, 80, 0, 0, $arialBold, $black, 7, 0, 0);
	texto('STYLE ' . $STYLE, 10, 96, 0, 0, $arialBold, $black, 7, 0, 0);
	texto($DEPT, 12, 114, 0, 0, $arial, $black, 7, 0, 0);
	texto($CLASS, 0, 114, 1, 0, $arial, $black, 7, 0, 0);
	texto($ITEM, 0, 114, 2, 10, $arial, $black, 7, 0, 0);
	texto('DEPT              CL              ITEM', 0, 126, 1, 0, $arial, $black, 7, 0, 0);
	texto('E', 0, 206, 2, 10, $logo, $black, 22, 0, 0);
	texto($PRICE, 0, 242, 1, 0, $arialBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 18, 130, 1, 30, 'UPC');

	barcodeTexto(2, -1, 5, 0, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
