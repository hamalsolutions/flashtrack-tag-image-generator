<?php //   1       2       3     4      5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, '70986041');
	$COLOR = asignar(2, 'BLACK');
	$SIZE = asignar(3, 'XL');
	$UPC = asignar(4, '829268520149');
	$PRICE = asignar(5, '10');
        
	// Creacion del formato
	formato(150, 300, 255, 255, 255);
	agujero(75, 25);
	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');

	// Introducimos los datos

	texto($STYLE, 10, 70, 0, 0, $arial, $black, 7.5, 0, 0);

	texto($COLOR, 0, 70, 2, 10, $arial, $black, 7.5, 0, 0);

	texto($SIZE, 0, 214, 1, 0, $arialBold, $black, 15, 0, 0);

	$MPRICE = quitarDecimales($PRICE);
	if ($MPRICE == 0) {
		$MPRICE = '';
		texto($MPRICE, 0, 285, 1, 0, $arial, $black, 18, 0, 1);
	} else {
		texto(quitarDecimales($PRICE), 0, 285, 1, 0, $arial, $black, 18, 0, 1);
	}

	perforacion(150, 300, 250);
	// Creacion del Barcode
	barcode($UPC, 10, 84, 1.1, 92, 'UPC');

	barcodeTexto(1, 0, -2, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
