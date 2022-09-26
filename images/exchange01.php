<?php //   1       2      3      4      5      6
$correctos = array('QTY', 'STYLE', 'COLOR', 'DEPT', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'A6JD316');
	$COLOR = asignar(2, 'SBV');
	$DEPT = asignar(3, '1772');
	$SIZE = asignar(4, '7');
	$UPC = asignar(5, '098713550196');
	$PRICE = asignar(6, '24.99');

	// Creacion del formato
	formato(150, 275, 255, 255, 255, 0);
	agujero(75, 25);
	// Colores a usar
	$black = color(0, 0, 0);
	$white = color(255, 255, 255);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$logo = fuente('x.ttf');

	// Introducimos los datos
	texto('1', 10, 45, 0, 0, $logo, $black, 36, 0, 0);

	texto('DEPT' . $DEPT, 0, 20, 2, 10, $arialBold, $black, 6, 0, 0);

	texto('STYLE: ' . $STYLE, 10, 75, 0, 0, $arialBold, $black, 7.5, 0, 0);

	texto('COLOR: ' . $COLOR, 10, 91, 0, 0, $arialBold, $black, 7.5, 0, 0);

	texto('SIZE: ' . $SIZE, 16, 194, 0, 0, $arialBold, $black, 7.5, 0, 0);
	texto('www.shopmyexchange.com', 0, 210, 1, 0, $arial, $black, 7, 0, 0);

	perforacion(150, 275, 238);
	texto($PRICE, 0, 267, 1, 0, $arialBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 8, 94, 1.14, 68, 'UPC');
	//barcodeTexto(2,-1,-2,5,'cour.ttf');
	barcodeTexto(1, 0, 0, 3, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>