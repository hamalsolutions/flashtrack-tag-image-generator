<?php //    1        2     3     4       5    
$correctos = array('QTY', 'DEPT', 'COLOR', 'SIZE', 'STYLE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DEPT = asignar(1, '239');
	$COLOR = asignar(2, 'INC');
	$SIZE = asignar(3, '13');
	$STYLE = asignar(4, 'J7703ACC');
	$UPC = asignar(5, '614015768376');
	$PRICE = asignar(6, '44.00');

	// Creacion del formato
	formato(169, 300, 255, 255, 255);
	agujero(85, 25);
	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
        
	// Introducimos los datos

	texto('BEALLS', 0, 54, 1, 0, $arialBold, $black, 12, 0, 0);
	texto('Dept:', 10, 72, 0, 0, $arial, $black, 8, 0, 0);
	texto($DEPT, 60, 72, 0, 0, $arial, $black, 8, 0, 0);

	texto('Style #:', 10, 90, 0, 0, $arial, $black, 8, 0, 0);
	texto($STYLE, 60, 90, 0, 0, $arial, $black, 8, 0, 0);

	texto('Color:', 10, 106, 0, 0, $arial, $black, 8, 0, 0);
	texto($COLOR, 60, 106, 0, 0, $arial, $black, 8, 0, 0);

	texto('Size:', 10, 196, 0, 0, $arial, $black, 8, 0, 0);
	texto($SIZE, 45, 196, 0, 0, $arialBold, $black, 12, 0, 0);

	texto($PRICE, 0, 285, 1, 0, $arialBold, $black, 14, 0, 1);

	perforacion(170, 300, 252);

	// Creacion del Barcode
	barcode($UPC, 15, 95, 1.2, 65, 'UPC');

	barcodeTexto(3, -1, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
