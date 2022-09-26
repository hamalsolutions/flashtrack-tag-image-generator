<?php //   1       2      3      4      5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'HUGO-RAIN');
	$COLOR = asignar(2, 'PEONY');
	$SIZE = asignar(3, '3M');
	$UPC = asignar(4, '011711992287');
	$PRICE = asignar(5, '$60.00');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);
	agujero(75, 25);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNarrowBd = fuente('arialnb.ttf');
	$logo = fuente('EPC_Logo.ttf');
	$mainLogo = fuente('JOAH_LOVE_Logo.ttf');

	// Introducimos los datos

	texto('E', 12, 30, 0, 0, $logo, $black, 28, 0, 0);

	texto('J', 0, 70, 1, 0, $mainLogo, $black, 12, 0, 0);

	texto($STYLE, 0, 100, 1, 0, $arialBold, $black, 9, 0, 0);

	texto($COLOR, 0, 127, 1, 0, $arialBold, $black, 9, 0, 0);

	texto($SIZE, 0, 154, 1, 0, $arialBold, $black, 9, 0, 0);

	texto(formatizarTexto('1 23456 12345 6', $UPC), 0, 237, 1, 0, $arial, $black, 9, 0, 0);

	texto('MSRP $' . sinSigno($PRICE), 0, 310, 1, 0, $arialNarrowBd, $black, 10, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 18, 172, 1, 50, 'UPC');

	require_once('../includes/footer.php');
}
?>
