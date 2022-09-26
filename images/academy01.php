<?php //      1        2       3      4        5
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'SIZE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato

	$STYLE = asignar(1, '0619-AC-247 RDH');
    $COLOR = asignar(2, 'BLACK');
	$UPC = asignar(3, '656729244159');
	$SIZE = asignar(4, 'Medium');
	$PRICE = asignar(5, '9.99');

	// Creacion del formato
	formato(131, 250, 255, 255, 255);
	agujero(65, 40);
	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialNB = fuente('arialnb.ttf');
	$arialBold = fuente('arialbd.ttf');
	$Logo = fuente('ACADEMY_LOGO_2.ttf');

	// Introducimos los datos
	texto('A', 0, 25, 1, 0, $Logo, $black, 20, 0, 0);

    texto($STYLE, 0, 66, 1, 0, $arialNB, $black, 9, 0, 0);

    texto($COLOR, 0, 83, 1, 0, $arialNB, $black, 9, 0, 0);

	texto($SIZE, 0, 204, 1, 0, $arial, $black, 14, 0, 0);

    texto($PRICE, 0, 240, 1, 0, $arialBold, $black, 15, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 8, 92, 1, 70, 'UPC');
	barcodeTexto(2, 0, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
