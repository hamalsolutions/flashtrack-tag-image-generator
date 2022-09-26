<?php //    1       2      3     4      5      6       7       8
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'SIZE', 'DEPT', 'MSRP', 'PRICE', 'SAVINGS');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, '25175A-AQF');
	$COLOR = asignar(2, 'BLACK');
	$UPC = asignar(3, '19017251456');
	$SIZE = asignar(4, '9/12');
	$DEPT = asignar(5, '544');
	$MSRP = asignar(6, '29.00');
	$PRICE = asignar(7, '15.97');
	$SAVINGS = asignar(8, '45%');

	// Creacion del formato
	formato(169, 300, 255, 255, 255);
	agujero(85, 25);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arialNB = fuente('arialnb.ttf');
	$arial = fuente('arial.ttf');
	$arialBD = fuente('arialbd.ttf');
	//$logo = fuente('NordstromRack_Logo-10-19-2016.ttf');
	$arialBoldSlash = fuente('Arial_Slash_bld.ttf');

	// Introducimos los datos
	//texto('n',0,60,1,0,$logo,$black,13,0,0);

	texto($STYLE, 15, 70, 0, 0, $arialBD, $black, 11, 0, 0);

	texto($COLOR, 15, 90, 0, 0, $arialBD, $black, 9, 0, 0);

	texto('DEPT: ', 15, 210, 0, 0, $arial, $black, 10, 0, 0);
	texto($DEPT, 60, 210, 0, 0, $arialBD, $black, 10, 0, 0);

	texto('SIZE:  ', 15, 230, 0, 0, $arial, $black, 10, 0, 0);
	texto($SIZE, 60, 230, 0, 0, $arialBD, $black, 10, 0, 0);

	texto('COMPARE AT', 15, 270, 0, 0, $arialNB, $black, 10, 0, 0);
	texto(sinSigno($MSRP), 0, 270, 2, 10, $arialBoldSlash, $black, 10, 0, 1);

	perforacion(169, 300, 250);

	$NEWSAVINGS = str_replace('SAVINGS', 'Savings', strtolower($SAVINGS));
	//texto(suffix($SAVINGS, ' Savings'), 15, 280, 0, 0, $arial, $black, 8, 0, 0);
	texto(suffix($NEWSAVINGS, ' Savings'), 15, 290, 0, 0, $arial, $black, 9, 0, 0);

	texto(sinSigno($PRICE), 0, 290, 2, 10, $arialBD, $black, 10, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 10, 80, 1.3, 80, 'UPC');

	barcodeTexto(3, -1, 2, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
