<?php //   1      2      3      4      5      6
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'DEPT', 'SIZE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, '83007JA-437');
	$COLOR = asignar(2, 'GREY');
	$UPC = asignar(3, '881759010713');
	$DEPT = asignar(4, '059');
	$SIZE = asignar(5, 'S');
	$PRICE = asignar(6, '120.00');

	// Creacion del formato
	formato(169, 300, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$logo = fuente('NordstromRackLogo.ttf');
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNarrow = fuente('arialn.ttf');
	//$arialBoldSlash = fuente('Arial_Slash_bld.ttf');

	// Introducimos los datos
	agujero(85, 25);

	texto('n', 0, 60, 1, 0, $logo, $black, 22, 0, 0);

	texto($STYLE, 20, 93, 0, 0, $arial, $black, 10, 0, 0);

	texto($COLOR, 0, 112, 2, 13, $arial, $black, 10, 0, 0);

	texto('Dept: ' . $DEPT, 20, 190, 0, 0, $arial, $black, 10, 0, 0);

	texto($SIZE, 20, 213, 0, 0, $arial, $black, 14, 0, 0);

	texto(sinSigno($PRICE), 0, 282, 2, 10, $arialBold, $black, 14, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 13, 98, 1.2, 65, 'UPC');

	barcodeTexto(2, 0, -7, 8, 'cour.ttf');

	require_once('../includes/footer.php');
}
?>