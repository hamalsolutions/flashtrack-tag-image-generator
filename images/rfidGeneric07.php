<?php //   1      2       3      4      5
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC');

require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, '14515');
	$COLOR = asignar(2, 'BLACK');
	$UPC = asignar(3, '840611230224');

	// Creacion del formato
	formato(196, 72, 255, 255, 255);
	setAsSticker(10);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arialBold = fuente('arialbd.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	texto('E', 0, 42, 2, 10, $logo, $black, 22, 0, 0);

	texto('STYLE', 0, 15, 1, 0, $arialBold, $black, 5, 90, 0);
	texto($STYLE, 0, 25, 1, 0, $arialBold, $black, 6.5, 90, 0);

	texto('COLOR', 0, 36, 1, 0, $arialBold, $black, 5, 90, 0);
	texto($COLOR, 0, 45, 1, 0, $arialBold, $black, 6.5, 90, 0);

	texto(formatizarUPC_Texto("123456 789012", $UPC), 0, 40, 2, 50, $arialBold, $black, 7, 0, 0);

	// Creacion del Barcode
	// barcode($UPC,20,32,1.2,20,'UPC');

	// barcodeTexto(1,0,-3,5,'arial.ttf');

	require_once('../includes/footer.php');
}
?>
