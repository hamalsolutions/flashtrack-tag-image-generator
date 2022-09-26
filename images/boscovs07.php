<?php //   1       2       3      4     5
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'SIZE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'TSBNKY11B');
	$COLOR = asignar(2, 'BLACK');
	$UPC = asignar(3, '885347132467');
	$SIZE = asignar(4, 'S');
	$PRICE = asignar(5, '20.00');

	// Creacion del formato
	formato(169, 300, 255, 255, 255);

	agujero(85, 25);
	// Colores a usar
	$black = color(0, 0, 0);
	$vicsColor = colorVic($SIZE);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('arialnb.ttf');

	// Introducimos los datos

	texto('STYLE', 15, 65, 0, 0, $arialNBold, $black, 9, 0, 0);
	texto($STYLE, 12, 82, 0, 0, $arialNBold, $black, 8, 0, 0);

	texto('COLOR', 0, 65, 2, 15, $arialNBold, $black, 9, 0, 0);
	texto($COLOR, 0, 82, 2, 15, $arialNBold, $black, 8, 0, 0);

	texto($SIZE, 0, 190, 2, 20, $arialBold, $black, 17, 0, 0);

	perforacion(169, 300, 250);

	//texto('-- - - - - - - - - - - - - - - - --',0,250,1,0,$arial,$black,10,0,0);

	texto('MSRP', 20, 284, 0, 0, $arialBold, $black, 8, 0, 0);
	texto($PRICE, 60, 284, 0, 0, $arialBold, $black, 16, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 22, 85, 1.1, 70, 'UPC');

	barcodeTexto(3, 0, -1, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
