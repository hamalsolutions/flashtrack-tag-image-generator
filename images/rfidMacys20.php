<?php //                     1        2       3       4      5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');

require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'KDR103863-MC');
	$COLOR = asignar(2, 'BLACK');
	$SIZE = asignar(3, 'XS');
	$UPC = asignar(4, '193328000910');
	$PRICE = asignar(5, '64.00');

	// Creacion del formato
	formato(196, 74, 255, 255, 255);
	setAsSticker(10);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialB = fuente('arialbd.ttf');
	$arialNB = fuente('arialnb.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	texto('E', 144, 20, 0, 0, $logo, $black, 16, 0, 0);

	texto('STYLE', 10, 12, 0, 0, $arial, $black, 6, 0, 0);
	texto('COLOR', 10, 22, 0, 0, $arial, $black, 6, 0, 0);
	texto('SIZE', 10, 32, 0, 0, $arial, $black, 8, 0, 0);
	texto($STYLE, 44, 12, 0, 0, $arialB, $black, 6, 0, 0);
	texto($COLOR, 44, 22, 0, 0, $arialB, $black, 6, 0, 0);
	texto($SIZE, 44, 32, 0, 0, $arialB, $black, 8, 0, 0);
	texto($PRICE, 0, 185, 1, 0, $arialB, $black, 8, 90, 1);

	// Creacion del Barcode
	barcode($UPC, 10, 36, 1, 25, 'UPC');
	barcodeTexto(1, 0, -3, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
