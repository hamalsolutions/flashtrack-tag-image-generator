<?php //                      1       2       3       4       5        6        7      8         9
$correctos = array('QTY', 'COLOR', 'SIZE', 'STYLE', 'UPC', 'PRICE', 'VENDOR', 'DEPT','PCS','DESCRIPTION');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$COLOR = asignar(1, 'IVORY/SILVER');
	$SIZE = asignar(2, 'S');
	$STYLE = asignar(3, 'TH4575');
	$UPC = asignar(4, '846606002006');
	$PRICE = asignar(5, '$60.00');
	$VENDOR = asignar(6, '147835');
	$DEPT = asignar(7, '698');
	$PCS = asignar(8, '2PC');
	$DESCRIPTION = asignar(9, 'DRESS WITH BAG');

	// Creacion del formato
	formato(169, 300, 255, 255, 255);

	agujero(85, 25);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNbold = fuente('arialnb.ttf');
	$timesBold = fuente('timesbd.ttf');

	// Introducimos los datos

	//texto('VON MAUR',0,52,1,0,$timesBold,$black,14,0,0);

	texto($STYLE, 0, 50, 2, 15, $arialNbold, $black, 7, 0, 0);
	texto('STYLE', 0, 60, 2, 15, $arial, $black, 7, 0, 0);

	texto($DEPT, 15, 50, 0, 0, $arialNbold, $black, 7, 0, 0);
	texto('DEPT.', 15, 60, 0, 0, $arial, $black, 7, 0, 0);

	texto($VENDOR, 0, 75, 1, 0, $arialNbold, $black, 8, 0, 0);
	texto('VENDOR', 0, 85, 1, 0, $arial, $black, 7, 0, 0);

	texto('COLOR - ' . $COLOR, 0, 99, 1, 0, $arialNbold, $black, 7, 0, 0);

	texto('SIZE', 0, 114, 1, 0, $arial, $black, 7, 0, 0);
	texto($SIZE, 0, 129, 1, 0, $arialBold, $black, 9, 0, 0);
	texto($PCS, 0, 220, 1, 0, $arialNbold, $black, 7, 0, 0);
	texto($DESCRIPTION, 0, 237, 1, 0, $arialNbold, $black, 7, 0, 0);

	//texto('-- - - - - - - - - - - - - - - - --',0,280,1,0,$arial,$black,10,0,0);
	perforacion(169, 300, 250);
	texto($PRICE, 0, 285, 1, 0, $arial, $black, 15, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 15, 118, 1.2, 76, 'UPC');

	barcodeTexto(3, 0, -2, 7, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
