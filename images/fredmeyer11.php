<?php //        1       2      3      4      5
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'SIZE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'GJ3239HL');
	$COLOR = asignar(2, 'BLACK');
	$UPC = asignar(3, '619720896963');
	$SIZE = asignar(4, 'S');
	$PRICE = asignar(5, '$34.00');

	// Creacion del formato
	formato(169, 300, 255, 255, 255);

	agujero(85, 25);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$Logo = fuente('FredMeyer_Logo.ttf');
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');

	// Introducimos los datos
	texto('F', 0, 60, 1, 0, $Logo, $black, 15, 0, 0);

	texto('STYLE', 15, 86, 0, 0, $arial, $black, 8, 0, 0);
	texto($STYLE, 58, 86, 0, 0, $arial, $black, 8, 0, 0);

	texto('COLOR', 15, 102, 0, 0, $arial, $black, 8, 0, 0);
	parrafo($COLOR, 58, 102, 0, 0, $arial, $black, 8, 0, 15, 10);

	texto('SIZE:', 15, 230, 0, 0, $arialBold, $black, 10, 0, 0);
	texto($SIZE, 60, 230, 0, 0, $arialBold, $black, 10, 0, 0);

	perforacion(169, 300, 250);

	texto($PRICE, 0, 284, 1, 0, $arialBold, $black, 15, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 28, 115, 1, 75, 'UPC');
	barcodeTexto(2, 1, 1.5, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
