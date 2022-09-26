<?php //                     1        2       3      4       5       6        7         8          9
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'SIZE', 'DEPT', 'MSRP', 'PRICE', 'SAVINGS', 'PCS-SET');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'ST27118-LBC');
	$COLOR = asignar(2, 'LIGHT BLUE');
	$UPC = asignar(3, '842618161458');
	$SIZE = asignar(4, '3/6');
	$DEPT = asignar(5, '544');
	$MSRP = asignar(6, '59.00');
	$PRICE = asignar(7, '24.97');
	$SAVINGS = asignar(8, '58%');
	$SET = asignar(9, '2 PC SET');

	// Creacion del formato This format is for a two piece set version of nordstrom33
	//formato(169, 300, 255, 255, 255);
	//agujero(85, 25);
	formato(338, 300, 255, 255, 255);
	agujero(84.5, 25);
	agujero(253.5, 25);
	lineaVertical(169, 0, 300, $black, 1);

	// Colores a usar
	$black = color(0, 0, 0);
	$white = color(255, 255, 255);

	// Fuentes a usar
	$arialNB = fuente('arialnb.ttf');
	$arial = fuente('arial.ttf');
	$arialBD = fuente('arialbd.ttf');
	//$logo = fuente('NordstromRack_Logo-10-19-2016.ttf');
	$arialBoldSlash = fuente('Arial_Slash_bld.ttf');

	// Introducimos los datos
	//texto('n',0,60,1,0,$logo,$black,13,0,0);

	texto($STYLE, 15, 60, 0, 0, $arialBD, $black, 11, 0, 0);
	texto($STYLE, 169, 60, 3, -170, $arialBD, $black, 11, 0, 0);

	texto($COLOR, 15, 78, 0, 0, $arialBD, $black, 9, 0, 0);
	texto($COLOR, 169, 78, 3, -170, $arialBD, $black, 9, 0, 0);

	texto('DEPT: ', 15, 210, 0, 0, $arial, $black, 10, 0, 0);
	texto($DEPT, 60, 210, 0, 0, $arialBD, $black, 10, 0, 0);

	texto('SIZE:  ', 15, 230, 0, 0, $arial, $black, 10, 0, 0);
	texto($SIZE, 60, 230, 0, 0, $arialBD, $black, 10, 0, 0);
	texto('SIZE  ' . $SIZE, 174, 108, 3, -170, $arialBD, $black, 10, 0, 0);

	// cjaas negras para las piezas de SET
	cajaRellena(35, 160, 100, 19, $black, $black, 0);
	cajaRellena(205, 130, 100, 19, $black, $black, 0);

	$SETPCS = str_replace(' PC SET', '', $SET);
	texto($SETPCS . ' PC SET', 0, 175, 3, 170, $arialBD, $white, 10, 0, 0);
	texto($SETPCS . ' PC SET', 0, 145, 3, -175, $arialBD, $white, 10, 0, 0);

	texto('COMPARE AT', 15, 270, 0, 0, $arialNB, $black, 10, 0, 0);
	texto(sinSigno($MSRP), 0, 270, 2, 181, $arialBoldSlash, $black, 10, 0, 1);

	perforacion(169, 300, 250);

	$NEWSAVINGS = str_replace('SAVINGS', 'Savings', strtolower($SAVINGS));
	//texto(suffix($SAVINGS, ' Savings'), 15, 280, 0, 0, $arial, $black, 8, 0, 0);
	texto(suffix($NEWSAVINGS, ' Savings'), 15, 290, 0, 0, $arial, $black, 9, 0, 0);

	texto(sinSigno($PRICE), 0, 290, 2, 181, $arialBD, $black, 10, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 10, 70, 1.3, 75, 'UPC');

	barcodeTexto(0.5, -1, -1, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
