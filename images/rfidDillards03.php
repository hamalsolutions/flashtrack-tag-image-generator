<?php //                     1        2       3       4       5
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'SIZE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'ACT16862');
	$COLOR = asignar(2, 'BROWN');
	//$COLOR = asignar(2, 'BLUE/BLACK ANTQ');
	$UPC = asignar(3, '886349123170');
	$SIZE = asignar(4, 'XS');
	$PRICE = asignar(5, '88.00');

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
	texto($STYLE, 12, 90, 0, 0, $arialBD, $black, 9, 0, 0);
	texto('MSRP', 10, 340, 0, 0, $arialNB, $black, 9, 0, 0);

	IF (strlen($COLOR)>14) {
		texto($COLOR, 12, 120, 0, 0, $arialBD, $black, 9, 0, 0);
	}	else {
		texto($COLOR, 12, 120, 0, 0, $arialBD, $black, 9, 0, 0);
	}

	texto('SIZE: '.$SIZE, 0, 248, 2, 30, $arialBD, $black, 9, 0, 0);
	texto($PRICE, 0, 340, 2, 13, $arialBD, $black, 12, 0, 1);
	perforacion(175,350,312);
	barcode($UPC, 12, 110, 1.3, 88, 'UPC');
	//barcodeTexto(3, -1, 8, 0, 'arialbd.ttf');
	texto(formatizarUPC_Texto('123456789012', $UPC), 0, 214, 1, 0, $arial, $black, 9, 0, 0);
	require_once('../includes/footer.php');
}
?>
