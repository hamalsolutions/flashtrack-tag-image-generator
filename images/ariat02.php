<?php //                     1        2      3       4        5        6       7
$correctos = array('QTY', 'GENDER', 'SIZE', 'STYLE', 'COLOR', 'MATERIAL', 'UPC', 'MSRP');

require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$GENDER = asignar(1, 'Women');
	$SIZE = asignar(2, 'X-Small');
	$STYLE = asignar(3, 'COW LOCK UP TANK');
	$COLOR = asignar(4, 'ROYAL HEATHER');
	$MATERIAL = asignar(5, '10025229');
	$UPC = asignar(6, '889359729790');
	$MSRP = asignar(7, '24.95');

	// Creacion del formato
	//formato(200, 75, 255, 255, 255);
	formato(250, 94, 255, 255, 255);
	setAsSticker(15);
	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arialBold = fuente('arialbd.ttf');
	$arialNB = fuente('arialnb.ttf');
	$eurostile = fuente('eurosti.ttf');

	// Introducimos los datos
	texto($MATERIAL, 15, 30, 0, 0, $eurostile, $black, 7, 0, 0);
	texto($SIZE, 0, 145, 2, 5, $arialNB, $black, 6.5, 90, 0);
	texto($GENDER, 5, 145, 0, 0, $arialNB, $black, 6.5, 90, 0);

	texto($STYLE, 5, 170, 0, 0, $arialNB, $black, 5.5, 90, 0);
	texto($COLOR, 5, 190, 0, 0, $eurostile, $black, 5.55, 90, 0);

	lineaVertical(150, 2, 88, $black);
	textoVertical('-----------------', 230, 0, $eurostile, $black, 7, 0, 6);

	texto('MSRP', 5, 245, 0, 0, $eurostile, $black, 7, 90, 0);
	texto($MSRP, 0, 245, 2, 5, $eurostile, $black, 7, 90, 1);

	// Creacion del Barcode
	barcode($UPC, 8, 35, 1, 40, 'UPC');
	barcodeTexto(1, 1, 1, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
