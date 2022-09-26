<?php //                     1        2       3       4       5         6       7
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'SIZE', 'PRICE', 'GROUP NAME');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato

	$STYLE = asignar(1, 'JFGN700976');
	$COLOR = asignar(2, 'NAVY/MINT');
	$UPC = asignar(3, '619720945630');
	$SIZE = asignar(4, 'XS');
	$PRICE = asignar(5, '$32.00');
	$GROUPNAME = asignar(6, 'ESSENTIAL DRESS');
	// Creacion del formato
	formato(169, 300, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	agujero(85, 25);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialnBold = fuente('arialnb.ttf');

	// Introducimos los datos
	if (strlen($STYLE) < 13)
		texto('STYLE ' . $STYLE, 0, 56, 1, 0, $arialBold, $black, 9, 0, 0);
	else
		texto('STYLE ' . $STYLE, 0, 56, 1, 0, $arialnBold, $black, 9.5, 0, 0);

	imageline($img, 0, 142, 168, 142, $black);

	if (strlen($COLOR) < 13)
		texto('COLOR  ' . $COLOR, 0, 167, 1, 0, $arialBold, $black, 9, 0, 0);
	else
		texto('COLOR  ' . $COLOR, 0, 167, 1, 0, $arialnBold, $black, 9.5, 0, 0);

	texto('SIZE', 50, 190, 0, 0, $arialnBold, $black, 7, 0, 0);
	texto($SIZE, 74, 197, 0, 0, $arialBold, $black, 14, 0, 0);

	if (strlen($GROUPNAME) < 18)
		texto($GROUPNAME, 0, 225, 1, 0, $arialBold, $black, 9, 0, 0);
	else
		texto($GROUPNAME, 0, 225, 1, 0, $arialnBold, $black, 9.5, 0, 0);

	perforacion(169, 300, 250);
	texto($PRICE, 0, 285, 1, 0, $arialBold, $black, 16, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 28, 70, 1, 55, 'UPC');
	barcodeTexto(3, -1, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
