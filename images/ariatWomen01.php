<?php //                     1        2      3       4        5        6       7
$correctos = array('QTY', 'GENDER', 'SIZE', 'STYLE', 'COLOR', 'MATERIAL', 'UPC', 'MSRP');

require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$GENDER = asignar(1, 'Women');
	$SIZE = asignar(2, 'X-Small');
	//$STYLE = asignar(3, 'ARIAT ON THE FARM'); // this will print in one line text
	$STYLE = asignar(3, 'ARIAT ON THE FARM SS T-SHIRT'); // this will print in a text parragraph
	$COLOR = asignar(4, 'ROYAL HEATHER'); // this will print in one line text
	//$COLOR = asignar(4, 'ROYAL HEATHER LINE2LINE3LINE4 LINE5LINE6LINE7');  // this will print in a text parragraph
	$MATERIAL = asignar(5, '10025229');
	$UPC = asignar(6, '889359729790');
	$MSRP = asignar(7, '24.95');

	// Creacion del formato
	formato(250, 94, 255, 255, 255);
	$anguloDeRotacion = 90;

	// Colores a usar
	$black = color(0, 0, 0);
	$gray = color(140, 140, 140);

	// Fuentes a usar
	$arialBold = fuente('arialbd.ttf');
	$arialN = fuente('arialn.ttf');
	$arialNB = fuente('arialnb.ttf');

	// Introducimos los datos
	texto($GENDER, 8, 150, 0, 0, $arialNB, $black, 8, 90, 0);       //OK
	texto($SIZE, 0, 150, 2, 8, $arialNB, $black, 8, 90, 0);         //OK
	lineaVertical(156, 2, 88, $black,2); //OK

	if (strlen($STYLE)<=21) {
		texto($STYLE, 0, 170, 1, 0, $arialNB, $black, 6.5, 90, 0);
	} else {
		parrafo($STYLE, 6, 170, 1, 6, $arialNB, $black, 6, 90, 18, 8);
	}

	if (strlen($COLOR)<=21) {
		texto($COLOR, 0, 206, 1, 0, $arialN, $black, 6.5, 90, 0);
	} else {
		parrafo($COLOR, 0, 206, 1, 0, $arialNB, $black, 6, 90, 18, 8);
	}

	texto('- - - - - - - - - - - - - - - - - - - - - - - - - - ', 0, 232, 1, 0, $arialN, $gray, 5.55, 90, 0);
	texto('MSRP', 8, 243, 0, 0, $arialN, $black, 5.5, 90, 0);
	texto($MSRP, 0, 243, 2, 8, $arialBold, $black, 7, 90, 1);

	texto($MATERIAL, 22, 26, 0, 0, $arialBold, $black, 8, 0, 0);
	// Creacion del Barcode
	barcode($UPC,54,12,1,34,'UPC',90);
	barcodeTexto(2,-1,-2,5,'cour.ttf');

	require_once('../includes/footer.php');
}
?>