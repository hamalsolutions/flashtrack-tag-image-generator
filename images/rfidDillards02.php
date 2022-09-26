<?php //                     1        2       3       4       5       6
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE', 'PCS');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'CK5820F56');
	$COLOR = asignar(2, 'BRN');
	//$COLOR = asignar(2, 'BLUE/BLACK ANTQ');
	$SIZE = asignar(3, 'XL');
	$UPC = asignar(4, '123456789012');
	$PRICE = asignar(5, '$34.00');
	$SET = asignar(6, '2PC');

	// Creacion del formato
	formato(175, 350, 255, 255, 255);
	agujero(88, 25);
	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBD = fuente('arialbd.ttf');
	$arialNB = fuente('arialnb.ttf');
	$arial70 = fuente('Arial_70.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	texto('E', 0, 37, 2, 16, $logo, $black, 24, 0, 0);
	texto('STYLE  ', 10, 80, 0, 0, $arialNB, $black, 9, 0, 0);
	texto($STYLE, 58, 80, 0, 0, $arialBD, $black, 9, 0, 0);
	texto('COLOR  ', 10, 110, 0, 0, $arialNB, $black, 9, 0, 0);
	texto('SIZE   ', 10, 140, 0, 0, $arialNB, $black, 9, 0, 0);

	IF (strlen($COLOR)>14) {
		texto($COLOR, 58, 110, 0, 0, $arialBD, $black, 9, 0, 0);
	}	else {
		texto($COLOR, 58, 110, 0, 0, $arialBD, $black, 9, 0, 0);
	}

	texto($SIZE, 58, 140, 0, 0, $arialBD, $black, 9, 0, 0);
	texto($SET, 0, 254, 2, 16, $arialBD, $black, 10, 0, 0);
	texto($PRICE, 0, 340, 1, 0, $arialBD, $black, 14, 0, 1);
	perforacion(175,350,312);
	//if (strlen($GROUPNAME)>15) {
	//	texto($GROUPNAME, 0, 280, 1, 0, $arial70, $black, 10, 0, 0);
	//} else {
	//	texto($GROUPNAME, 0, 280, 1, 0, $arialBD, $black, 9, 0, 0);
	//}
	// Creacion del Barcode
	barcode($UPC, 18, 130, 1.2, 78, 'UPC');
	barcodeTexto(3, -1, 2, 5, 'arialbd.ttf');

	require_once('../includes/footer.php');
}
?>
